<?php

namespace ContainerEIbjxf9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WZF5nt3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wZF5nt3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wZF5nt3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'publicacion' => ['privates', '.errored..service_locator.wZF5nt3.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.wZF5nt3": it needs an instance of "App\\Entity\\Post" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'publicacion' => 'App\\Entity\\Post',
        ]);
    }
}
