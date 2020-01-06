@extends('layouts.app')

@section('content')
  <div class="col-lg-offset-1 col-lg-12 p-3 mb-2 bg-dark text-white">
        <h1 class="panel-title">DOCK</h1>
    <table class="overflow-auto table table-dark table-bordered table-striped text-center">
      <caption>Vous pouvez ici voir les détails des livres et les ajouter à vos étagères</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titre</th>
          <th scope="col">Auteur</th>
          <th scope="col">Catégorie</th>
          <th scope="col">Résumé</th>
          <th scope="col">ISBN</th>
          <th scope="col">Ajouter à mes étagères</th>
        </tr>
      </thead>
        <tbody>

        @foreach($books as $book)
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->category->name }}</td>
            <td id="abstract" data-toggle="tooltip" data-html="true" data-placement="bottom" title="{{ $book->abstract }}"><i class="fa fa-search-plus" aria-hidden="true"></i></td>
            <td>{{ $book->isbn }}</td>
            <td><div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary"><a class="text-reset text-decoration-none" href="/library/wishList">Je veux</a></button>
                  <button type="button" class="btn btn-secondary"><a class="text-reset text-decoration-none" href="/library/do">J'ai</a></button>
                </div></td>

        </tr>
        @endforeach
      </tbody>
   </table>
   </div>

<script type="text/javascript">
  $(function () {
    $('#abstract').tooltip()
  })

</script>
@endsection
