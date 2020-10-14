<?php

namespace App\Services\Contracts;

interface CollegeStudentValueServiceContract
{
    public function getAllAndPaginate($limit = 10, $params = []);
    
    public function create(array $attributes);
}