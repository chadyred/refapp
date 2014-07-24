<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DirectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 						'text', array('required' => true))
            ->add('correspondantInformatique', 	'text', array('required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Direction'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_directiontype';
    }
}
