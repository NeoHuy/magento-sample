<?php

namespace Neohuy\Voucher\Model\Product\Type;

class Voucher extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    const TYPE_ID = 'voucher';

    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
    }
}
