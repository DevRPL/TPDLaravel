@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data {{ $page }}</div>
                <div class="card-body">
                    @component('components.base.btn_create', ['route' => 'master.college-student-values.create']) 
                    @endcomponent
                    <div class="pt-3"></div>
                    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama Mahasiswa</th>
                                <th>Nama Matkul</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($values as $no => $value)
                                <tr class="text-center">
                                    <td>
                                        {{($values->currentPage() - 1) * $values->perPage() + $loop->iteration}}
                                    </td>
                                    <td>
                                        <a href="{{ route('master.college-students.show', $value->college_student_id) }}">
                                            {{ $value->collegeStudent->nim ?? ''}}
                                        </a>
                                    </td>
                                    <td>{{ $value->collegeStudent->name ?? '' }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->value }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak Ada Data Nilai Mahasiswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $values->links()  }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection