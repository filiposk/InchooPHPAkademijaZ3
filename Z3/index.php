<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <div id="panel">
            <p1 id="p1" class="vertical-text">
                INPUT
            </p1>
                <form id="form" action="tableCode.php" method="post">
                <input id="input" type="text" placeholder="BROJ REDAKA" name="number1"><br>
                <input id="input" type="text" placeholder="BROJ STUPACA" name="number2"><br>
                <input id="button" type="submit" value="SUBMIT"><br>
                </form>
             <p2 id="p2" class="vertical-text">
                OUTPUT
            </p2>
        <table id='table'></table>
    </div>
</div>


</body>
</html>