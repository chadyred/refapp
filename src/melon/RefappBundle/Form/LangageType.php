<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LangageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 		'text', array('required' => true))
			->add('dateFin', 	'date', 	array('widget' => 'single_text','input' => 'datetime','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
            ->add('version', 	'text', array('required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Langage'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_langagetype';
    }
}
