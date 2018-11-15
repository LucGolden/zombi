<?php

namespace BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProduitController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        // Récupérer les produits (BDD)
        $produits = array(
                0 => array(
                    'id_produit' => 1,
                    'reference' => 'lollll',
                    'titre' => 'Super produit',
                    'categorie' => 'Robe',
                    'photo' =>'ref14_robe2.jpg',
                    'public' => 'f',
                    'description' => 'produit hiver',
                    'couleur' => 'rouge',
                    'taille' => 'sm',
                    'prix' => 100.00,
                    'stock' => 20
                ),
                1 => array(
                    'id_produit' => 2,
                    'reference' => 'Mdrrrr',
                    'titre' => 'Best produit',
                    'categorie' => 'tshirt',
                    'photo' => 'ref321_pantalon2.jpg',
                    'public' => 'm',
                    'description' => 'produit hiver hiver',
                    'couleur' => 'bleu',
                    'taille' => 'l',
                    'prix' => 25.45,
                    'stock' => 10
                )
        );

        // Récupérer les catégorie du site 
        $categories = array (
                0 => array(
                    'categorie' => 'robe'
                ),
                1 => array(
                    'categorie' => 'tshirt'
                )
        );
        // Transmettre les produits et categorie à la vue

        $params = array (
            'produits' => $produits,
            'categories' => $categories,
            'title' => 'Acceuil'
        );



        return $this->render('@Boutique/Produit/index.html.twig', $params);
    }
    
    /**
     * @Route("/produit/{id}", name="produit")
     * WWW.boutique.com/produit/12  ex:
     */
    public function produitAction($id){
               $produits = array(
                    'id_produit'    => 1,
                    'reference'     => 'lollll',
                    'titre'         => 'Super produit',
                    'categorie'     => 'Robe',
                    'photo'         => 'ref14_robe2.jpg',
                    'public'        => 'f',
                    'description'   => 'produit hiver',
                    'couleur'       => 'rouge',
                    'taille'        => 'sm',
                    'prix'          => 100.00,
                    'stock'         => 15  
        );

         $suggestions = array(
                0 => array(
                    'id_produit' => 1,
                    'reference' => 'lollll',
                    'titre' => 'Super produit',
                    'categorie' => 'Robe',
                    'photo' => 'ref14_robe2.jpg',
                    'public' => 'f',
                    'description' => 'produit hiver',
                    'couleur' => 'rouge',
                    'taille' => 'sm',
                    'prix' => 100.00,
                    'stock' => 20
                ),
                1 => array(
                    'id_produit' => 2,
                    'reference' => 'Mdrrrr',
                    'titre' => 'Best produit',
                    'categorie' => 'tshirt',
                    'photo' => 'ref321_pantalon2.jpg',
                    'public' => 'm',
                    'description' => 'produit hiver hiver',
                    'couleur' => 'bleu',
                    'taille' => 'l',
                    'prix' => 25.45,
                    'stock' => 10
                )
        );

        $params = array (
            'produit' => $produits,
            'title' => 'produit : ' . $produits['titre'],
            'suggestions' => $suggestions
        );


        
        return $this->render('@Boutique/Produit/produit.html.twig', $params);
    }
    /**
     * @Route("/categorie/{cat}", name="categorie")
     * WWW.boutique.com/categorie/t-shirt  ex:
     */
    public function categorieAction($cat){
             // Récupérer les produits (BDD)
        $produits = array(
                0 => array(
                    'id_produit' => 1,
                    'reference' => 'lollll',
                    'titre' => 'Super produit',
                    'categorie' => 'Robe',
                    'photo' => 'ref14_robe2.jpg',
                    'public' => 'f',
                    'description' => 'produit hiver',
                    'couleur' => 'rouge',
                    'taille' => 'sm',
                    'prix' => 100.00,
                    'stock' => 20
                ),
                1 => array(
                    'id_produit' => 2,
                    'reference' => 'Mdrrrr',
                    'titre' => 'Best produit',
                    'categorie' => 'tshirt',
                    'photo' => 'ref321_pantalon2.jpg',
                    'public' => 'm',
                    'description' => 'produit hiver hiver',
                    'couleur' => 'bleu',
                    'taille' => 'l',
                    'prix' => 25.45,
                    'stock' => 10
                )
        );

        // Récupérer les catégorie du site 
        $categories = array (
                0 => array(
                    'categorie' => 'robe'
                ),
                1 => array(
                    'categorie' => 'tshirt'
                )
            );
           

            $params = array (
                'categories' => $categories,
                'produits' => $produits,
                 'title' => 'categorie' . $cat 
            );


        return $this->render('@Boutique/Produit/index.html.twig', $params);

    }







}//-------FIN class ProduitController extends Controller---------
