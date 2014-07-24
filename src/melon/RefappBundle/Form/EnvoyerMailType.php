<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EnvoyerMailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder
    	->add('email',        				'text', array('required' => true));
    	
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    	$resolver->setDefaults(array(
    			'data_class' => 'melon\RefappBundle\Entity\EnvoyerMail'
    	));
    }
    
    public function getName()
    {
    	return 'melon_refappbundle_envoyermailtype';
    }
 }