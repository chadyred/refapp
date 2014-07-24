<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheServeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	//cr�ation du formulaire complet Application avec toute les options qui vont bien
        $builder
			->add('nom', 'text',array("required" => false,'attr' => array('placeholder' => 'Nom')))
			->add('ip','text' ,array("required" => false,'attr' => array('placeholder' => 'Ip')))
			->add('hostname','text' ,array("required" => false,'attr' => array('placeholder' => 'Hostname')))
			->add('typeServeur', 'choice', array(
							  'choices'   => array('N/A', 'fichier', 'sgbd', 'applicatif', 'web'),
							  'required'  => false,
            				  'empty_value' => 'Choisir un type',
            				  'empty_data'  => null
				))
			->add('environnement','choice', array(
    						'choices' => array('Production' => 'Production','Développement'=> 'Développement','Recette'=> 'Recette'),
							'required' => false,
            				'empty_value' => 'Choisir un environnement',
            				'empty_data'  => null
				))
    			    		
    		->add('serveurWeb', 'entity', array(
    				'class'    => 'melonRefappBundle:ServeurWeb',
    				'property' => 'nomComplet',
    				'multiple' =>false,
    				'required' => false,
    				'empty_value' => 'Serveur Web',
    			'query_builder' => function(EntityRepository $er) {
					return $er->createQueryBuilder('c')->orderBy('c.nomComplet', 'ASC');
			}    				
    		))
    		->add('langage', 'entity', array(
    				'class'    => 'melonRefappBundle:Langage',
    				'property' => 'nomComplet',
    				'multiple' =>false,
    				'required' => false,
    				'empty_value' => 'Langage',
    			'query_builder' => function(EntityRepository $er) {
					return $er->createQueryBuilder('c')->orderBy('c.nomComplet', 'ASC');
			}    				
    		))
    		
    		
    		->add('os', 'entity', array(
    				'class'    => 'melonRefappBundle:Os',
    				'property' => 'nomComplet',
    				'multiple' =>false,
    				'required' => false,
    				'empty_value' => 'Os',
    			'query_builder' => function(EntityRepository $er) {
					return $er->createQueryBuilder('c')->orderBy('c.nomComplet', 'ASC');
			}    				
    		))
    		

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\RechercheServeur'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_rechercheserveurtype';
    }
}
