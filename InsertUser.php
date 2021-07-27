<?php

require_once("class/user_class.php"); 
//require_once("class/user_class.php"); 



$stdntarray = $objProject->UserDataInsert($_POST);
//print_r($stdntarray);
/*$fetchData= fetch_data();
show_data($fetchData);*/

//function show_data($fetchData){
 echo '<table border="1" class="table table-bordered">
        <tr style="background:#232338;color:#fafafa">
            <th style="text-align:center">S.N</th>
        <th style="text-align:center">NAME</th>
        <th style="text-align:center">EMAIL</th>
        <th style="text-align:center">MOBILE</th>
        <th style="text-align:center">ADRESS</th>
        <th style="text-align:center">SUBJECT</th>
            
            
        </tr>';
 if(count($stdntarray)>0){
      $sn=1;
 
      foreach($stdntarray as $data){ 
  echo "<tr>
          <td style='background: #e1eff9;text-align:center'>".$sn."</td>
          <td style='background: #e1eff9;text-align:center'>".$data['STDNT_NAME']."</td>
          <td style='background: #e1eff9;text-align:center'>".$data['STDNT_EMAIL']."</td>
          <td style='background: #e1eff9;text-align:center'>".$data['STDNT_MOB']."</td>
          <td style='background: #e1eff9;text-align:center'>".$data['STDNT_ADDRS']."</td>
          <td style='background: #e1eff9;text-align:center'>".$data['SUBJ_NAME']."</td>
         
          
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='6'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
//}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->

	</head>
	

	
	
	
</html>