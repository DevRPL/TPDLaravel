@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data {{ $page }}</div>
                <div class="card-body">
                    @component('components.base.btn_create', ['route' => 'master.college-students.create']) 
                    @endcomponent
                    <div class="pt-3"></div>
                    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nim</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($college_students as $no => $college_student)
                                <tr class="text-center">
                                    <td>
                                        {{($college_students->currentPage() - 1) * $college_students->perPage() + $loop->iteration}}
                                    </td>
                                    <td>{{ $college_student->nim }}</td>
                                    <td>{{ $college_student->name }}</td>
                                    <td>{{ $college_student->email }}</td>
                                    <td>{{ $college_student->class }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/collegeStudent/'.$college_student->photo) }}" max height="10%"> 
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        @component('components.base.btn-action', [
                                            'route' => 'master.college-students.show',
                                            'id' => $college_student->id,
                                            'class' => 'primary',
                                            'title' => 'Detail'
                                        ])
                                        @endcomponent
                                        @component('components.base.btn-action', [
                                            'route' => 'master.college-students.edit',
                                            'id' => $college_student->id,
                                            'class' => 'success',
                                            'title' => 'Edit'
                                        ])
                                        @endcomponent
                                        @component('components.base.btn-delete', [
                                            'route' => 'master.college-students.destroy',
                                            'id' => $college_student->id,
                                            'title' => 'Delete'
                                        ])
                                        @endcomponent
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak Ada Data Mahasiswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $college_students->links()  }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection