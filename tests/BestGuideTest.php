<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use App\BestGuide\FormFactoryInterface;
use App\BestGuide\FormFactory;

/**
 * 最佳指南的测试用例
 *
 * Class BestGuideTest
 * @package Tests
 */
class BestGuideTest extends TestCase
{
    public function testUserController()
    {
        $builder = new \DI\ContainerBuilder();
        $builder->addDefinitions([
//            \App\BestGuide\OrderService::class => \DI\autowire()->constructorParameter('paramName', 'a value'),
//            \App\BestGuide\OrderServiceInterface::class => \DI\get(\App\BestGuide\OrderService::class),
//            FormFactoryInterface::class => \DI\create(FormFactory::class),
            \App\BestGuide\UserController::class => \DI\create()->constructor(\DI\get(\App\BestGuide\FormFactory::class)),
        ]);

        $builder->useAnnotations(true);
        $container = $builder->build();

        $user = $container->get(\App\BestGuide\UserController::class);
        $value = $user->createForm();

        $this->assertEquals($value, 'get-value!');
    }


}
