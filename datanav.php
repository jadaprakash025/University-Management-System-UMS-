<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
    include("assets\header.php");
?>
<style>
    
.navbar-nav.dropdown-submenu.nav-item.nav-link:hover {
  background-color: red;
  color: white;
  animation: slideleft .3s ease;


}
</style>

    <title>University Websit</title>
  
</head>



<?php
// Database connection details 
$host = 'localhost';
$db = 'dynamic_nav';
$user = 'root';
$pass = '';

// Connect to the database
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Fetch all menu items
$sql = "SELECT * FROM menu_items ORDER BY parent_id, id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Recursive function to build the menu
function buildMenu($menuItems, $parentId = null) {
    $html = '';
    $filteredItems = array_filter($menuItems, function($item) use ($parentId) {
        return $item['parent_id'] == $parentId;
    });

    if (!empty($filteredItems)) {
        // Top-level menu items get the 'navbar-nav' class
        $html .= $parentId === null ? '<ul class="navbar-nav nav__list ">' : '<ul class="dropdown-menu ">';

        foreach ($filteredItems as $item) {
            // Check if the current item has children
            $hasChildren = count(array_filter($menuItems, function($child) use ($item) {
                return $child['parent_id'] == $item['id'];
            })) > 0;

            // Add 'dropdown-submenu' class for nested submenus
            $isSubmenu = $parentId !== null && $hasChildren;
            $html .= '<li class="nav__item' . ($hasChildren ? ' dropdown' : '') . ($isSubmenu ? ' dropdown-submenu' : '') . '">';

            $html .= '<a class="dropdown-item nav__link ' . ($hasChildren ? ' dropdown-toggle' : '') . '" href="' . $item['link'] . '"'
                   . ($hasChildren ? ' role="button" data-bs-toggle="dropdown" aria-expanded="false"' : '') . '>';
            $html .= $item['name'] . '</a>';

            if ($hasChildren) {
                $html .= buildMenu($menuItems, $item['id']);
            }
            $html .= '</li>';
        }
        $html .= '</ul>';
    }

    return $html;
}

?>

<body>
<!-- <header class="header" id="header">
    <div class="container-fluid pe-4">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="nav_logo">
                <a href="#" class="nav__logo">University Name</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </nav>
    </div>
</header> -->

    <!--==================== HEADER  ====================-->
    <header class="header" id="header">
        <div class="container-fluid  pe-4">
            <nav class="navbar navbar-expand-lg bg-body-tertiary nav container">
                <div class="nav_logo">      
                     <!-- <img class=" nav__logo card-img-top rounded-0"  style="height: 50px; width: 200px;" src="assets\img\logo\mainlogo.png" alt="Post thumb"> -->

                    <a href="assets\img\logo1.png" class="nav__logo"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span><span>Saurashtra University</a>
                </div>
               

                <div class="nav__menu " id="nav-menu">
                    <ul class=" me-auto mb-2 mb-lg-0 nav__list">
                        <?php echo buildMenu($menuItems); ?>

                       
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