<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // acme_auth_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_auth_homepage');
            }

            return array (  '_controller' => 'Acme\\AuthBundle\\Controller\\DefaultController::loginAction',  '_route' => 'acme_auth_homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // acme_auth_success
            if ($pathinfo === '/login/success') {
                return array (  '_controller' => 'Acme\\AuthBundle\\Controller\\SuccessController::successAction',  '_route' => 'acme_auth_success',);
            }

            // download
            if ($pathinfo === '/login/download') {
                return array (  '_controller' => 'Acme\\AuthBundle\\Controller\\DownloadController::downloadAction',  '_route' => 'download',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
