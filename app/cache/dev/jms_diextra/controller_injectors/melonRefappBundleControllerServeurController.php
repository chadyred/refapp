<?php

namespace melon\RefappBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ServeurController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/romain/mairie2013-2014/Symfony/app/cache/dev/jms_diextra/proxies/melon-RefappBundle-Controller-ServeurController.php';
        $c = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('melon\\RefappBundle\\Controller\\ServeurController' => array('ficheServeurAction' => array(0 => 'security.access.method_interceptor'), 'listeServeurAction' => array(0 => 'security.access.method_interceptor'), 'creerServeurAction' => array(0 => 'security.access.method_interceptor'), 'rechercheServeurAction' => array(0 => 'security.access.method_interceptor'), 'modifierServeurAction' => array(0 => 'security.access.method_interceptor'), 'supprimerServeurAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_075cb03ab5ea4f56c102fe26665ea2f42129256c\__CG__\melon\RefappBundle\Controller\ServeurController();
        $instance->__CGInterception__setLoader($c);
        return $instance;
    }
}