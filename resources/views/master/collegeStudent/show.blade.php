@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail {{ $page }}</div>
                <div class="card-body">
                    @component('components.base.input-group', [
                        'label' => 'Nim',
                        'value' => $college_student->nim
                    ])
                    @endcomponent
                    @component('components.base.input-group', [
                        'label' => 'Name',
                        'value' => $college_student->name
                    ])
                    @endcomponent
                    @component('components.base.input-group', [
                        'label' => 'Email',
                        'value' => $college_student->email
                    ])
                    @endcomponent
                    @component('components.base.input-group', [
                        'label' => 'Kelas',
                        'value' => $college_student->class
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Nilai {{ $page }}</div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($college_student->collegeStudentValues as $no => $value)
                                <tr class="text-center">
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->value }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak Ada  Data Nilai Mahasiswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection