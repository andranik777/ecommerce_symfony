<?php

namespace ContainerSuibx8i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ContactType' shared autowired service.
     *
     * @return \App\Form\ContactType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ContactType'] = new \App\Form\ContactType();
    }
}
