<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MySearchType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder ->add('month', ChoiceType::class, array(
                   'choices' => array("Jan"=>"01", "Feb"=>"02", "Mar"=>"03",
                    "Apr"=>"04", "May"=>"05", "Jun"=>"06",
                    "Jul"=>"07", "Aug"=>"08", "Sep"=>"09",
                    "Oct"=>"10", "Nov"=>"11", "Dec"=>"12"),
                    'data'=>date('m')))     
                ->add('year', ChoiceType::class, array(
                   'choices' => $this->getYears(2018, date('Y')),
                    'data' => date('Y')));
    }

    public function getYears($min, $max)
    {
        $years=range($min, $max);
        return array_combine($years, $years);
    }
     
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MySearch'
        ));
    }
}