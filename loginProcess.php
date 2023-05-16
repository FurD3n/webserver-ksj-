<?php
session_start();
$conn = mysqli_connect("localhost","root","qwe123","mydb");
//아이디 비교와 비밀번호 비교가 필요한 시점이다.
// 1차로 DB에서 비밀번호를 가져온다 
// 평문의 비밀번호와 암호화된 비밀번호를 비교해서 검증한다.
$id = $_GET['id'];
$password = $_GET['password'];

// DB 정보 가져오기 
$result = mysqli_query($conn, "select * from user where id = '$id' and password = '$password'");


if ($result->num_rows > 0) {
    // 로그인 성공
    // 세션에 id 저장
    $row = $result->fetch_assoc();
    $_SESSION['userId'] = $row['id'];
    $_SESSION['username'] = $row['name'];

?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "board.php";
    </script>
<?php
} 
else {
    // 로그인 실패 

?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "index.php";
    </script>
<?php
}

?>
