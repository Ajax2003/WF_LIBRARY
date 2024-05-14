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
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Pet Details</title>
    </head>
<body>

<div class="container-fluid">
    <div class="row">
    <div class="col-5 d-flex justify-content-center">
        
          <img src="\img\-Insert_image_here-.svg.jpg" class="img-fluid" alt="shelter"/>
      
    </div>
    <div class="col d-flex justify-content-center">
        
          
      
    </div>
        <div class="col-md-5">
            <div class="card">
            @csrf
            <div class="card-header" style="font-weight: bold;">{{ $books->name }} Details</div>
                <div class="card-body">
                    <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                    <p class="card-text"><strong>categories:</strong> {{ $book->category }}</p>
                    <p class="card-text"><strong>Published Date:</strong> {{ $book->published_date }}</p>
                    <!---<button id="applyBtn" class="btn btn-primary" onclick="applyForAdoption('{{ $pet->idpet }}')">Apply</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script>
    function applyForAdoption(petId) {
        // Redirect user to the adoption application page with pet ID as a query parameter
        window.location.href = "{{ route('adoption.apply') }}?pet_id=" + petId;
    }
</script>-->


    <!-- Bootstrap JS (optional, for certain components like dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>