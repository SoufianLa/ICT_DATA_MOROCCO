<?php

namespace Ictdata\IctdataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class D_traficType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('traDate')
            ->add('traVoixMobileSort')
            ->add('traSmsMobileSort')
            ->add('traVoixFixeSort')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ictdata\IctdataBundle\Entity\D_trafic'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ictdata_ictdatabundle_d_trafic';
    }
}
