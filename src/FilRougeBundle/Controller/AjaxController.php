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
  * @Route("/follow", name="ajax_follow")
  * @Method({"GET", "POST"})
  */
  public function followAction(Request $request)
  {
    $series = $this->getDoctrine()->getManager()->getRepository('FilRougeBundle:Serie');

      $id = intval($request->query->get('id'));
      $serie = $series->findOneById($id);

      $user = $this->container->get('security.context')->getToken()->getUser();
      $user->setFollowedSerie($serie);
      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      return new Response('Serie followed');
  }

  /**
  * Ajax request for follow.
  *
  * @Route("/viewed", name="ajax_viewed")
  * @Method({"GET", "POST"})
  */
  public function viewedAction(Request $request)
  {
    $episodes = $this->getDoctrine()->getManager()->getRepository('FilRougeBundle:Episode');

      $id = intval($request->query->get('id'));
      $episode = $episodes->findOneById($id);

      $user = $this->getUser()->setFollowedSerie($episode);
      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      return new Response('Episode viewed');
  }
}
