<?php

namespace EnhancedProxy_1f161ba14b50e379e418b1f1186c013bbebe1bee\__CG__\melon\RefappBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class FavorisController extends \melon\RefappBundle\Controller\FavorisController
{
    private $__CGInterception__loader;

    public function favorisAction()
    {
        $ref = new \ReflectionMethod('melon\\RefappBundle\\Controller\\FavorisController', 'favorisAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}