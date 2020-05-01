<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\ProductCategory;
use Doctrine\ORM\EntityManagerInterface;


class ProductController extends AbstractController
{    
    /**
     * @Route("/store", name="store")
     */
    public function startpage()
    {
        $repository = $this->getDoctrine()->getRepository(ProductCategory::class);
        $productsCategories = $repository->findAll();
        
        return $this->render(
            'store.html.twig',
            array('productscategories' => $productscategories)
            );
    }
}
