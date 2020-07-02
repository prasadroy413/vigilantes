<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->First Name;?>  
        </td>  
        <td>  
            <?php echo $row->Last Name;?>  
        </td>  
        <td>  
            <?php echo $row->Email;?>  
        </td>  
        <td>  
            <?php echo $row->Password;?>  
        </td>
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?>  