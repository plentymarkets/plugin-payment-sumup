<?php


namespace SumUp\Methods;


use SumUp\Helper\SumUpHelper;

class SumUpVisaElectronPaymentMethod extends SumUpPaymentMethod
{
    public function getName(): string
    {
        return SumUpHelper::$paymentMethods['VISA_ELECTRON'];
    }
}
