<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CollegeStudentRepository;
use App\Entities\CollegeStudent;

/**
 * Class CollegeStudentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CollegeStudentRepositoryEloquent extends BaseRepository implements CollegeStudentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CollegeStudent::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
