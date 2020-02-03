<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository; 
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class MyinvoiceitemType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder ->add('product', EntityType::class, array( 
                        'class' => 'AppBundle:Product', 
                        'query_builder' => function (EntityRepository $er) 
                        { return $er->createQueryBuilder('u') ->orderBy('u.product', 'ASC'); },
                        'choice_label' => 'product', ))
                ->add('quantity')
                ->add('discount');
                          

    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Myinvoiceitem'
        ));
    }
}