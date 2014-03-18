<?php

namespace Duomenys\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IvykisType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pavadinimas')
            ->add('data')
            ->add('vieta')
            ->add('kategorija')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Duomenys\CoreBundle\Entity\Ivykis'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'duomenys_corebundle_ivykis';
    }
}
