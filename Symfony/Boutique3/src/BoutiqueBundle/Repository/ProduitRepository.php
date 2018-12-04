<?php

namespace BoutiqueBundle\Repository;
use BoutiqueBundle\Entity\Produit;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{
    // Si j'ai des requêtes qui concernent exclusivement la table produit, et qui sont spécifiques... je vais le coder ici plutôt que ds le conntroller.
    // Cela maintient un controller plus claire/générique

    // Fonction pour récupérer toutes les catégorie via QueryBuilder()
    public function findAllCategorie(){
        // Nous avons besoin du manager  ici pour use QueryBuilder()
        $em = $this -> getEntityManager();
         $query = $em -> createQueryBuilder();
    $query  -> select('p.categorie')
            -> distinct(true)
            -> from(Produit::class, 'p')
            -> orderBy('p.categorie', 'ASC');
            // On bâtit une requête via des functions PHP de Doctrine.  
            
            return $query -> getQuery() -> getResult();

    }
    
    
    
    // Fonction pour récupérer toutes les catégorie via createQuery()
    public function findAllCategorie2(){
        
        // Nous avons besoin du manager  ici pour use createquery()
        $em = $this -> getEntityManager();

         //  Méthode createQuery (SQL)
        $query = $em -> createQuery("SELECT DISTINCT p.categorie FROM BoutiqueBundle\Entity\Produit p ORDER BY p.categorie");
        // On créer une reqête en SQL via Doctrine

        return  $query -> getResult();
        // On execute la requête et on fetch
    }
}
