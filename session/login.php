<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN CSS</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            height:600px;
        }
        .login-box{
            background-color: white;
            width: 350px;
            padding : 30px 40px;
            border-radius: 15px;
            border: 1px solid rgb(100, 100, 252);
            box-shadow: 0 0 30px rgb(228, 82, 14);
        }
        h2{
            text-align: center;
            margin-bottom: 20px;
        }
        label{
            display: block;
            width: 100%;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input{
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button{
            background-color: rgb(190, 106, 9);
            color: white;
            padding: 10px;
            width: 100%;
            border: 1px solid gray;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color: rgb(84, 84, 246);
        }
        img{
            width: 100%;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <img src="../foto/shopee.png" alt="">
        <h2>Form Login</h2>
        <form action="proses_login.php" method="POST">
            <label for="username">Username</label>
<<<<<<< HEAD
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>
=======
            <input type="text" name="username" id="username"><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br>
>>>>>>> e4a704a1ae68c4ca394e2c7382386f1076737ff9
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>