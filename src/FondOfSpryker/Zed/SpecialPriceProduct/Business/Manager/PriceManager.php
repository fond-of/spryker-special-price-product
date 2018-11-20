<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business\Manager;

use Generated\Shared\Transfer\CartChangeTransfer;
use Generated\Shared\Transfer\ItemTransfer;
use DateTime;

class PriceManager implements PriceManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function addSpecialPriceToItems(CartChangeTransfer $cartChangeTransfer)
    {
        foreach ($cartChangeTransfer->getItems() as $itemTransfer) {

            if ($this->isSpecialPriceForItemValid($itemTransfer)) {
                $this->applySpecialPrice($itemTransfer);
            }

        }

        return $cartChangeTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    protected function applySpecialPrice(ItemTransfer $itemTransfer)
    {
        $itemTransfer->setUnitGrossPrice($itemTransfer->getSpecialPrice());

        return $itemTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return bool
     */
    public function isSpecialPriceForItemValid(ItemTransfer $itemTransfer)
    {
        if ( ( $itemTransfer->getSpecialPrice() == null || $itemTransfer->getSpecialPrice() == '' )
            || $itemTransfer->getSpecialPriceFrom() == null || $itemTransfer->getSpecialPriceFrom() == '') {
            return false;
        }

        $dateTimeCurrent = new DateTime();
        $dateTimeFrom = new DateTime($itemTransfer->getSpecialPriceFrom());

        if ($dateTimeFrom > $dateTimeCurrent) {
            return false;
        }


        if ($itemTransfer->getSpecialPriceTo() != null || $itemTransfer->getSpecialPriceTo() != '') {
            $dateTimeTo = new DateTime($itemTransfer->getSpecialPriceTo());
            if ($dateTimeTo < $dateTimeCurrent) {
                return false;
            }
        }

        return true;
    }

}
