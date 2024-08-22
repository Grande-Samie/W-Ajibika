<?php
session_start();
include('include/config.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    date_default_timezone_set('Asia/Kolkata'); // change according timezone
    $currentTime = date('d-m-Y h:i:s A', time());

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $query = mysqli_query($con, "INSERT INTO announcements(title, content, posted_at) VALUES('$title', '$content', '$currentTime')");
        if ($query) {
            $msg = "Announcement posted successfully!";
        } else {
            $error = "Something went wrong. Please try again.";
        }
    }
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            color: white;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #28a745;
        }
        .alert-danger {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <?php include('include/sidebar.php');?>
    <?php include('include/header.php');?>

    <div class="container">
        <h2>Post New Announcement</h2>
        <hr>

        <?php if (isset($msg)) { ?>
            <div class="alert alert-success"><?php echo htmlentities($msg); ?></div>
        <?php } ?>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?php echo htmlentities($error); ?></div>
        <?php } ?>

        <form method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" rows="5" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Post Announcement</button>
        </form>

        <div class="table-responsive">
            <h2>Existing Announcements</h2>
            <hr>
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
