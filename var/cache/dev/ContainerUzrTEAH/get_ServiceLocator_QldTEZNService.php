<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QldTEZNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QldTEZN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QldTEZN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'quality' => ['privates', 'App\\Entity\\Quality', 'getQualityService', true],
        ], [
            'manager' => '?',
            'quality' => 'App\\Entity\\Quality',
        ]);
    }
}