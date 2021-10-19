<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Gra w wisielca!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <style>
        @import url("style.css")
    </style>
    <script>
    
        <?php
        $defaultHaslo = "Ala ma kota";
        
        if(isset($_POST['haslo'])){
            echo 'var haslo = `'.$_POST['haslo'].'`;';
        } else {
            echo 'var haslo = `'.$defaultHaslo.'`;';
        }
        ?>
        
    </script>
</head>

<body id="body">
    <div id="logo"></div>
    <div id="bot">Odgadnij hasło!</div>
    <div id="container">
        <div id="keyword"></div>
        <div id="game">
            <img src="img/s0.jpg" alt="">
        </div>
        <div id="alp"></div>
        <div style="clear:both;"></div>
    </div>
    <form action="index.php" method="post">
        <input type="password" id="has" name="haslo">
        <input type="submit" value="Zmien Haslo" onclick="bierzhaslo()">
    </form>
    
        <script src="script.js"></script>
    <!--
    <script>
        function bierzhaslo(){
            var haslo = document.getElementById("has").value;
        }
    </script>
    -->
</body></html>