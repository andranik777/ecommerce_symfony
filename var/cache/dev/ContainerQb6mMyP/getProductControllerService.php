<?php

namespace ContainerQb6mMyP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductController' shared autowired service.
     *
     * @return \App\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProductController.php';

        $container->services['App\\Controller\\ProductController'] = $instance = new \App\Controller\ProductController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Controller\\ProductController', $container));

        return $instance;
    }
}
