<?php session_start();

$idx = $_GET['buy'];

$conn = mysqli_connect("localhost","root","qwe123","mydb");
$sql = "SELECT * FROM writeboard where idx='".$idx."'" ;
$result = mysqli_query($conn, $sql);
$ro = mysqli_fetch_array($result);

$ro['money'];

$conn1 = mysqli_connect("localhost","root","qwe123","mydb");
$sql1 = "SELECT * FROM user where id='".$_SESSION['userId']."'" ;
$result1 = mysqli_query($conn1, $sql1);
$ro1 = mysqli_fetch_array($result1);

$ro1['money'];



if ($ro1['money']>=$ro['money']) {
    $sq2 = "UPDATE user SET MONEY=money - ".$ro['money'] ." where id = '".$_SESSION['userId']."'";
    $sq3 = "DELETE FROM writeboard where idx='".$idx."'";
    $sq4 = "UPDATE user SET MONEY=money + ".$ro['money'] ." where id = '".$ro['id']."'";
    $result4 = mysqli_query($conn, $sq4);
    $result2 = mysqli_query($conn, $sq2);
    $result3 = mysqli_query($conn, $sq3);

    ?><script>
    alert("구매완료");
    location.href = "board.php";
    </script><?php
} else {
?>
    <script>
        alert("돈이 부족합니다.");
        location.href = "board.php";
    </script>
<?php
}
?>