<form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete_form_{{ $comic->id }}">
    @csrf
    @method("delete")

    <button type="submit">Elimina</button>
</form>


<script>
    const delete_{{ $comic->id }} = document.querySelector(".delete_form_{{ $comic->id }}")
  
    delete_{{ $comic->id }}.addEventListener("submit", function(event) {
      event.preventDefault();
  
      const modal = confirm("Sei sicuro?");
  
      if (modal) {
        delete_{{ $comic->id}}.submit();
      }
    })
</script>