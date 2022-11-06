<!DOCTYPE html>

<html>
    <head>
        <title>report page</title>
        <style>
            body
            {
                background-color: #54E1E1;
            }
            header {
                background-color: #3B9C9C;
            }

            .sidenav
            {
                height: 100%;
                width: 250px;
                position: fixed;
                background-color: #A8DBD6;
                text-align: center;
            }
            td
            {
                border-radius: 10px;
                background-color: #FFFBF0;
            }
            .center
            {
                margin:auto;
                width: 200px;
                padding: 10px;
            }
        </style>
    </head>
    <header>
        <table>
            <tr>
            <td>
            <img src="images/umplogo.png" width="80" height="100" style="padding: 10px;"> 
            </td>
            <td>
            <h1 style="padding: 12px;" >FOODY</h1>
            </td>
        </table>
        
    </header>
    <body>
        <div class="sidenav center">
                <table>
                    <tr>
                        <th><img src="images/adminlogo.png" width="150" height="150"></th>
                    </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><a href="homepage_admin.php">Homepage</a> </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><a href="QRcodeAdmin.php">QR code</a> </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><a href="report.php">Report</a></td>
                </tr>
            </table>
        </div>

<div class="center"> 

<?php
include("dbase.php");

// calculate admin 
$query_admin = "SELECT * FROM user WHERE usertype = 'admin'";
$result_admin = mysqli_query($conn,$query_admin);
$total_admin = 0;

if (mysqli_num_rows($result_admin) > 0){
    while($row = mysqli_fetch_assoc($result_admin)){
    $total_admin = $total_admin + 1;
    }
} else {
    echo "0 results";

}      

// calculate restaurant owner 
$query_RO = "SELECT * FROM user WHERE usertype = 'RO'";
$result_RO = mysqli_query($conn,$query_RO);
$total_RO = 0;

if (mysqli_num_rows($result_RO) > 0){
    while($row = mysqli_fetch_assoc($result_RO)){
    $total_RO = $total_RO + 1;
    }
} else {
    echo "0 results";

} 

// calculate General User 
$query_GU = "SELECT * FROM userprofile";
$result_GU = mysqli_query($conn,$query_GU);
$total_GU = 0;

if (mysqli_num_rows($result_GU) > 0){
    while($row = mysqli_fetch_assoc($result_GU)){
    $total_GU = $total_GU + 1;
    }
} else {
    echo "0 results";

} 

// calculate Rider 
$query_rider = "SELECT * FROM user WHERE usertype = 'rider'";
$result_rider = mysqli_query($conn,$query_rider);
$total_rider = 0;

if (mysqli_num_rows($result_rider) > 0){
    while($row = mysqli_fetch_assoc($result_rider)){
    $total_rider = $total_rider + 1;
    }
} else {
    echo "0 results";

}

//test calculate 
$query_pekan = "SELECT * FROM userprofile WHERE address like 'pekan'";
$result_pekan = mysqli_query($conn,$query_pekan);
$total_pekan = 0;

if (mysqli_num_rows($result_pekan) > 0){
    while($row = mysqli_fetch_assoc($result_pekan)){
    $total_pekan = $total_pekan + 1;
    }
} else {
    echo "0 results";

}


?>

<?php
//$userdata = [$total_admin, $total_RO, $total_GU, $total_rider];

        $sata = array("0", "1");

        echo "{$sata}";

?>



<!-- output user type -->
<h3>Total User Based On User Type</h3><br><br>
<td>Total Administrator : [<?php echo $total_admin; ?>]</td><br><br>
<td>Total Restaurant Owner : [<?php echo $total_RO; ?>]</td><br><br>
<td>Total General User : [<?php echo $total_GU; ?>]</td><br><br>
<td>Total Rider : [<?php echo $total_rider; ?>]</td><br><br>


<!-- test output address -->
<h3>Total User Based On Address</h3><br><br>
<td>Total in Pekan : [<?php echo $total_pekan; ?>]</td><br><br>
<td>Total Outside Pekan : [<?php echo $total_GU - $total_pekan; ?>]</td><br><br>

</div> 

<div align="center">[ <a href="homepage_admin.php">Homepage</a> |
<a href="GraphView.php">Graph View</a> ] </div>

    </body>
</html>