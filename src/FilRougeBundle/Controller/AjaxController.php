<?php

namespace FilRougeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
/**
 * Renting controller.
 *
 * @Route("/ajax")
 */
class AjaxController extends Controller
{
  /**
  * Ajax request for follow.
  *
  * @Route("/isfollowed", name="ajax_isfollowed")
  * @Method({"GET", "POST"})
  */
  public function isFollowed(Request $request)
  {
    $series = $this->getDoctrine()->getManager()->getRepository('FilRougeBundle:Serie');

      $id = intval($request->query->get('id'));

      $serie = $series->findOneById($id);

      $user = $this->container->get('security.context')->getToken()->getUser();

      $serieTab[] = array();

      foreach ($user->getSeries() as $elem) {
        $serieTab[] = $elem;
      }
      if (in_array($serie, $serieTab)) {
        return new Response('<i class="fa fa-check"></i> Suivie');
      }
      else {
        return new Response('Suivre');
      }
  }

  /**
  * Ajax request for follow.
  *
  * @Route("/follow", name="ajax_follow")
  * @Method({"GET", "POST"})
  */
  public function followAction(Request $request)
  {
      $series = $this->getDoctrine()->getManager()->getRepository('FilRougeBundle:Serie');

      $id = intval($request->query->get('id'));

      $serie = $series->findOneById($id);

      $user = $this->container->get('security.context')->getToken()->getUser();

      $em = $this->getDoctrine()->getManager();

      $serieTab[] = array();

      foreach ($user->getSeries() as $elem) {
        $serieTab[] = $elem;
      }
      if (in_array($serie, $serieTab)) {
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
    * @Route("/isseen", name="ajax_isseen")
    * @Method({"GET", "POST"})
    */
    public function isSeen(Request $request)
    {
      $episodes = $this->getDoctrine()->getManager()->getRepository('FilRougeBundle:Episode');

        $id = intval($request->query->get('id'));

        $episode = $episodes->findOneById($id);

        $user = $this->container->get('security.context')->getToken()->getUser();

        $episodeTab = array();

        foreach ($user->getEpisodes() as $elem) {
          $episodeTab[] = $elem;
        }
        if (in_array($episode, $episodeTab)) {
          return new Response('<i class="fa fa-eye"></i> Vue');
        }
        else {
          return new Response('Vue');
        }
    }

    /**
    * Ajax request for seen.
    *
    * @Route("/seen", name="ajax_seen")
    * @Method({"GET", "POST"})
    */
    public function seenAction(Request $request)
    {
      $episodes = $this->getDoctrine()->getManager()->getRepository('FilRougeBundle:Episode');

        $id = intval($request->query->get('id'));

        $episode = $episodes->findOneById($id);

        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $episodeTab = array();

        foreach ($user->getEpisodes() as $elem) {
          $episodeTab[] = $elem;
        }
        if (in_array($episode, $episodeTab)) {
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
