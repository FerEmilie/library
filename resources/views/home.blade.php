@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bienvenue</h1>
    <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
</div>


<script type="text/javascript">

var url = 'https://newsapi.org/v2/everything?' +
        'language=fr'
        'q=livre&' +
        'from=2019-12-19&' +
        'sortBy=popularity&' +
        'apiKey=e2635dffb5ec4681870242e3bf9fb181';

var req = new Request(url);

fetch(req)
  .then(function(response) {
      console.log(response.json());
  })
</script>

    e2635dffb5ec4681870242e3bf9fb181


@endsection
