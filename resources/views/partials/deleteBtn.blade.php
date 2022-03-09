<form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete_form_{{ $comic->id }}">
  @csrf
  @method("delete")

  <button type="submit">Elimina</button>
</form>
