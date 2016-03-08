<html>
 <body>
<table border= "1">
   <thead>
     <tr>
       <th>Id</th>
       <th>Nombre</th>
       <th>Ap</th>
       <th>Am</th>
</tr>
</thead>
</tbody>

  <?php
    $personas= array(

    "0"=>array(
    "id"=> "0",
    "nombre"=> "Javier",
    "ap"=> "Vargas",
    "am"=> "Ramirez"
    ),

    "1"=>array(
    "id"=> "1",
    "nombre"=> "Joel",
    "ap"=> "Lopez",
    "am"=> "Arteaga"
    ),

 "2"=>array(
    "id"=> "2",
    "nombre"=> "Sonia",
    "ap"=> "Abundis",
    "am"=> "Castro"
    ),

 "3"=>array(
    "id"=> "3",
    "nombre"=> "Maria",
    "ap"=> "Camarena",
    "am"=> "Perez"
    ),

 "4"=>array(
    "id"=> "4",
    "nombre"=> "Georgina",
    "ap"=> "Vazquez",
    "am"=> "Ayon"
    ),

    );
?>

<?php
    Foreach ($personas as $k=>$personas){

?>
<tr>
<td><?php echo $personas["id"];?></td>
<td><?php echo $personas["nombre"];?></td>
<td><?php echo $personas["ap"];?></td>
<td><?php echo $personas["am"];?></td>
     
    
</tr>

  
<?php } ?>

     </tbody>
   </table>
</html>