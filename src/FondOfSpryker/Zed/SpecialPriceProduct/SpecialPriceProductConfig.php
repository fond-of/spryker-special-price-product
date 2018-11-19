<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct;

use FondOfSpryker\Shared\SpecialPriceProduct\SpecialPriceProductConstants;
use Spryker\Yves\Kernel\AbstractBundleConfig;

class SpecialPriceProductConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getSpecialPriceAttribute()
    {
        return $this->get(SpecialPriceProductConstants::ATTRIBUTE_SPECIAL_PRICE);
    }

    /**
     * @return string
     */
    public function getSpecialPriceFromAttribute()
    {
        return $this->get(SpecialPriceProductConstants::ATTRIBUTE_SPECIAL_PRICE_FROM);
    }

    /**
     * @return string
     */
    public function getSpecialPriceToAttribute()
    {
        return $this->get(SpecialPriceProductConstants::ATTRIBUTE_SPECIAL_PRICE_TO);
    }
}
