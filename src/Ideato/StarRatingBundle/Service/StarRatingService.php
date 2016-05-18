<?php
/**
 *
 * StarRating service
 *
 */

namespace Ideato\StarRatingBundle\Service;

use Ideato\StarRatingBundle\Entity\Rating;
use Ideato\StarRatingBundle\Exception;
use Doctrine\ORM\EntityManager;


class StarRatingService {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    protected $repository;


    /**
     * Constructor
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repository = $this->em->getRepository('IdeatoStarRatingBundle:Rating');
    }

    /**
     * Load rating
     *
     * @param $contentId
     * @throws Exception\NotFoundException
     * @return null|object
     */
    public function load($contentId, $contentType) {

      $rating = $this->repository->byIdAndType($contentId, $contentType);
        if( !$rating ) {
            throw new Exception\NotFoundException (
                'No content found for id: '. $contentId
            );
        }

        return $rating;
    }

    /**
     * Get average
     *
     * @param $contentId
     * @return float
     */
    public function getAverage($contentId, $contentType) {
        try {
            return $this->load($contentId, $contentType)->getAverage();
        } catch( Exception\NotFoundException $e ) {
            return 0.0;
        }
    }

    /**
     * Create a new entry
     *
     * @param $contentId
     * @param $score
     * @throws Exception\InvalidArgumentException
     * @return Rating
     */
    public function saveNewScore( $contentId, $score, $contentType )
    {
        if( $score < 0 || $score > 5 ) {
            throw new Exception\InvalidArgumentException('$score value not valid. Valid values are between 0 and 5');
        }

        $rating = new Rating();
        $rating->setContentId($contentId);
        $rating->setContentType($contentType);
        $rating->setCount( 1 );
        $rating->setTotalcount( $score );
        $rating->setAverage( $score );

        $this->em->persist($rating);
        $this->em->flush();

        return $rating;
    }

    /**
     * Update an existent entry
     *
     * @param $contentId
     * @param $score
     * @throws Exception\InvalidArgumentException
     * @return null|object
     */
    public function updateScore( $contentId, $score, $contentType )
    {
        if( $score < 0 || $score > 5 ) {
            throw new Exception\InvalidArgumentException('$score value not valid. Valid values are between 0 and 5');
        }

        //update the record
        $rating = $this->load($contentId, $contentType);

        $count = $rating->getCount();
        $count++;
        $totalCount = $rating->getTotalcount() + $score;
        $average = $totalCount / $count;

        $rating->setCount( $count );
        $rating->setTotalcount( $totalCount );
        $rating->setAverage( $average );
        $this->em->flush();

        return $rating;
    }


    /**
     * Store score
     *
     * @param $contentId
     * @param $score
     * @return float
     */
    public function save( $contentId, $score, $contentType )
    {
        try {
            $rating = $this->updateScore( $contentId, $score, $contentType );
        } catch( Exception\NotFoundException $e ) {
            $rating = $this->saveNewScore($contentId, $score, $contentType);
        }

        return $rating->getAverage();
    }


    /**
     * Retrieve most voted elements
     *
     * @param int $limit
     * @return \Ideato\StarRatingBundle\Entity\Rating[]
     */
    public function getMostRated( $limit = 20 ) {
        $query = $this->em->createQuery('SELECT r FROM Ideato\StarRatingBundle\Entity\Rating r ORDER BY r.count DESC');
        $query->setMaxResults( $limit );

        return $query->getResult();
    }

}
