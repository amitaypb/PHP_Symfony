<?php

namespace App\Form;

use App\Entity\Store;
use App\Entity\Product;
use App\Entity\ProductCategory;
use App\Repository\ProductRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\ProductCategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

/**
 * Defines the form used to create and manipulate Stores.
 */
class StoreType extends AbstractType
{
//     private $em;
    
//     /**
//      * The Type requires the EntityManager as argument in the constructor. It is autowired
//      * in Symfony 3.
//      *
//      * @param EntityManagerInterface $em
//      */
//     public function __construct(EntityManagerInterface $em)
//     {
//         $this->em = $em;
//     }
    
    private $productRepository;
    
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // For the full reference of options defined by each form field type
        // see https://symfony.com/doc/current/reference/forms/types.html

        // By default, form fields include the 'required' attribute, which enables
        // the client-side form validation. This means that you can't test the
        // server-side validation errors from the browser. To temporarily disable
        // this validation, set the 'required' attribute to 'false':
        // $builder->add('title', null, ['required' => false, ...]);

        //Define the Id as a Read only field.
        $builder
//         ->add('id', TextType::class, [ 'required' => false, 'attr' => ['readonly' => true]])
//         ->add('name', TextType::class)
        ->add('category', EntityType::class, [
            'class' => ProductCategory::class,
            'choice_label' => 'name',
            'placeholder' => 'Select a Category',
            'attr' => array('style' => 'width:173px; margin-left: 5px'),
        ])
        
//         ->add('save', SubmitType::class, [
//             'attr' => ['class' => 'button']])
        ;
        
        //Conditionally add the Id Field to the Form, because when we are creating a new Store, we don't want to display its id.
        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function(FormEvent $event)
            {
                $data = $event->getData();
                $form = $event->getForm();
                
                if($data->getId() > 0)
                    $form->add('id', TextType::class, [ 'required' => false, 'attr' => ['readonly' => true]]);
            }
        );
        
//         $builder->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'));
//         $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
        
        $store = $options['data'] ?? null;
        $category = $store ? $store->getCategory() : null;
        
        if ($category) 
        {
            $builder->add('products', ProductCategoryType::class, [
                'placeholder' => 'Select a Product',
                'choices' => $this->productRepository->getProductsByCategory($category),
                'required' => false,
            ]);
        }
        else
        {
            $builder->add('products', EntityType::class, array(
                'class'=> Product::class,
                'choice_label'=>'name',
                'placeholder' => 'Select a Product',
                'required' => false,
                //'choices' => $categories,
                'query_builder' => function (EntityRepository $er)
                {
                    return $er->createQueryBuilder('p')
                    ->orderBy('p.name', 'ASC');
            }
            ));
        }
        
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                /** @var Store |null $data */
                $data = $event->getData();
                if (!$data) 
                {
                    return;
                }
                
                $this->getProductCategories(
                    $event->getForm(),
                    $data->getCategory()
                    );
            }
            );
        
        $builder->get('products')->addEventListener(
            FormEvents::POST_SUBMIT,
            function(FormEvent $event) 
            {
                $form = $event->getForm();
                $this->getProductCategories($form->getParent(), $form->getData());
            }
        );
    }
    
    private function getProductCategories(FormInterface $form, ?ProductCategory $category)
    {
        if ($category == null) 
        {
            $form->add('products', EntityType::class, array(
                'class'=> Product::class,
                'choice_label'=>'name',
                'required' => false,
                'placeholder' => 'Select a Product',
                //'choices' => $categories,
                'query_builder' => function (EntityRepository $er)
                {
                    return $er->createQueryBuilder('p')
                    ->orderBy('p.name', 'ASC');
            }
            ));
            
            //$form->remove('products');
            return;
        }
        
        $categories = $this->productRepository->getProductsByCategory($category);
        
        if ($categories == null) 
        {
            $form->remove('products');
            return;
        }
        
        $form->add('products', ChoiceType::class, [
            'placeholder' => 'Select a Product',
            'choices' => $categories,
            'required' => false,
        ]);
    }
    
    public function onPreSetData(FormEvent $event)
    {
        /** @var Store store */
        $store = $event->getData();
        $form = $event->getForm();
        
        $categoryId = 0;
        
        if($store != null && $store->getCategory() != null)
        {
            $categoryId =$store->getCategory()->getId();
        }
        
        $this->getProductsByCategory($form, $categoryId);
    }
    
    function onPreSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $store = $event->getData();
        
        // Search for selected Store and convert it into an Entity.
        //$store = $this->em->getRepository('App:Store')->find($data['store']);
        
        $categoryId = 0;
        
//         if($store != null && $store->getCategory() != null)
//         {
//             $categoryId =$store->getCategory()->getId();
//         }

        if($store['category'] != null)
        {
            $categoryId = $store['category']->getId();
        }
        
        $this->getProductsByCategory($form, $categoryId);
    }

    public function getProductsByCategory(FormInterface $form, int $categoryId)
    {        
//        $categories = $this->productRepository->getProductsByCategoryId($categoryId);
        //$categories = $repo->getProductsByCategoryId($categoryId);
        
//         $repo = $this->em->getRepository('App:Product');
        
//         $categories = $repo->createQueryBuilder("p")
//         ->where('p.category = :categoryID')
//         ->setParameter('categoryID', $categoryId )
//         ->orderBy('p.name', 'ASC')
//         ->getQuery()
//         ->getResult();
        
        if($categoryId > 0)
        {
            $form->add('products', EntityType::class, array(
                'class'=> Product::class,
                'choice_label'=>'name',
                'required' => false,
                //'choices' => $categories,
                'query_builder' => function (EntityRepository $er) use ($categoryId) 
                {
                    return $er->createQueryBuilder('p')
                    ->where('p.category = :categoryID')
                    ->setParameter('categoryID', $categoryId )
                    ->orderBy('p.name', 'ASC');
                }
            ));
        }
        else
        {
            $form->add('products', EntityType::class, array(
                'class'=> Product::class,
                'choice_label'=>'name',
                'required' => false,
                //'choices' => $categories,
                'query_builder' => function (EntityRepository $er) 
                {
                    return $er->createQueryBuilder('p')
                    ->orderBy('p.name', 'ASC');
                }
            ));
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Store::class,
        ]);
    }
}
