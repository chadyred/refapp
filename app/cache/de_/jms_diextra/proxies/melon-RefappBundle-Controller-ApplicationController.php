<?php

namespace EnhancedProxy_71bd0ae24ff9b417f4efe31750fc6da78b749933\__CG__\melon\RefappBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ApplicationController extends \melon\RefappBundle\Controller\ApplicationController
{
    private $__CGInterception__loader;

    public function supprimerAppliAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'supprimerAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function rechercheAppliAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'rechercheAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function rapportObsolescenceAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'rapportObsolescenceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function pdfAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'pdfAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function nouvelEditeurAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'nouvelEditeurAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function modifierAppliAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'modifierAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function mesAppliAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'mesAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function listeAppliAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'listeAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function ficheAppliAction($id)
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'ficheAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function creerAppliAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\ApplicationController', 'creerAppliAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}