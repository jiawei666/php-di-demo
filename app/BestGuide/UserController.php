<?php


namespace App\BestGuide;


use DI\Annotation\Inject;

class UserController
{


    private $formFactory;

    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function createForm()
    {
         $res = $this->formFactory->get();
         return $res;
    }

}