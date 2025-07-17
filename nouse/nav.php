<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php
    include("assets\header.php");

?>
<style>

@media screen and (min-width: 1024px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.container {
  max-width: 1120px;
  margin-inline: 1.5rem;
}

/*=============== HEADER ===============*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  box-shadow: 0 2px 8px hsla(220, 68%, 12%, 0.1);
  background-color: var(--body-color);
  z-index: var(--z-fixed);
}

/*=============== NAV ===============*/
.nav {
  height: var(--header-height);
}
.nav__data {
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.nav__logo {
  display: inline-flex;
  align-items: center;
  column-gap: 0.25rem;
  color: var(--title-color);
  font-weight: var(--font-semi-bold);
  transition: color 0.3s;
}
.nav__logo i {
  font-size: 1.25rem;
}
.nav__logo:hover {
  color: var(--first-color);
}
.nav__toggle {
  position: relative;
  width: 32px;
  height: 32px;
}
.nav__toggle-menu, .nav__toggle-close {
  font-size: 1.25rem;
  color: var(--title-color);
  position: absolute;
  display: grid;
  place-items: center;
  inset: 0;
  cursor: pointer;
  transition: opacity 0.1s, transform 0.4s;
}
.nav__toggle-close {
  opacity: 0;
}
@media screen and (max-width: 1118px) {
  .nav__menu {
    background-color: var(--body-color);
    position: absolute;
    left: 0;
    top: 2.5rem;
    width: 100%;
    height: calc(100vh - 3.5rem);
    overflow: auto;
    padding-block: 1.5rem 4rem;
    pointer-events: none;
    opacity: 0;
    transition: top 0.4s, opacity 0.3s;
  }
  .nav__menu::-webkit-scrollbar {
    width: 0.5rem;
  }
  .nav__menu::-webkit-scrollbar-thumb {
    background-color: hsl(220, 12%, 70%);
  }
}
.nav__link {
  color: var(--title-color);
  font-weight: var(--font-semi-bold);
  padding: 1.25rem 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: background-color 0.3s;
}
.nav__link:hover {
  background-color: var(--first-color-lighten);
}

/* Show menu */
.show-menu {
  opacity: 1;
  top: 3.5rem;
  pointer-events: initial;
}

/* Show icon */
.show-icon .nav__toggle-menu {
  opacity: 0;
  transform: rotate(90deg);
}

.show-icon .nav__toggle-close {
  opacity: 1;
  transform: rotate(90deg);
}

/*=============== DROPDOWN ===============*/
.dropdown__button {
  cursor: pointer;
}
.dropdown__arrow {
  font-size: 1.5rem;
  font-weight: initial;
  transition: transform 0.4s;
}
.dropdown__content, .dropdown__group, .dropdown__list {
  display: grid;
}
.dropdown__container {
  background-color: var(--first-color-lighten);
  height: 0;
  overflow: hidden;
  transition: height 0.4s;
}
.dropdown__content {
  row-gap: 1.75rem;
}
.dropdown__group {
  padding-left: 2.5rem;
  row-gap: 0.5rem;
}
.dropdown__group:first-child {
  margin-top: 1.25rem;
}
.dropdown__group:last-child {
  margin-bottom: 1.25rem;
}
.dropdown__icon i {
  font-size: 1.25rem;
  color: var(--first-color);
}
.dropdown__title {
  font-size: var(--small-font-size);
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
}
.dropdown__list {
  row-gap: 0.25rem;
}
.dropdown__link {
  font-size: var(--smaller-font-size);
  font-weight: var(--font-medium);
  color: var(--text-color);
  transition: color 0.3s;
}
.dropdown__link:hover {
  color: var(--title-color);
}

/* Rotate dropdown icon */
.show-dropdown .dropdown__arrow {
  transform: rotate(180deg);
}

/*=============== BREAKPOINTS ===============*/
/* For small devices */
@media screen and (max-width: 300px) {
  .dropdown__group {
    padding-left: 1.5rem;
  }
}
/* For large devices */
@media screen and (min-width: 1118px) {
  /* Nav */
  .nav {
    height: calc(var(--header-height) + 2rem);
    display: flex;
    justify-content: space-between;
  }
  .nav__toggle {
    display: none;
  }
  .nav__list {
    display: flex;
    column-gap: 3rem;
    height: 100%;
  }
  .nav li {
    display: flex;
  }
  .nav__link {
    padding: 0;
  }
  .nav__link:hover {
    background-color: initial;
  }
  /* Dropdown */
  .dropdown__button {
    column-gap: 0.25rem;
    pointer-events: none;
  }
  .dropdown__container {
    height: max-content;
    position: absolute;
    left: 0;
    right: 0;
    top: 6.5rem;
    background-color: var(--body-color);
    box-shadow: 0 6px 8px hsla(220, 68%, 12%, 0.05);
    pointer-events: none;
    opacity: 0;
    transition: top 0.4s, opacity 0.3s;
  }
  .dropdown__content {
    grid-template-columns: repeat(4, max-content);
    column-gap: 6rem;
    max-width: 1120px;
    margin-inline: auto;
  }
  .dropdown__group {
    padding: 4rem 0;
    align-content: baseline;
    row-gap: 1.25rem;
  }
  .dropdown__group:first-child, .dropdown__group:last-child {
    margin: 0;
  }
  .dropdown__list {
    row-gap: 0.75rem;
  }
  .dropdown__icon {
    width: 60px;
    height: 60px;
    background-color: var(--first-color-lighten);
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin-bottom: 1rem;
  }
  .dropdown__icon i {
    font-size: 2rem;
  }
  .dropdown__title {
    font-size: var(--normal-font-size);
  }
  .dropdown__link {
    font-size: var(--small-font-size);
  }
  .dropdown__link:hover {
    color: var(--first-color);
  }
  .dropdown__item {
    cursor: pointer;
  }
  .dropdown__item:hover .dropdown__arrow {
    transform: rotate(180deg);
  }
  .dropdown__item:hover > .dropdown__container {
    top: 5.5rem;
    opacity: 1;
    pointer-events: initial;
    cursor: initial;
  }
}
@media screen and (min-width: 1152px) {
  .container {
    margin-inline: auto;
  }
}
</style>
    <title>University Websit</title>
  
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <div class="container-fluid  pe-4">
            <nav class="navbar navbar-expand-lg bg-body-tertiary nav container">
                <div class="nav_logo">      
                     <!-- <img class=" nav__logo card-img-top rounded-0"  style="height: 50px; width: 200px;" src="assets\img\logo\mainlogo.png" alt="Post thumb"> -->

                    <a href="assets\img\logo1.png" class="nav__logo"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span><span>Saurashtra University</a>
                </div>
               

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





                        <li class="dropdown__item">                      
                            <div class="nav__link dropdown__button">
                                Discover <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-flashlight-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Most viewed courses</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">HTML for beginners</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Advanced CSS</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">JavaScript OOP</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-heart-3-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Popular courses</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Development with Flutter</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Web development with React</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Backend development expert</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-book-mark-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Careers</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Web development</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Applications development</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">UI/UX design</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Informatic security</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-file-paper-2-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Certifications</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Course certificates</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Free certifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                                                <li><a class="dropdown-item" href="department\SCHOOL OF Engineering\index.php">BCA</a></li>
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





                        <li class="nav__item dropdown">
                            <a class="nav__link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                News
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">All Updates</a></li>
                                <li><a class="dropdown-item" href="#">Career</a></li>
                                <li><a class="dropdown-item" href="#">Events</a></li>
                                <li><a class="dropdown-item" href="#">Exam</a></li>
                                <li><a class="dropdown-item" href="#">Result</a></li>
                                <li><a class="dropdown-item" href="#">Tender</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">News</a></li>
                            </ul>
                        </li>

                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
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
                    <!-- <button type="button" class="btn btn-info btn-rounded" data-mdb-ripple-init>Login</button> -->
                    <a href="lodinpanel\home1.php" class="btn btn-primary btn-info"><span class="bi bi-person-fill"></span> Login</a>
                    <!-- Login button -->
                    <!-- <i class="ri-user-line nav__login" id="login-btn"></i> -->


                    <!-- Button Login trigger modal -->
                    <!-- <i class="ri-user-line nav__login" id="singup-btn"data-bs-toggle="modal" data-bs-target="#loginModal"></i> -->

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
   

    <!--=============== MAIN JS ===============-->
<script>

    /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // Add show-menu class to nav menu
       nav.classList.toggle('show-menu')
       // Add show-icon to show and hide menu icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) =>{
    const dropdownButton = item.querySelector('.dropdown__button') 

    // 2. Select each button click
    dropdownButton.addEventListener('click', () =>{
        // 7. Select the current show-dropdown class
        const showDropdown = document.querySelector('.show-dropdown')
        
        // 5. Call the toggleItem function
        toggleItem(item)

        // 8. Remove the show-dropdown class from other items
        if(showDropdown && showDropdown!== item){
            toggleItem(showDropdown)
        }
    })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) =>{
    // 3.1. Select each dropdown content
    const dropdownContainer = item.querySelector('.dropdown__container')

    // 6. If the same item contains the show-dropdown class, remove
    if(item.classList.contains('show-dropdown')){
        dropdownContainer.removeAttribute('style')
        item.classList.remove('show-dropdown')
    } else{
        // 4. Add the maximum height to the dropdown content and add the show-dropdown class
        dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
        item.classList.add('show-dropdown')
    }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
      dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () =>{
    // Validate if the media query reaches 1118px
    if(mediaQuery.matches){
        // Remove the dropdown container height style
        dropdownContainer.forEach((e) =>{
            e.removeAttribute('style')
        })

        // Remove the show-dropdown class from dropdown item
        dropdownItems.forEach((e) =>{
            e.classList.remove('show-dropdown')
        })
    }
}

addEventListener('resize', removeStyle)


</script>

    <script src="assets/js/main.js"></script>
    <script src="bootstrap\js\bootstrap.bundle.min.js"></script>





<!-- validation al fild -->
<!-- <script>
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
  </script> -->

<!-- <img src="assets\img\Saurashtra_Universityt.jpg" alt="image" class="main__bg"> -->

</body>

</html>