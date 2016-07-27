<?php
declare(strict_types = 1);

namespace ProophTest\Bundle\ServiceBus\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class XmlServiceBusExtensionTest extends AbtractServiceBusExtensionTestCase
{
    protected function loadFromFile(ContainerBuilder $container, $file)
    {
        $loadXml = new XmlFileLoader($container, new FileLocator(__DIR__.'/Fixture/config/xml'));
        $loadXml->load($file.'.xml');
    }
}
