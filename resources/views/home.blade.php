<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>GESTION DES POSTS</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">GESTION DES POSTS</h2>
      <a href="{{route ('create-form') }}"><button class="btn btn-primary" >CREER UN POST</button></a> <br>

      <div class="table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox" class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <th scope="col">ID</th>
              <th scope="col">NOM</th>
              <th scope="col">CONTENU</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>


            @foreach ($posts as $post )
            <tr>
                <th scope="row">
                  <label class="control control--checkbox">
                    <input type="checkbox"/>
                    <div class="control__indicator"></div>
                  </label>
                </th>
                <td>
                  {{ $post->id }}
                </td>
                <td><a href="{{route ('show-post', $post->id) }}">{{ $post->title }}</a></td>
                <td>
                  {{ $post->contenu }}
                  
                  
                </td>

                <td>
                 <a href="{{ route('delete-post', $post->id) }}"> <button>SUPPRIMER</button></a>
                </td>
               
              </tr>

              
            @endforeach

            


           
           
           
           
           
           

          
           
         
            
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>