<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           	->add('nom', 'text',  array('required' => true))
            ->add('ip', 			'text',  array('required' => true))
            ->add('hostname', 		'text',  array('required' => false))
            ->add('typeServeur', 'choice', array(
							  'choices'   => array('N/A', 'fichier', 'sgbd', 'applicatif', 'web'),
							  'required'  => false,
            				  'empty_value' => 'Choisir un type',
            				  'empty_data'  => null,
				))
            ->add('dateCreation', 	'date', 	array('widget' => 'single_text','input' => 'datetime','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
            ->add('emplacement', 		'text',  array('required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Serveur'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_serveurtype';
    }
}
