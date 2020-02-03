<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CreateinvoiceType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder ->add('invoicedate', DateType::class, [
                      'widget' => 'single_text',
                      'format' => 'dd-MM-yyyy',
                      'attr' => [
                      'class' => 'form-control input-inline datepicker',
                      'data-provide' => 'datepicker',
                      'data-date-format' => 'dd-mm-yyyy'
                      ]
                      ])
                ->add('customer', EntityType::class, array(
                      'class' => 'AppBundle:Customer',
                      'choice_label' => 'company',
                      'placeholder'  =>  'Select Customer'
                      ));
                          

    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Createinvoice'
        ));
    }
}