<?php

namespace Ideato\StarRatingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Entity
 * @ORM\Table(name="isr_rating")
 * @ORM\Entity(repositoryClass="Ideato\StarRatingBundle\Repository\RatingRepository")
 */
class Rating
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_id", type="integer")
     */
    private $contentId;

    /**
     *
     *
     * @ORM\Column(name="content_type", type="string")
     */
    private $contentType;

    /**
     *
     *
     * @ORM\Column(name="average", type="decimal", scale=2)
     */
    private $average;

    /**
     *
     *
     * @ORM\Column(name="total_count", type="decimal", scale=2)
     */
    private $totalcount;

    /**
     *
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;


    /**
     * Set id
     *
     * @param $id
     * @return Rating
     */
    public function setContentId($id)
    {
        $this->contentId = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     * @return Rating
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set average
     *
     * @param string $average
     * @return Rating
     */
    public function setAverage($average)
    {
        $this->average = $average;

        return $this;
    }

    /**
     * Get average
     *
     * @return string
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return Rating
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }


    /**
     * Set totalcount
     *
     * @param string $totalcount
     * @return Rating
     */
    public function setTotalcount($totalcount)
    {
        $this->totalcount = $totalcount;

        return $this;
    }

    /**
     * Get totalcount
     *
     * @return string
     */
    public function getTotalcount()
    {
        return $this->totalcount;
    }
}
