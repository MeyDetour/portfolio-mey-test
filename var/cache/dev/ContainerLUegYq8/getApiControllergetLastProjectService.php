<?php

namespace ContainerLUegYq8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiControllergetLastProjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SijfLuH.App\Controller\ApiController::getLastProject()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SijfLuH.App\\Controller\\ApiController::getLastProject()'] = ($container->privates['.service_locator.SijfLuH'] ?? $container->load('get_ServiceLocator_SijfLuHService'))->withContext('App\\Controller\\ApiController::getLastProject()', $container);
    }
}