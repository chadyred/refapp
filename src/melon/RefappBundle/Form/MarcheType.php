<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MarcheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut', 	'date', array('widget' => 'single_text','input' => 'datetime','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
            ->add('dateFin', 	'date', array('widget' => 'single_text','input' => 'datetime','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
            ->add('nature', 	'text', array( 'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Marche'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_marchetype';
    }
}
