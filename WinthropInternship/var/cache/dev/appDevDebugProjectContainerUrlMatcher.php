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

        elseif (0 === strpos($pathinfo, '/careerconsultantform')) {
            // careerconsultantform_index
            if ('/careerconsultantform' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_careerconsultantform_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\CareerConsultantFormController::indexAction',  '_route' => 'careerconsultantform_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'careerconsultantform_index'));
                }

                return $ret;
            }
            not_careerconsultantform_index:

            // careerconsultantform_new
            if ('/careerconsultantform/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_careerconsultantform_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CareerConsultantFormController::newAction',  '_route' => 'careerconsultantform_new',);
            }
            not_careerconsultantform_new:

            // careerconsultantform_show
            if (preg_match('#^/careerconsultantform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_careerconsultantform_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'careerconsultantform_show')), array (  '_controller' => 'AppBundle\\Controller\\CareerConsultantFormController::showAction',));
            }
            not_careerconsultantform_show:

            // careerconsultantform_edit
            if (preg_match('#^/careerconsultantform/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_careerconsultantform_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'careerconsultantform_edit')), array (  '_controller' => 'AppBundle\\Controller\\CareerConsultantFormController::editAction',));
            }
            not_careerconsultantform_edit:

            // careerconsultantform_delete
            if (preg_match('#^/careerconsultantform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_careerconsultantform_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'careerconsultantform_delete')), array (  '_controller' => 'AppBundle\\Controller\\CareerConsultantFormController::deleteAction',));
            }
            not_careerconsultantform_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/facultyliaisonform')) {
            // facultyliaisonform_index
            if ('/facultyliaisonform' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_facultyliaisonform_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\FacultyLiaisonFormController::indexAction',  '_route' => 'facultyliaisonform_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'facultyliaisonform_index'));
                }

                return $ret;
            }
            not_facultyliaisonform_index:

            // facultyliaisonform_new
            if ('/facultyliaisonform/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_facultyliaisonform_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FacultyLiaisonFormController::newAction',  '_route' => 'facultyliaisonform_new',);
            }
            not_facultyliaisonform_new:

            // facultyliaisonform_show
            if (preg_match('#^/facultyliaisonform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_facultyliaisonform_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facultyliaisonform_show')), array (  '_controller' => 'AppBundle\\Controller\\FacultyLiaisonFormController::showAction',));
            }
            not_facultyliaisonform_show:

            // facultyliaisonform_edit
            if (preg_match('#^/facultyliaisonform/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_facultyliaisonform_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facultyliaisonform_edit')), array (  '_controller' => 'AppBundle\\Controller\\FacultyLiaisonFormController::editAction',));
            }
            not_facultyliaisonform_edit:

            // facultyliaisonform_delete
            if (preg_match('#^/facultyliaisonform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_facultyliaisonform_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facultyliaisonform_delete')), array (  '_controller' => 'AppBundle\\Controller\\FacultyLiaisonFormController::deleteAction',));
            }
            not_facultyliaisonform_delete:

        }

        elseif (0 === strpos($pathinfo, '/hrform')) {
            // hrform_index
            if ('/hrform' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_hrform_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\HRFormController::indexAction',  '_route' => 'hrform_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'hrform_index'));
                }

                return $ret;
            }
            not_hrform_index:

            // hrform_new
            if ('/hrform/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_hrform_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HRFormController::newAction',  '_route' => 'hrform_new',);
            }
            not_hrform_new:

            // hrform_show
            if (preg_match('#^/hrform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_hrform_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrform_show')), array (  '_controller' => 'AppBundle\\Controller\\HRFormController::showAction',));
            }
            not_hrform_show:

            // hrform_edit
            if (preg_match('#^/hrform/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_hrform_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrform_edit')), array (  '_controller' => 'AppBundle\\Controller\\HRFormController::editAction',));
            }
            not_hrform_edit:

            // hrform_delete
            if (preg_match('#^/hrform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_hrform_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hrform_delete')), array (  '_controller' => 'AppBundle\\Controller\\HRFormController::deleteAction',));
            }
            not_hrform_delete:

        }

        elseif (0 === strpos($pathinfo, '/internationalofficeform')) {
            // internationalofficeform_index
            if ('/internationalofficeform' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_internationalofficeform_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\InternationalOfficeFormController::indexAction',  '_route' => 'internationalofficeform_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'internationalofficeform_index'));
                }

                return $ret;
            }
            not_internationalofficeform_index:

            // internationalofficeform_new
            if ('/internationalofficeform/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_internationalofficeform_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\InternationalOfficeFormController::newAction',  '_route' => 'internationalofficeform_new',);
            }
            not_internationalofficeform_new:

            // internationalofficeform_show
            if (preg_match('#^/internationalofficeform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_internationalofficeform_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'internationalofficeform_show')), array (  '_controller' => 'AppBundle\\Controller\\InternationalOfficeFormController::showAction',));
            }
            not_internationalofficeform_show:

            // internationalofficeform_edit
            if (preg_match('#^/internationalofficeform/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_internationalofficeform_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'internationalofficeform_edit')), array (  '_controller' => 'AppBundle\\Controller\\InternationalOfficeFormController::editAction',));
            }
            not_internationalofficeform_edit:

            // internationalofficeform_delete
            if (preg_match('#^/internationalofficeform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_internationalofficeform_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'internationalofficeform_delete')), array (  '_controller' => 'AppBundle\\Controller\\InternationalOfficeFormController::deleteAction',));
            }
            not_internationalofficeform_delete:

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/sitesupervisorform')) {
                // sitesupervisorform_index
                if ('/sitesupervisorform' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sitesupervisorform_index;
                    }

                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SiteSupervisorFormController::indexAction',  '_route' => 'sitesupervisorform_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sitesupervisorform_index'));
                    }

                    return $ret;
                }
                not_sitesupervisorform_index:

                // sitesupervisorform_new
                if ('/sitesupervisorform/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sitesupervisorform_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SiteSupervisorFormController::newAction',  '_route' => 'sitesupervisorform_new',);
                }
                not_sitesupervisorform_new:

                // sitesupervisorform_show
                if (preg_match('#^/sitesupervisorform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_sitesupervisorform_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitesupervisorform_show')), array (  '_controller' => 'AppBundle\\Controller\\SiteSupervisorFormController::showAction',));
                }
                not_sitesupervisorform_show:

                // sitesupervisorform_edit
                if (preg_match('#^/sitesupervisorform/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_sitesupervisorform_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitesupervisorform_edit')), array (  '_controller' => 'AppBundle\\Controller\\SiteSupervisorFormController::editAction',));
                }
                not_sitesupervisorform_edit:

                // sitesupervisorform_delete
                if (preg_match('#^/sitesupervisorform/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_sitesupervisorform_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitesupervisorform_delete')), array (  '_controller' => 'AppBundle\\Controller\\SiteSupervisorFormController::deleteAction',));
                }
                not_sitesupervisorform_delete:

            }

            elseif (0 === strpos($pathinfo, '/studentformone')) {
                // studentformone_index
                if ('/studentformone' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_studentformone_index;
                    }

                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentFormOneController::indexAction',  '_route' => 'studentformone_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'studentformone_index'));
                    }

                    return $ret;
                }
                not_studentformone_index:

                // studentformone_new
                if ('/studentformone/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_studentformone_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StudentFormOneController::newAction',  '_route' => 'studentformone_new',);
                }
                not_studentformone_new:

                // studentformone_show
                if (preg_match('#^/studentformone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_studentformone_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentformone_show')), array (  '_controller' => 'AppBundle\\Controller\\StudentFormOneController::showAction',));
                }
                not_studentformone_show:

                // studentformone_edit
                if (preg_match('#^/studentformone/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_studentformone_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentformone_edit')), array (  '_controller' => 'AppBundle\\Controller\\StudentFormOneController::editAction',));
                }
                not_studentformone_edit:

                // studentformone_delete
                if (preg_match('#^/studentformone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_studentformone_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentformone_delete')), array (  '_controller' => 'AppBundle\\Controller\\StudentFormOneController::deleteAction',));
                }
                not_studentformone_delete:

            }

            elseif (0 === strpos($pathinfo, '/studentformtwo')) {
                // studentformtwo_index
                if ('/studentformtwo' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_studentformtwo_index;
                    }

                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StudentFormTwoController::indexAction',  '_route' => 'studentformtwo_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'studentformtwo_index'));
                    }

                    return $ret;
                }
                not_studentformtwo_index:

                // studentformtwo_new
                if ('/studentformtwo/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_studentformtwo_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StudentFormTwoController::newAction',  '_route' => 'studentformtwo_new',);
                }
                not_studentformtwo_new:

                // studentformtwo_show
                if (preg_match('#^/studentformtwo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_studentformtwo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentformtwo_show')), array (  '_controller' => 'AppBundle\\Controller\\StudentFormTwoController::showAction',));
                }
                not_studentformtwo_show:

                // studentformtwo_edit
                if (preg_match('#^/studentformtwo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_studentformtwo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentformtwo_edit')), array (  '_controller' => 'AppBundle\\Controller\\StudentFormTwoController::editAction',));
                }
                not_studentformtwo_edit:

                // studentformtwo_delete
                if (preg_match('#^/studentformtwo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_studentformtwo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentformtwo_delete')), array (  '_controller' => 'AppBundle\\Controller\\StudentFormTwoController::deleteAction',));
                }
                not_studentformtwo_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_index'));
                }

                return $ret;
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
