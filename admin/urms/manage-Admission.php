<?php
include('includes/config.php');

// Handle record status changes
$msg = "";
if (isset($_GET['acid'])) {
    $acid = intval($_GET['acid']);
    $sql = "UPDATE S_admition SET status = 1 WHERE id = :acid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':acid', $acid, PDO::PARAM_INT);
    $query->execute();
    $msg = "Record Activated successfully";
}

if (isset($_GET['did'])) {
    $did = intval($_GET['did']);
    $sql = "UPDATE S_admition SET status = 0 WHERE id = :did";
    $query = $dbh->prepare($sql);
    $query->bindParam(':did', $did, PDO::PARAM_INT);
    $query->execute();
    $msg = "Record Deactivated successfully";
}

if (isset($_GET['delid'])) {
    $delid = intval($_GET['delid']);
    $sql = "DELETE FROM S_admition WHERE id = :delid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':delid', $delid, PDO::PARAM_INT);
    $query->execute();
    $msg = "Record Deleted successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manage Student Admission Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../urms/css/bootstrap.min.css">
    <link rel="stylesheet" href="../urms/css/font-awesome.min.css">
    <link rel="stylesheet" href="../urms/css/animate-css/animate.min.css">
    <link rel="stylesheet" href="../urms/css/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="../urms/css/prism/prism.css">
    <link rel="stylesheet" href="js/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../urms/css/main.css">
    <style>
        .succWrap { padding: 10px; margin-bottom: 20px; background: #fff; border-left: 4px solid #5cb85c; box-shadow: 0 1px 1px rgba(0,0,0,.1); }
        .errorWrap { padding: 10px; margin-bottom: 20px; background: #fff; border-left: 4px solid #dd3d36; box-shadow: 0 1px 1px rgba(0,0,0,.1); }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="top-navbar-fixed">
<div class="main-wrapper">
    <div class="content-wrapper">
        <div class="content-container">
            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6"><h2 class="title">Manage Student Admission Records</h2></div>
                        <div class="col-md-6 text-right">
                            <a href="u_studentAdd.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Student</a>
                        </div>
                    </div>
                    <?php if ($msg): ?>
                        <div class="succWrap"><strong>Success:</strong> <?= htmlentities($msg) ?></div>
                    <?php endif; ?>
                </div>
                <section class="section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading"><h5>Student Admission Records</h5></div>
                                    <div class="panel-body p-20">
                                        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>State</th>
                                                    <th>Course</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM S_admition";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                foreach ($results as $row):
                                                ?>
                                                <tr>
                                                    <td><?= $cnt++ ?></td>
                                                    <td><?= htmlentities($row->name) ?></td>
                                                    <td><?= htmlentities($row->gender) ?></td>
                                                    <td><?= htmlentities($row->email) ?></td>
                                                    <td><?= htmlentities($row->mobileno) ?></td>
                                                    <td><?= htmlentities($row->state) ?></td>
                                                    <td><?= htmlentities($row->course) ?></td>
                                                    <td><?= $row->status ? 'Active' : 'Inactive' ?></td>
                                                    <td>
                                                        <?php if ($row->status == 0): ?>
                                                            <a href="#" onclick="activateRecord(<?= $row->id ?>)"><i class="fa fa-check" style="color:green;" title="Activate"></i></a>
                                                        <?php else: ?>
                                                            <a href="#" onclick="deactivateRecord(<?= $row->id ?>)"><i class="fa fa-times" style="color:orange;" title="Deactivate"></i></a>
                                                        <?php endif; ?>
                                                        <a href="#" onclick="deleteRecord(<?= $row->id ?>)"><i class="fa fa-trash" style="color:red;" title="Delete"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Gender</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>State</th>
                                                    <th>Course</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> <!-- /.main-page -->
        </div> <!-- /.content-container -->
    </div> <!-- /.content-wrapper -->
</div> <!-- /.main-wrapper -->

<!-- Scripts -->
<script src="../urms/js/jquery/jquery-2.2.4.min.js"></script>
<script src="../urms/js/bootstrap/bootstrap.min.js"></script>
<script src="../urms/js/DataTables/datatables.min.js"></script>
<script>
    $(function () {
        $('#example').DataTable();
    });

    function activateRecord(id) {
        Swal.fire({
            title: 'Activate this record?',
            text: "This will mark the student as active.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, activate',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = 'u_Admission.php?acid=' + id;
            }
        });
    }

    function deactivateRecord(id) {
        Swal.fire({
            title: 'Deactivate this record?',
            text: "This will mark the student as inactive.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, deactivate',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = 'u_Admission.php?did=' + id;
            }
        });
    }

    function deleteRecord(id) {
        Swal.fire({
            title: 'Delete this record?',
            text: "This action cannot be undone.",
            icon: 'error',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = 'u_Admission.php?delid=' + id;
            }
        });
    }
</script>
</body>
</html>
