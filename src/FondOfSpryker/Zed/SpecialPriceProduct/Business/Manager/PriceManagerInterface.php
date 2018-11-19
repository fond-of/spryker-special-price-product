<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager;

use Generated\Shared\Transfer\CartChangeTransfer;
use Generated\Shared\Transfer\ItemTransfer;

interface PriceManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addSpecialPriceToItems(CartChangeTransfer $cartChangeTransfer);

    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return bool
     */
    public function isSpecialPriceForItemValid(ItemTransfer $itemTransfer);
}
