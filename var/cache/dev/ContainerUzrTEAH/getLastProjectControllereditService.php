<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLastProjectControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0wG1hw6.App\Controller\LastProjectController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0wG1hw6.App\\Controller\\LastProjectController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lastProject' => ['privates', 'App\\Entity\\LastProject', 'getLastProjectService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'lastProject' => 'App\\Entity\\LastProject',
            'manager' => '?',
        ]))->withContext('App\\Controller\\LastProjectController::edit()', $container);
    }
}