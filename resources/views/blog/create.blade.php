@extends('base')

@section('title', 'Créer un article')

@section('content')
<form action="/blog/new" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="Article de démonstration">
    </div>

    <div>
        <label for="content">Contenu</label>
        <textarea id="content" name="content">Contenu de démonstration</textarea>
    </div>

    <button type="submit">Enregistrer</button>
</form>
@endsection