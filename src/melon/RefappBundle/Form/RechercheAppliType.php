<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheAppliType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	//cr�ation du formulaire complet Application avec toute les options qui vont bien
        $builder
            ->add('code','text' ,array("required" => false,'attr' => array('placeholder' => 'Code')))
			->add('nom', 'text',array("required" => false,'attr' => array('placeholder' => 'Nom')))
			
			
			/*
			 *  One-To-One ou Many-To-One
			 */
    		->add('domaine', 'entity', array(
    			'class'    => 'melonRefappBundle:Domaine',
    			'property' => 'nom',
    			'multiple' => false,
    			'required' => false, 'empty_value' => 'Domaine',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))   		
    			
    		->add('editeur', 'entity', array(
    			'class'    => 'melonRefappBundle:Editeur',
    			'property' => 'nom',
    			'multiple' => false,
    			'required' => false,
    			'empty_value' => 'Editeur',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))

			/*
			 * Many-To-One ou Many-To-Many
			*/

			->add('direction', 'entity', array(
							'class'    => 'melonRefappBundle:Direction',
							'property' => 'nom',
							'multiple' => false,
							'required' => false,
							'empty_value' => 'Direction',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
			))
    
    		->add('technologie', 'entity', array(
    						'class'    => 'melonRefappBundle:Technologie',
    						'property' => 'nom',
    						'multiple' => false,
    						'required' => false,
    						'empty_value' => 'Technologie',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
    		))
    		
    		->add('serviceAppliDsi', 'entity', array(
    						'class'    => 'melonRefappBundle:ServiceAppliDsi',
    						'property' => 'nom',
    						'multiple' => false,
    						'required' => false,
    						'empty_value' => 'Service',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
    		))		
    		
    		->add('responsableDsi', 'entity', array(
    						'class'    => 'melonRefappBundle:ResponsableDsi',
    						'property' => 'nom',
    						'multiple' => false,
    						'required' => false,
    						'empty_value' => 'Responsable',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
			))
    		
    		->add('competence', 'entity', array(
    						'class'    => 'melonRefappBundle:Competence',
    						'property' => 'nom',
    						'multiple' =>false,
    						'required' => false,
    						'empty_value' => 'Competence',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
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
    		
    		
    		->add('logiciel', 'entity', array(
    				'class'    => 'melonRefappBundle:Logiciel',
    				'property' => 'nomComplet',
    				'multiple' =>false,
    				'required' => false,
    				'empty_value' => 'Logiciel',
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
    		
    		
    		->add('sgbd', 'entity', array(
    				'class'    => 'melonRefappBundle:Sgbd',
    				'property' => 'nomComplet',
    				'multiple' =>false,
    				'required' => false,
    				'empty_value' => 'Sgbd',
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nomComplet', 'ASC');
   				}
    		))
    		

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\RechercheAppli'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_rechercheapplitype';
    }
}
