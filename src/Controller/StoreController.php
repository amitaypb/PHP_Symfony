<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\ProductCategory;
use App\Entity\Store;
use App\Form\StoreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class StoreController extends AbstractController
{    
    /**
     * @Route("/store", name="store")
     */
    public function startpage(Request $request)
    {
//         $repository = $this->getDoctrine()->getRepository(ProductCategory::class);
        
//         $categories = new ArrayCollection();
        
//         $emptyCategory = new ProductCategory();
//         $emptyCategory->setId(-1);
//         $emptyCategory->setName('Choose a Category');
        
//         $categories->add($emptyCategory);
        
//         $productsCategories = $repository->findAll();
        
//         foreach($productsCategories as $productCategory)
//         {
//             $categories->add($productCategory);
//         }
        
//         return $this->render(
//             'store.html.twig',
//             array('productsCategories' => $categories)
//             );

        $store = new Store();
        $form = $this->createForm(StoreType::class, $store);
        
        $form->handleRequest($request);
        
        return $this->render('store.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/store/product-categories-select", name="product_categories_select")
     */
    public function getProductCategories(Request $request)
    {
        $store = new Store();
        $store->setCategory($request->query->get('category'));
        
        $form = $this->createForm(StoreType::class, $store);
        
        // no field? Return an empty response
        if (!$form->has('products')) 
        {
            return new Response(null, 204);
        }
        
        return $this->render('store.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
