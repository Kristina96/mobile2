<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<script src="jquery/jquery.min.js"></script>

  <link rel="stylesheet" href="jquery/jquery.mobile.icons-1.4.5.min.css">
  <link rel="stylesheet" href="jquery/jquery.mobile.structure-1.4.5.min.css">
  <link rel="stylesheet" href="jquery/jquery.mobile.theme-1.4.5.min.css">
  <link rel="stylesheet" href="jquery/jquery.mobile-1.4.5.min.css">
  <script src="jquery/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div data-role="page" data-theme="b"> <!--div обертка с атрибутом data-role, использутся для разделения контента на страницы под мобильное утройство-->
        <div data-role="header">
            <h1>Изучаем jquery</h1>
        </div>
        <div data-role="content" class="ui-content" role="main">
            <h2>Авторизация</h2>
            <p>Авторизуйтесь, чтобы продолжить работу</p>
            <form method="post" action="" id="formAuth">
            <input type="text" name="login" placeholder="Логин" required>
            <input type="text" name="pass" placeholder="Пароль" required>
            <input type="submit" name="go-auth" value="Войти">
            </form>
    
            <input type="button" value="Регистрация" id="btnReg">
            
            <form method="post" action="" id="formReg">
                <fieldset> 
                    <div data-role="fieldcontain">
                        <input type="text" name="name" placeholder="Имя" required>
                        <input type="text" name="login" placeholder="Логин" required>
                        <input type="password" name="pass" placeholder="Пароль" required>
                        <input type="email" name="email" placeholder="email" required>

                        <input type="submit" name="go-reg" value="Зарегистрироваться">
                    </div>
                </fieldset>
            </form>
        </div>
    
        </div>
    <script src="script.js"></script>
</body>
</html>