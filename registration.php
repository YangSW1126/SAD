<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <h1>建立帳戶</h1>
        <form action = "functions/registrationCheck.php" method = "post">
            <div class = "information">
                <div class = "input">
                    <label>電子郵件</label>
                    <input type = "email" name = "userEmail" placeholder = "請輸入電子郵件" required>
                    <span></span>
                </div>
                <div class = "input">
                    <label>密碼</label>
                    <input type = "pwd" name = "userPassword" id="password" placeholder = "請輸入密碼" required>
                    <span></span>
                </div>
                <div class = "input">
                    <label>再次確認密碼</label>
                    <input type = "pwd" id="confirm_password" placeholder = "請再次確認密碼" required>
                    <span></span>
                </div>
            </div>
            <div class = "button">
                <input type="submit" name = "register" value="註冊">
            </div>
        </form>
    </div>

    <script>
        var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("您輸入的兩個密碼並不相符，請再試一次");
            }else{
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

    </script>

</body>
</html>