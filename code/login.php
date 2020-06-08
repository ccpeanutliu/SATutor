<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DataBaseLogin</title>
    <style>
        /*html {
            background-color: #B5DEF2;
        }*/
        
        .wrapper {
            margin: 140px 0 240px auto;
            width: 1384px;
        }
        
        .loginBox {
            background-color: #F0F4F6;
            /*上divcolor*/
            border: 1px solid #BfD6E1;
            border-radius: 5px;
            color: #444;
            font: 14px 'Microsoft YaHei', '微軟雅黑';
            margin: 0 auto;
            width: 388px
        }
        
        .loginBox .loginBoxCenter {
            border-bottom: 1px solid #DDE0E8;
            padding: 24px;
        }
        
        .loginBox .loginBoxCenter p {
            margin-bottom: 10px
        }
        
        .loginBox .loginBoxButtons {
            /*background-color: #F0F4F6;*/
            /*下divcolor*/
            border-top: 0px solid #FFF;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            line-height: 28px;
            overflow: hidden;
            padding: 20px 24px;
            vertical-align: center;
            filter: alpha(Opacity=80);
            -moz-opacity: 0.5;
            opacity: 0.5;
        }
        
        .loginBox .loginInput {
            border: 1px solid #D2D9dC;
            border-radius: 2px;
            color: #444;
            font: 12px 'Microsoft YaHei', '微軟雅黑';
            padding: 8px 14px;
            margin-bottom: 8px;
            width: 310px;
        }
        
        .loginBox .loginInput:FOCUS {
            border: 1px solid #B7D4EA;
            box-shadow: 0 0 8px #B7D4EA;
        }
        
        .loginBox .loginBtn {
            background-image: -moz-linear-gradient(to bottom, blue, #85CFEE);
            border: 1px solid #98CCE7;
            border-radius: 20px;
            box-shadow: inset rgba(255, 255, 255, 0.6) 0 1px 1px, rgba(0, 0, 0, 0.1) 0 1px 1px;
            color: #444;
            /*登入*/
            cursor: pointer;
            float: right;
            font: bold 13px Arial;
            padding: 10px 50px;
        }
        
        .loginBox .loginBtn:HOVER {
            background-image: -moz-linear-gradient(to top, blue, #85CFEE);
        }
    </style>
</head>
<body id = "top" background="giraffe.jpg">
    <div class="wrapper">
        <form action="login.php" method="post">
            <div class="loginBox">
                <div class="loginBoxCenter">
                    <p><label for="username">Please enter your Account：</label></p>
                    <!--autofocus 規定當頁面載入時按鈕應當自動地獲得焦點。 -->
                    <!-- placeholder提供可描述輸入欄位預期值的提示資訊-->
                    <p><input type="text" id="text" name="UID" class="loginInput" autofocus="autofocus" required="required" autocomplete="off" placeholder="UID" value="" /></p>
                    <!-- required 規定必需在提交之前填寫輸入欄位-->
                    <p><label for="password">Please enter your password：</label></p>
                    <p><input type="password" id="password" name="Password" class="loginInput" required="required" placeholder="Password" value="" /></p>
                </div>
                <div class="loginBoxButtons">
                    <button class="loginBtn">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
