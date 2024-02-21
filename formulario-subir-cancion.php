<html>
<style>
    h1 {text-decoration-line:underline;}
    
    .cabezera {
        padding: 0px;
        margin-right: auto;
        margin-left: auto;
        background: url(cabezera.gif);
        width: 600px;
        height: 200px;
        border-style: hidden;
        border-radius: 20px;
        margin-top: 25px;
        margin-bottom: 50px;
    }
    
    .input { 
        background-color: rgb();
        border-style: solid;
        border-radius: 20px; 
        height: 35px;
        width: 300px;
        padding-left: 10px;
    }   
    
    #formulario {
        font-family: Arial, Helvetica, sans-serif;
        border-style: hidden;
        background-color:rgb();
        border-radius: 10px;
        box-shadow: 0px 0px 0px 1px rgb(0,0,0,0.2);
        margin-top: 25px;
        margin-right: auto;
        margin-left: auto;
        padding: 15px;
        width: 800px;
        
    }
    
    .datos {
        font-family: Arial, Helvetica, sans-serif;
        border-style: hidden;
        background-color:rgb(214, 199, 255);
        border-radius: 20px;
        box-shadow: 0px 0px 20px 20px rgb(214, 199, 255);
        margin-top: 50px;
        margin-right: auto;
        margin-left: auto;
        padding: 15px;
        width: 800px;
        line-height : 25px;


    }
    
    .error {
        color: red;
    }
    
</style>
    
<head>
</head>
<body>
<?php
//////////////////////////////////////////////////PHP
    
////////////// VARIABLES OBLIGATORIAS
$errornomcanço = $nomcanço
    
////////////// NOM    
    
        if (empty($_POST["nomcanço"])) {
            $errornom = "* El nom es obligatori.";
        }
    
        elseif (preg_match('/[\'"^£$%&;:*()}{@#~?<>,=_+¬-/]', $_POST["nomcanço"])) {
            $errornom =  "* El nom no pot contenir caràcters especials!";
        }
    
        else {
            $nombre = $_POST["nomcanço"];
        }   

?>
    
<!------FORMULARIO HTML------>
<div id=formulario>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            
        <b id="nom">Nom De la canço: </b>
        <input class="input" type="text" id="nomcanço" name="nomcanço" 
        value="<?php echo $nomcanço;?>">
        <span class="error"><?php echo $errornom; ?></span>
        <br>
        
        <b>Upload:</b>
        <input type="file" accept="audio/mp3, audio/wav" name="canço">
        
        <br>    
        <input type="submit" >
    </form>
</div>
</body>
</html>