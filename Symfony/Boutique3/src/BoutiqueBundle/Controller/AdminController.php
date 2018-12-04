<?php

namespace BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use BoutiqueBundle\Entity\Produit;
use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Commande;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
/**
 * 
 *
 *  @Route("/admin/produit/show", name="show_produit")
 * 
 */
  public function showProduitAction(){

        $repository = $this -> getDoctrine() -> getRepository(produit::class);

        $produits = $repository -> findAll();

        $params = array(
            'produits' => $produits,
            'title'    => 'Gestions des Produits'
        );

    return $this-> render('@Boutique/Admin/show_produit.html.twig', $params);
}



/**
 *  @Route("/admin/Produit/delete/{id}", name="delete_produit")
 * 
 */
public function deleteProduitAction($id, Request $request){

    $em = $this -> getDoctrine() -> getManager();
    $produit = $em -> find(Produit::class, $id);

    $session = $request -> getSession();

    if($produit){
        $em -> remove($produit);
        $em -> flush();

        $session -> getFlashBag() -> add('success', 'Le produit a bien été supprimé');
    }else {
       
        $session -> getFlashBag() -> add('Erreur', 'Le produit n\'existe pas');
    }

    return $this -> redirectToRoute("show_produit");
}





/**
 *  @Route("/admin/commande/show", name="show_commande")
 * 
 */
public function showCommandeAction(){

       $repository = $this -> getDoctrine() -> getRepository(produit::class);

        $commandes = $repository -> findAll();

        $params = array(
            'commandes' => $commandes,
            'title'    => 'Gestions des commandes'
        );

    return $this-> render('@Boutique/Admin/show_commande.html.twig', $params);
}



/**
 *  @Route("/admin/Commande/delete/{id}", name="delete_commande")
 * 
  */
    public function deleteCommandeAction($id, Request $request){

        
     $session = $request -> getSession();
    $sessions -> getFlashBag() -> add('success', 'La commande a bien été supprimée');
    return $this -> redirectToRoute("show_commande");

    }


/**
 *  @Route("/admin/membre/show", name="show_membre")
 * 
  */
    public function showMembreAction(){


    return $this-> render('@Boutique/Admin/show_membre.html.twig');

    }

/**
 *  @Route("/admin/membre/delete/{id}", name="delete_membre")
 * 
  */
    public function deleteMembreAction($id, Request $request){

  $session = $request -> getSession();
    $sessions -> getFlashBag() -> add('success', 'Le membre a bien été supprimé');
    return $this -> redirectToRoute("show_membre");
    }




















}