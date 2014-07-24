<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\RegexValidator;

class ObsolescenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbMois1', 			'integer', array('required' => true))
            ->add('nbMois2', 		'integer', array('required' => true))
            ->add('nbMois3', 	'integer', array('required' => true));
        /*$builder->addValidator(new CallbackValidator(function(FormInterface $form) {
        	$nbMois1 = $form->get('nbMois1');
        	if ( ! is_null($nbMois1->getData()) ) {
        		$validator      = new RegexValidator();
        		$constraint     = new Regex(array(
        				'pattern' => "/^[0-12-]+$/"
        		));
        		$isValid = $validator->validate( $nbMois1->getData(), $constraint );
        		if ( ! $isValid ) {
        			$nbMois1->addError( new FormError( "Le chams Mois 1 n'est pas valide" ) );
        		}
        	}
        }
        ));*/
      
    	}
  


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Obsolescence'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_obsolescencetype';
    }
}
