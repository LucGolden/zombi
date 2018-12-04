<?php

namespace BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use BoutiqueBundle\Entity\Produit;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        // Récupérer les produits (BDD)
        // Select * from produits
        // On recupère le service doctrine
        $repository = $this -> getDoctrine() -> getRepository(produit::class);
        // $repository est de fait le repository correspondant à la classe Produit (donc à la table produit). Et me permet de faire des requêtes sur la tables produit...
        $produits = $repository -> findAll();

        // pour utiliser QueryBuilder ou createQuery, le manager est nécessaire
        $em = $this -> getDoctrine() -> getManager();


        // Récupérer les catégorie du site 
        //  Méthode QuerryBuilder (PHP)
    // SELECT DISTINCT categotrie FROM produit
    $query = $em -> createQueryBuilder();
    $query  -> select('p.categorie')
            -> distinct(true)
            -> from(Produit::class, 'p')
            -> orderBy('p.categorie', 'ASC');
            // On bâtit une requête via des functions PHP de Doctrine.    

            $categories = $query -> getQuery() -> getResult();
            // On execute la requête et on fetch.

    
    //  Méthode createQuery (SQL)
        $query = $em -> createQuery("SELECT DISTINCT p.categorie FROM BoutiqueBundle\Entity\Produit p ORDER BY p.categorie");
        // On créer une reqête en SQL via Doctrine

        $categorie = $query -> getResult();
        // On execute la requête et on fetch





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

    // Select * FROM produit WHERE id_produit = $produits

    // Methode 1 :
    // On recupère le repository produit
    $repository = $this -> getDoctrine() -> getRepository(Produit::class);
    $produit = $repository -> find($id);

    // Méthode 2 :
        // On recupère l'entityManager
    $em = $this -> getDoctrine() -> getManager();
    //  Le Manager (patron des différent repository) est capable d'intervenir sur toutes les tables .
    // findAll() n'existe pas sur le manager
    $produit = $em -> find(Produit::class, $id);


        $categorie = $produit -> getCategorie();
         $suggestions = $repository -> findBy(['categorie' => $categorie], ['prix' => 'DESC'], 3, 0);

        $params = array (
            'produit' => $produit,
            'title' => 'produit : ' . $produit -> getTitre(),
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
//    Select * FROM produit WHERE categorie = '$cat' -> fetchAll()

        $repository = $this -> getDoctrine() -> getRepository(Produit::class);
        $produits = $repository -> findBy(['categorie' => $cat]);



        

        // Récupérer les catégorie du site 
    //   Récupérer les categories du site
    // SELECT DISTINCT categorie FROM produit

    // Méthode QueryBuilder via ProduitRepository :
    $categories = $repository -> findAllCategorie();

            $params = array (
                'categories' => $categories,
                'produits' => $produits,
                 'title' => 'categorie' . $cat 
            );


        return $this->render('@Boutique/Produit/index.html.twig', $params);

    }

    /**
     * 
     *  @Route("/admin/produit/add", name="add_produit")
      */

      public function addProduitAction(){
          $produit = new Produit;
        //   On instancie un objet de notre entity produit. Il nous permet de manipuler un enregistrement dans la table produit

        $produit 
                    -> setReference('ABC')
                    -> setCategorie('Tshirt')
                    -> setTitre('Tshirt original')
                    -> setDescription('super tshirt original pour l\'été')
                    -> setCouleur('noir')
                    -> setTaille('m')
                    -> setPublic('m')
                    -> setPhoto('th.jpg')
                    -> setPrix('25.59')
                    -> setStock('150');

                    // On récupère le manager pour pouvoir faire un add .

                    $em =$this -> getDoctrine() -> getManager();
                    
                    // On prépare l'insertion
                    $em -> persist($produit);
                    
                    
                    // On enregistre !!
                    $em -> flush(); 
                    
                    return new response ("OK, produit enregistré");
                    // test : localhost:8000/admin/produit/add


                }
                
                /**
                 * 
                 *  @Route("/admin/produit/update/{id}", name="update_produit")
                 */
                
                public function updateProduitAction($id){
                    // On récupère le manager pour pouvoir faire un update .
                    $em =$this -> getDoctrine() -> getManager();
                    $produit = $em-> find(Produit::class, $id);
                    
                    //  On modifie une info quelqu'elle soit
                    $produit -> setTitre('New title');
                    
                    // On enregistre !! 
                    $em -> persist($produit);
                    $em -> flush();
                    // Message : 
                    return new response('Le produit n°' . $id . 'a bien été modifié');
                    // test : localhost:8000/admin/produit/update/19
  
        }
        
        
        /**
         * 
         *  @Route("/admin/produit/delete/{id}", name="del_produit")
          */
    
          public function deleteProduitAction($id, Request $request){
            // On récupère le manager pour pouvoir faire un delete .
                    $em =$this -> getDoctrine() -> getManager();
                    $produit = $em-> find(Produit::class, $id);

                    // On suprime : 
                    $em -> remove($produit);
                    $em -> flush();

                    $session = $request -> getSession();
                    $session -> getFlashBag() -> add('success', 'Le produit a été suprimé avec success');
                    return $this -> redirectToRoute('home');
                    // test : localhost:8000/admin/produit/delete/20

          }

}//------- FIN class ProduitController extends Controller ---------
