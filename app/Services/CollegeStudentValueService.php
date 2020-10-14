<?php

namespace App\Services;

use App\Services\Contracts\CollegeStudentValueServiceContract;
use App\Repositories\CollegeStudentValueRepository;

class CollegeStudentValueService implements CollegeStudentValueServiceContract
{
    protected $collegeStudentValue;

    public function __construct(CollegeStudentValueRepository $collegeStudentValue)
    {
        $this->collegeStudentValue = $collegeStudentValue;
    }
    
    public function getAllAndPaginate($limit = 10, $params = [])
    {
        return $this->collegeStudentValue->orderBy('id', 'desc')->paginate($limit);
    }

    public function create(array $attributes)
    {
        return $this->collegeStudentValue->create($attributes);
    }
}