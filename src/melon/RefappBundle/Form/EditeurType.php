<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EditeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',					'text', array('required' => true))
            ->add('numtel',					'text', array('required' => false))
            ->add('numero',					'text', array('required' => false))
            ->add('rue',					'text', array('required' => false))
            ->add('codepostal',				'text', array('required' => false))
            ->add('ville',					'text', array('required' => false))
            ->add('mail',					'text', array('required' => false))
            ->add('responsableTechnique',	'text', array('required' => false))
            ->add('responsableApplication',	'text', array('required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Editeur'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_editeurtype';
    }
}
