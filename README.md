# Product Special Price for spryker
[![Build Status](https://travis-ci.org/fond-of/spryker-special-price-product.svg?branch=master)](https://travis-ci.org/fond-of/spryker-special-price-product)
[![PHP from Travis config](https://img.shields.io/travis/php-v/symfony/symfony.svg)](https://php.net/)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/fond-of-spryker/special-price-product)


This extension makes it possible to use special price for the products. 
For The Special Price and Date Values the extension uses Product Attributes. The attributes needs to be defined in the Projects Configuration File

## Installation

```
composer require fond-of-spryker/special-price-product
```


## 1. Add the Attributes in the configuration file 

```
// ---------- SPECIAL PRICE PRODUCT
$config[SpecialPriceProductConstants::ATTRIBUTE_SPECIAL_PRICE] = 'special_price';
$config[SpecialPriceProductConstants::ATTRIBUTE_SPECIAL_PRICE_FROM] = 'special_price_from';
$config[SpecialPriceProductConstants::ATTRIBUTE_SPECIAL_PRICE_TO] = 'special_price_to';