<?php

namespace App\Definition;

use DI\Annotation\Inject;
use Illuminate\Database\Capsule\Manager as Capsule;

class MysqlDatabaseRepository implements DatabaseRepositoryInterface
{
    /**
     * @Inject("db.host")
     */
    private $dbHost;

    /**
     * @Inject("db.user")
     */
    private $dbUser;

    /**
     * @Inject("db.password")
     */
    private $dbPassword;

    /**
     * @Inject("db.name")
     */
    private $dbName;

    /**
     * @var Capsule
     */
    private $capsule;

    public function connect()
    {
        $this->capsule = new Capsule();

        $this->capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => $this->dbHost,
            'database'  => $this->dbName,
            'username'  => $this->dbUser,
            'password'  => $this->dbPassword,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods... (optional)
        $this->capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $this->capsule->bootEloquent();
    }

    public function select(string $table, array ...$where)
    {
        return $this->capsule::table($table)->where($where)->get();
    }

    public function first(string $table, array ...$where)
    {
        return $this->capsule::table($table)->where($where)->first();
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function insert()
    {
    }
}
