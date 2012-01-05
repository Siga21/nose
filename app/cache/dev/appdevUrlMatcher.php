<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\DefaultController::indexAction',  'name' => 'Javier',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // asociados_portada
        if (rtrim($pathinfo, '/') === '/asociados') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'asociados_portada');
            }
            return array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::indexAction',  '_route' => 'asociados_portada',);
        }

        // asociados
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'asociados');
            }
            return array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::indexAction',  '_route' => 'asociados',);
        }

        // asociados_show
        if (preg_match('#^/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::showAction',)), array('_route' => 'asociados_show'));
        }

        // asociados_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::newAction',  '_route' => 'asociados_new',);
        }

        // asociados_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_asociados_create;
            }
            return array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::createAction',  '_route' => 'asociados_create',);
        }
        not_asociados_create:

        // asociados_edit
        if (preg_match('#^/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::editAction',)), array('_route' => 'asociados_edit'));
        }

        // asociados_update
        if (preg_match('#^/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_asociados_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::updateAction',)), array('_route' => 'asociados_update'));
        }
        not_asociados_update:

        // asociados_delete
        if (preg_match('#^/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_asociados_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\AsociadosBundle\\Controller\\AsociadosController::deleteAction',)), array('_route' => 'asociados_delete'));
        }
        not_asociados_delete:

        // tareas_portada
        if (rtrim($pathinfo, '/') === '/tareas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tareas_portada');
            }
            return array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::indexAction',  '_route' => 'tareas_portada',);
        }

        // tareas
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tareas');
            }
            return array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::indexAction',  '_route' => 'tareas',);
        }

        // tareas_show
        if (preg_match('#^/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::showAction',)), array('_route' => 'tareas_show'));
        }

        // tareas_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::newAction',  '_route' => 'tareas_new',);
        }

        // tareas_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tareas_create;
            }
            return array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::createAction',  '_route' => 'tareas_create',);
        }
        not_tareas_create:

        // tareas_edit
        if (preg_match('#^/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::editAction',)), array('_route' => 'tareas_edit'));
        }

        // tareas_update
        if (preg_match('#^/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tareas_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::updateAction',)), array('_route' => 'tareas_update'));
        }
        not_tareas_update:

        // tareas_delete
        if (preg_match('#^/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tareas_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::deleteAction',)), array('_route' => 'tareas_delete'));
        }
        not_tareas_delete:

        // Ocaso_principal
        if (0 === strpos($pathinfo, '/ocaso') && preg_match('#^/ocaso/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'Ocaso_principal'));
        }

        // Ocaso_adios
        if (0 === strpos($pathinfo, '/cenit') && preg_match('#^/cenit/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\DefaultController::ciaoAction',)), array('_route' => 'Ocaso_adios'));
        }

        // Ocaso_dos
        if (rtrim($pathinfo, '/') === '/controlador2') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Ocaso_dos');
            }
            return array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\SecondoController::indexAction',  '_route' => 'Ocaso_dos',);
        }

        // Siga21SociosBundle_homepage
        if (rtrim($pathinfo, '/') === '/mano') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Siga21SociosBundle_homepage');
            }
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::indexAction',  '_route' => 'Siga21SociosBundle_homepage',);
        }

        // mano
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mano');
            }
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::indexAction',  '_route' => 'mano',);
        }

        // mano_show
        if (preg_match('#^/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::showAction',)), array('_route' => 'mano_show'));
        }

        // mano_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::newAction',  '_route' => 'mano_new',);
        }

        // mano_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mano_create;
            }
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::createAction',  '_route' => 'mano_create',);
        }
        not_mano_create:

        // mano_edit
        if (preg_match('#^/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::editAction',)), array('_route' => 'mano_edit'));
        }

        // mano_update
        if (preg_match('#^/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mano_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::updateAction',)), array('_route' => 'mano_update'));
        }
        not_mano_update:

        // mano_delete
        if (preg_match('#^/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mano_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::deleteAction',)), array('_route' => 'mano_delete'));
        }
        not_mano_delete:

        // mano_busca
        if ($pathinfo === '/busca') {
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscaAction',  '_route' => 'mano_busca',);
        }

        // mano_buscashow
        if ($pathinfo === '/buscashow') {
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscashowAction',  '_route' => 'mano_buscashow',);
        }

        // mano_buscan
        if ($pathinfo === '/buscan') {
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscanAction',  '_route' => 'mano_buscan',);
        }

        // mano_buscanshow
        if ($pathinfo === '/buscanshow') {
            return array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscanshowAction',  '_route' => 'mano_buscanshow',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
