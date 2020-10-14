@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @component('components.base.request_validation') @endcomponent
            <div class="card">
                <div class="card-header">Tambah {{ $page }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('master.college-students.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @component('components.base.input-group', [
                            'label' => 'Nim',
                            'name' => 'nim',
                            'type' => 'text',
                            'placeholder' => 'Nim'
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Name',
                            'name' => 'name',
                            'type' => 'text',
                            'placeholder' => 'Name'
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Email',
                            'name' => 'email',
                            'type' => 'email',
                            'placeholder' => 'Email'
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Kelas',
                            'name' => 'class',
                            'type' => 'text',
                            'placeholder' => 'Kelas'
                        ])
                        @endcomponent
                        @component('components.base.input-group', [
                            'label' => 'Foto',
                            'name' => 'photo',
                            'type' => 'file',
                            'placeholder' => 'Foto',
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