<?php 
 include 'serverSide/connection.php';

 $q = "SELECT * FROM teacherinfo";
 $teacherData = mysqli_query($conn,$q);
 while( $res = mysqli_fetch_array($teacherData)){
?>
            <tr>
                <td><?php echo $res['Id']?></td>
                <td><?php echo $res['teacherFirstName']?></td>
                <td><?php echo $res['teacherLastName']?></td>
                <td><?php echo $res['FatherName']?></td>
                <td><?php echo $res['teacherMobile']?></td>               
                <td><?php echo $res['teacherCountry']?></td>
                <td><?php echo $res['teacherCity']?></td>
                <td><a href="serverSide/teacherdelete.php?id=<?php echo $res['Id'];?>" class="fa fa-trash" style= "font-size:40px;color:black;"></a></td>
            </tr>

<?php
 }
?>