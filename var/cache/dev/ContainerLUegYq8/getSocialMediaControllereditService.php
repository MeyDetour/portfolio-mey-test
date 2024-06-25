<?php

namespace ContainerLUegYq8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocialMediaControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PJ.PdEy.App\Controller\SocialMediaController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PJ.PdEy.App\\Controller\\SocialMediaController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repository' => ['privates', 'App\\Repository\\SocialMediaRepository', 'getSocialMediaRepositoryService', true],
            'socialMedia' => ['privates', 'App\\Entity\\SocialMedia', 'getSocialMediaService', true],
        ], [
            'manager' => '?',
            'repository' => 'App\\Repository\\SocialMediaRepository',
            'socialMedia' => 'App\\Entity\\SocialMedia',
        ]))->withContext('App\\Controller\\SocialMediaController::edit()', $container);
    }
}
