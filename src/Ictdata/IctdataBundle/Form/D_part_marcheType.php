<?php

namespace Ictdata\IctdataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class D_part_marcheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('partDate')
            ->add('partParcMobilePostIam')
            ->add('partParcMobilePreIam')
            ->add('partParcMobilePostMed')
            ->add('partParcMobilePreMed')
            ->add('partParcMobilePostWana')
            ->add('partParcMobilePreWana')
            ->add('partParcFixeResidIam')
            ->add('partParcFixeProfIam')
            ->add('partParcFixeResidMed')
            ->add('partParcFixeProfMed')
            ->add('partParcFixeResidWana')
            ->add('partParcFixeProfWana')
            ->add('partParcLignesPubliIam')
            ->add('partParcLignesPubliMed')
            ->add('partParcInternetAdslIam')
            ->add('partParcInternetMobileIam')
            ->add('partParcInternetAdslMed')
            ->add('partParcInternetMobileMed')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ictdata\IctdataBundle\Entity\D_part_marche'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ictdata_ictdatabundle_d_part_marche';
    }
}
