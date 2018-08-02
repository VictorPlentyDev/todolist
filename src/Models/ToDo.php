<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 01/08/2018
 * Time: 16:06
 */

namespace ToDoList\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;


class ToDo extends Model
{

    /**
     * @var int
     */
    public $id              = 0;
    public $taskDescription = '';
    public $userId          = 0;
    public $isDone          = false;
    public $createdAt       = 0;

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return 'ToDoList::ToDo';
    }
}