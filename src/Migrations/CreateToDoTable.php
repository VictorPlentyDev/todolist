<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 01/08/2018
 * Time: 16:08
 */

namespace ToDoList\Migrations;


use ToDoList\Models\ToDo;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreateToDoTable
{
    /**
     * @param Migrate $migrate
     */
    public function run(Migrate $migrate)
    {
        $migrate->createTable(ToDo::class);
    }
}