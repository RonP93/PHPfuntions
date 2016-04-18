 <?php
 
 if($_POST){
    //refereerd naar de method="post" dus dit word ook $_POST
    //action="" -> zelfde pagina
    //naam="celcius" -> dus $_POST['celcius']
    $celcius = $_POST['celcius'];
    //Berekend de formule
    $fahrenheit = ($celcius / 5*9)+32;
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Celcius naar Fahrenheit</title>
    </head>
    <body>
	<center>
	<h2>Hierin rekend u celcius naar fahrenheit</h2>
        <form action="" method="post">
        Celcius: <input type="text" name="celcius"/><br>
        <?php 
        //Laat de Fahrenheitwaarde zien nadat er een getal is ingevuld en op 'enter' gedrukt is
        if(isset($fahrenheit)){
            echo "Fahrenheit = ".$fahrenheit;
        }
        ?>
       </form>
	   <center>
    </body>
</html>
