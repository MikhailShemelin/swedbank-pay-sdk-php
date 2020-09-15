<?php

namespace SwedbankPay\Api\Service\MobilePay\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\CancellationObject;
use SwedbankPay\Api\Service\Request;

class CreateCancellation extends Request
{
    public function setup()
    {
        $this->setRequestMethod('POST');
        $this->setRequestEndpoint('/psp/mobilepay/payments/%s/cancellations');
        $this->setResponseResourceFQCN(CancellationObject::class);
    }
}