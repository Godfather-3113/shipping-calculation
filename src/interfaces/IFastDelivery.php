<?php

namespace Laravel\ShippingCalculation\interfaces;

interface IFastDelivery
{

    const BASE_PRICE = 150;

    public function basePrice();
}