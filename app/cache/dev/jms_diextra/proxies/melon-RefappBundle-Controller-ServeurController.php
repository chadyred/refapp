<?php

namespace EnhancedProxy_075cb03ab5ea4f56c102fe26665ea2f42129256c\__CG__\melon\RefappBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ServeurController extends \melon\RefappBundle\Controller\ServeurController
{
    private $__CGInterception__loader;

    public function supprimerServeurAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ServeurController', 'supprimerServeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function rechercheServeurAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ServeurController', 'rechercheServeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function modifierServeurAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ServeurController', 'modifierServeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function listeServeurAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ServeurController', 'listeServeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function ficheServeurAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ServeurController', 'ficheServeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function creerServeurAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ServeurController', 'creerServeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}