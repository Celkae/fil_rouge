<?php

namespace FilRougeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * search controller.
 *
 * @Route("/search")
 */
class SearchController extends Controller
{
  /**
  * Ajax search.
  *
  * @Route("/series", name="ajax_search")
  * @Method({"GET", "POST"})
  */
  public function getSearchQuery(Request $request)
  {
    $q = $request->query->get('q');
      $em = $this->getDoctrine()->getManager();
      $queryResult = $em
        ->getRepository('FilRougeBundle:Serie')
        ->getSearchQuery($q);
      $response = new Response(json_encode($queryResult));
      $response -> headers -> set('Content-Type', 'application/json');
      return $response;
  }

  /**
   * Get results for search entries.
   *
   * @Route("/results", name="results")
   * @Method("GET")
   */
  public function getSearchResults(Request $request)
  {
    $q = $request->query->get('q');
      $em = $this->getDoctrine()->getManager();
      $series = $em
        ->getRepository('FilRougeBundle:Serie')
        ->getResultsByTitle($q);
      $episodes = $em
        ->getRepository('FilRougeBundle:Episode')
        ->getSearchResults($q);
      $actors = $em
        ->getRepository('FilRougeBundle:Serie')
        ->getResultsByActors($q);

      return $this->render('results.html.twig', array(
          'series' => $series,
          'episodes' => $episodes,
          'actors' => $actors,
          'q' => $q
      ));
  }
}
