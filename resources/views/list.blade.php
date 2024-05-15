<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv = "X-UA_Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1d8d68cd8a.js" crossorigin="anonymous"></script>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap Datepicker CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>My Application</title>

   
</head>
<body>
<div class="col-sm p-3 min-vh-100 ">
            <div class="row "style=" padding:20px">
        <h1 class="card-title" >BOOK LIST</h1>
        <hr class="divider">
              <p class="card-text " >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
              @foreach($books as $book)
                <div class="col-md-4 mb-4">
                <a href="{{ route('book.show', ['id' => $book->id]) }}" class="card-link">
                        <div class="card">
                            <img src="\img\dogs.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </a>
                                <h5 class="card-title">{{ $book->book_name }}</h5>
                                <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                                <p class="card-text"><strong>categories:</strong> {{ $book->category }}</p>
                                <p class="card-text"><strong>Published Date:</strong> {{ $book->published_date }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
</body>
</html>