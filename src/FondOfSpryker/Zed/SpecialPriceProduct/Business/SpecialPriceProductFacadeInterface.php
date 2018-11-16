<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business;

use Generated\Shared\Transfer\CartChangeTransfer;

interface SpecialPriceProductFacadeInterface
{
    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addPriceToItems(CartChangeTransfer $cartChangeTransfer);
}
