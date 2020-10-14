<?php

namespace App\Http\Controllers\Master;


use App\Http\Controllers\Controller;
use App\Http\Requests\CollegeStudentValueRequest;
use App\Services\Contracts\CollegeStudentValueServiceContract;
/**
 * Class CollegeStudentValueController.
 *
 * @package namespace App\Http\Controllers;
 */
class CollegeStudentValueController extends Controller
{
    /**
     * @var CollegeStudentValueRepository
     */
    protected $value;

    /**
     * CollegeStudentValueController constructor.
     *
     * @param CollegeStudentValueRepository $repository
     */
    public function __construct(CollegeStudentValueServiceContract $value)
    {
        $this->value = $value;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.value.index', ['values' => $this->value->getAllAndPaginate()]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.value.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CollegeStudentValueRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CollegeStudentValueRequest $request)
    {
        $this->value->create($request->all());
        
        return redirect()->route('master.college-student-values.index');
    }
}
