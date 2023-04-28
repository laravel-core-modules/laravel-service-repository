<?php

namespace LaravelCoreModule\ServiceRepository\Service;

/**
 * Abstract Class AbstractServiceImpl
 */
abstract class AbstractServiceImpl implements AbstractService
{
    public function __construct(private readonly AbstractRepository $repository)
    {
        $this->repository = $repository;
    }
}
