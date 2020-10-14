<?php

namespace App\Services\Contracts;

interface CollegeStudentServiceContract extends BaseServiceContract
{
    public function getAllAndPaginate($limit = 10, $params = []);
}