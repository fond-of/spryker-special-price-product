<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business;

use Generated\Shared\Transfer\CartChangeTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\SpecialPriceProductFacade\Business\SpecialPriceProductBusinessFactory getFactory()
 */
class SpecialPriceProductFacade extends AbstractFacade implements SpecialPriceProductFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer): CartChangeTransfer
    {
        return $this->getFactory()->createProductExpander()->expandItems($cartChangeTransfer);
    }

    /**
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addSpecialPriceToItems(CartChangeTransfer $cartChangeTransfer)
    {
        return $this->getFactory()->createPriceManager()->addSpecialPriceToItems($cartChangeTransfer);
    }
}
