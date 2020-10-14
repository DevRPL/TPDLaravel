<?php

namespace App\Http\Controllers\Master;

use App\Http\Requests\CollegeStudentRequest;
use App\Http\Controllers\Controller;
use App\Services\Contracts\CollegeStudentServiceContract;

/**
 * Class CollegeStudentController.
 *
 * @package namespace App\Http\Controllers;
 */
class CollegeStudentController extends Controller
{
    /**
     * @var CollegeStudentServiceContract
     */
    protected $collegeStudent;

    /**
     * CollegeStudentController constructor.
     *
     * @param CollegeStudentServiceContract $services
     */
    public function __construct(CollegeStudentServiceContract $collegeStudent)
    {
        $this->collegeStudent = $collegeStudent;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.collegeStudent.index', ['college_students' => $this->collegeStudent->getAllAndPaginate()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.collegeStudent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function store(CollegeStudentRequest $request)
    {
        $data = $request->all();
        
        if ($request->photo) {
            $data['photo'] = $this->uploadImage($request);
        }

        $this->collegeStudent->create($data);
        
        return redirect()->route('master.college-students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('master.collegeStudent.show', ['college_student' => $this->collegeStudent->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('master.collegeStudent.edit', ['college_student' => $this->collegeStudent->find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CollegeStudentUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     */
    public function update(CollegeStudentRequest $request, $id)
    {
        $data = $request->all();

        if ($request->photo) {
            $data['photo'] = $this->uploadImage($request);
        }

        $this->collegeStudent->update($data, $id);

        return redirect()->route('master.college-students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->collegeStudent->find($id)->delete();
        
        return redirect()->back();
    }
    
    public function uploadImage(CollegeStudentRequest $request)
    {
        $upload_path = 'images/collegeStudent/';

        $image = $request->file('photo');
        if (is_file($image)) {
            $filename = $image->hashName();
            $img = \Image::make($image->path());
        } else {
            $filename = basename($image);
            $img = \Image::make($image);

            $mime = $img->mime();
            if ($mime == 'image/jpeg') {
                $extension = '.jpg';
            } elseif ($mime == 'image/png') {
                $extension = '.png';
            } elseif ($mime == 'image/gif') {
                $extension = '.gif';
            }

            $filename .= $extension;
        }

        $img->resize(800, 800, function ($constraint) {
            $constraint->aspectRatio();
        })->stream();
        \Storage::disk('public')->put($upload_path . $filename, $img);
        return $filename;
    }
}
