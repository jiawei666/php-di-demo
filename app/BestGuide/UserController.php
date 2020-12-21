<?php


namespace App\BestGuide;


use DI\Annotation\Inject;

class UserController
{

    /**
     * @Inject
     * @var FormFactoryInterface
     */
    private $formFactory;

    public function createForm($type, $data, $options)
    {
        // $this->formFactory->...
    }

}