<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class PinvoiceType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder ->add('supplier', EntityType::class, array(
                    'class' => 'AppBundle:Supplier',
                    'choice_label' => 'supplier'
                ))
                ->add('invoicenumber')
                ->add('invoicedate', DateType::class, [
                      'widget' => 'single_text',
                      'format' => 'dd-MM-yyyy',
                      'attr' => [
                      'class' => 'form-control input-inline datepicker',
                      'data-provide' => 'datepicker',
                      'data-date-format' => 'dd-mm-yyyy', 'placeholder'=>'Date'
                      ]
                      ])
                ->add('subtotal')
                ->add('cgst')
                ->add('sgst')
                ->add('igst')
                ->add('grandtotal');
                          

    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pinvoice'
        ));
    }
}