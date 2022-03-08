<form action="{{ route('comics.store') }}" method="post">

    @csrf

    <div>
        <label for="publishing_house">Publishing House</label>
        <input type="text" name="publishing_house">
    </div>
    <br />

    <div>
        <label for="comics">Comics</label>
        <input type="text" name="comics">
    </div>
    <br />

    <div>
        <label for="series">Series</label>
        <input type="text" name="publishing_house">
    </div>
    <br />

    <div>
        <label for="description">Description</label>
        <input type="text" name="description">
    </div>
    <br />

    <div>
        <label for="release">Release</label>
        <input type="text" name="release">
    </div>
    <br />

    <div>
        <label for="available">Available</label>
        <input type="text" name="available">
    </div>
    <br />
    <input  type="submit" value="Invia">

</form>