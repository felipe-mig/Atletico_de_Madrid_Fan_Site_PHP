<?php
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $n = FALSE;
            $p = FALSE;
            if($uname == NULL || $pwd == NULL){
                $body = '<body onload="bounce()">';
            }
            if(strtolower($uname) != 'admin'){
                $body = '<body onload="bounce()">';
                 $n = FALSE;
            }else{
                $n = TRUE;
            }
            if(strtolower($pwd) != 'admin'){
                $body = '<body onload="bounce()">';
                $p = FALSE;
            }else{
                $p = TRUE;
            }
            if(($n == $p) && ($n == TRUE)){
                $body = '<body>';
            }else{
                $body = '<body onload="bounce()">';
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
            @font-face {
                font-family: po;
                src: url(../fonts/Poppins-Regular.ttf);
            }
            @font-face {
                font-family: ua;
                src: url(../fonts/Montalban.otf);
            }
    </style>
</head>
<body> 
    <div class="wrapper2">
    <a href="index.php" id="return-btn">[Return to home page]</a>
    <h1>Welcome to the Rojiblanca family</h1>
    </div>
        <?php echo $body; ?>
            <!-- <a href="index.php">[Return to home page]</a> -->

                <script>
                    function bounce(){
                        window.location.href="index.php";
                    }
                </script>
        
        <!-- echo "working\n";
        
        <a href="index.php">Return to home page</a> -->

</body>
</html>


