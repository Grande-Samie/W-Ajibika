<?php
session_start();
include('include/config.php');

if (strlen($_SESSION['id']) == 0) {
    header('location:index.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS || Announcements</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 50px auto;
            padding: 20px;
            max-width: 800px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            color: #007bff;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
    </style>
</head>

<body>
    <?php include('include/sidebar.php'); ?>
    <?php include('include/header.php'); ?>

    <div class="container">
        <h2>Announcements</h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Posted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = mysqli_query($con, "SELECT * FROM announcements ORDER BY posted_at DESC");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($query)) {
                    ?>  
                    <tr>
                        <td><?php echo htmlentities($cnt); ?></td>
                        <td><?php echo htmlentities($row['title']); ?></td>
                        <td><?php echo htmlentities($row['content']); ?></td>
                        <td><?php echo htmlentities($row['posted_at']); ?></td>
                    </tr>
                    <?php $cnt = $cnt + 1; } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Required Js -->
    <script src="../admin/assets/js/vendor-all.min.js"></script>
    <script src="../admin/assets/js/plugins/bootstrap.min.js"></script>
    <script src="../admin/assets/js/pcoded.min.js"></script>
</body>

</html>
<?php } ?>
