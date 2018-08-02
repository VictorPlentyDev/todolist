<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 02/08/2018
 * Time: 14:45
 */

namespace ToDoList\Providers;

use Plenty\Plugin\ServiceProvider;
use ToDoList\Contracts\ToDoRepositoryContract;
use ToDoList\Repositories\ToDoRepository;

class ToDoServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->getApplication()->register(ToDoRouteServiceProvider::class);
        $this->getApplication()->bind(ToDoRepositoryContract::class, ToDoRepository::class);
    }
}