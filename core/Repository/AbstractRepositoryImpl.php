<?php

namespace LaravelCoreModule\ServiceRepository\Repository;

use Illuminate\Database\Eloquent\Model;


/**
 * Abstract Class AbstractRepositoryImpl
 * 
 * @package LaravelCoreModule\ServiceRepository\Repository
 */
Abstract Class AbstractRepositoryImpl implements AbstractRepository{


    public function __construct(private readonly Model $model)
    {
        $this->model = $model;
    }


}