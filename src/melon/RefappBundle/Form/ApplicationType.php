<?php
namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	//création du formulaire complet Application avec toute les options qui vont bien
        $builder
            ->add('code',        				'text')
			->add('nom',       	 				'text')
			->add('version',     				'text', 	array('required' => false))
			->add('periodeCritique',    		'text', 	array('required' => false))
			->add('dossierCNIL', 				'checkbox', array('required' => false))
			->add('dateCreationDossierCNIL', 	'date', 	array('widget' => 'single_text','input' => 'datetime', 'empty_value' => '','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
			->add('dateMiseEnOeuvre', 			'date', 	array('widget' => 'single_text','input' => 'datetime', 'empty_value' => '','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
			->add('dateDerniereMiseAJour', 		'date',		array('widget' => 'single_text','input' => 'datetime', 'empty_value' => '','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
			->add('dateFinDeVie', 				'date',		array('widget' => 'single_text','input' => 'datetime', 'empty_value' => '','required' => false, 'format' => 'dd/MM/yyyy','attr' => array('class' => 'date')))
			->add('compatibilite', 'choice', array(
						'choices'   => array('N/A' =>'N/A','32bits' =>'32bits', '64bits' =>'64bits','32/64bits' =>'32/64bits'),
						'required'    => false,
						'empty_value' => 'Choisir la compatibilité',
						'empty_data'  => null,
				))
			->add('objet', 						'text', 	array('required' => false))
			->add('fonctionPrincipal', 			'text', 	array('required' => false))
			->add('famille', 					'choice', 	array(
						'choices'   => array('N/A' =>'N/A', '1-PIV' =>'1-PIV', '2-ASP' =>'2-ASP', '3-ACE' =>'3-ACE','4-ACW'=>'4-ACW','5-ATI'=>'5-ATI','6-ADI'=>'6-ADI','7-SIG'=>'7-SIG'),
						'required'    => false,
						'empty_value' => 'Choisir la famille',
						'empty_data'  => null,
				))
			->add('traitementDonnee', 'choice', array(
						'choices'   => array('N/A' =>'N/A', 'batch' =>'batch', 'tempsReel' =>'tempsReel', 'batch/tempsReel' =>'batch/tempsReel'),
						'required'    => false,
						'empty_value' => 'Choisir le traitement',
						'empty_data'  => null,
				))
			->add('donneeFederale', 			'checkbox', array('required' => false))
			->add('exterieurCG', 				'checkbox', array('required' => false))
			->add('nbUtilisateur', 				'text', 	array('required' => false))
			->add('administrateurFonctionnel', 	'text', 	array('required' => false))
			->add('commentaire', 				'textarea', array('required' => false))
			
			/*
			 *  One-To-One ou Many-To-One
			 */
    		->add('domaine', 'entity', array(
    			'class'    => 'melonRefappBundle:Domaine',
    			'property' => 'nom',
    			'multiple' => false,
    			'required' => false,
    			'empty_value' => 'Choisir un domaine',
    			'empty_data'  => null,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    		->add('editeur', 'entity', array(
    			'class'    => 'melonRefappBundle:Editeur',
    			'property' => 'nom',
    			'multiple' => false,
    			'required' => false,
    			'empty_value' => 'Choisir un éditeur',
    			'empty_data'  => null,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))

			->add('marche', new MarcheType(), array('required' => false))

			/*
			 * Many-To-One ou Many-To-Many
			*/

			->add('directions', 'entity', array(
							'class'    => 'melonRefappBundle:Direction',
							'property' => 'nom',
							'multiple' => true,
							'required' => false,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    
    		->add('technologies', 'entity', array(
    						'class'    => 'melonRefappBundle:Technologie',
    						'property' => 'nom',
    						'multiple' => true,
    						'required' => false,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    		
    		->add('servicesAppliDsi', 'entity', array(
    						'class'    => 'melonRefappBundle:ServiceAppliDsi',
    						'property' => 'nom',
    						'multiple' => true,
    						'required' => false,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    		
    		->add('responsablesDsi', 'entity', array(
    						'class'    => 'melonRefappBundle:ResponsableDsi',
    						'property' => 'nom',
    						'multiple' => true,
    						'required' => true,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    		
    		->add('competences', 'entity', array(
    						'class'    => 'melonRefappBundle:Competence',
    						'property' => 'nom',
    						'multiple' =>true,
    						'required' => false,'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    
    		->add('environnements', 'collection', array(
    				'type'  => new EnvironnementType(),
    				'allow_add'   	 => true,
    				'allow_delete' 	 => true,
    				'required' => false)
    		)
    		
    		->add('documentations', 'collection', array(
    										'type'  => new DocumentationType(),
    										'allow_add'   	 => true,
    										'allow_delete' 	 => true,
    										'required' => false)
    		)
      		->add('applications', 'entity', array(
    			'class'    => 'melonRefappBundle:Application',
    			'property' => 'nom',
    			'multiple' => true,
    			'required' => false,
      			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nom', 'ASC');
   				}
   				))
    	/////////////////////////////////////////////////////////////////////////////
    		->add('composants', 'entity', array(
    			'class'    => 'melonRefappBundle:Composant',
    			'property' => 'nomComplet',
    			'multiple' => true,
    			'required' => false,
    			'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nomComplet', 'ASC')
    		->where('c.nomComplet IN(SELECT t.nomComplet FROM melonRefappBundle:Composant t 
    				WHERE t INSTANCE OF melonRefappBundle:Langage OR t INSTANCE OF melonRefappBundle:ServeurWeb OR t INSTANCE OF melonRefappBundle:Os OR t INSTANCE OF melonRefappBundle:Logiciel OR t INSTANCE OF melonRefappBundle:Sgbd)');
    	
    				}
    		));
    	
    }
///////////////////////////////////////////////////////////////////////////////////////
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Application'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_applicationtype';
    }
}
