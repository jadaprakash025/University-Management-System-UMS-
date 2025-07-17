<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

    <!--=============== bootstrap linked ===============-->

    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">

    <!--=============== CSS ===============-->

    <title>University Websit</title>
    <style>
   
    </style>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <div class="container-fluid  pe-5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary nav container">
                <a href="assets\img\logo1.png" class="nav__logo">University</a>

                <div class="nav__menu " id="nav-menu">
                    <ul class=" me-auto mb-2 mb-lg-0 nav__list">
                        <li class="nav__item">
                            <a href="#" class="nav__link">Home</a>
                        </li>



                        <li class="nav__item dropdown">
                            <a class="nav__link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SHTC Trust</a></li>
                                <li><a class="dropdown-item" href="#">Vision & Missio</a></li>
                                <li><a class="dropdown-item" href="#">Our Team</a></li>
                                <li><a class="dropdown-item" href="#">Members Of Governing Body</a></li>
                                <li><a class="dropdown-item" href="#">Members Of Board OF Management</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">About</a></li>
                            </ul>
                        </li>

                        <li class=" nav__item dropdown">
                            <a class="nav__link dropdown-toggle" href="#" id="navbarDropdownMenulink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Departments
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenulink">

                                <li class="dropdown-submenu ">
                                    <a class="dropdown-item dropdown-toggle" href="#">Academics</a>
                                    <ul class="dropdown-menu">

                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Medical</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Ayurveda</a></li>
                                                <!-- <li><a class="dropdown-item" href="#">sub3.2</a></li>
                                    <li><a class="dropdown-item" href="#">sub3.3</a></li> -->

                                            </ul>
                                        </li>


                                        <li class="dropdown-submenu ">
                                            <a class="dropdown-item dropdown-toggle" href="#">Pharmacy</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">B.Pharm</a></li>
                                                <li><a class="dropdown-item" href="#">Pharm.D</a></li>
                                                <li><a class="dropdown-item" href="#">M.Pharm</a></li>
                                                <li><a class="dropdown-item" href="#">Ph.D</a></li>

                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu ">
                                            <a class="dropdown-item dropdown-toggle" href="#">Engineering</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Diploma</a></li>
                                                <li><a class="dropdown-item" href="#">B.Tech</a></li>
                                                <li><a class="dropdown-item" href="#">M.Tech</a></li>
                                                <li><a class="dropdown-item" href="#">Ph.D</a></li>

                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu ">
                                            <a class="dropdown-item dropdown-toggle" href="#">Computer Application</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">BCA</a></li>
                                                <li><a class="dropdown-item" href="#">MCA</a></li>
                                                <li><a class="dropdown-item" href="#">Ph.D</a></li>

                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu ">
                                            <a class="dropdown-item dropdown-toggle" href="#">Management</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">BBA</a></li>
                                                <li><a class="dropdown-item" href="#">BBA-Hons(Applied Management)</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">B.Voc</a></li>
                                                <li><a class="dropdown-item" href="#">MBA</a></li>
                                                <li><a class="dropdown-item" href="#">Ph.D</a></li>


                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu ">
                                            <a class="dropdown-item dropdown-toggle" href="#">Sciences</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">B.Sc</a></li>
                                                <li><a class="dropdown-item" href="#">M.Sc</a></li>
                                                <li><a class="dropdown-item" href="#">DMLT</a></li>
                                                <li><a class="dropdown-item" href="#">Ph.D</a></li>

                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu ">
                                            <a class="dropdown-item dropdown-toggle" href="#">Agriculture</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">B.sc Agriculture</a></li>
                                                <li><a class="dropdown-item" href="#">Ph.D</a></li>

                                            </ul>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Doctoral Studies (Ph.D)</a></li>





                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">acedemi</a></li>
                                <li><a class="dropdown-item" href="#">acedemi2</a></li>

                            </ul>

                        </li>

                        <li class="nav__item">
                            <a href="#" class="nav__link">Admissions</a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav__link dropdown-toggle disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Management
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">BBA</a></li>
                                <li><a class="dropdown-item" href="#">MBA</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Contact</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item dropdown">
                            <a class="nav__link dropdown-toggle disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Computer Application
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="bca.php">BCA</a></li>
                                <li><a class="dropdown-item" href="#">MCA</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Contact</a></li>
                            </ul>
                        </li> -->


                        <!-- <li class="nav-item">
                            <a class="nav__link disabled">Result</a>
                        </li> -->
                    </ul>

                    <!-- Close button -->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__actions">
                    <!-- Search button -->
                    <i class="ri-search-line nav__search" id="search-btn"></i>

                    <!-- Login button -->
                    <!-- <i class="ri-user-line nav__login" id="login-btn"></i> -->


                    <!-- Button Login trigger modal -->
                    <i class="ri-user-line nav__login" id="singup-btn"data-bs-toggle="modal" data-bs-target="#loginModal"></i>


                    <!-- Button trigger modal -->
                    <i class="ri-user-add-line nav__login" id="singup-btn"data-bs-toggle="modal" data-bs-target="#exampleModal"></i>

                    


                    





                    






                    <!-- Toggle button -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>




                    
                </div>
            </nav>

    </header>

    <!--==================== SEARCH ====================-->
    <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input" />
        </form>

        <i class="ri-close-line search__close" id="search-close"></i>
    </div>

    <!-- ==================== LOGIN ==================== -->
    <div class="login" id="login">
        <form action="" class="login__form">
            <h2 class="login__title">Log In</h2>

            <div class="login__group">
                <div>
                    <label for="email" class="login__label">Email</label>
                    <input type="email" placeholder="Write your email" id="email" class="login__input" />
                </div>

                <div>
                    <label for="password" class="login__label">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" class="login__input" />
                </div>
            </div>

            <div>
                <p class="">
                    You do not have an account? <button id="signup-btn1" type="button" class="btn btn-primary "
                        data-bs-toggle="modal" data-bs-target="#signinModal"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        Sign up
                    </button>

                </p>


                <a href="#" class="login__forgot"> You forgot your password </a>

                <button type="submit" class="login__button">Log In</button>
            </div>
        </form>

        <i class="ri-close-line login__close" id="login-close"></i>
    </div>
    </div>



   
    <!--==================== MAIN ====================-->
    <main class="main">
        <img src="assets\img\bg1-image.png" alt="image" class="main__bg" />
    </main>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script src="bootstrap\js\bootstrap.bundle.min.js"></script>





<!-- validation al fild -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>

<!-- <img src="assets\img\Saurashtra_Universityt.jpg" alt="image" class="main__bg"> -->

</body>

</html>