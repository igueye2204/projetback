<?php

namespace ContainerXfv3Mew;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EojNFxrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eojNFxr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eojNFxr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CompetenceController::addCompetence' => ['privates', '.service_locator.XJm310N', 'get_ServiceLocator_XJm310NService', true],
            'App\\Controller\\GroupeCompetenceController::addGrpCompetence' => ['privates', '.service_locator.bVy_Y5a', 'get_ServiceLocator_BVyY5aService', true],
            'App\\Controller\\ProfilController::addProfil' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\ProfilSortieController::addProfilSortie' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\USerController::addUser' => ['privates', '.service_locator.xPCyVuZ', 'get_ServiceLocator_XPCyVuZService', true],
            'App\\Controller\\USerController::updateUser' => ['privates', '.service_locator.aNX5z1N', 'get_ServiceLocator_ANX5z1NService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\CompetenceController:addCompetence' => ['privates', '.service_locator.XJm310N', 'get_ServiceLocator_XJm310NService', true],
            'App\\Controller\\GroupeCompetenceController:addGrpCompetence' => ['privates', '.service_locator.bVy_Y5a', 'get_ServiceLocator_BVyY5aService', true],
            'App\\Controller\\ProfilController:addProfil' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\ProfilSortieController:addProfilSortie' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\USerController:addUser' => ['privates', '.service_locator.xPCyVuZ', 'get_ServiceLocator_XPCyVuZService', true],
            'App\\Controller\\USerController:updateUser' => ['privates', '.service_locator.aNX5z1N', 'get_ServiceLocator_ANX5z1NService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\CompetenceController::addCompetence' => '?',
            'App\\Controller\\GroupeCompetenceController::addGrpCompetence' => '?',
            'App\\Controller\\ProfilController::addProfil' => '?',
            'App\\Controller\\ProfilSortieController::addProfilSortie' => '?',
            'App\\Controller\\USerController::addUser' => '?',
            'App\\Controller\\USerController::updateUser' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CompetenceController:addCompetence' => '?',
            'App\\Controller\\GroupeCompetenceController:addGrpCompetence' => '?',
            'App\\Controller\\ProfilController:addProfil' => '?',
            'App\\Controller\\ProfilSortieController:addProfilSortie' => '?',
            'App\\Controller\\USerController:addUser' => '?',
            'App\\Controller\\USerController:updateUser' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
