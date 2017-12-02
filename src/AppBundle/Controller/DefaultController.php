<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $professeurs = array('Damien', 'bastien', 'vincent'); // a remplacer avec des variables dynamiques 
        // replace this example code with whatever you need
        return $this->render('accueil/accueil.html.twig', array(
           'professeurs' => $professeurs,
       ));
    }
}
