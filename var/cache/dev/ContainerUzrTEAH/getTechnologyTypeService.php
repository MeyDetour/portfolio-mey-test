<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTechnologyTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TechnologyType' shared autowired service.
     *
     * @return \App\Form\TechnologyType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/TechnologyType.php';

        return $container->privates['App\\Form\\TechnologyType'] = new \App\Form\TechnologyType();
    }
}
