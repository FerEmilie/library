@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container col-lg-8">
    <h1 class="display-4">Ajouter un nouveau livre</h1>
     <form id="form" class="lead" action="/save" method="post">
       <fieldset>
             {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="title">Titre du livre:</label>
              <input name="title" type="text" class="form-control" id="title" autofocus="autofocus" required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="author">Nom de l'auteur:</label>
              <input name="author" type="text" class="form-control" id="author" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="abstract">Résumé:</label>
            <input name="abstract" type="text" class="form-control" id="abstract" placeholder="Il était une fois...">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="do">Le mettre sur quelle étagère ?</label>
              <select name="do" id="do" class="form-control" required="required">
                <option></option>
                <option>A lire</option>
                <option>Ma liste d'envie</option>
                <option>Mes livres</option>
              </select>
             </div>
            <div class="form-group col-md-4">
              <label for="category">Catégorie:</label>
              <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="isbn">ISBN:</label>
              <input name="isbn" type="number" class="form-control" id="isbn">
              <small id="isbnHelpBlock" class="form-text text-muted">Se trouve près du code barre.</small>
            </div>
          </div>
          <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
      </fieldset>
    </form>
</div>
</div>

@endsection
