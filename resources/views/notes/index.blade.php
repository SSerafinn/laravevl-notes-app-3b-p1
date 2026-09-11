<h1> My Notes App </h1>

@forelse ($notes as $note)
<div class="note">
    <h3>{{ $note->title }}</h3>
    <p>{{ $note->body }}</p>
</div>
@empty
<p>Wala pa pong notes</p>
@endforelse

<p><a href="{{}}">+ Add Note</a></p>