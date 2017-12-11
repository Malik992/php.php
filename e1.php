<html>

<head>
    <title>Tableau</title>
</head>

<body>
 <?php
 $tab=array(array('024','amina','21'),array('025','cheikh','22'),array('026','dieyna','23'));
 echo'<table border="2" width="800" height="300">';
 echo'<tr bgcolor="gray">';
 echo'<th> CODE </th>';
echo'<th> NOM </th>';
echo'<th> AGE </th>';
echo'<th> EDITER </th>';
echo'</tr>';
echo'<tr>';
 
 foreach($tab as $val){
    foreach($val as $v){
        echo'<td>'.$v.'<br>';
      
    }
    echo'</td>';
    echo'<td><a href="reponse.php?code='.$val[0].'&amp;nom='.$val[1].'&amp;age='.$val[2].'"><input type="submit" value="EDITER"></a></td>';
    echo'</tr>';
    

}
?>

</body>
</html>