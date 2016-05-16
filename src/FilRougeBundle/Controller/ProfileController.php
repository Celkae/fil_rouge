<?php

namespace FilRougeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\MessageBundle\Provider\ProviderInterface;
use FilRougeBundle\Entity\User;

/**
 * Profile controller.
 *
 * @Route("/")
 */
class ProfileController extends Controller
{
    /**
     * Displays the authenticated participant messages sent
     *
     * @Route("/{_locale}/newmessage/{id}", defaults={"_locale": "fr"}, requirements={"_locale": "en|fr"}, name="new_message")
     */
    public function sentAction(User $user)
    {
      $form = $this->container->get('fos_message.new_thread_form.factory')->create();
      $formHandler = $this->container->get('fos_message.new_thread_form.handler');

      if ($message = $formHandler->process($form)) {
          return new RedirectResponse($this->container->get('router')->generate('fos_message_thread_view', array(
              'threadId' => $message->getThread()->getId()
          )));
      }

      return $this->container->get('templating')->renderResponse('FOSMessageBundle:Message:newThread.html.twig', array(
          'form' => $form->createView(),
          'data' => $form->getData(),
          'user_name' => $user->getUserName()
      ));
    }
}
