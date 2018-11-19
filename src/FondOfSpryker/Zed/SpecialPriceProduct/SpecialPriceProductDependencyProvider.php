<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class SpecialPriceProductDependencyProvider extends AbstractBundleDependencyProvider
{
    const PRODUCT_FACADE = 'PRODUCT_FACADE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container)
    {
        $this->provideProductFacade($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container $container
     */
    protected function provideProductFacade(Container $container)
    {
        $container[static::PRODUCT_FACADE] = function (Container $container) {
            return $container->getLocator()->product()->facade();
        };

        return $container;
    }

}
