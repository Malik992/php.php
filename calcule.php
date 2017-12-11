
<!DOCTYPE html>
    <html>
        <head>
        <title>Ma calculatrice</title>
        <meta charset="utf-8">
        </head>
        <body>
                <form method="POST">
                    <table rule="all">
                  <tr>
                      <td>Nombre 1</td>
                      <td><input type="number" name="nb1" placeholder="Entrer nombre 1"></td>
                  </tr>
                  <tr>
                      <td>Nombre 2</td>
                      <td><input type="number" name="nb2" placeholder="Entrer nombre 2"></td>
                  </tr>
                  <tr>
                      <td>operateur</td>
                     <td><select name="op">
                <option value="">selectionnez un opérateur</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
                    </select></td>
                  </tr>
                  <tr>
                      <td></td>
                  <td><input type="submit" name="submit" value="calculer">
                  </tr>
                        </table>
                </form>
        </body>
        <?php
        if( isset($_POST['submit']))
        extract($_POST);
        if($op=="+")
           {
            echo "$nb1 $op $nb2=".($nb1 + $nb2);
           }
        elseif($op=='-')
           {
            echo"$nb1 $op $nb2=".($nb1-$nb2);
          }
        elseif($op=='*')
            {
                echo"$nb1 $op $nb2=".($nb1*$nb2);
            }
            elseif($op=="/")
          {
           if($nb2==0)
           {
            echo"impossible";
           }
           else{
            echo"$nb1 $op $nb2=".($nb1/$nb2);
           }
          }
          elseif($op=="%")
          {
           if($nombre2==0)
           {
            echo"impossible";
           }
           else{
            echo"$nb1 $op $nb2=".($nb1%$nb2);
           }
          }
     ?>
    </html>







