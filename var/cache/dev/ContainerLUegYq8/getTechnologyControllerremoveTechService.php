<?php

namespace ContainerLUegYq8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTechnologyControllerremoveTechService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oz6DqOo.App\Controller\TechnologyController::remove_tech()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oz6DqOo.App\\Controller\\TechnologyController::remove_tech()'] = ($container->privates['.service_locator.oz6DqOo'] ?? $container->load('get_ServiceLocator_Oz6DqOoService'))->withContext('App\\Controller\\TechnologyController::remove_tech()', $container);
    }
}
