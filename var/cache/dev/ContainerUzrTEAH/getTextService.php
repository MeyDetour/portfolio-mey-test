<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Text' shared autowired service.
     *
     * @return \App\Entity\Text
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Text.php';

        return $container->privates['App\\Entity\\Text'] = new \App\Entity\Text();
    }
}