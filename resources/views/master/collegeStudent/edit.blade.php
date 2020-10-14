@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @component('components.base.request_validation') @endcomponent
            <div class="card">
                <div class="card-header">Edit {{ $page }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('master.college-students.update', $college_student->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        @component('components.base.input-group', [
                            'label' => 'Nim',
                            'name' => 'nim',
                            'type' => 'text',
                            'placeholder' => 'Nim',
                            'value' => $college_student->nim
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Name',
                            'name' => 'name',
                            'type' => 'text',
                            'placeholder' => 'Name',
                            'value' => $college_student->name
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Email',
                            'name' => 'email',
                            'type' => 'email',
                            'placeholder' => 'Email',
                            'value' => $college_student->email
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Kelas',
                            'name' => 'class',
                            'type' => 'text',
                            'placeholder' => 'Kelas',
                            'value' => $college_student->class
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Foto',
                            'name' => 'photo',
                            'type' => 'file',
                            'placeholder' => 'Foto',
                            'value' => $college_student->photo
                        ])
                        @endcomponent
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10">
                                <img src="{{ asset('storage/images/collegeStudent/'.$college_student->photo) }}" width="200">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4">
                                @component('components.base.btn-submit', [
                                    'title' => 'Edit',
                                    'value' => 'update'
                                ])
                                @endcomponent
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection