<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business\Expander;

use Generated\Shared\Transfer\CartChangeTransfer;

interface ProductExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer);
}
