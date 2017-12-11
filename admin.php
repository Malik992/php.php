<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
<table>
           
    
        <legend>Beinvenue sur votre page</legend>
        
            <form action="" method="POST">
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="Log" placeholder="Entrer votre E-mail"></td>
                </tr>
                <tr>
                    <td>Paseword:</td>
                    <td><input type="password" name="Pass" placeholder="Entrer votre mot de pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="connexion" name="submit"></td>
                </tr>
             






        </table>
        <?php
if(isset($_POST['Log']) AND $_POST['Pass']=="admin")
{
    header('location:acadmin.html');
}
else{
    
}

if(isset($_POST['Log']) AND $_POST['Pass']=="user")
{
    header('location:acuser.html');
}
else{
    
}


?>
</body>
</html>