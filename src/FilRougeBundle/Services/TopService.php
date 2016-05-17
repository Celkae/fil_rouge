<?php

namespace FilRougeBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManager;

/**
 * top_service service
 *
 */
class TopService
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Finds and displays a top 4 series entity.
     *
     */
    public function getTopFour()
    {
        $series = $this->em->getRepository('FilRougeBundle:Serie')->getTopFour();

        return $series;
    }
}
