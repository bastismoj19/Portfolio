<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/bulma.css">
    <script src="assets/js/jquery.js"></script>
    <style>
        body {
            color: white;
            background: url('../assets/image/bgimg.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }
        #form {
            background-color: pink;
            width: 25%;
            margin: 120px auto;
            padding: 30px;
            margin-top: -40%;
            box-shadow: 10px 10px 10px rgb(82, 11, 77);
            border-radius: 10px;
            color: black;
            z-index: 100;
        }
    </style>

</head>
<body>
    <img src="assets/image/bgimg.jpg" alt="">
    <div id="form" method="post">
        <form action="">
            <label>Username:</label><br>
            <input style="background: transparent; border-color: pink;" type="text" id="username" class="input" name="username" required><br>
            <label>Password:</label><br>
            <input style="background: transparent; border-color: pink;" type="password" id="password" class="input" name="password" required><br><br>
            <button class="button loginButton" style="margin-left: 37%; background: transparent; border-color: pink; ">Login</button>
        </form>
    </div>
    
    
    <script>
        $(function(){
            $(".loginButton").click(function(){
                var username = document.getElementById('username').value.toLowerCase();
                var password = document.getElementById('password').value.toLowerCase();
                if (username == "wjbastismo" && password == "basti"){
                    window.location.href = "htmlpages/portfolio.html";
                    alert('Welcome, Walter James!')
                } else {
                    alert('Incorrect username and password!');
                };
            }); 
        }); 
    </script>
</body>
</html>
