<form action="{{ route('hakim.destroy', $hakim->id) }}" method="post" id="modal-form-delete-hakim-{{ $hakim->id }}">
    @csrf
    @method('DELETE')
</form>