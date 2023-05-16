<?php session_start();


$conn = mysqli_connect("localhost","root","qwe123","mydb");
date_default_timezone_set("Asia/Seoul");
$date = date('Y-m-d H:i:s');
$id=$_GET['id'];
$pw=$_GET['pw'];
$name=$_GET['name'];
$password=$_GET['password'];

$sql = "INSERT INTO user (id, name, password, created, money) VALUES('{$id}','{$name}', '{$password}', '{$date}','0')";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "index.php";
    </script>
<?php
}
?>
