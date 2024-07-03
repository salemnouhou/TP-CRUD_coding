<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>GESTION DES POSTS</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">MODIFIER UN POST</h2>

      
      
      <form action="{{route ('update-post', $post->id) }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">TITRE</label>
          <input type="text" class="form-control" name="titre" value="{{ $post->title }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">CONTENU</label>
          <input type="text" class="form-control" name="contenu" value="{{ $post->contenu }}" id="exampleInputPassword1">

          <input type="hidden" name="post_id" value="{{ $post->id }}">
        </div>
      
        <button type="submit" class="btn btn-primary">Créer</button>
      </form>


    </div>

  </div>
    
    

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('js/main.js') }}"></script>
  </body>
</html>