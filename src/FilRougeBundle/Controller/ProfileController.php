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
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

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

    /**
     * Show the user
     * @Route("/{_locale}/{id}/profile", defaults={"_locale": "fr"}, requirements={"_locale": "en|fr"}, name="user_profile")
     */
    public function showAction(User $user)
    {
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
            'user' => $user
        ));
    }
}
