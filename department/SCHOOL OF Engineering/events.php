<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Educenter - Education HTML Template</title>

    <!-- Mobile Specific Metas
	================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <?php include('hedar.php') ?>

    <!-- /header -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone"
                                    placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="signupName"
                                    placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail"
                                    placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword"
                                    name="signupPassword" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone"
                                placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginName" name="loginName"
                                placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword"
                                placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary"
                                href="index.html">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Upcoming Events</li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- courses -->
    <section class="section">
        <div class="container">
            <div class="row">
                <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ums"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the Departments_Event table
$sql = "SELECT * FROM Departments_Event ORDER BY event_date ASC";
$result = $conn->query($sql);
?>

                <!-- courses -->
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <?php if ($result->num_rows > 0) : ?>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                            <!-- event -->
                            <?php


// Fetch events


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="col-lg-4  col-sm-6 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
                <div class="card-img position-relative">
                    <img class="card-img-top rounded-0" src="../../admin/admin_panle/' . $row['image_path'] . '" alt="event thumb">
                    <div class="card-date"><span>' . date("d", strtotime($row['event_date'])) . '</span><br>' . date("F", strtotime($row['event_date'])) . '</div>
                </div>
                <div class="card-body">
                    <p><i class="ti-location-pin text-primary mr-2"></i>' . $row['event_location'] . '</p>
                    <a href="event-single.php?id=' . $row['id'] . '"><h4 class="card-title">' . $row['event_title'] . '</h4></a>
                </div>
            </div>
        </div>';
    }
} else {
    echo "<p>No events found.</p>";
}

$conn->close();
?>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <p class="text-center">No events found</p>
                            <?php endif; ?>

                            <!-- event -->
                            <div class="col-lg-4 col-sm-6 mb-5">
                                <div class="card border-0 rounded-0 hover-shadow">
                                    <div class="card-img position-relative">
                                        <img class="card-img-top rounded-0" src="images/events/event-1.jpg"
                                            alt="event thumb">
                                        <div class="card-date"><span>18</span><br>December</div>
                                    </div>
                                    <div class="card-body">
                                        <!-- location -->
                                        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                                        <a href="event-single.html">
                                            <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- event -->
                            <div class="col-lg-4 col-sm-6 mb-5">
                                <div class="card border-0 rounded-0 hover-shadow">
                                    <div class="card-img position-relative">
                                        <img class="card-img-top rounded-0" src="images/events/event-2.jpg"
                                            alt="event thumb">
                                        <div class="card-date"><span>21</span><br>December</div>
                                    </div>
                                    <div class="card-body">
                                        <!-- location -->
                                        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                                        <a href="event-single.html">
                                            <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- event -->
                            <div class="col-lg-4 col-sm-6 mb-5">
                                <div class="card border-0 rounded-0 hover-shadow">
                                    <div class="card-img position-relative">
                                        <img class="card-img-top rounded-0" src="images/events/event-3.jpg"
                                            alt="event thumb">
                                        <div class="card-date"><span>23</span><br>December</div>
                                    </div>
                                    <div class="card-body">
                                        <!-- location -->
                                        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                                        <a href="event-single.html">
                                            <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /courses -->

                <!-- footer -->
                <?php include('footer.php'); ?>

                <!-- jQuery -->
                <script src="plugins/jQuery/jquery.min.js"></script>
                <!-- Bootstrap JS -->
                <script src="plugins/bootstrap/bootstrap.min.js"></script>
                <!-- slick slider -->
                <script src="plugins/slick/slick.min.js"></script>
                <!-- aos -->
                <script src="plugins/aos/aos.js"></script>
                <!-- venobox popup -->
                <script src="plugins/venobox/venobox.min.js"></script>
                <!-- filter -->
                <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
                <!-- google map -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU">
                </script>
                <script src="plugins/google-map/gmap.js"></script>

                <!-- Main Script -->
                <script src="js/script.js"></script>

</body>

</html>