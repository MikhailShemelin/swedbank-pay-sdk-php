<?php

namespace PayEx\Api\Service\Invoice\Resource\Request\Data;

use PayEx\Api\Service\Payment\Resource\Request\Data\PayeeInfoInterface;

/**
 * Invoice payment payee info interface
 *
 * @api
 */
interface PaymentPayeeInfoInterface extends PayeeInfoInterface
{
    const SUBSITE = 'subsite';

    /**
     * @return string
     */
    public function getSubsite();

    /**
     * @param string $subsite
     * @return $this
     */
    public function setSubsite($subsite);
}