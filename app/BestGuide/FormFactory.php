<?php


namespace App\BestGuide;


class FormFactory implements FormFactoryInterface
{
    public function get() {
        return 'get-value!';
    }
}