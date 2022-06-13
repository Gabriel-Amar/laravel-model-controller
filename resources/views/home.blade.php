<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="img/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<h1 class="text-center">Movies <i class="fa-solid fa-clapperboard"></i></h1>
<div class="container">
    <div class="row">
        @foreach ($movies as $item)
        <div class="col-4 d-flex align-items-stretch g-3 justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Titolo: {{$item->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{$item->original_title}}</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="card-text">Voto: {{$item->vote}}</p>
                  <p class="card-text">Data di uscita: {{$item->date}}</p>
                </div>
              </div>
           
        </div>
        @endforeach
    </div>
</div>

<script src="js/script.js" ></script>
</body>
</html>