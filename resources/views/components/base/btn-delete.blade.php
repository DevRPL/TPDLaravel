<form method="POST" action="{{ route($route, $id) }}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">{{ $title }}</button>
</form>