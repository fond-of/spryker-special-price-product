<?php

namespace FondOfSpryker\Zed\SpecialPriceProduct\Business\Expander;

use Generated\Shared\Transfer\CartChangeTransfer;
use Generated\Shared\Transfer\ItemTransfer;
use Spryker\Zed\Product\Business\ProductFacadeInterface;
use Spryker\Yves\Kernel\AbstractBundleConfig;

class ProductExpander implements ProductExpanderInterface
{
    /**
     * @var \FondOfSpryker\Zed\SpecialPriceProduct\SpecialPriceProductConfig $config
     */
    protected $config;

    /**
     * @var \Spryker\Zed\Product\Business\ProductFacadeInterface $productFacade
     */
    protected $productFacade;

    /**
     * ProductExpander constructor.
     *
     * @param \Spryker\Zed\Product\Business\ProductFacadeInterface $productFacade
     * @param \Spryker\Yves\Kernel\AbstractBundleConfig $config
     */
    public function __construct(
        ProductFacadeInterface $productFacade,
        AbstractBundleConfig $config
    ) {
        $this->productFacade = $productFacade;
        $this->config = $config;
    }

    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer)
    {
        foreach ($cartChangeTransfer->getItems() as $itemTransfer) {
            $productAbstractTransfer = $this->productFacade->findProductAbstractById($itemTransfer->getIdProductAbstract());
            $attributes = $productAbstractTransfer->getAttributes();

            if (array_key_exists($this->config->getSpecialPriceAttribute(), $attributes)) {
                $itemTransfer->setSpecialPrice((int)$attributes[$this->config->getSpecialPriceAttribute()]);
            }

            if (array_key_exists($this->config->getSpecialPriceFromAttribute(), $attributes)) {
                $itemTransfer->setSpecialPriceFrom($attributes[$this->config->getSpecialPriceFromAttribute()]);
            }

            if (array_key_exists($this->config->getSpecialPriceToAttribute(), $attributes)) {
                $itemTransfer->setSpecialPriceTo($attributes[$this->config->getSpecialPriceToAttribute()]);
            }
        }

        return $cartChangeTransfer;
    }
}
