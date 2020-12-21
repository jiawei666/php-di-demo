<?php


namespace App\BestGuide;


class OrderService implements  OrderServiceInterface
{
    private $paymentService;

    public function __construct(PaymentServiceInterface $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function processOrder($order)
    {
        // $this->paymentService->...
    }
}

