<?php
namespace Tests;
use PHPUnit\Framework\TestCase;

/**
 * 首次实验的测试用例
 *
 * Class FirstTest
 * @package Tests
 */
class FirstTest extends TestCase
{
    public function testEmail()
    {
        $container = new \DI\Container();
        $userManager = $container->get('App\UserManager');
        $email = '957089263@qq.com';
        $content = 'Hello Jiawei && PHP-DI';
        $res = $userManager->register($email, $content);
        $this->assertArrayHasKey('email', $res);
        $this->assertArrayHasKey('content', $res);
        $this->assertEquals($email, $res['email']);
        $this->assertEquals($content, $res['content']);

    }


}
