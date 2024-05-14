<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
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
    <title>My Application</title>
    
</head>
<body>
    @include('components.sidebar')
    @include('components.navbar')
    <main class="main">
        <div class ="container">
          <a href="/list" class="back"><h1> > GO BACK</h1> </a>
        </div>
        <div class = "container-fluid " style = "background-color:#FFF5EE;">
        <div class ="row">
            <div class = "col">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Book</p>
            <form class="mx-1 mx-md-4" method = "POST" action = "{{route('add.books')}}">
                    @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-book fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name ="bname" placeholder="Book Name"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" name ="author" placeholder="Author"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-list fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name ="cate" placeholder="Category"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-regular fa-calendar fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="datepicker" class="form-control" name ="pdate" placeholder="Published Date"/>
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 ">
                    <button type="submit" class="btn btn-primary btn-lg">Add</button>
                  </div>

                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 b-5">
                <img src="\img\shelter.jpg"
                  class="img-fluid" alt="shelter"/>
                            </div>
                        </div>
                    </div>
    </main>
</body>
</html>
