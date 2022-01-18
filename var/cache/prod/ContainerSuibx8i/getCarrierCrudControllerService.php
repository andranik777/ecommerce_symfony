<?php

namespace ContainerSuibx8i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarrierCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\CarrierCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CarrierCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\CarrierCrudController'] = $instance = new \App\Controller\Admin\CarrierCrudController();

        $instance->setContainer(($container->privates['.service_locator.Jaz8VFM'] ?? $container->load('get_ServiceLocator_Jaz8VFMService'))->withContext('App\\Controller\\Admin\\CarrierCrudController', $container));

        return $instance;
    }
}