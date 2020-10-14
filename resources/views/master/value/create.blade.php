@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @component('components.base.request_validation') @endcomponent
            <div class="card">
                <div class="card-header">Tambah {{ $page }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('master.college-student-values.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @component('components.base.inp_college-student', [
                            'label' => 'Nama Mahasiswa',
                            'college_students' => $college_students, 
                            'name' => 'college_student_id'
                        ]) @endcomponent

                        @component('components.base.input-group', [
                            'label' => 'Mata Kuliah',
                            'name' => 'name',
                            'type' => 'text',
                            'placeholder' => 'Mata Kuliah'
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Nilai',
                            'name' => 'value',
                            // 'type' => 'number',
                            'type' => 'text',
                            'placeholder' => 'Nilai',
                        ])
                        @endcomponent
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4">
                                @component('components.base.btn-submit', [
                                    'title' => 'Save',
                                    'value' => 'save'
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