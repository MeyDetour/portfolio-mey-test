<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocialMediaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SocialMediaController' shared autowired service.
     *
     * @return \App\Controller\SocialMediaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SocialMediaController.php';

        $container->services['App\\Controller\\SocialMediaController'] = $instance = new \App\Controller\SocialMediaController();

        $instance->setContainer(($container->privates['.service_locator.8FV7jiY'] ?? $container->load('get_ServiceLocator_8FV7jiYService'))->withContext('App\\Controller\\SocialMediaController', $container));

        return $instance;
    }
}