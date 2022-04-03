<?php

namespace Services;

class CheckoutService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = config('microservices.checkout') . '/api';
    }
}