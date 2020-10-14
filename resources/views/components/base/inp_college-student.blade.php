<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <select class="form-control" name="{{ $name }}">
            <option value="">== Pilih College Student == </option>
            @foreach ($college_students as $college_student)
                <option value="{{ $college_student->id }}">{{ $college_student->name  }}</option>
            @endforeach
        </select>        
    </div>
</div>