<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\ImageService' shared autowired service.
     *
     * @return \App\Service\ImageService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ImageService.php';

        $a = ($container->services['liip_imagine.cache.manager'] ?? self::getLiipImagine_Cache_ManagerService($container));

        if (isset($container->privates['App\\Service\\ImageService'])) {
            return $container->privates['App\\Service\\ImageService'];
        }

        return $container->privates['App\\Service\\ImageService'] = new \App\Service\ImageService(($container->privates['Vich\\UploaderBundle\\Templating\\Helper\\UploaderHelper'] ?? $container->load('getUploaderHelperService')), $a, ($container->privates['App\\Repository\\ImageRepository'] ?? $container->load('getImageRepositoryService')));
    }
}
