<?php session_start();

$idx = $_GET['exc1'];
$money = $_GET['money'];
$exMoney = $_GET['exMoney'];
$exidx =$_GET['exidx'];

$conn1 = mysqli_connect("localhost","root","qwe123","mydb");
$sql1 = "SELECT * FROM user where id='".$_SESSION['userId']."'" ;
$result1 = mysqli_query($conn1, $sql1);
$ro1 = mysqli_fetch_array($result1);

$ro1['money'];

if ($_GET['exMoney'] == $_GET['money']) {
    $sq1 = "DELETE FROM writeboard where idx='".$idx."'";
    $sq2 = "DELETE FROM writeboard where idx='".$exidx."'";
    $result1 = mysqli_query($conn1, $sq1);
    $result2 = mysqli_query($conn1, $sq2);

    ?><script>
    alert("교환완료");
    location.href = "board.php";
    </script><?php
} else {
?>
    <script>
        alert("교환실패");
        location.href = "board.php";
    </script>
<?php
}
?>






