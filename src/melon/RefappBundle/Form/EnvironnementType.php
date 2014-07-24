<?php

namespace melon\RefappBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class EnvironnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','choice', array(
    						'choices' => array('Production' => 'Production','Développement'=> 'Développement','Recette'=> 'Recette'),
							'required' => true,
            				'empty_value' => 'Choisir un nom',
            				'empty_data'  => null
				))
            ->add('repertoire', 	'text', array('required' => true))
            ->add('nomInstance', 	'text', array('required' => false))
            ->add('utilisateurBdd', 'text', array('required' => false))
            ->add('serveurs', 'entity', array(
    				'class'    => 'melonRefappBundle:Serveur',
    				'property' => 'nom',
    				'multiple' => true,
            		'required' => true,
            		'empty_value' => 'Choisir un serveur')
    		)
    		->add('composants', 'entity', array(
    				'class'    => 'melonRefappBundle:Composant',
    				'property' => 'nomComplet',
    				'multiple' => true,
    				'required' => true,
    				'empty_value' => 'Choisir un Composant',
    				'query_builder' => function(EntityRepository $er) {
    				return $er->createQueryBuilder('c')->orderBy('c.nomComplet', 'ASC')
    		->where('c.nomComplet IN(SELECT t.nomComplet FROM melonRefappBundle:Composant t 
    				WHERE t INSTANCE OF melonRefappBundle:Langage OR t INSTANCE OF melonRefappBundle:ServeurWeb OR t INSTANCE OF melonRefappBundle:Os)');
    	
    				}
    		))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'melon\RefappBundle\Entity\Environnement'
        ));
    }

    public function getName()
    {
        return 'melon_refappbundle_environnementtype';
    }
}
