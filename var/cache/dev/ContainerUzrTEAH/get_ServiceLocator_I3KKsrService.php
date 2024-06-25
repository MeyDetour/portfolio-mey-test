<?php

namespace ContainerUzrTEAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I3KKsrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._i3KKsr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._i3KKsr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ApiController::getCertifications' => ['privates', '.service_locator.ghxW2xc.App\\Controller\\ApiController::getCertifications()', 'getApiControllergetCertificationsService', true],
            'App\\Controller\\ApiController::getLastProject' => ['privates', '.service_locator.SijfLuH.App\\Controller\\ApiController::getLastProject()', 'getApiControllergetLastProjectService', true],
            'App\\Controller\\ApiController::getMedias' => ['privates', '.service_locator.Xbu2uBN.App\\Controller\\ApiController::getMedias()', 'getApiControllergetMediasService', true],
            'App\\Controller\\ApiController::getProject' => ['privates', '.service_locator.KsiLow..App\\Controller\\ApiController::getProject()', 'getApiControllergetProjectService', true],
            'App\\Controller\\ApiController::getProjects' => ['privates', '.service_locator.wi6IlFE.App\\Controller\\ApiController::getProjects()', 'getApiControllergetProjectsService', true],
            'App\\Controller\\ApiController::getQualities' => ['privates', '.service_locator.YKwcIjC.App\\Controller\\ApiController::getQualities()', 'getApiControllergetQualitiesService', true],
            'App\\Controller\\ApiController::getTechnologies' => ['privates', '.service_locator.bGFNyKc.App\\Controller\\ApiController::getTechnologies()', 'getApiControllergetTechnologiesService', true],
            'App\\Controller\\ApiController::getTextes' => ['privates', '.service_locator.iFNvCKc.App\\Controller\\ApiController::getTextes()', 'getApiControllergetTextesService', true],
            'App\\Controller\\CertificationController::edit' => ['privates', '.service_locator.p9EULGF.App\\Controller\\CertificationController::edit()', 'getCertificationControllereditService', true],
            'App\\Controller\\CertificationController::new' => ['privates', '.service_locator..mkVA76.App\\Controller\\CertificationController::new()', 'getCertificationControllernewService', true],
            'App\\Controller\\CertificationController::remove' => ['privates', '.service_locator.p9EULGF.App\\Controller\\CertificationController::remove()', 'getCertificationControllerremoveService', true],
            'App\\Controller\\CertificationController::show' => ['privates', '.service_locator.qXbY7S7.App\\Controller\\CertificationController::show()', 'getCertificationControllershowService', true],
            'App\\Controller\\ImageController::addImageToMedia' => ['privates', '.service_locator.itGDvuw.App\\Controller\\ImageController::addImageToMedia()', 'getImageControlleraddImageToMediaService', true],
            'App\\Controller\\ImageController::addImageToProject' => ['privates', '.service_locator.QGunfPL.App\\Controller\\ImageController::addImageToProject()', 'getImageControlleraddImageToProjectService', true],
            'App\\Controller\\ImageController::addImageToTechnology' => ['privates', '.service_locator.oz6DqOo.App\\Controller\\ImageController::addImageToTechnology()', 'getImageControlleraddImageToTechnologyService', true],
            'App\\Controller\\LastProjectController::edit' => ['privates', '.service_locator.0wG1hw6.App\\Controller\\LastProjectController::edit()', 'getLastProjectControllereditService', true],
            'App\\Controller\\LastProjectController::new' => ['privates', '.service_locator.43tWQYB.App\\Controller\\LastProjectController::new()', 'getLastProjectControllernewService', true],
            'App\\Controller\\LastProjectController::remove' => ['privates', '.service_locator.qYJeHlQ.App\\Controller\\LastProjectController::remove()', 'getLastProjectControllerremoveService', true],
            'App\\Controller\\LastProjectController::show' => ['privates', '.service_locator.SijfLuH.App\\Controller\\LastProjectController::show()', 'getLastProjectControllershowService', true],
            'App\\Controller\\ProjectController::edit' => ['privates', '.service_locator.aGxXDNk.App\\Controller\\ProjectController::edit()', 'getProjectControllereditService', true],
            'App\\Controller\\ProjectController::index' => ['privates', '.service_locator.tgsV9q8.App\\Controller\\ProjectController::index()', 'getProjectControllerindexService', true],
            'App\\Controller\\ProjectController::new' => ['privates', '.service_locator.IiYejU0.App\\Controller\\ProjectController::new()', 'getProjectControllernewService', true],
            'App\\Controller\\ProjectController::remove' => ['privates', '.service_locator.QGunfPL.App\\Controller\\ProjectController::remove()', 'getProjectControllerremoveService', true],
            'App\\Controller\\QualityController::edit' => ['privates', '.service_locator.QldTEZN.App\\Controller\\QualityController::edit()', 'getQualityControllereditService', true],
            'App\\Controller\\QualityController::index' => ['privates', '.service_locator.RtAVg6a.App\\Controller\\QualityController::index()', 'getQualityControllerindexService', true],
            'App\\Controller\\QualityController::new' => ['privates', '.service_locator.sgqnnDT.App\\Controller\\QualityController::new()', 'getQualityControllernewService', true],
            'App\\Controller\\QualityController::remove' => ['privates', '.service_locator.QldTEZN.App\\Controller\\QualityController::remove()', 'getQualityControllerremoveService', true],
            'App\\Controller\\RegisterController::register' => ['privates', '.service_locator.fSesFtM.App\\Controller\\RegisterController::register()', 'getRegisterControllerregisterService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\SocialMediaController::edit' => ['privates', '.service_locator.PJ.PdEy.App\\Controller\\SocialMediaController::edit()', 'getSocialMediaControllereditService', true],
            'App\\Controller\\SocialMediaController::new' => ['privates', '.service_locator.NouAn15.App\\Controller\\SocialMediaController::new()', 'getSocialMediaControllernewService', true],
            'App\\Controller\\SocialMediaController::remove' => ['privates', '.service_locator.itGDvuw.App\\Controller\\SocialMediaController::remove()', 'getSocialMediaControllerremoveService', true],
            'App\\Controller\\TechnologyController::edit' => ['privates', '.service_locator.eRsas9a.App\\Controller\\TechnologyController::edit()', 'getTechnologyControllereditService', true],
            'App\\Controller\\TechnologyController::index' => ['privates', '.service_locator.QxJAU9Y.App\\Controller\\TechnologyController::index()', 'getTechnologyControllerindexService', true],
            'App\\Controller\\TechnologyController::remove_tech' => ['privates', '.service_locator.oz6DqOo.App\\Controller\\TechnologyController::remove_tech()', 'getTechnologyControllerremoveTechService', true],
            'App\\Controller\\TextController::edit' => ['privates', '.service_locator.p8xBh.H.App\\Controller\\TextController::edit()', 'getTextControllereditService', true],
            'App\\Controller\\TextController::new' => ['privates', '.service_locator.FclEqdE.App\\Controller\\TextController::new()', 'getTextControllernewService', true],
            'App\\Controller\\TextController::show' => ['privates', '.service_locator.k6OMlZt.App\\Controller\\TextController::show()', 'getTextControllershowService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Controller\\ApiController:getCertifications' => ['privates', '.service_locator.ghxW2xc.App\\Controller\\ApiController::getCertifications()', 'getApiControllergetCertificationsService', true],
            'App\\Controller\\ApiController:getLastProject' => ['privates', '.service_locator.SijfLuH.App\\Controller\\ApiController::getLastProject()', 'getApiControllergetLastProjectService', true],
            'App\\Controller\\ApiController:getMedias' => ['privates', '.service_locator.Xbu2uBN.App\\Controller\\ApiController::getMedias()', 'getApiControllergetMediasService', true],
            'App\\Controller\\ApiController:getProject' => ['privates', '.service_locator.KsiLow..App\\Controller\\ApiController::getProject()', 'getApiControllergetProjectService', true],
            'App\\Controller\\ApiController:getProjects' => ['privates', '.service_locator.wi6IlFE.App\\Controller\\ApiController::getProjects()', 'getApiControllergetProjectsService', true],
            'App\\Controller\\ApiController:getQualities' => ['privates', '.service_locator.YKwcIjC.App\\Controller\\ApiController::getQualities()', 'getApiControllergetQualitiesService', true],
            'App\\Controller\\ApiController:getTechnologies' => ['privates', '.service_locator.bGFNyKc.App\\Controller\\ApiController::getTechnologies()', 'getApiControllergetTechnologiesService', true],
            'App\\Controller\\ApiController:getTextes' => ['privates', '.service_locator.iFNvCKc.App\\Controller\\ApiController::getTextes()', 'getApiControllergetTextesService', true],
            'App\\Controller\\CertificationController:edit' => ['privates', '.service_locator.p9EULGF.App\\Controller\\CertificationController::edit()', 'getCertificationControllereditService', true],
            'App\\Controller\\CertificationController:new' => ['privates', '.service_locator..mkVA76.App\\Controller\\CertificationController::new()', 'getCertificationControllernewService', true],
            'App\\Controller\\CertificationController:remove' => ['privates', '.service_locator.p9EULGF.App\\Controller\\CertificationController::remove()', 'getCertificationControllerremoveService', true],
            'App\\Controller\\CertificationController:show' => ['privates', '.service_locator.qXbY7S7.App\\Controller\\CertificationController::show()', 'getCertificationControllershowService', true],
            'App\\Controller\\ImageController:addImageToMedia' => ['privates', '.service_locator.itGDvuw.App\\Controller\\ImageController::addImageToMedia()', 'getImageControlleraddImageToMediaService', true],
            'App\\Controller\\ImageController:addImageToProject' => ['privates', '.service_locator.QGunfPL.App\\Controller\\ImageController::addImageToProject()', 'getImageControlleraddImageToProjectService', true],
            'App\\Controller\\ImageController:addImageToTechnology' => ['privates', '.service_locator.oz6DqOo.App\\Controller\\ImageController::addImageToTechnology()', 'getImageControlleraddImageToTechnologyService', true],
            'App\\Controller\\LastProjectController:edit' => ['privates', '.service_locator.0wG1hw6.App\\Controller\\LastProjectController::edit()', 'getLastProjectControllereditService', true],
            'App\\Controller\\LastProjectController:new' => ['privates', '.service_locator.43tWQYB.App\\Controller\\LastProjectController::new()', 'getLastProjectControllernewService', true],
            'App\\Controller\\LastProjectController:remove' => ['privates', '.service_locator.qYJeHlQ.App\\Controller\\LastProjectController::remove()', 'getLastProjectControllerremoveService', true],
            'App\\Controller\\LastProjectController:show' => ['privates', '.service_locator.SijfLuH.App\\Controller\\LastProjectController::show()', 'getLastProjectControllershowService', true],
            'App\\Controller\\ProjectController:edit' => ['privates', '.service_locator.aGxXDNk.App\\Controller\\ProjectController::edit()', 'getProjectControllereditService', true],
            'App\\Controller\\ProjectController:index' => ['privates', '.service_locator.tgsV9q8.App\\Controller\\ProjectController::index()', 'getProjectControllerindexService', true],
            'App\\Controller\\ProjectController:new' => ['privates', '.service_locator.IiYejU0.App\\Controller\\ProjectController::new()', 'getProjectControllernewService', true],
            'App\\Controller\\ProjectController:remove' => ['privates', '.service_locator.QGunfPL.App\\Controller\\ProjectController::remove()', 'getProjectControllerremoveService', true],
            'App\\Controller\\QualityController:edit' => ['privates', '.service_locator.QldTEZN.App\\Controller\\QualityController::edit()', 'getQualityControllereditService', true],
            'App\\Controller\\QualityController:index' => ['privates', '.service_locator.RtAVg6a.App\\Controller\\QualityController::index()', 'getQualityControllerindexService', true],
            'App\\Controller\\QualityController:new' => ['privates', '.service_locator.sgqnnDT.App\\Controller\\QualityController::new()', 'getQualityControllernewService', true],
            'App\\Controller\\QualityController:remove' => ['privates', '.service_locator.QldTEZN.App\\Controller\\QualityController::remove()', 'getQualityControllerremoveService', true],
            'App\\Controller\\RegisterController:register' => ['privates', '.service_locator.fSesFtM.App\\Controller\\RegisterController::register()', 'getRegisterControllerregisterService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\SocialMediaController:edit' => ['privates', '.service_locator.PJ.PdEy.App\\Controller\\SocialMediaController::edit()', 'getSocialMediaControllereditService', true],
            'App\\Controller\\SocialMediaController:new' => ['privates', '.service_locator.NouAn15.App\\Controller\\SocialMediaController::new()', 'getSocialMediaControllernewService', true],
            'App\\Controller\\SocialMediaController:remove' => ['privates', '.service_locator.itGDvuw.App\\Controller\\SocialMediaController::remove()', 'getSocialMediaControllerremoveService', true],
            'App\\Controller\\TechnologyController:edit' => ['privates', '.service_locator.eRsas9a.App\\Controller\\TechnologyController::edit()', 'getTechnologyControllereditService', true],
            'App\\Controller\\TechnologyController:index' => ['privates', '.service_locator.QxJAU9Y.App\\Controller\\TechnologyController::index()', 'getTechnologyControllerindexService', true],
            'App\\Controller\\TechnologyController:remove_tech' => ['privates', '.service_locator.oz6DqOo.App\\Controller\\TechnologyController::remove_tech()', 'getTechnologyControllerremoveTechService', true],
            'App\\Controller\\TextController:edit' => ['privates', '.service_locator.p8xBh.H.App\\Controller\\TextController::edit()', 'getTextControllereditService', true],
            'App\\Controller\\TextController:new' => ['privates', '.service_locator.FclEqdE.App\\Controller\\TextController::new()', 'getTextControllernewService', true],
            'App\\Controller\\TextController:show' => ['privates', '.service_locator.k6OMlZt.App\\Controller\\TextController::show()', 'getTextControllershowService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
        ], [
            'App\\Controller\\ApiController::getCertifications' => '?',
            'App\\Controller\\ApiController::getLastProject' => '?',
            'App\\Controller\\ApiController::getMedias' => '?',
            'App\\Controller\\ApiController::getProject' => '?',
            'App\\Controller\\ApiController::getProjects' => '?',
            'App\\Controller\\ApiController::getQualities' => '?',
            'App\\Controller\\ApiController::getTechnologies' => '?',
            'App\\Controller\\ApiController::getTextes' => '?',
            'App\\Controller\\CertificationController::edit' => '?',
            'App\\Controller\\CertificationController::new' => '?',
            'App\\Controller\\CertificationController::remove' => '?',
            'App\\Controller\\CertificationController::show' => '?',
            'App\\Controller\\ImageController::addImageToMedia' => '?',
            'App\\Controller\\ImageController::addImageToProject' => '?',
            'App\\Controller\\ImageController::addImageToTechnology' => '?',
            'App\\Controller\\LastProjectController::edit' => '?',
            'App\\Controller\\LastProjectController::new' => '?',
            'App\\Controller\\LastProjectController::remove' => '?',
            'App\\Controller\\LastProjectController::show' => '?',
            'App\\Controller\\ProjectController::edit' => '?',
            'App\\Controller\\ProjectController::index' => '?',
            'App\\Controller\\ProjectController::new' => '?',
            'App\\Controller\\ProjectController::remove' => '?',
            'App\\Controller\\QualityController::edit' => '?',
            'App\\Controller\\QualityController::index' => '?',
            'App\\Controller\\QualityController::new' => '?',
            'App\\Controller\\QualityController::remove' => '?',
            'App\\Controller\\RegisterController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SocialMediaController::edit' => '?',
            'App\\Controller\\SocialMediaController::new' => '?',
            'App\\Controller\\SocialMediaController::remove' => '?',
            'App\\Controller\\TechnologyController::edit' => '?',
            'App\\Controller\\TechnologyController::index' => '?',
            'App\\Controller\\TechnologyController::remove_tech' => '?',
            'App\\Controller\\TextController::edit' => '?',
            'App\\Controller\\TextController::new' => '?',
            'App\\Controller\\TextController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ApiController:getCertifications' => '?',
            'App\\Controller\\ApiController:getLastProject' => '?',
            'App\\Controller\\ApiController:getMedias' => '?',
            'App\\Controller\\ApiController:getProject' => '?',
            'App\\Controller\\ApiController:getProjects' => '?',
            'App\\Controller\\ApiController:getQualities' => '?',
            'App\\Controller\\ApiController:getTechnologies' => '?',
            'App\\Controller\\ApiController:getTextes' => '?',
            'App\\Controller\\CertificationController:edit' => '?',
            'App\\Controller\\CertificationController:new' => '?',
            'App\\Controller\\CertificationController:remove' => '?',
            'App\\Controller\\CertificationController:show' => '?',
            'App\\Controller\\ImageController:addImageToMedia' => '?',
            'App\\Controller\\ImageController:addImageToProject' => '?',
            'App\\Controller\\ImageController:addImageToTechnology' => '?',
            'App\\Controller\\LastProjectController:edit' => '?',
            'App\\Controller\\LastProjectController:new' => '?',
            'App\\Controller\\LastProjectController:remove' => '?',
            'App\\Controller\\LastProjectController:show' => '?',
            'App\\Controller\\ProjectController:edit' => '?',
            'App\\Controller\\ProjectController:index' => '?',
            'App\\Controller\\ProjectController:new' => '?',
            'App\\Controller\\ProjectController:remove' => '?',
            'App\\Controller\\QualityController:edit' => '?',
            'App\\Controller\\QualityController:index' => '?',
            'App\\Controller\\QualityController:new' => '?',
            'App\\Controller\\QualityController:remove' => '?',
            'App\\Controller\\RegisterController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SocialMediaController:edit' => '?',
            'App\\Controller\\SocialMediaController:new' => '?',
            'App\\Controller\\SocialMediaController:remove' => '?',
            'App\\Controller\\TechnologyController:edit' => '?',
            'App\\Controller\\TechnologyController:index' => '?',
            'App\\Controller\\TechnologyController:remove_tech' => '?',
            'App\\Controller\\TextController:edit' => '?',
            'App\\Controller\\TextController:new' => '?',
            'App\\Controller\\TextController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
