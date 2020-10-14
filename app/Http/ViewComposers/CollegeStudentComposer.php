<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Services\Contracts\CollegeStudentServiceContract;

class CollegeStudentComposer
{
    /**
     * @var CollegeStudentServiceContract
     */
    protected $college_student;

    /**
     * Constructor.
     *
     * @param
     */
    public function __construct(CollegeStudentServiceContract $college_student)
    {
        $this->college_student = $college_student;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $college_students = $this->college_student->all();

        $view->with('college_students', $college_students);
    }
}
