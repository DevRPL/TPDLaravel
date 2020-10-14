<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        @if (getCurrentMethod() == 'create')
            <input type="{{ $type }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}">
        @elseif(getCurrentMethod() == 'edit')
            <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" class="form-control" placeholder="{{ $placeholder }}">
        @elseif(getCurrentMethod() == 'show')
            <input class="form-control" value="{{ $value }}" disabled>
        @endif
    </div>
</div>