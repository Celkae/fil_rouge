<?php

namespace FilRougeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Entity\Episode;
use FilRougeBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

/**
 * ajax controller.
 *
 * @Route("/ajax")
 */
class AjaxController extends Controller
{
  /**
  * Ajax request for follow.
  *
  * @Route("/{id}/isfollowed", name="ajax_isfollowed")
  * @Method({"GET", "POST"})
  */
  public function isFollowed(Request $request, Serie $serie)
  {
      $user = $this->container->get('security.context')->getToken()->getUser();

      if ($user->getSeries()->contains($serie)) {
        return new Response('<i class="fa fa-check"></i> Suivie');
      }
      else {
        return new Response('Suivre');
      }
  }

  /**
  * Ajax request for follow.
  *
  * @Route("/{id}/follow", name="ajax_follow")
  * @Method({"GET", "POST"})
  */
  public function followAction(Request $request, Serie $serie)
  {
      $user = $this->container->get('security.context')->getToken()->getUser();

      $em = $this->getDoctrine()->getManager();

      if ($user->getSeries()->contains($serie)) {
        $user->removeSerie($serie);
        $em->persist($user);
        $em->flush();
        return new Response('Suivre');
      }
      else {
        $user->setSerie($serie);
        $em->persist($user);
        $em->flush();
        return new Response('<i class="fa fa-check"></i> Suivie');
      }
  }

    /**
    * Ajax request for seen.
    *
    * @Route("/{id}/isseen", name="ajax_isseen")
    * @Method({"GET", "POST"})
    */
    public function isSeen(Request $request, Episode $episode)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if ($user->getEpisodes()->contains($episode)) {
          return new Response('<i class="fa fa-eye"></i> Vue');
        }
        else {
          return new Response('Vue');
        }
    }

    /**
    * Ajax request for seen.
    *
    * @Route("/{id}/seen", name="ajax_seen")
    * @Method({"GET", "POST"})
    */
    public function seenAction(Request $request, Episode $episode)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        if ($user->getEpisodes()->contains($episode)) {
          $user->removeEpisode($episode);
          $em->persist($user);
          $em->flush();
          return new Response('Vue');
        }
        else {
          $user->setEpisode($episode);
          $em->persist($user);
          $em->flush();
          return new Response('<i class="fa fa-eye"></i> Vue');
        }
    }
}
