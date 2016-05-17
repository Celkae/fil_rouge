<?php
namespace FilRougeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FilRougeBundle\Entity\Admin;
use FilRougeBundle\Entity\User;
use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Entity\Episode;
use FilRougeBundle\Entity\Comment;

/**
 * Admin controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * Lists all admin entities.
     *
     * @Route("/{_locale}", defaults={"_locale": "fr"}, requirements={"_locale": "en|fr"}, name="admin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('FilRougeBundle:User')->findBy(array('moderated' => false));
        $series = $em->getRepository('FilRougeBundle:Serie')->findBy(array('moderated' => false));
        $episodes = $em->getRepository('FilRougeBundle:Episode')->findBy(array('moderated' => false));
        $comments = $em->getRepository('FilRougeBundle:Comment')->findBy(array('moderated' => false));

        return $this->render('admin/dashboard.html.twig', array(
            'users' => $users,
            'series' => $series,
            'episodes' => $episodes,
            'comments' => $comments
        ));
    }

    /**
     * Lists all admin entities.
     *
     * @Route("/upgrade", name="search_admin_index")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        if ($request->query->get('name'))
        {
            $q = $request->query->get('name');
            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository('FilRougeBundle:User')->findByUsername($q);
        } else {
            $users = '';
        }
        return $this->render('admin/roles.html.twig', array(
            'users' => $users
        ));
    }

    /**
     * Lists all admin entities.
     *
     * @Route("/{id}/upgrade", name="upgrade_index")
     * @Method("GET")
     */
    public function upgradeAction(Request $request, User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $role = array('ROLE_ADMIN');
        $user->setRoles($role);
        $em->persist($user);
        $em->flush();

        return $response = new Response('ok');
    }

    /**
      * Ajax request for follow.
      *
      * @Route("/{id}/users", name="admin_Users")
      * @Method({"GET", "POST"})
      */
    public function adminUsersAction(Request $request, User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $user->setLocked(true);
        $user->setModerated(true);
        $em->persist($user);
        $em->flush();
        return new Response('Bloqué');
    }

    /**
     * Ajax request for series.
     *
     * @Route("/{id}/series", name="admin_series")
     * @Method({"GET", "POST"})
     */
    public function adminSeriesAction(Request $request, Serie $serie)
    {
        $em = $this->getDoctrine()->getManager();
        $serie->setModerated(true);
        $em->persist($serie);
        $em->flush();
        return new Response('Moderé');
    }

    /**
     * Ajax request for episodes.
     *
     * @Route("/{id}/episodes", name="admin_episodes")
     * @Method({"GET", "POST"})
     */
    public function adminEpisodesAction(Request $request, Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();
        $episode->setModerated(true);
        $em->persist($episode);
        $em->flush();
        return new Response('Moderé');
    }

    /**
     * Ajax request for comments.
     *
     * @Route("/{id}/comments", name="admin_comments")
     * @Method({"GET", "POST"})
     */
    public function adminCommentsAction(Request $request, Comment $comment)
    {
        $em = $this->getDoctrine()->getManager();
        $comment->setModerated(true);
        $em->persist($comment);
        $em->flush();
        return new Response('Bloqué');
    }
}
