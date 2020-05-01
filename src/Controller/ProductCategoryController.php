<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\ProductCategory;
use App\Form\ProductCategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class ProductCategoryController extends AbstractController
{    
    /**
     * @Route("/productscategories", name="productscategories_search")
     */
    public function showProductsCategories()
    {
        $repository = $this->getDoctrine()->getRepository(ProductCategory::class);
        $productsCategories = $repository->findAll();
        
        return $this->render(
            'product/productscategories.html.twig',
            array('productsCategories' => $productsCategories)
            );
    }

    /**
     * Displays a form to edit an existing Product Category entity.
     *
     * @Route("productcategory/edit/{id<\d+>}", methods="GET|POST", name="productcategory_edit")
     */
    public function edit(Request $request, ProductCategory $productCategory): Response
    {
        $form = $this->createForm(ProductCategoryType::class, $productCategory);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // $form->getData() holds the submitted values
            // but, the original `$product` variable has also been updated
            $productCategory = $form->getData();
            
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productCategory);
            $entityManager->flush();
            
            //Redirect to another Action in same Controller.
            return $this->redirectToRoute('productscategories_search');
        }
    
        return $this->render('product/edit_productcategory_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * Creates a new Product Category entity.
     *
     * @Route("productcategory/new", methods="GET|POST", name="productcategory_create")
     *
     * NOTE: the Method annotation is optional, but it's a recommended practice
     * to constraint the HTTP methods each controller responds to (by default
     * it responds to all methods).
     */
    public function new(Request $request): Response
    {
        $productCategory = new ProductCategory();
        
        // See https://symfony.com/doc/current/form/multiple_buttons.html
        $form = $this->createForm(ProductCategoryType::class, $productCategory);
        
        $form->handleRequest($request);
        
        // the isSubmitted() method is completely optional because the other
        // isValid() method already checks whether the form is submitted.
        // However, we explicitly add it to improve code readability.
        // See https://symfony.com/doc/current/forms.html#processing-forms
        if ($form->isSubmitted() && $form->isValid()) 
        {            
            $em = $this->getDoctrine()->getManager();
            $em->persist($productCategory);
            $em->flush();
            
            //Redirect to another Action in same Controller.
            return $this->redirectToRoute('productscategories_search');
        }
        
        return $this->render('product/edit_productcategory_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
