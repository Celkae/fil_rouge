<?php
namespace FilRougeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FilRougeBundle\Entity\Moderate;

/**
 * Moderate controller.
 *
 * @Route("/dashboard")
 */
class ModerateController extends Controller
{
    /**
     * Lists all Moderate entities.
     *
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('FilRougeBundle:User')->findBy(array('moderated' => false));
        $series = $em->getRepository('FilRougeBundle:Serie')->findBy(array('moderated' => false));
        $episodes = $em->getRepository('FilRougeBundle:Episode')->findBy(array('moderated' => false));
        $comments = $em->getRepository('FilRougeBundle:Comment')->findBy(array('moderated' => false));

        return $this->render('moderate/dashboard.html.twig', array(
            'users' => $users,
            'series' => $series,
            'episodes' => $episodes,
            'comments' => $comments
        ));
    }

    /**
      * Ajax request for follow.
      *
      * @Route("/users", name="moderate_Users")
      * @Method({"GET", "POST"})
      */
    public function moderateUsersAction(Request $request)
    {
        $id = intval($request->query->get('id'));
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FilRougeBundle:User')->findOneById($id);
        $user->setModerated(true);
        $em->persist($user);
        $em->flush();
        return new Response('Bloqué');
    }

    /**
    * Ajax request for series.
    *
    * @Route("/series", name="moderate_series")
    * @Method({"GET", "POST"})
    */
    public function moderateSeriesAction(Request $request)
    {
        $id = intval($request->query->get('id'));
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository('FilRougeBundle:Serie')->findOneById($id);
        $serie->setModerated(true);
        $em->persist($serie);
        $em->flush();
        return new Response('Moderé');
    }

    /**
    * Ajax request for episodes.
    *
    * @Route("/episodes", name="moderate_episodes")
    * @Method({"GET", "POST"})
    */
    public function moderateEpisodesAction(Request $request)
    {
        $id = intval($request->query->get('id'));
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('FilRougeBundle:Episode')->findOneById($id);
        $episode->setModerated(true);
        $em->persist($episode);
        $em->flush();
        return new Response('Moderé');
    }

    /**
    * Ajax request for comments.
    *
    * @Route("/comments", name="moderate_comments")
    * @Method({"GET", "POST"})
    */
    public function moderateCommentsAction(Request $request)
    {
        $id = intval($request->query->get('id'));
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository('FilRougeBundle:Comment')->findOneById($id);
        $comment->setModerated(true);
        $em->persist($comment);
        $em->flush();
        return new Response('Bloqué');
    }
}
