<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageControlleraddImageToProjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QGunfPL.App\Controller\ImageController::addImageToProject()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.QGunfPL'] ?? $container->load('get_ServiceLocator_QGunfPLService'));

        if (isset($container->privates['.service_locator.QGunfPL.App\\Controller\\ImageController::addImageToProject()'])) {
            return $container->privates['.service_locator.QGunfPL.App\\Controller\\ImageController::addImageToProject()'];
        }

        return $container->privates['.service_locator.QGunfPL.App\\Controller\\ImageController::addImageToProject()'] = $a->withContext('App\\Controller\\ImageController::addImageToProject()', $container);
    }
}