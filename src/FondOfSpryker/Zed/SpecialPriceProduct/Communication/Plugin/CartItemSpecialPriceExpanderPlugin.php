<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Communication\Plugin;

use Generated\Shared\Transfer\CartChangeTransfer;
use Spryker\Zed\Cart\Dependency\ItemExpanderPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\SpecialPriceProduct\SpecialPriceProductConfig getConfig()
 * @method \FondOfSpryker\Zed\SpecialPriceProduct\Business\SpecialPriceProductFacadeInterface getFacade()
 */
class CartItemSpecialPriceExpanderPlugin extends AbstractPlugin implements ItemExpanderPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer)
    {
        return $this->getFacade()->addSpecialPriceToItems($cartChangeTransfer);
    }
}
