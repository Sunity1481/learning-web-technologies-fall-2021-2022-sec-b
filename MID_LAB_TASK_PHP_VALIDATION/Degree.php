<?php
        if(isset($_POST['submit']))
   {     
        if(!empty($_POST['degree'])&&is_array($_POST['degree']))
        {  
 
             foreach ($_POST['degree'] as $checked)
             {
                 
                 echo $checked.'<br>';
                
             }
        }
        else
         {
           echo 'Select at least one degree';
         }

        
    } 
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Degree</title>
</head>
<body>
    <fieldset style="width:200px">
         <legend>Degree</legend>
         <form method="post">   
             <input type="checkbox" name="degree[]" value="SSC"> SSC
		     <input type="checkbox" name="degree[]" value="HSC"> HSC
		     <input type="checkbox" name="degree[]" value="Bsc"> Bsc
             <br>
             <input type="submit" name="submit" value="Submit"> 
         </form>
    </fieldset>    
</body>
</html>