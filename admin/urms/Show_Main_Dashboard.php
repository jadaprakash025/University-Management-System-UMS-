<?php

include('includes/config.php');

        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Result Management System | Dashboard</title>
    <link rel="stylesheet" href="../urms\css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../urms\css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="../urms\css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="../urms\css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="../urms\css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="../urms\css/icheck/skins/line/blue.css">
    <link rel="stylesheet" href="../urms\css/icheck/skins/line/red.css">
    <link rel="stylesheet" href="../urms\css/icheck/skins/line/green.css">
    <link rel="stylesheet" href="../urms\css/main.css" media="screen">
    <script src="../urms\js/modernizr/modernizr.min.js"></script>
</head> 

<body class="top-navbar-nofixed">
   


        <div class="content-wrapper">
            <div class="content-container">


                <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-sm-6">
                                <h2 class="title">Dashboard</h2>

                            </div>
                            <div class="col-sm-6">

                            </div>


                            <!-- <a href="../urms\dashboard.php" class="btn btn-primary btn-info"><span class="bi bi-person-fill"><i
                                        class="fa fa-plus"></i></span>Add New Result</a> -->

                            <!-- /.col-sm-6 -->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                    <section class="section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat bg-primary" href="u_Admission.php">
                                        <?php
$sql1 ="SELECT id from s_admition ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>

                                        <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                        <span class="name">Admission Enquiry</span>
                                        <span class="bg-icon"><i class="fa fa-users"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat bg-danger" href="U_Contact.php">
                                        <?php
$sql ="SELECT id from  u_contact ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                        <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                        <span class="name">University Contact</span>
                                        <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat bg-warning" href="S_Of_E_Contact.php">
                                        <?php
$sql2 ="SELECT id from s_of_e_contact";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalclasses=$query2->rowCount();
?>
                                        <span class="number counter"><?php echo htmlentities($totalclasses);?></span>
                                        <span class="name">Departments Contact</span>
                                        <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat bg-success" href="S_Of_E_Contact.php">
                                        <?php
$sql3="SELECT  distinct StudentId from  tblresult ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totalresults=$query3->rowCount();
?>

                                        <span class="number counter"><?php echo htmlentities($totalresults);?></span>
                                        <span class="name">Results Declared</span>
                                        <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                 

                            </div>
                            <!-- /.row -->
                             
                        </div>
                        
                        <!-- /.container-fluid -->
                    </section>
                    <!-- /.section -->






                    <section class="section">
                        <div class="container-fluid">
                            <div class="row">
                                

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat bg-danger" href="u_studentAdd.php">
                                        <?php
$sql ="SELECT id from  student_data ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalsubjects=$query->rowCount();
?>
                                        <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                        <span class="name">Total Sutents</span>
                                        <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                    </a>
                                    <!-- /.dashboard-stat -->
                                </div>
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                          
                                <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                 

                            </div>
                            <!-- /.row -->
                             
                        </div>
                        
                        <!-- /.container-fluid -->
                    </section>
                    <!-- /.section -->




                    

                </div>
                <!-- /.main-page -->


            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="../urms\js/jquery/jquery-2.2.4.min.js"></script>
    <script src="../urms\js/jquery-ui/jquery-ui.min.js"></script>
    <script src="../urms\js/bootstrap/bootstrap.min.js"></script>
    <script src="../urms\js/pace/pace.min.js"></script>
    <script src="../urms\js/lobipanel/lobipanel.min.js"></script>
    <script src="../urms\js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->
    <script src="../urms\js/prism/prism.js"></script>
    <script src="../urms\js/waypoint/waypoints.min.js"></script>
    <script src="../urms\js/counterUp/jquery.counterup.min.js"></script>
    <script src="../urms\js/amcharts/amcharts.js"></script>
    <script src="../urms\js/amcharts/serial.js"></script>
    <script src="../urms\js/amcharts/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
    <script src="../urms\js/amcharts/themes/light.js"></script>
    <script src="../urms\js/toastr/toastr.min.js"></script>
    <script src="../urms\js/icheck/icheck.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="../urms\js/main.js"></script>
    <script src="../urms\js/production-chart.js"></script>
    <script src="../urms\js/traffic-chart.js"></script>
    <script src="../urms\js/task-list.js"></script>
    <script>
    $(function() {

        // Counter for dashboard stats
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        // Welcome notification
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("Welcome to student Result Management System!");

    });
    </script>
</body>


<style>
.foot {
    text-align: center;
    */
}
</style>

</html>
