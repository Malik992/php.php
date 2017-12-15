<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>generer en php</title>
</head>
<body>
   <form action="lod.php" method="post">
   <div>
    <h1>
        <style>
        h1{
            color: gray;
        }
        </style>
    <center> <u>Ceci est votre espace utilisateur</u></center> </h1>
    <fieldset id="fiel">
    <table>
        
    <tr>
    <td>Login  </td>
    <td><input type="text" name="login" placeholder="votre login"></td>
    </tr>
    <tr>
    <td>Profil 
         </td>
    <td>
        <select name="choix" id="">
            <option value="">Choix</option>
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
    </td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="valide" value="inscrire"></td>
    </tr>

    
    </table>
  

    </fieldset>
      
    </div>
   </form>
   <?php
extract($_POST);

$string = str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789');
$motDePasse = substr( $string , 0 , 8);

if(isset($valide)){
    $fp = fopen("test.txt", "a+");
    rewind($fp);
    $exist=false;

    while(($line=fgets($fp)) !==false)
    {

        $info=explode(";", $line);
        if($info[0]==$login)
        {
            $exist=true;
            break;
        }
    }
    if($exist)
    {
        header('location:ici.php');
       
    }
    else
    {
        fseek($fp,2);
        fputs($fp,$login.";".$choix.";".$motDePasse."\n");
        
            fclose( $fp);
        
    }
   
}



?>
   
</body>
</html>