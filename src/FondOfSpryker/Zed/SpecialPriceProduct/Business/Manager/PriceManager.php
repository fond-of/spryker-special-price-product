<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager;

use Generated\Shared\Transfer\CartChangeTransfer;

class PriceManager implements PriceManagerInterface
{
    public function __construct() {
    }

    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addPriceToItems(CartChangeTransfer $cartChangeTransfer)
    {
        foreach ($cartChangeTransfer->getItems() as $itemTransfer) {

        }

        return $cartChangeTransfer;
    }

}