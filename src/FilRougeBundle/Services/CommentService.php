<?php

namespace FilRougeBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FilRougeBundle\Entity\User;
use Doctrine\ORM\EntityManager;

/**
 * commet_service service
 *
 */
class CommentService
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Finds and displays a last comment entity.
     *
     */
    public function getLastComments()
    {
        $comments = $this->em->getRepository('FilRougeBundle:Comment')->getLastFive();

        return $comments;
    }

    /**
     * Finds and displays a last comment entity.
     *
     */
    public function getUserLastComments(User $user)
    {
        $comments = $this->em->getRepository('FilRougeBundle:Comment')->getUserLastFive($user);

        return $comments;
    }

    /**
     * Finds and displays a Serie entity.
     * @param int $id
     * @return title
     */
    public function getTitle($id)
    {
        $serie = $this->em->getRepository('FilRougeBundle:Serie')->find($id);
        return $serie->getTitle();
    }

}
