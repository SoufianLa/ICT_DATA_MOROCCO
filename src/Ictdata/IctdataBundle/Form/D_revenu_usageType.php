<?php

namespace Ictdata\IctdataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class D_revenu_usageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rDate')
            ->add('rMinuteComMobile')
            ->add('rMensuelClientMobile')
            ->add('rMinuteComFixe')
            ->add('rMensuelComFixe')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ictdata\IctdataBundle\Entity\D_revenu_usage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ictdata_ictdatabundle_d_revenu_usage';
    }
}
