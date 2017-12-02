<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class AccueilController extends Controller
{
    /**
     * Matches /accueil exactly
     * @Route("/accueil", name="accueil")
     */


    public function IndexAction()
    {
      $professeurs = array('Damien', 'bastien', 'vincent');

       return $this->render('accueil/accueil.html.twig', array(
           'professeurs' => $professeurs,
       ));


    }

    /**
     * Matches /accueil/number exactly
     * @Route("/accueil/number/{max}", name="accueilNumber")
     */
    public function NumberAction($max)
    {


      $number = mt_rand(0, $max);

       return new Response(
           '<html><body>Lucky number: '.$number.'</body></html>'
       );
    }

    /**
     * Matches /accueil/redirect exactly
     * @Route("/accueil/redirect/", name="redirectNumber")
     */
    public function RedirectAction()
    {
      // redirect to the "homepage" route
      return $this->redirectToRoute('accueil');

      // do a permanent - 301 redirect
      // return $this->redirectToRoute('homepage', array(), 301);

      // redirect to a route with parameters
      // return $this->redirectToRoute('blog_show', array('slug' => 'my-page'));

      // redirect externally
      // return $this->redirect('http://symfony.com/doc');

    }

    /**
     * @Route("/accueil/logger")
     */
    public function LoggedAction(LoggerInterface $logger)
    {
        $logger->info('We are logging!');
        //...

    }

    /**
     * @Route("/accueil/404")
     */
    public function NotfoundAction()
    {
        // retrieve the object from database
        $product = null;
        if (!$product) {
            throw $this->createNotFoundException('The product does not exist');
        }

        // return $this->render();
    }

    /**
     * @Route("/accueil/get/{firstName}/{lastName}")
     */
    public function getparamAction(Request $request, $firstName, $lastName)
    {

        $age = $request->query->get('age');



        return new Response(
            '<html><body>Votre prenom : '.$firstName.' et votre nom : '.$lastName.' et votre age : '.$age.'</body></html>'
        );

    }


    /**
     * @Route("/accueil/session")
     */
    public function sessionAction(SessionInterface $session)
    {
        // store an attribute for reuse during a later user request
        $session->set('foo', 'bar');

        var_dump($session->get('foo'));

        return new Response('<p>'.$session->get("foo").'</p>');

        // get the attribute set by another controller in another request
        // $foobar = $session->get('foobar');

        // use a default value if the attribute doesn't exist
        // $filters = $session->get('filters', array());
    }

    /**
     * @Route("/accueil/ajaxetc")
     */
    public function ajaxEtcAction(Request $request)
    {

      return new Response('<h1>Cette partie permet de retourner certains headers, les get et posts, sessions ... etc</h1>');
        // $request->isXmlHttpRequest(); // is it an Ajax request?
        //
        // $request->getPreferredLanguage(array('en', 'fr'));

        // retrieve GET and POST variables respectively
        // $request->query->get('page');
        // $request->request->get('page');
        //
        // // retrieve SERVER variables
        // $request->server->get('HTTP_HOST');
        //
        // // retrieves an instance of UploadedFile identified by foo
        // $request->files->get('foo');
        //
        // // retrieve a COOKIE value
        // $request->cookies->get('PHPSESSID');
        //
        // // retrieve an HTTP request header, with normalized, lowercase keys
        // $request->headers->get('host');
        // $request->headers->get('content_type');
    }

    /**
     * @Route("/accueil/json")
     */
    public function jsonAction()
    {
        // returns '{"username":"jane.doe"}' and sets the proper Content-Type header
        return $this->json(array('username' => 'jane.doe'));

        // the shortcut defines three optional arguments
        // return $this->json($data, $status = 200, $headers = array(), $context = array());
    }

    /**
     * @Route("/accueil/servefile")
     */
    public function fileAction()
    {
      return new Response('Permet de faire télécharger un fichier');
        // send the file contents and force the browser to download it
        // return $this->file('/path/to/some_file.pdf');
    }

    /**
     * @Route("/mon_compte", name="mon_compte")
     */

    public function monCompteAction()
    {
      $competences = array('Web', 'Mobile', 'Réseaux');

       return $this->render('mon_compte/mon_compte.html.twig', array(
           'competences' => $competences,
       ));
    }

  }
