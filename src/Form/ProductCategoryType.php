<?php

namespace App\Form;

use App\Entity\ProductCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

/**
 * Defines the form used to create and manipulate Products Categories.
 */
class ProductCategoryType extends AbstractType
{
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
        ->add('name', TextType::class)
        
        ->add('save', SubmitType::class, [
            'attr' => ['class' => 'button']])
//         ->add('cancel', SubmitType::class, [
//             'attr' => ['class' => 'button']])
        ;
        
        //Conditionally add the Id Field to the Form, because when we are creating a new Product Category, we don't want to display its id.
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
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductCategory::class,
        ]);
    }
    
    protected function getProductCategories(FormInterface $form, ProductCategory $productCategory)
    {
        $form->add('products', Product::class, array(
            'class'=> 'Entity:Product',
            'choice_label'=>'posttext',
            'query_builder'=>function(EntityRepository $er, $owner) {
            return $er->createQueryBuilder('p')
            ->join('p.owner', 'o')
            ->where('o.id = :ownerID')
            ->setParameter('ownerID', $owner->getID() )
            ->orderBy('d.postdate','ASC');
            }));
    }
    
    public function onPreSetData(FormEvent $event)
    {
        /** @var ProductCategory productCategory */
        $productCategory = $event->getData();
        $form = $event->getForm();
        
        $this->getProductCategories($form, $productCategory);
    }
}
