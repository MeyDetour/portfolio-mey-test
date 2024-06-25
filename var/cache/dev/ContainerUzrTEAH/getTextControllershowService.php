<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTextControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k6OMlZt.App\Controller\TextController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k6OMlZt.App\\Controller\\TextController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'textRepository' => ['privates', 'App\\Repository\\TextRepository', 'getTextRepositoryService', true],
        ], [
            'textRepository' => 'App\\Repository\\TextRepository',
        ]))->withContext('App\\Controller\\TextController::show()', $container);
    }
}
