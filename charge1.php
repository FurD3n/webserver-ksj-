<?php session_start();

$conn = mysqli_connect("localhost","root","qwe123","mydb");
$hashedPassword = password_hash($_GET['password'], PASSWORD_DEFAULT);
date_default_timezone_set("Asia/Seoul");
$date = date('Y-m-d H:i:s');
$sql = "UPDATE user SET MONEY=money + ".$_GET['money']." where id = '".$_SESSION['userId']."'";

   
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "충전에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("충전이 완료되었습니다");
        location.href = "board.php";
    </script>
<?php
}
?>
