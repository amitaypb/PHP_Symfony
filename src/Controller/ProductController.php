<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;
use App\Form\ProductType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;


class ProductController extends AbstractController
{
    
    /**
     * @Route("/product", name="create_product")
     */
//     public function createProduct(): Response
//     {
//         // you can fetch the EntityManager via $this->getDoctrine()
//         // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
//         $entityManager = $this->getDoctrine()->getManager();
        
//         $product = new Product();
//         $product->setName('Keyboard');
//         $product->setPrice(1999);
//         $product->setDescription('Ergonomic and stylish!');
        
//         //Validate if the Product contains the right information in its fields.
//         $errors = $validator->validate($product);
//         if (count($errors) > 0) {
//             return new Response((string) $errors, 400);
//         }
        
//         // tell Doctrine you want to (eventually) save the Product (no queries yet)
//         $entityManager->persist($product);
        
//         // actually executes the queries (i.e. the INSERT query)
//         $entityManager->flush();
        
//         return new Response('Saved new product with id '.$product->getId());
//     }
    
    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show($id)
    {
        $product = $this->getDoctrine()
        ->getRepository(Product::class)
        ->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
                );
        }
        
        return new Response('Product Name: '.$product->getName());
        
        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
    
    /**
     * @Route("/products", name="products_show")
     */
    public function showProducts()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();
        
        return $this->render(
            'product/products.html.twig',
            array('products' => $products)
            );
    }
    
     /**
      * Displays a form to edit an existing Post entity.
      *
      * @Route("product/{id<\d+>}/edit", name="product_edit")
      */
//     public function edit(int $id)
//     {
//         $product = $this->getDoctrine()
//         ->getRepository(Product::class)
//         ->find($id);
        
//          return $this->render('product/edit_product.html.twig', [
//              'id' => $id,
//              'name' => $product->getName(),
//              'price' => $product->getPrice(),
//              'description' => $product->getDescription()
//          ]);
//     }

    /**
     * Displays a form to edit an existing Product entity.
     *
     * @Route("product/edit/{id<\d+>}", methods="GET|POST", name="product_edit")
     */
    public function edit(Request $request, Product $product, SluggerInterface $slugger): Response
    {
        //Using Forms.
        $form = $this->createForm(ProductType::class, $product);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // $form->getData() holds the submitted values
            // but, the original `$product` variable has also been updated
            $product = $form->getData();
            
            $imageFile = $form['image']->getData();
            
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) 
            {
//                   $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
//                 // this is needed to safely include the file name as part of the URL
//                 $safeFilename = $slugger->slug($originalFilename);
//                 $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                
//                 // Move the file to the directory where brochures are stored
//                 try {
//                     $imageFile->move(
//                         $this->getParameter('images_directory'),
//                         $newFilename
//                         );
//                 } catch (FileException $e) {
//                     // ... handle exception if something happens during file upload
//                 }
                
//                 // updates the 'imageFilename' property to store the Image file name instead of its contents
//                 $product->setImageFilename($newFilename);

                // Get the image and convert into string
                $img = file_get_contents($imageFile);
                //$img = file_get_contents($originalFilename);
                //$img = file_get_contents($form['image']);
                
                // Encode the image string data into base64
                $data = base64_encode($img);
                //$data = base64_encode($imageFile);
                $product->setPhoto($data);
                $product->setRawPhoto($data);
            }
            
