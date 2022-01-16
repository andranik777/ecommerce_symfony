<?php

namespace ContainerRIMwMSC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegisterController' shared autowired service.
     *
     * @return \App\Controller\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RegisterController.php';

        $container->services['App\\Controller\\RegisterController'] = $instance = new \App\Controller\RegisterController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\RegisterController', $container));

        return $instance;
    }
}
