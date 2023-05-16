<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>

<body>
    <form action="charge1.php" method="GET" id="signup-form">
        <div class="w-50 ml-auto mr-auto mt-5">
        <div class="mb-3 ">
                <label for="money" class="form-label">충전</label>
                <input type="money" name="money" class="form-control" id="money" placeholder="충전할 금액을 입력하시오">
            </div>
            <input type='submit' id="signup-button" class="btn btn-primary mb-3"value="충전"></input>
            
        </div>
    </form>
   
</body>

</html>
