<?php 
require 'functions.php';
$id = $_GET['id'];

if(delete($id) > 0) {
    echo "
    <script>
     alert('Delete Successfully');
     document.location.href = 'characters.php';
    </script>";
}else{
    echo "
    <script>
    alert('Failure')
    document.location.href = 'characters.php';
    </script>";
};
?>