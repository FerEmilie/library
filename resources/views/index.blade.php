@extends('layouts.app')
@section('content')
<style media="screen">
a {
text-decoration: none;
color: black;
}
a:visited {
color: #844;
}
a:hover, a:focus, a:active {
text-decoration: underline;
color: #800;
}
</style>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Ma Bibliothèque</h1>
    <blockquote class="blockquote">
  <p class="mb-0">“Ne prêtez pas vos livres : personne ne les rend jamais. Les seuls livres que j'ai dans ma bibliothèque sont des livres qu'on m'a prêtés.”</p>
  <footer class="blockquote-footer"><cite title="Source Title">Anatole France</cite></footer>
</blockquote>
    <h3><span class="badge badge-secondary">New </span> Les Nouveautés Littéraire <small class="text-muted">A voir ci dessous, articles classés par popularité</small></h3>
  </div>
</div>
<div class="container">
  <ul id="news" class="list-group list-group-horizontal"></ul>
</div>

<script src="http://localhost/library/resources/js/newsApi.js" type="text/javascript"></script>
@endsection
