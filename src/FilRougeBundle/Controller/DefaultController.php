<?php

namespace FilRougeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();

      $series = $em->getRepository('FilRougeBundle:Serie')->getTopFive();
      $comments = $em->getRepository('FilRougeBundle:Comment')->getLastFive();
      //dump($series);
      return $this->render('FilRougeBundle:Default:index.html.twig', array(
          'series' => $series,
          'comments' => $comments
      ));
    }
}
