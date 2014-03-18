<?php

namespace Duomenys\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VarzybosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('laikas')
            ->add('taskaiK1')
            ->add('taskaiK2')
            ->add('ivykis')
            ->add('komandosKodas1')
            ->add('komandosKodas')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Duomenys\CoreBundle\Entity\Varzybos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'duomenys_corebundle_varzybos';
    }
}