//             if ($imageFile) {
//                 $imageFileName = $fileUploader->upload($imageFile);
//                 $product->setImageFilename($imageFileName);
//             }
            
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            
            // Flash messages are used to notify the user about the result of the
            // actions. They are deleted automatically from the session as soon
            // as they are accessed.
            // See https://symfony.com/doc/current/controller.html#flash-messages
            $this->addFlash('success', 'product.saved_successfully');
            
            //Redirect to another Action in same Controller.
            return $this->redirectToRoute('products_show');
        }
    
        return $this->render('product/edit_product_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * Saves the Product entity.
     *
     * @Route("product/save", name="product_save")
     */
    public function save(Request $request, Product $product): Response
    {
        //Using Forms.
        $form = $this->createForm(ProductType::class, $product);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            // $form->getData() holds the submitted values
            // but, the original `$product` variable has also been updated
            $product = $form->getData();
            
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
        }
        
        //Redirect to another Action in same Controller.
        return $this->redirectToRoute('products_show');
    }
    
    /**
     * Saves the Product entity.
     *
     * @Route("product/save_product_default", methods="GET|POST", name="save_product_default")
     */
    public function save_product_default(Request $request, Product $product)
    {
        //$id = $request->request->get('Id');
        //$id = $request->query->get('Id');
        
//         var_dump($id);
        
//         $name = $request->query->get('Name');//$request->request->get('Name');
//         $price = $request->query->get('Price');//$request->request->get('Price');
//         $description = $request->query->get('Description');//$request->request->get('Description');
        
//         $product = new Product();
//         $product->setId($id);
//         $product->setName($name);
//         $product->setPrice($price);
//         $product->setDescription($description);
        
//         $entityManager = $this->getDoctrine()->getManager();
//         $entityManager->persist($product);
//         $entityManager->flush();
        
        //Redirect to another Action in same Controller.
        return $this->redirectToRoute('products_show');
    }
    
    /**
     * Saves the Product entity.
     *
     * @Route("product/save_product_ajax}", methods="GET|POST", name="save_product_ajax")
     */
    public function save_product_ajax(Request $request)
    {
        $id = $request->request->get('Id');//$request->get('Id');
        $name = $request->request->get('Name');
        $price = $request->request->get('Price');
        $description = $request->request->get('Description');
        
        $product = new Product();
        $product->setId($id);
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($product);
        $entityManager->flush();
        
        //Redirect to another Action in same Controller.
        return $this->redirectToRoute('products_show');
    }
    
    /**
     * Creates a new Product entity.
     *
     * @Route("product", methods="GET|POST", name="product_create")
     *
     * NOTE: the Method annotation is optional, but it's a recommended practice
     * to constraint the HTTP methods each controller responds to (by default
     * it responds to all methods).
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        
        // See https://symfony.com/doc/current/form/multiple_buttons.html
        $form = $this->createForm(ProductType::class, $product);
        
        $form->handleRequest($request);
        
        // the isSubmitted() method is completely optional because the other
        // isValid() method already checks whether the form is submitted.
        // However, we explicitly add it to improve code readability.
        // See https://symfony.com/doc/current/forms.html#processing-forms
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            
            // Flash messages are used to notify the user about the result of the
            // actions. They are deleted automatically from the session as soon
            // as they are accessed.
            // See https://symfony.com/doc/current/controller.html#flash-messages
            $this->addFlash('success', 'product.created_successfully');
            
            //Redirect to another Action in same Controller.
            return $this->redirectToRoute('products_show');
        }
        
        return $this->render('product/edit_product_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * Saves a Product.
     *
     * @Route("product/save/{id<\d+>}", name="save_product")
     */
//     public function save(int $id)
//     {
//         $product = $this->getDoctrine()
//         ->getRepository(Product::class)
//         ->find($id);
        
//         //$product->setName($name);
//         //$product->setPrice($price);
//         //$product->setDescription($description);
        
//         //Save the Product into the Database.
//         //SaveProduct($product);
        
//         // you can fetch the EntityManager via $this->getDoctrine()
//         // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
//         $entityManager = $this->getDoctrine()->getManager();
        
//         // tell Doctrine you want to (eventually) save the Product (no queries yet)
//         $entityManager->persist($product);
        
//         // actually executes the queries (i.e. the INSERT query)
//         $entityManager->flush();
        
//         return $this->showProducts();
//     }
    
    private function SaveProduct(Product $product)
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();
        
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);
        
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
    }
}
