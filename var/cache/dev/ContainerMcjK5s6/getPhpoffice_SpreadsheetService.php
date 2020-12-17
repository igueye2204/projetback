<?php

namespace ContainerMcjK5s6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhpoffice_SpreadsheetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'phpoffice.spreadsheet' shared service.
     *
     * @return \Yectep\PhpSpreadsheetBundle\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/yectep/phpspreadsheet-bundle/src/Factory.php';

        return $container->services['phpoffice.spreadsheet'] = new \Yectep\PhpSpreadsheetBundle\Factory();
    }
}
