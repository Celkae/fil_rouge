<?php

namespace FilRougeBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManager;

/**
 * activity_service service
 *
 */
class ActivityService
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Get last user activities, displayed on the profile page.
     * @param user $id
     */
    public function getLastActivities($id)
    {
        $activities = $this->em->getRepository('FilRougeBundle:User')->find($id);
        return $activities;
    }
}
