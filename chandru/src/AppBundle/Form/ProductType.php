<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder ->add('category', EntityType::class, array(
                      'class' => 'AppBundle:Category',
                      'choice_label' => 'category'
                     ))
                ->add('product')
                ->add('stock')
                ->add('hssncode')
                ->add('gst')
                ->add('mrp')
                ->add('unit', EntityType::class, array(
                      'class' => 'AppBundle:Unit',
                      'choice_label' => 'unit'
                     ))
                ->add('rate')
                ->add('discount');

    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }
}