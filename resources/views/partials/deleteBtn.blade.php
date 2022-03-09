<form action="{{ route('comics.destroy', $comic->id) }}" method="post">
    @csrf
    @method("delete")

    <button type="submit">Elimina</button>
</form>