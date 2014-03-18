<?php

namespace Duomenys\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class KomandosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pavadinimas')
            ->add('miestas')
            ->add('logotipas')
            ->add('sukis')
            ->add('treneris')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Duomenys\CoreBundle\Entity\Komandos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'duomenys_corebundle_komandos';
    }
}
