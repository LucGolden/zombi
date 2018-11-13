<?php

namespace POLES\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        // return $this->render('POLESTestBundle:Default:index.html.twig');
        return $this->render('@POLESTest/Default/index.html.twig');
    }


/** 
* @Route("/bonjour")
*Une route, finalement c'est une Url qui correspond à une méthode
*
*
*
*/
public function bonjourAction() {
    // chaque fonctionnalité du site doit avoir un nom suivi de action
    echo 'Bonjour';
    // Cela affiche 'Bonjour comme prevu, mais il y a une erreur. Car normalment une routre doit avoir avoir une finalité d'affichage (return).

}

/**
 *  @Route("/bonjour2")
 * 
 * 
 */
public function bonjour2() {
    return new response("Bonjour2");
}

/**
 * @Route("/hello/{prenom}")
 * 
*/

public function helloAction($prenom){ // $prenom represente {prenom} qui se trouve dans l'URL
return new Response('Hello <i>' . $prenom . '</i> ! ');

}

/**
 * @Route("/hola/{prenom}")
 * 
*/

public function holaAction ($prenom) {
    $params = array(
        'prenom' => $prenom
    );
    return $this -> render('@POLESTest/Test/hola.html.twig', $params);
    
}

/**
 * @Route("/hi/{prenom}")
 * 
 */
public function hiAction ($prenom, Request $request) {
    $age = $request -> query -> get('age');// Je demande à l'objet request de me récupérer la valeur du paramétre 'age' ($age=XX) de l'URL
    $params = array( 
        'prenom' => $prenom,
        'age' => $age
    );
    return $this->render("@POLESTest/Test/hi.html.twig", $params);
}



}//--------