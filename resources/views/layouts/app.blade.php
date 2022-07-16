<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>App Name - @yield('title')</title>

    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/5953d48269.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="{{route('movies.index')}}" class="navbar-brand">
                <img src="/assets/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{route('movies.index')}}" class="nav-link">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('cinemas.index')}}" class="nav-link">Cinema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="audience">Audience</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('employees.index')}}" class="nav-link">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tickets.index')}}" class="nav-link">Ticket</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    </section>
    <!-- end banner -->



    <!-- content section -->
    @yield('content')

    <!-- content section -->
    <!-- <section class="movielist" id="movielist">
        <div class="header d-flex flex-row mb-3 justify-content-between">
            <h1 class="heading">Now Showing on Cinema</h1> -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addModal">Add Movie</button>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="movielist-member">
                        <div class="member-img">
                            <img src="assets/img/pic.png" class="img-fluid" alt="">
                            <div class="button">
                                <a href="" class="" data-bs-toggle="modal" data-bs-target="#movieModal"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href=""><i class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Turning Red</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- </section> -->

    <!-- Add Modal -->

    <!-- Edit Modal -->
    <!-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                          <label for="editInputEmail1" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="editInputPassword1" class="form-label">Phone Number</label>
                          <input type="password" class="form-control" id="editInputPassword1">
                        </div>
                      </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Movie Modal -->
    <div class="modal fade" id="movieModal" tabindex="-1" aria-labelledby="movieModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="movieModalLabel">Movie Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="movieInputName" class="form-label">Movie Name</label>
                            <input type="text" class="form-control" id="movieInputName">
                        </div>
                        <div class="mb-3">
                            <label for="movieInputFile" class="form-label">Choose File</label>
                            <input type="file" class="form-control" id="editInputPassword1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <footer class="text-center text-lg-start text-muted">
        <section class="footer-audience">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <img src="/assets/img/logo.png" alt="">
                        <p>
                            The best service to customers is our top priority in building a business.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Quick Links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Movies</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Cinema</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Audience</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ticket</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Privacy Policy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Terms & Condition</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p> Depok, Indonesia</p>
                        <p>
                            info@example.com
                        </p>
                        <p> + 62 xxx xxx xx</p>
                        <a href="ig"><i class="fa-brands fa-instagram"></i></a>
                        <a href="fb"><i class="fa-brands fa-facebook"></i></a>
                        <a href="wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="color: #fff;">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="">Cinema Reguler</a>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>