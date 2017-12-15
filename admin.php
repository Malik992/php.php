<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>

           
    <fieldset>
    <table>
    <legend><u>Beinvenue sur votre page</u></legend>
        
            <form action="" method="POST">
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="Log" placeholder="Entrer votre login"></td>
                </tr>
                <tr>
                    <td>Paseword:</td>
                    <td><input type="password" name="Pass" placeholder="Entrer votre mot de pass"></td>
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
                    <td><input type="submit" value="connexion" name="connexion"></td>
                </tr>

        </table>

    </fieldset>
    </body>
</html>
        <?php

extract($_POST);

if(isset($connexion)){
    $fp = fopen("compt.txt", "a+");
    rewind($fp);
    $exist=false;

    while(($line=fgets($fp)) !==false)
    {

        $info=explode(";", $line);
        if($info[0]==$Log)
        {
            $exist=true;
            break;
        }
    }
    if($exist)
    {
        header('location:alerte.php');
       
    }
    else
    {
        fseek($fp,2);
        fputs($fp,$Log.";".$choix.";".$Pass."\n");
        
            fclose( $fp);
    
            if(isset($_POST['choix'])=="admin")
            {
                header('location:acadmin.html');
            }
            else{
                
            }
            
            if(isset($_POST['choix'])=="user")
            {
                header('location:acuser.html');
            }
            else{
            
                }
   
    }

}
?>