<?php

namespace ContainerSuibx8i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountAddressControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AccountAddressController' shared autowired service.
     *
     * @return \App\Controller\AccountAddressController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AccountAddressController'] = $instance = new \App\Controller\AccountAddressController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AccountAddressController', $container));

        return $instance;
    }
}
