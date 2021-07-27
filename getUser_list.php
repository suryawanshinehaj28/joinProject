<?php

require_once("class/user_class.php"); 



$cartarray=$objProject->All_Rows();
//print_r($cartarray);
/*$fetchData= fetch_data();
show_data($fetchData);*/

//function show_data($fetchData){
 echo '<table border="1" class="table table-bordered">
        <tr style="background:#232338;color:#fafafa">
            <th>S.N</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
            <th>GENDER</th>
            <th>QUALIFICATION</th>
            <th>ADDRESS</th>
            
        </tr>';
 if(count($cartarray)>0){
      $sn=1;
      foreach($cartarray as $data){ 
  echo "<tr>
          <td>".$sn."</td>
          <td>".$data['NAME']."</td>
          <td>".$data['EMAIL']."</td>
          <td>".$data['MOBILE']."</td>
          <td>".$data['GENDER']."</td>
          <td>".$data['QUALIFICATION']."</td>
          <td>".$data['ADDRESS']."</td>
          
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
//}
?>

	

	
	
	
</html>