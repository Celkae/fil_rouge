<?php

namespace FilRougeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FilRougeBundle\Entity\Episode;
use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Form\EpisodeType;

/**
 * Episode controller.
 *
 * @Route("/{_locale}/episode", defaults={"_locale": "fr"}, requirements={"_locale": "en|fr"})
 */
class EpisodeController extends Controller
{
    /**
     * Creates a new Episode entity.
     *
     * @Route("/{id}/new", name="episode_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Serie $serie)
    {
        $episode = new Episode();
        $form = $this->createForm('FilRougeBundle\Form\EpisodeType', $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $episode->setSerie($serie);
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('serie_show', array('id' => $serie->getId()));
        }

        return $this->render('episode/new.html.twig', array(
            'serie_id' => $serie->getId(),
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Episode entity.
     *
     * @Route("/{id}", name="episode_show")
     * @Method("GET")
     */
    public function showAction(Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('episode/show.html.twig', array(
            'episode' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Episode entity.
     *
     * @Route("/{id}/edit", name="episode_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('FilRougeBundle\Form\EpisodeType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $episode->setModerated(false);
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('serie_show', array('id' => $episode->getSerie()->getId()));
        }

        return $this->render('episode/edit.html.twig', array(
            'episode' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Episode entity.
     *
     * @Route("/{id}", name="episode_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episode $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush();
        }

        //return $this->redirectToRoute('episode_index');
        return $this->redirectToRoute('serie_show', array('id' => $episode->getSerie()->getId()));
    }

    /**
     * Creates a form to delete a Episode entity.
     *
     * @param Episode $episode The Episode entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('episode_delete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
