<?php session_start();

                $conn = mysqli_connect('localhost','root','qwe123','mydb');
                $id = $_SESSION['userId'];
                $name = $_SESSION['username'];
                $title = $_POST['title'];
                $money = $_POST['money'];               
                $content = $_POST['content'];
                $kind = $_POST['kind'];
                $img = $_FILES['myfile']['name'];
                        
                
        
                $URL = './board.php';                  
                $sql = "INSERT INTO writeboard(id, name, title, money, content, kind, img) VALUES('$id','$name','$title','$money','$content','$kind','$img');";
                echo $sql;

                $uploads_dir = './img';
                $name = $_FILES['myfile']['name'];
               // echo $_FILES['myfile']['tmp_name'];
               // echo $uploads_dir/$name;
                move_uploaded_file( $_FILES['myfile']['tmp_name'], "$uploads_dir/$name");

                $result = mysqli_query($conn, $sql);
                if($result){
                ?>                 
             <script>


                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>-->
                <?php
                } else{
                        
                        echo "Fail";
                }
 
                mysqli_close($connect);
?>
