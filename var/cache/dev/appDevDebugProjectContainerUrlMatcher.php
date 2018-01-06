<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/classe')) {
            // classe_index
            if ('/classe' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_classe_index;
                }

                $ret = array (  '_controller' => 'EcoleBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'classe_index'));
                }

                return $ret;
            }
            not_classe_index:

            // classe_show
            if (preg_match('#^/classe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_classe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'EcoleBundle\\Controller\\ClasseController::showAction',));
            }
            not_classe_show:

            // classe_new
            if ('/classe/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_classe_new;
                }

                return array (  '_controller' => 'EcoleBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
            }
            not_classe_new:

            // classe_edit
            if (preg_match('#^/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_classe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'EcoleBundle\\Controller\\ClasseController::editAction',));
            }
            not_classe_edit:

            // classe_delete
            if (preg_match('#^/classe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_classe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'EcoleBundle\\Controller\\ClasseController::deleteAction',));
            }
            not_classe_delete:

        }

        elseif (0 === strpos($pathinfo, '/eleve')) {
            // eleve_index
            if ('/eleve' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_eleve_index;
                }

                $ret = array (  '_controller' => 'EcoleBundle\\Controller\\EleveController::indexAction',  '_route' => 'eleve_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'eleve_index'));
                }

                return $ret;
            }
            not_eleve_index:

            // eleve_show
            if (preg_match('#^/eleve/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_eleve_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_show')), array (  '_controller' => 'EcoleBundle\\Controller\\EleveController::showAction',));
            }
            not_eleve_show:

            // eleve_new
            if ('/eleve/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_eleve_new;
                }

                return array (  '_controller' => 'EcoleBundle\\Controller\\EleveController::newAction',  '_route' => 'eleve_new',);
            }
            not_eleve_new:

            // eleve_edit
            if (preg_match('#^/eleve/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_eleve_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_edit')), array (  '_controller' => 'EcoleBundle\\Controller\\EleveController::editAction',));
            }
            not_eleve_edit:

            // eleve_delete
            if (preg_match('#^/eleve/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_eleve_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_delete')), array (  '_controller' => 'EcoleBundle\\Controller\\EleveController::deleteAction',));
            }
            not_eleve_delete:

        }

        elseif (0 === strpos($pathinfo, '/intervenant')) {
            // intervenant_index
            if ('/intervenant' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_intervenant_index;
                }

                $ret = array (  '_controller' => 'EcoleBundle\\Controller\\IntervenantController::indexAction',  '_route' => 'intervenant_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'intervenant_index'));
                }

                return $ret;
            }
            not_intervenant_index:

            // intervenant_show
            if (preg_match('#^/intervenant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_intervenant_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenant_show')), array (  '_controller' => 'EcoleBundle\\Controller\\IntervenantController::showAction',));
            }
            not_intervenant_show:

            // intervenant_new
            if ('/intervenant/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_intervenant_new;
                }

                return array (  '_controller' => 'EcoleBundle\\Controller\\IntervenantController::newAction',  '_route' => 'intervenant_new',);
            }
            not_intervenant_new:

            // intervenant_edit
            if (preg_match('#^/intervenant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_intervenant_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenant_edit')), array (  '_controller' => 'EcoleBundle\\Controller\\IntervenantController::editAction',));
            }
            not_intervenant_edit:

            // intervenant_delete
            if (preg_match('#^/intervenant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_intervenant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenant_delete')), array (  '_controller' => 'EcoleBundle\\Controller\\IntervenantController::deleteAction',));
            }
            not_intervenant_delete:

        }

        elseif (0 === strpos($pathinfo, '/places')) {
            // places_index
            if ('/places' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_places_index;
                }

                $ret = array (  '_controller' => 'EcoleBundle\\Controller\\PlacesController::indexAction',  '_route' => 'places_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'places_index'));
                }

                return $ret;
            }
            not_places_index:

            // places_show
            if (preg_match('#^/places/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_places_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'places_show')), array (  '_controller' => 'EcoleBundle\\Controller\\PlacesController::showAction',));
            }
            not_places_show:

            // places_new
            if ('/places/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_places_new;
                }

                return array (  '_controller' => 'EcoleBundle\\Controller\\PlacesController::newAction',  '_route' => 'places_new',);
            }
            not_places_new:

            // places_edit
            if (preg_match('#^/places/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_places_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'places_edit')), array (  '_controller' => 'EcoleBundle\\Controller\\PlacesController::editAction',));
            }
            not_places_edit:

            // places_delete
            if (preg_match('#^/places/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_places_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'places_delete')), array (  '_controller' => 'EcoleBundle\\Controller\\PlacesController::deleteAction',));
            }
            not_places_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
