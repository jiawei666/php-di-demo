<?php


namespace App\Definition;


interface DatabaseRepositoryInterface
{
    public function connect();


    public function select(string $table, array ...$where);

    public function first(string $table, array ...$where);

    public function update();

    public function delete();

    public function insert();



}