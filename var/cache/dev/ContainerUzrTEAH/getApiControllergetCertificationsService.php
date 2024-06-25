<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiControllergetCertificationsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ghxW2xc.App\Controller\ApiController::getCertifications()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ghxW2xc.App\\Controller\\ApiController::getCertifications()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\CertificationRepository', 'getCertificationRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\CertificationRepository',
        ]))->withContext('App\\Controller\\ApiController::getCertifications()', $container);
    }
}
