<?php

namespace Ictdata\IctdataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class D_parc_abonneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pDate')
            ->add('pMobilePostPaye')
            ->add('pMobilePrePaye')
            ->add('pFixeMobiliteRestreinte')
            ->add('pFixeResidentiel')
            ->add('pFixeProfessionnel')
            ->add('pFixeGlobal')
            ->add('pPubliphoneLignes')
            ->add('pInternetGlobaleAdsl')
            ->add('pInternetGlobaleMobile')
            ->add('pInternetGlobaleAutre')
            ->add('pInternetBasdebit')
            ->add('pInternet')
            ->add('pInternetClassique')
            ->add('pInternetForfait')
            ->add('pInternetAdsl')
            ->add('pInternetAdsldebit128k')
            ->add('pInternetAdsldebit153k')
            ->add('pInternetAdsldebit256k')
            ->add('pInternetAdsldebit512k')
            ->add('pInternetAdsldebit1024k')
            ->add('pInternetAdsldebit2M')
            ->add('pInternetAdsldebit4M')
            ->add('pInternetAdsldebit8M')
            ->add('pInternetAdsldebit12M')
            ->add('pInternetAdsldebit20M')
            ->add('pllInternet')
            ->add('pInternet3G')
            ->add('pInternet3GData')
            ->add('pInternet3GDataVoi')
            ->add('pNomDomainMa')
            ->add('pRepartMa')
            ->add('pRepartAutre')
            ->add('pNewEnregistTrimestre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ictdata\IctdataBundle\Entity\D_parc_abonne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ictdata_ictdatabundle_d_parc_abonne';
    }
}
