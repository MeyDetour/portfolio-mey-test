<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQualityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Quality' shared autowired service.
     *
     * @return \App\Entity\Quality
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Quality.php';

        return $container->privates['App\\Entity\\Quality'] = new \App\Entity\Quality();
    }
}
