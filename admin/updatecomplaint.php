<?php
session_start();
include('include/config.php');
// require 'vendor/autoload.php'; // Adjust the path if necessary

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {
        $complaintnumber = $_GET['cid'];
        $status = $_POST['status'];
        $remark = $_POST['remark'];

        // Insert remark into the complaintremark table
        $query = mysqli_query($con, "INSERT INTO complaintremark(complaintNumber, status, remark) VALUES('$complaintnumber', '$status', '$remark')");

        // Update status in the tblcomplaints table
        $sql = mysqli_query($con, "UPDATE tblcomplaints SET status='$status' WHERE complaintNumber='$complaintnumber'");

        // Fetch user ID based on complaint number
        $userIdQuery = mysqli_query($con, "SELECT userId FROM tblcomplaints WHERE complaintNumber='$complaintnumber'");
        $userId = mysqli_fetch_assoc($userIdQuery)['userId'];

        // Fetch client email based on user ID
        $clientQuery = mysqli_query($con, "SELECT userEmail FROM users WHERE id='$userId'");
        $clientEmail = mysqli_fetch_assoc($clientQuery)['userEmail'];

        // Send email to the client using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'mail.taugreensolutions.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'wajibika.kywp@taugreensolutions.net';
            $mail->Password = 'Grande@2$24$';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('wajibika.kywp@taugreensolutions.net', 'Wajibika Complaint Management Team');
            $mail->addAddress($clientEmail); // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Complaint Status Update';
            $mail->Body = "Dear Client,<br><br>Your complaint with number <strong>$complaintnumber</strong> has been updated to the following status: <strong>$status</strong>.<br><br>Remark: $remark<br><br>Thank you for your patience.<br><br>Best regards,<br>Complaint Management Team";
            $mail->AltBody = "Dear Client,\n\nYour complaint with number $complaintnumber has been updated to the following status: $status.\n\nRemark: $remark\n\nThank you for your patience.\n\nBest regards,\nComplaint Management Team";

            $mail->send();
            echo "<script>alert('Complaint details updated successfully and email sent to client');</script>";
        } catch (Exception $e) {
            echo "<script>alert('Complaint details updated successfully, but email could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        }
    }
?>
<script language="javascript" type="text/javascript">
function f2() {
    window.close();
}
function f3() {
    window.print(); 
}
</script>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
form {
    width: 100%;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
td {
    padding: 10px;
    vertical-align: top;
}
select, textarea, input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #0056b3;
}
h2 {
    margin-bottom: 20px;
    color: #007bff;
}
.alert {
    padding: 10px;
    margin-bottom: 20px;
    color: white;
    background-color: #007bff;
    border-radius: 4px;
}
</style>
</head>
<body>

<div class="container">
    <h2>Update Complaint Status</h2>
    <form name="updateticket" id="updatecomplaint" method="post"> 
        <table>
            <tr>
                <td><b>Complaint Number</b></td>
                <td><?php echo htmlentities($_GET['cid']); ?></td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>
                    <select name="status" required="required">
                        <option value="">Select Status</option>
                        <option value="in process">In Process</option>
                        <option value="closed">Closed</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Remark</b></td>
                <td><textarea name="remark" cols="50" rows="10" required="required"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Submit"></td>
            </tr>
            <tr>
                <td></td>
                <td><input name="Submit2" type="submit" value="Close this window" onClick="return f2();" style="cursor: pointer;" /></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>

<?php } ?>
