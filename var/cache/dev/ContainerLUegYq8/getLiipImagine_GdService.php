<?php

namespace ContainerLUegYq8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_GdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.gd' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Driver/InfoProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Gd/Imagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/Metadata/ExifMetadataReader.php';

        $container->privates['liip_imagine.gd'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }
}
