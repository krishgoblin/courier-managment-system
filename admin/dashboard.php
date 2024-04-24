<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>
<html>
<style>
        /* Button styles */
        .button {
            background-color: #2ab7ca; /* Green background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 15px 32px; /* Padding */
            text-align: center; /* Center text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Display as inline-block */
            font-size: 16px; /* Font size */
            margin: 4px 2px; /* Margin */
            transition-duration: 0.4s; /* Transition duration */
            cursor: pointer; /* Cursor pointer */
            border-radius: 10px; /* Border radius */
        }

        /* Button hover effect */
        .button:hover {
            background-color: #45a049; /* Darker green on hover */
            color: white; /* White text on hover */
        }
</style>
<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:aliceblue;">LoginAsUser</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Welcome To Admin Dashbord</h1>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: center;color:lightblue;font-weight:bold;font-size:50px">
    
    <a href="deletedata.php" class="button">Delete Data</a><br><br>

    <a href="deleteusers.php" class="button">Delete Users</a><br><br>
</form>

</div>
</body>
</html>