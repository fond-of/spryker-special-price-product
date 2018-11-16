<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class SpecialPriceProductDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container)
    {
        return $container;
    }


}
