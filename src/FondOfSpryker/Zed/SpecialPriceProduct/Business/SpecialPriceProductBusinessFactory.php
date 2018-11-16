<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager\PriceManager;


/**
 * @method \FondOfSpryker\Zed\SpecialPriceProduct\Business\SpecialPriceProductBusinessFactory getFactory()
 */
class SpecialPriceProductBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager\PriceManagerInterface
     */
    public function createPriceManager()
    {
        return new PriceManager();
    }
}