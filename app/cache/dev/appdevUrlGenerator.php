<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'Siga21TareasBundle_homepage' => true,
       'tareas' => true,
       'tareas_show' => true,
       'tareas_new' => true,
       'tareas_create' => true,
       'tareas_edit' => true,
       'tareas_update' => true,
       'tareas_delete' => true,
       'Ocaso_principal' => true,
       'Ocaso_adios' => true,
       'Ocaso_dos' => true,
       'Siga21SociosBundle_homepage' => true,
       'mano' => true,
       'mano_show' => true,
       'mano_new' => true,
       'mano_create' => true,
       'mano_edit' => true,
       'mano_update' => true,
       'mano_delete' => true,
       'mano_busca' => true,
       'mano_buscashow' => true,
       'mano_buscan' => true,
       'mano_buscanshow' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\DefaultController::indexAction',  'name' => 'Javier',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getSiga21TareasBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/tareas/',  ),));
    }

    private function gettareasRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function gettareas_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function gettareas_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/new',  ),));
    }

    private function gettareas_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/create',  ),));
    }

    private function gettareas_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function gettareas_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function gettareas_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\TareasBundle\\Controller\\TareasController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function getOcaso_principalRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/ocaso',  ),));
    }

    private function getOcaso_adiosRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\DefaultController::ciaoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/cenit',  ),));
    }

    private function getOcaso_dosRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ocaso\\OcasoBundle\\Controller\\SecondoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/controlador2/',  ),));
    }

    private function getSiga21SociosBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mano/',  ),));
    }

    private function getmanoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getmano_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function getmano_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/new',  ),));
    }

    private function getmano_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/create',  ),));
    }

    private function getmano_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function getmano_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function getmano_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function getmano_buscaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/busca',  ),));
    }

    private function getmano_buscashowRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscashowAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/buscashow',  ),));
    }

    private function getmano_buscanRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscanAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/buscan',  ),));
    }

    private function getmano_buscanshowRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Siga21\\SociosBundle\\Controller\\ManoController::buscanshowAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/buscanshow',  ),));
    }
}
