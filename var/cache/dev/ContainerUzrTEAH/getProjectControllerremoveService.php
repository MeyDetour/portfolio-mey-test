<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectControllerremoveService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QGunfPL.App\Controller\ProjectController::remove()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QGunfPL.App\\Controller\\ProjectController::remove()'] = ($container->privates['.service_locator.QGunfPL'] ?? $container->load('get_ServiceLocator_QGunfPLService'))->withContext('App\\Controller\\ProjectController::remove()', $container);
    }
}