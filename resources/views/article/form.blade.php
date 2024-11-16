@extends('base')

@section('name', $article->exists ? 'Editer un article' : 'Créer un article')

@section('content')

    <form class="vstack gap-2" action="{{ route($article->exists ? 'article.update' : 'article.store', ['article' => $article]) }}" method="post">

        @csrf
        @method($article->exists ? 'put' : 'post')


        <div class="form-group">
            <label for="name">Entrez le nom de l'article: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $article->name) }}">
            <label for="price">Entrez le prix de l'article: </label>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $article->price) }}">
            <label for="price">Choisir la catégorie de l'article: </label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $article->category) }}">

            @error('name', 'price')
                <div style="color: red">{{ $message }}</div>
            @enderror


        </div>

        <div >
            <button class="btn btn-primary" type="submit">
                @if ($article->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>

@endsection
