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
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
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

        elseif (0 === strpos($pathinfo, '/adres')) {
            // adres_index
            if ('/adres' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_adres_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'adres_index');
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\AdresController::indexAction',  '_route' => 'adres_index',);
            }
            not_adres_index:

            // adres_new
            if ('/adres/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_adres_new;
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\AdresController::newAction',  '_route' => 'adres_new',);
            }
            not_adres_new:

            // adres_show
            if (preg_match('#^/adres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_adres_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adres_show')), array (  '_controller' => 'AddressBoxBundle\\Controller\\AdresController::showAction',));
            }
            not_adres_show:

            // adres_edit
            if (preg_match('#^/adres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_adres_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adres_edit')), array (  '_controller' => 'AddressBoxBundle\\Controller\\AdresController::editAction',));
            }
            not_adres_edit:

            // adres_delete
            if (preg_match('#^/adres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_adres_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adres_delete')), array (  '_controller' => 'AddressBoxBundle\\Controller\\AdresController::deleteAction',));
            }
            not_adres_delete:

        }

        // addressbox_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'addressbox_default_index');
            }

            return array (  '_controller' => 'AddressBoxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'addressbox_default_index',);
        }

        if (0 === strpos($pathinfo, '/email')) {
            // email_index
            if ('/email' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_email_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'email_index');
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\EmailController::indexAction',  '_route' => 'email_index',);
            }
            not_email_index:

            // email_new
            if ('/email/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_email_new;
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\EmailController::newAction',  '_route' => 'email_new',);
            }
            not_email_new:

            // email_show
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_email_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_show')), array (  '_controller' => 'AddressBoxBundle\\Controller\\EmailController::showAction',));
            }
            not_email_show:

            // email_edit
            if (preg_match('#^/email/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_email_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_edit')), array (  '_controller' => 'AddressBoxBundle\\Controller\\EmailController::editAction',));
            }
            not_email_edit:

            // email_delete
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_email_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_delete')), array (  '_controller' => 'AddressBoxBundle\\Controller\\EmailController::deleteAction',));
            }
            not_email_delete:

        }

        elseif (0 === strpos($pathinfo, '/osoba')) {
            // osoba_index
            if ('/osoba' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_osoba_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'osoba_index');
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\OsobaController::indexAction',  '_route' => 'osoba_index',);
            }
            not_osoba_index:

            // osoba_new
            if ('/osoba/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_osoba_new;
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\OsobaController::newAction',  '_route' => 'osoba_new',);
            }
            not_osoba_new:

            // osoba_show
            if (preg_match('#^/osoba/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_osoba_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'osoba_show')), array (  '_controller' => 'AddressBoxBundle\\Controller\\OsobaController::showAction',));
            }
            not_osoba_show:

            // osoba_edit
            if (preg_match('#^/osoba/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_osoba_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'osoba_edit')), array (  '_controller' => 'AddressBoxBundle\\Controller\\OsobaController::editAction',));
            }
            not_osoba_edit:

            // osoba_delete
            if (preg_match('#^/osoba/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_osoba_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'osoba_delete')), array (  '_controller' => 'AddressBoxBundle\\Controller\\OsobaController::deleteAction',));
            }
            not_osoba_delete:

        }

        elseif (0 === strpos($pathinfo, '/telefon')) {
            // telefon_index
            if ('/telefon' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_telefon_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'telefon_index');
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\TelefonController::indexAction',  '_route' => 'telefon_index',);
            }
            not_telefon_index:

            // telefon_new
            if ('/telefon/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_telefon_new;
                }

                return array (  '_controller' => 'AddressBoxBundle\\Controller\\TelefonController::newAction',  '_route' => 'telefon_new',);
            }
            not_telefon_new:

            // telefon_show
            if (preg_match('#^/telefon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_telefon_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefon_show')), array (  '_controller' => 'AddressBoxBundle\\Controller\\TelefonController::showAction',));
            }
            not_telefon_show:

            // telefon_edit
            if (preg_match('#^/telefon/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_telefon_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefon_edit')), array (  '_controller' => 'AddressBoxBundle\\Controller\\TelefonController::editAction',));
            }
            not_telefon_edit:

            // telefon_delete
            if (preg_match('#^/telefon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_telefon_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefon_delete')), array (  '_controller' => 'AddressBoxBundle\\Controller\\TelefonController::deleteAction',));
            }
            not_telefon_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
