<?php

namespace Ictdata\IctdataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class D_infrastruct_autreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('iDate')
            ->add('iBpInternet')
            ->add('iNbrPrestaMaTotal')
            ->add('iNbrPrestaMaNew')
            ->add('iNbrLirMarocains')
            ->add('iParcMarocIpv4Afrinic')
            ->add('iStockIpv4Afrinic')
            ->add('iNbrIpv4Allouees')
            ->add('iRepartIpv4LirMaroc')
            ->add('iEtatEpuisIpv4')
            ->add('iPlageIpv6Maroc')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ictdata\IctdataBundle\Entity\D_infrastruct_autre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ictdata_ictdatabundle_d_infrastruct_autre';
    }
}
