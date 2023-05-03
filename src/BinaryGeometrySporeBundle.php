<?php

/*
 * This file is part of the SoS Package.
 *
 * (c) Andy MacKay <andy@binarygeometry.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BinaryGeometry\Bundle\SporeBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\Kernel;

use BinaryGeometry\Bundle\SporeBundle\DependencyInjection\BinaryGeometrySporeExtension;

/**
 * @author Andy MacKay <andy@binarygeometry.co.uk>
 */
class BinaryGeometrySporeBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    public function getContainerExtension()
    {
        return new BinarygeometrySporeExtension();
    }

    
    // public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    // {
    //     $container->import(__DIR__ . '/Resources/config/services.xml');
    // }
}