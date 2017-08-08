<?php
namespace Application\Service;

use Application\Entity\Category;
use Zend\Filter\StaticFilter;

class CategoryManager 
{
    /**
     * Doctrine entity manager.
     * @var Doctrine\ORM\EntityManager
     */
    private $entityManager;
    
    // Constructor is used to inject dependencies into the service.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }
      
    public function categories_for_nav_bar()
    {
        $main_categories = $this->entityManager->getRepository(Category::class)->findBy(['parent_id' => '0']);

        foreach($main_categories as $main_cate)
        {
            $child_categories = $this->entityManager->
                getRepository(Category::class)->findBy(['parent_id' => $main_cate->getId()]);
            $child_categories_for_select = [];
            foreach($child_categories as $child_cate)
            {
                array_push($child_categories_for_select, $child_cate->getName());
            }
            $categories_for_nav_bar[$main_cate->getName()] = $child_categories_for_select;
        }
        return $categories_for_nav_bar;
    }
}