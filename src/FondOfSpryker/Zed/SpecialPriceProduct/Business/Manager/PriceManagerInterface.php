<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager;

use Generated\Shared\Transfer\CartChangeTransfer;

interface PriceManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addPriceToItems(CartChangeTransfer $cartChangeTransfer);
}
