<?php

namespace Ictdata\IctdataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class E_enqueteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('eDate')
            ->add('eMenagesFixe')
            ->add('eMenagesMobile')
            ->add('eIndividusMobile')
            ->add('eIndividusMobileInternet')
            ->add('eIndividusSmartphone')
            ->add('eMenagesequOrdinateur')
            ->add('eMenagesOrdinateurBureau')
            ->add('eMenagesOrdinateurPc')
            ->add('eMenagesOrdinateurTablette')
            ->add('eMenagesInternetFixe')
            ->add('eMenagesInternetMobile')
            ->add('eMenagesInternetMobileFixe')
            ->add('eIndividusInternet')
            ->add('eNbrInternautes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ictdata\IctdataBundle\Entity\E_enquete'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ictdata_ictdatabundle_e_enquete';
    }
}
