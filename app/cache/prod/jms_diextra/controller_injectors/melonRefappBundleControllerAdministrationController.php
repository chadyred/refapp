<?php

namespace melon\RefappBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class AdministrationController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/romain/mairie2013-2014/Symfony/app/cache/prod/jms_diextra/proxies/melon-RefappBundle-Controller-AdministrationController.php';
        $b = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('melon\\RefappBundle\\Controller\\AdministrationController' => array('administrationAction' => array(0 => 'security.access.method_interceptor'), 'ficheCompetenceAction' => array(0 => 'security.access.method_interceptor'), 'ficheDirectionAction' => array(0 => 'security.access.method_interceptor'), 'ficheDomaineAction' => array(0 => 'security.access.method_interceptor'), 'ficheEditeurAction' => array(0 => 'security.access.method_interceptor'), 'ficheLangageAction' => array(0 => 'security.access.method_interceptor'), 'ficheLogicielAction' => array(0 => 'security.access.method_interceptor'), 'ficheOsAction' => array(0 => 'security.access.method_interceptor'), 'ficheResponsableDsiAction' => array(0 => 'security.access.method_interceptor'), 'ficheServeurWebAction' => array(0 => 'security.access.method_interceptor'), 'ficheServiceAppliDsiAction' => array(0 => 'security.access.method_interceptor'), 'ficheSgbdAction' => array(0 => 'security.access.method_interceptor'), 'ficheTechnologieAction' => array(0 => 'security.access.method_interceptor'), 'ajoutCompetenceAction' => array(0 => 'security.access.method_interceptor'), 'ajoutResponsableDsiAction' => array(0 => 'security.access.method_interceptor'), 'ajoutServiceAppliDsiAction' => array(0 => 'security.access.method_interceptor'), 'ajoutEditeurAction' => array(0 => 'security.access.method_interceptor'), 'ajoutTechnologieAction' => array(0 => 'security.access.method_interceptor'), 'ajoutDomaineAction' => array(0 => 'security.access.method_interceptor'), 'ajoutDirectionAction' => array(0 => 'security.access.method_interceptor'), 'ajoutOsAction' => array(0 => 'security.access.method_interceptor'), 'ajoutServeurWebAction' => array(0 => 'security.access.method_interceptor'), 'ajoutSgbdAction' => array(0 => 'security.access.method_interceptor'), 'ajoutLogicielAction' => array(0 => 'security.access.method_interceptor'), 'ajoutLangageAction' => array(0 => 'security.access.method_interceptor'), 'listCompetenceAction' => array(0 => 'security.access.method_interceptor'), 'listResponsableDsiAction' => array(0 => 'security.access.method_interceptor'), 'listServiceAppliDsiAction' => array(0 => 'security.access.method_interceptor'), 'listEditeurAction' => array(0 => 'security.access.method_interceptor'), 'listTechnologieAction' => array(0 => 'security.access.method_interceptor'), 'listDomaineAction' => array(0 => 'security.access.method_interceptor'), 'listDirectionAction' => array(0 => 'security.access.method_interceptor'), 'listOsAction' => array(0 => 'security.access.method_interceptor'), 'listServeurWebAction' => array(0 => 'security.access.method_interceptor'), 'listSgbdAction' => array(0 => 'security.access.method_interceptor'), 'listLogicielAction' => array(0 => 'security.access.method_interceptor'), 'listLangageAction' => array(0 => 'security.access.method_interceptor'), 'modifierCompetenceAction' => array(0 => 'security.access.method_interceptor'), 'modifierDirectionAction' => array(0 => 'security.access.method_interceptor'), 'modifierDomaineAction' => array(0 => 'security.access.method_interceptor'), 'modifierEditeurAction' => array(0 => 'security.access.method_interceptor'), 'modifierLangageAction' => array(0 => 'security.access.method_interceptor'), 'modifierLogicielAction' => array(0 => 'security.access.method_interceptor'), 'modifierOsAction' => array(0 => 'security.access.method_interceptor'), 'modifierResponsableDsiAction' => array(0 => 'security.access.method_interceptor'), 'modifierServeurWebAction' => array(0 => 'security.access.method_interceptor'), 'modifierServiceAppliDsiWebAction' => array(0 => 'security.access.method_interceptor'), 'modifierSgbdAction' => array(0 => 'security.access.method_interceptor'), 'modifierTechnologieAction' => array(0 => 'security.access.method_interceptor'), 'supprimerCompetenceAction' => array(0 => 'security.access.method_interceptor'), 'supprimerDirectionAction' => array(0 => 'security.access.method_interceptor'), 'supprimerDomaineAction' => array(0 => 'security.access.method_interceptor'), 'supprimerEditeurAction' => array(0 => 'security.access.method_interceptor'), 'supprimerLangageAction' => array(0 => 'security.access.method_interceptor'), 'supprimerLogicielAction' => array(0 => 'security.access.method_interceptor'), 'supprimerOsAction' => array(0 => 'security.access.method_interceptor'), 'supprimerResponsableDsiAction' => array(0 => 'security.access.method_interceptor'), 'supprimerServeurWebAction' => array(0 => 'security.access.method_interceptor'), 'supprimerServiceAppliDsiAction' => array(0 => 'security.access.method_interceptor'), 'supprimerSgbdAction' => array(0 => 'security.access.method_interceptor'), 'supprimerTechnologieAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_94eae496db310565707bd16cb48755c5d4596d89\__CG__\melon\RefappBundle\Controller\AdministrationController();
        $instance->__CGInterception__setLoader($b);
        return $instance;
    }
}