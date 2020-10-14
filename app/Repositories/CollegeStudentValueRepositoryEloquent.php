<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CollegeStudentValueRepository;
use App\Entities\CollegeStudentValue;
use App\Validators\CollegeStudentValueValidator;

/**
 * Class CollegeStudentValueRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CollegeStudentValueRepositoryEloquent extends BaseRepository implements CollegeStudentValueRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CollegeStudentValue::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
