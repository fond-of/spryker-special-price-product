<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business;

use FondOfSpryker\Zed\SpecialPriceProduct\Business\Expander\ProductExpander;
use FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager\PriceManager;
use FondOfSpryker\Zed\SpecialPriceProduct\SpecialPriceProductDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\SpecialPriceProduct\Business\SpecialPriceProductBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\SpecialPriceProduct\SpecialPriceProductConfig getConfig()
 */
class SpecialPriceProductBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Spryker\Zed\ProductCartConnector\Business\Expander\ProductExpanderInterface
     */
    public function createProductExpander()
    {
        return new ProductExpander(
            $this->getProductFacade(),
            $this->getConfig()
        );
    }

    /**
     * @return \Spryker\Zed\PriceCartConnector\Business\Manager\PriceManagerInterface
     */
    public function createPriceManager()
    {
        return new PriceManager();
    }

    /**
     * @return \Spryker\Zed\ProductCartConnector\Dependency\Facade\ProductFacadeInterface
     */
    public function getProductFacade()
    {
        return $this->getProvidedDependency(SpecialPriceProductDependencyProvider::PRODUCT_FACADE);
    }
}
