<?php
    echo $_GET['name'];
    echo $_GET['age'];
    //print server details
    echo "<pre>";
    print_r($_SERVER['HTTP_HOST']);
    echo "</pre>";
    

?>

<!--
    // <?php
// include 'connect.php';
// ?>
// <?php
// $id =180139;
// $date = date("Y-m-d");

// $sql = "SELECT * FROM `atttendance` WHERE roll = '$id' AND att_time = '{$date}' limit 1";
//     $result = mysqli_query($con, $sql);
//     if ($result) {
//     if($row = mysqli_fetch_assoc($result)){
//         if($row['attendance'] == 'present'){
//             echo $row['roll']. " present";
//         }
//     }
//     else{
//         echo $id. " absent";
//     }
// }
    // $row = mysqli_fetch_assoc($result);
    // // if ($result) {
    // //   while ($row = mysqli_fetch_assoc($result)) {
    // //     $id = $row['id'];
    // //     $name = $row['name'];
    // //     $email = $row['email'];
    // //     $mobile = $row['mobile'];
    // //     $img_name = $row['img_file_name'];
    // //   }
    // echo "<pre>";
    // print_r($row['att_time']);
    // echo "</pre>";
    // $date = date("Y-m-d");
    // echo $date;

    // if($date == $row['att_time']){
    //     echo "present";
    // }

//?> 