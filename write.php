<?php session_start();
?>
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 150px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {

                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
 
</style>
<body>
        <form method = "post" action = "write_action.php" enctype= "multipart/form-data">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글작성</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>ID</td>
                        <td><?php echo $_SESSION['userId']; ?></td>
                        </tr>

                        <tr>
                        <td>작성자</td>
                        <td><?php echo $_SESSION['username']; ?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type=text name=title size=60></td>
                        </tr>

                        <tr>
                        <td>가격</td>
                        <td><input type=text name=money size=60></td>
                        </tr>

                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15></textarea></td>
                        </tr>

                    
 
                    
                        </table>
                        <div>
                        <select name="kind">
                        <option value="악기">악기</option>
                        <option value="가전제품">가전제품</option>
                        <option value="책">책</option>
                        <option value="컴퓨터 기기">컴퓨터 기기</option>
                        <option value="생활용품">생활용품</option>
                        </select>
                       
                        <form enctype='multipart/form-data' action='write_action.php' method='post'>
	                <input type='file' name='myfile'>
	
        
                        <center>
                        <input type = "submit" value="작성">
                        </center>
                        </form>
                </td>
                </tr>
        </table>
        </form>
</body>
</html>
