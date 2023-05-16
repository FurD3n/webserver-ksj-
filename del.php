<?php session_start();

$idx = $_GET['del'];

$conn = mysqli_connect("localhost","root","qwe123","mydb");
$sql = "SELECT * FROM writeboard where idx='".$idx."'" ;
$result = mysqli_query($conn, $sql);
$ro = mysqli_fetch_array($result);

$ro['id'];



if ($ro['id'] == $_SESSION['userId'] ) {
    $sq2 = "DELETE FROM writeboard where idx='".$idx."'";
    $result4 = mysqli_query($conn, $sq2);
    

    ?><script>
    alert("삭제완료");
    location.href = "board.php";
    </script><?php
} else {
?>
    <script>
        alert("삭제 불가능.");
        location.href = "board.php";
    </script>
<?php
}
?>