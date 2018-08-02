<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 02/08/2018
 * Time: 13:23
 */

namespace ToDoList\Validators;

use Plenty\Validation\Validator;


class ToDoValidator extends Validator
{
    protected function defineAttributes()
    {
        $this->addString('taskDescription', true);
    }
}