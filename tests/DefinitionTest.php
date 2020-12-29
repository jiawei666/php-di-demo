<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Definition\MysqlDatabaseRepository;

/**
 * 定义文件配置容器.
 *
 * Class DefinitionTest
 */
class DefinitionTest extends TestCase
{
    public function testMysqlController()
    {
        $builder = new \DI\ContainerBuilder();
        $builder->addDefinitions('./app/Definition/config.php');
        $builder->useAnnotations(true);
        $container = $builder->build();
        $dbRe      = $container->get(MysqlDatabaseRepository::class);
        $dbRe->connect();
        $userId = 2;
        $res    = $dbRe->first('users', ['id', $userId]);

        if (is_null($res)) {
            $this->assertNull($res);

            return;
        }

        $this->assertEquals($res->id, $userId);
    }
}
