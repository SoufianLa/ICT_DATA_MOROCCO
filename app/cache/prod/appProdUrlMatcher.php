<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        // ictdata_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ictdata_homepage');
            }

            return array (  '_controller' => 'Ictdata\\IctdataBundle\\Controller\\IctdataController::indexAction',  '_route' => 'ictdata_homepage',);
        }

        if (0 === strpos($pathinfo, '/gr')) {
            // ictdata_grapheMobile
            if ($pathinfo === '/grm') {
                return array (  '_controller' => 'Ictdata\\IctdataBundle\\Controller\\IctdataController::grapheMobileAction',  '_route' => 'ictdata_grapheMobile',);
            }

            // ictdata_grapheFixe
            if ($pathinfo === '/grf') {
                return array (  '_controller' => 'Ictdata\\IctdataBundle\\Controller\\IctdataController::grapheFixeAction',  '_route' => 'ictdata_grapheFixe',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
