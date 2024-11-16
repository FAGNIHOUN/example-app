
@extends('base')

@section('title', 'Les Articles')

@section('content')

    <div class="d-flex justify-content-between align-item-center">
        <h2>@yield('title')</h2>
        <a href="{{ route('article.create') }}" class="btn btn-primary">
            Ajouter un article
        </a>
    </div>


    <table class="table table-sthiped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article )
                <tr>
                    <td>{{ $article->name}}</td>
                    <td>{{ $article->price}}</td>
                    <td>{{ $article->category}}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('article.edit', $article) }}" class='btn btn-primary' >Editer</a>
                            <form action="{{ route('article.destroy', $article )}}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $articles->links() }}

@endsection
