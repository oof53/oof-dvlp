<html lang="pt-br">
<head>
    <title>contador</title>
    <meta charset="utf-8">
    <style type="text/css">
        .tipo1{
            background: linear-gradient(to right, red,yellow);
            width: 200px;
            height:200px;
        }
        #posicao{
            position: relative;
            left: 30px;
            top: 20px;
            font-size: 50px;

        }
        p{
            padding: 10px;
            
        }
        a:link{  
            color: black;    
            text-decoration: none ;
        }


    </style>
    <?php 

        $users = 1234; 
        fwrite($fd, $users); 
        fclose($fd); 
    ?>

</head>
<body>
    <div id="posicao" class="tipo1">
        <p> <center>
            <a href="counter.php">     
                <?php echo "$users"; ?>
            </a>     
        </center></p>
    </div>
    <br><br><br><br>    
    <a href="../index.html"> voltar </a>
</body> 
</html>
