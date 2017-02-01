<?php
header("Refresh: 5; URL=$_SERVER[HTTP_HOST]");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body onLoad="tiktak();">
<div>
    <h3>Somethings wrong!</h3>
    <script language="JavaScript" type="text/javascript">
        var second=5;
        function tiktak()
        {
            if(second<=9){second="0" + second;}
            if(document.getElementById){timer.innerHTML=second;}
            if(second==00){return false;}
            second--;
            setTimeout("tiktak()", 1000);
        }
    </script>
    Вы будете перенаправлены через <span id="timer"></span> секунд на главную страницу сайта.
</div>
</body>
</html>
