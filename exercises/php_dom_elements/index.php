<!DOCTYPE html>
<html>
<head>   
</head>
<body>
    <h1>current date/time: 
        <?php 
    $now = date('Y-m-d H:i:s');
    print($now)
        ?>
    </h1>
        <?php
            for($i=1;$i<=10;$i++){
        ?>
            <div> <?= $i ?> </div>
        <?php
        }
        ?>
</body>
</html>




