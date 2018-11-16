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
     * @inheritdoc
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addPriceToItems(CartChangeTransfer $cartChangeTransfer)
    {
        return $this->getFactory()->createPriceManager()->addPriceToItems($cartChangeTransfer);
    }
}
