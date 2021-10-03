<?php 
 include 'serverSide/connection.php';

 $q = "SELECT * FROM studentinfo";
 $stddata = mysqli_query($conn,$q);
 while( $res = mysqli_fetch_array($stddata)){
?>
            <tr>
            <td><?php echo $res['Id']?></td>
                <td><?php echo $res['StdFirstName']?></td>
                <td><?php echo $res['StdLastName']?></td>
                <td><?php echo $res['StdFatherName']?></td>
                <td><?php echo $res['StdMobile']?></td>               
                <td><?php echo $res['StdCountry']?></td>
                <td><?php echo $res['StdCity']?></td>
                 <td><a href="serverSide/studentdelete.php?id=<?php echo $res['Id'];?>" class="fa fa-trash" style= "font-size:40px;color:black;"></a></td>
            </tr>

<?php
 }
?>