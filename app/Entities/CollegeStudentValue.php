<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CollegeStudentValue.
 *
 * @package namespace App\Entities;
 */
class CollegeStudentValue extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function collegeStudent()
    {
        return $this->belongsTo(CollegeStudent::class);
    }
}
