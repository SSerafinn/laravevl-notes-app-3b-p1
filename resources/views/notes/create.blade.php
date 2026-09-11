<h1>Add a Note</h1>

<form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title') }}">

    <label>Body</label>
    <textarea name="body" rows="5">{{ old('body') }}</textarea>

    <button type="submit">Save Note</button>
</form>

