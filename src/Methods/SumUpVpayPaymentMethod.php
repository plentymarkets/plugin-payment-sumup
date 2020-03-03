<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpVpayPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['VPAY'];
    }
}
