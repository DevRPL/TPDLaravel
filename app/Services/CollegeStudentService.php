<?php

namespace App\Services;

use App\Services\Contracts\CollegeStudentServiceContract;
use App\Repositories\CollegeStudentRepository;

class CollegeStudentService implements CollegeStudentServiceContract
{
    protected $collegeStudent;

    public function __construct(CollegeStudentRepository $collegeStudent)
    {
        $this->collegeStudent = $collegeStudent;
    }

    public function all($columns = ['*'])
    {
        return $this->collegeStudent->all();
    }

    public function getAllAndPaginate($limit = 10, $params = [])
    {
        return $this->collegeStudent->orderBy('id', 'desc')->paginate($limit);
    }

    public function find($id, $columns = ['*'])
    {
        return $this->collegeStudent->find($id);
    }

    public function create(array $attributes)
    {
        return $this->collegeStudent->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->collegeStudent->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->collegeStudent->find($id);
    }
}