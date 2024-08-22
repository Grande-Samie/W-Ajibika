
<?php
session_start();
include('include/config.php');
error_reporting(0);
if(strlen($_SESSION['id'])==0)
    {   
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$uid=$_SESSION['id'];
$category=$_POST['category'];
$subcat=$_POST['subcategory'];
$complaintype=$_POST['complaintype'];
$state=$_POST['state'];
$noc=$_POST['noc'];
$complaintdetials=$_POST['complaindetails'];
$compfile=$_FILES["compfile"]["name"];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
// get the image extension
$extension = substr($compfile,strlen($compfile)-4,strlen($compfile));

// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".pdf",".PDF",".doc","docx");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$compfilenew=md5($compfile).$extension;

// Code for move image into directory
move_uploaded_file($_FILES["compfile"]["tmp_name"],"complaintdocs/".$compfilenew);

$query = mysqli_query($con, "INSERT INTO tblcomplaints(userId, category, subcategory, complaintType, state, noc, complaintDetails, complaintFile, latitude, longitude) VALUES('$uid', '$category', '$subcat', '$complaintype', '$state', '$noc', '$complaintdetials', '$compfilenew', '$latitude', '$longitude')");
// code for show complaint number
$sql=mysqli_query($con,"select complaintNumber from tblcomplaints  order by complaintNumber desc limit 1");
while($row=mysqli_fetch_array($sql))
{
 $cmpn=$row['complaintNumber'];
}
$complainno=$cmpn;
echo '<script> alert("Your complain has been successfully filled and your complaintno is  "+"'.$complainno.'")</script>';
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Register Complaint</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function getCat(val) {
            $.ajax({
                type: "POST",
                url: "getsubcat.php",
                data: 'catid=' + val,
                success: function(data) {
                    $("#subcategory").html(data);
                }
            });
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }

        // Call getLocation when the page loads
        window.onload = getLocation;
    </script>
</head>

<body class="">
    <?php include('include/sidebar.php'); ?>
    <?php include('include/header.php'); ?>

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Register Complaint</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="register-complaint.php">Register Complaint</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Register Complaint</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <br />
                                    <form method="post" name="complaint" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="category">Category Name</label>
                                            <select name="category" id="category" class="form-control" onChange="getCat(this.value);" required="">
                                                <option value="">Select Category</option>
                                                <?php 
                                                $sql = mysqli_query($con, "SELECT id, categoryName FROM category");
                                                while ($rw = mysqli_fetch_array($sql)) {
                                                ?>
                                                    <option value="<?php echo htmlentities($rw['id']); ?>"><?php echo htmlentities($rw['categoryName']); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="subcategory">Sub Category</label>
                                            <select name="subcategory" id="subcategory" class="form-control">
                                                <option value="">Select Subcategory</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="complaintype">Complaint Type</label>
                                            <select name="complaintype" class="form-control" required="">
                                                <option value="Complaint">Complaint</option>
                                                <option value="General Query">General Query</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="state">Subcounty</label>
                                            <select name="state" required="required" class="form-control">
                                                <option value="">Select Subcounty</option>
                                                <?php 
                                                $sql = mysqli_query($con, "SELECT stateName FROM state");
                                                while ($rw = mysqli_fetch_array($sql)) {
                                                ?>
                                                    <option value="<?php echo htmlentities($rw['stateName']); ?>"><?php echo htmlentities($rw['stateName']); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="noc">Nature of Complaint</label>
                                            <input type="text" name="noc" required="required" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="complaindetails">Complaint Details (max 2000 words)</label>
                                            <textarea name="complaindetails" required="required" cols="10" rows="10" class="form-control" maxlength="2000"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="compfile">Complaint Related Doc (if any)</label>
                                            <input type="file" name="compfile" class="form-control">
                                        </div>
                                        <!-- Hidden fields for location -->
                                        <input type="hidden" id="latitude" name="latitude">
                                        <input type="hidden" id="longitude" name="longitude">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Required Js -->
    <script src="../admin/assets/js/vendor-all.min.js"></script>
    <script src="../admin/assets/js/plugins/bootstrap.min.js"></script>
</body>

</html>

<?php } ?>