<?php

namespace LaravelCoreModule\ServiceRepository\Service;

use LaravelCoreModule\ServiceRepository\Repository;
use Illuminate\Database\Eloquent\Model;


/**
 * Abstract Class AbstractServiceImpl
 * 
 * @package LaravelCoreModule\ServiceService\Service
 */
Abstract Class AbstractServiceImpl implements AbstractService{

    public function __construct(private readonly AbstractRepository $repository){

        $this->repository = $repository;
    }

    
}