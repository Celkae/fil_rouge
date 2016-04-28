<?php

namespace Ideato\StarRatingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ideato\StarRatingBundle\StarRating\Exception;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FilRougeBundle\Entity\User;
use FilRougeBundle\Entity\Serie;
use Symfony\Component\HttpFoundation\Session\Session;

class StarRatingController extends Controller
{
    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    protected $repository;


    /**
     * Return the result of rating action
     *
     * @return Response
     */
    public function rateAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->getRequest();
        $contentId = (int)$request->request->get('contentId');
        $contentType = (string)$request->request->get('contentType');
        $entity = 'FilRougeBundle:'.ucfirst($contentType);
        $contents = $this->getDoctrine()->getManager()->getRepository($entity);

        $content = $contents->findOneById($contentId);
        $response = new Response();

        $votedContent[] = array();
        if ($content instanceof Serie) {
          foreach ($user->getVotedSeries() as $elem) {
            $votedContent[] = $elem;
          }
          if (in_array($content, $votedContent)) {
            $average = '';
            $response->setContent($average);
            return $response;
          }
          $em = $this->getDoctrine()->getManager();
          $user->setVotedSerie($content);
          $em->persist($user);
          $em->flush();
        } else {
          foreach ($user->getVotedEpisodes() as $elem) {
            $votedContent[] = $elem;
          }
          if (in_array($content, $votedContent)) {
            $average = '';
            $response->setContent($average);
            return $response;
          }
          $em = $this->getDoctrine()->getManager();
          $user->setVotedEpisode($content);
          $em->persist($user);
          $em->flush();
        }

        $score = (float)$request->request->get('score');
        $starrating = $this->get('ideato_starrating_service');
        $average = $starrating->save($contentId, $score, $contentType);

        $response = new Response();
        $response->setContent($average);
        return $response;
    }

    /**
     * Display the star rating
     *
     * @param int $contentId, string contentType
     * @return Response
     */
    public function displayRateAction($contentId, $contentType)
    {
        $starrating = $this->get('ideato_starrating_service');
        $average = $starrating->getAverage($contentId, $contentType);

        $user = $this->container->get('security.context')->getToken()->getUser();
        $entity = 'FilRougeBundle:'.ucfirst($contentType);
        $contents = $this->getDoctrine()->getManager()->getRepository($entity);
        $content = $contents->findOneById($contentId);
        $msg = '';
        $votedContent[] = array();

        if ($content instanceof Serie) {
          foreach ($user->getVotedSeries() as $elem) {
            $votedContent[] = $elem;
          }
          if (in_array($content, $votedContent)) {
            $msg = 'Déjà voté';
          }
        } else {
          foreach ($user->getVotedEpisodes() as $elem) {
            $votedContent[] = $elem;
          }
          if (in_array($content, $votedContent)) {
            $msg = 'Déjà voté';
          }
        }

        return $this->render(
            "IdeatoStarRatingBundle:StarRating:rate.html.twig",
            array(
                'contentId' => $contentId,
                'contentType' => $contentType,
                'score' => $average,
                'msg' => $msg
            )
        );
    }

}
