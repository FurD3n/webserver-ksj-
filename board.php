<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - DISE 중고장터 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<?php
$connect = mysqli_connect("localhost","root","qwe123","mydb");
$sqli = "SELECT * FROM user where name='".$_SESSION['username']."'";
$result = mysqli_query($connect, $sqli);
$rop = mysqli_fetch_array($result);
?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DISE 중고장터</a>
      <div> <?php echo $_SESSION['username'].'님 현재 금액은:'.$rop['money']; ?>
      <a href='./charge.php'><input type="button" name ='charge' value='충전'></a>
</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./board.php">메인메뉴
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./write.php">글 작성</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./logoutprocess.php">로그아웃</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">중고장터 목록</h1>
        <div class="list-group">
          <a href="./compare.php?data=악기" class="list-group-item">악기</a>
          <a href="./compare.php?data=가전제품" class="list-group-item">가전제품</a>
          <a href="./compare.php?data=책" class="list-group-item">책</a>
          <a href="./compare.php?data=컴퓨터기기" class="list-group-item">컴퓨터 기기</a>
          <a href="./compare.php?data=생활용품" class="list-group-item">생활용품</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="./sch.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./sf.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./sch.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
          <div class="row" style="display:inline-block; position:relative;">
          <?php

        $conn = mysqli_connect("localhost","root","qwe123","mydb");
        $sql = "SELECT * FROM writeboard order by idx asc";
        $result = mysqli_query($conn, $sql);
       
        while($row = mysqli_fetch_array($result)){
         echo '<div class="col-lg-4 col-md-6 mb-4" style="display:inline-block;width:429.35; height:885; float:left;">';
         echo '<div class="card h-100" style="display:inline-block;">';
         echo '<a href="#"><img style="width:429.35; height:885; display:inline-block;" class="card-img-top" src="./img/'.$row['img'].'"></a>';
         echo '<div class="card-body">';
         echo '<h4 class="card-title">';
         echo '<a href="#">'.$row["name"].'</a>';
         echo '</h4>';
         echo '<h5>'.$row["kind"].'</h5>';
         echo '<h5>'.$row["title"].'</h5>';
         echo '<h5>'.$row["money"].'</h5>'; 
         echo '<p>'.$row["content"].'</p>'; 
         echo '</div>'; 
         echo '<div class="card-footer">'; 
         echo '<a href=./buy.php?buy='.$row['idx'].'><input type="button" name= buy value = 구매></a>';
         echo '<a href=./excchoos.php?exc='.$row["name"].'&exMoney='.$row["money"].'&exidx='.$row['idx'].'><input type="button" name= buy value = 교환></a>';
         echo '<a href=./del.php?del='.$row['idx'].'><input type="button" name= buy value = 삭제></a>';
        echo '</div>' ;
        echo '</div>' ;
        echo '</div>' ;
         
}

        ?>
</div>        
        
          
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
