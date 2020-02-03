<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ChangepstatusType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder ->add('paiddate', DateType::class, [
                      'widget' => 'single_text',
                      'format' => 'dd-MM-yyyy',
                      'attr' => [
                      'class' => 'form-control input-inline datepicker',
                      'data-provide' => 'datepicker',
                      'data-date-format' => 'dd-mm-yyyy'
                      ]
                      ])
                ->add('amount');
                
                          

    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Changepstatus'
        ));
    }
}