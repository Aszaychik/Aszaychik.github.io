<?php 
// Database Connect
$conn = mysqli_connect("localhost","root","","aszaychik");

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function insert($w_data) {
    global $conn;
    $w_name = htmlspecialchars($w_data['w_name']);
    $w_id = htmlspecialchars($w_data['w_id']);
    $w_age = htmlspecialchars($w_data['w_age']);
    $w_gender = htmlspecialchars($w_data['w_gender']);
    $w_from = htmlspecialchars($w_data['w_from']);
    $w_pict = htmlspecialchars($w_data['w_pict']);

    $query = "INSERT INTO waifu VALUES('','$w_name','$w_id','$w_age','$w_gender','$w_from','$w_pict')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function delete($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM waifu WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?> 