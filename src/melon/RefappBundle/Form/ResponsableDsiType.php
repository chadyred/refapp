<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponsableDsiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 				'text', array('required' => true))
            ->add('prenom', 			'text', array('required' => true))
            ->add('username', 			'text', array('required' => true))
            ->add('password', 			'text', array('required' => true))
            ->add('roles', 'choice', array('choices' =>
                array(
                    'ROLE_UTILISATEUR' => 'ROLE_UTILISATEUR',
                    'ROLE_RESPONSABLE_APPLICATION' => 'ROLE_RESPONSABLE_APPLICATION',
                	'ROLE_RESPONSABLE_EXPLOITATION' => 'ROLE_RESPONSABLE_EXPLOITATION',
                	'ROLE_RESPONSABLE_SERVICE'	=> 'ROLE_RESPONSABLE_SERVICE',
                		'ROLE_ADMIN' =>'ROLE_ADMIN'             ),
                'required'  => true,
                'multiple' => false
            ))
            ->add('numTel', 			'text', array('required' => false)) 
            ->add('email', 			'text', array('required' => true))
            ->add('serviceAppliDsi',	'entity', array(
            				'class'    => 'melonRefappBundle:ServiceAppliDsi',
            				'property' => 'nom',
            				'multiple' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\ResponsableDsi'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_responsabledsitype';
    }
}
