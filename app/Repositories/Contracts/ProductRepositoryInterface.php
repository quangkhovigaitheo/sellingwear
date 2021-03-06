<?php
// app/Repositories/Contracts/ProductRepositoryInterface.php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function all();
    public function find($id);
    public function store($params);
}