<?php

namespace FilRougeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;
use Symfony\Component\Translation\Loader\YamlFileLoader;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", defaults={"_locale": "fr"}, requirements={"_locale": "en|fr"})
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();

      $series = $em->getRepository('FilRougeBundle:Serie')->getTopFive();
      $comments = $em->getRepository('FilRougeBundle:Comment')->getLastFive();

      return $this->render('Default/index.html.twig', array(
          'series' => $series,
          'comments' => $comments
      ));
    }

    /**
     * Finds and displays a Serie entity.
     * @param int $id
     * @return title
     */
    public function getTitleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository('FilRougeBundle:Serie')->find($id);
        $response = new Response($serie->getTitle());
        //return $serie.getTitle();
        return $response;
    }

   /**
    * @Route("/{_locale}", defaults={"_locale": "fr"}, requirements={"_locale": "en|fr"})
    */
   public function languageAction(Request $request)
   {
       $newLocale = $request->getLocale();
       $url = $this->getRequest()->headers->get("referer");
       if (isset($url)) {
       $oldLocale = ($newLocale==='en')? 'fr' : 'en';
       //replace the old by te new, even if it's the same language, it w'ont be affected.
       $newUrl= str_replace($oldLocale, $newLocale, $url);
       return new RedirectResponse($newUrl);
       }
       $em = $this->getDoctrine()->getManager();

       $series = $em->getRepository('FilRougeBundle:Serie')->getTopFive();
       $comments = $em->getRepository('FilRougeBundle:Comment')->getLastFive();

       return $this->render('Default/index.html.twig', array(
           'series' => $series,
           'comments' => $comments
       ));
   }
}
