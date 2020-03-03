<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpAmericanExpress extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['AMEX'];
    }
}
