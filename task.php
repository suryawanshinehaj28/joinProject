<?php 
require_once("class/user_class.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Submit Form Using AJAX and jQuery</title>
<link rel="stylesheet" href="css/demo.css">
<script src="js/jquery.js"></script>
<link href="otherjs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript">
  $(document).ready(function(){
$("#showData").click(function(){




  let Tables = {student_tbl:'student_tbl',subject_tbl:'subject_tbl'};
  let TableId = {SUBJ_ID :'SUBJ_ID',STDNT_ID:'STDNT_ID'};
  let Columns = {STDNT_NAME:'STDNT_NAME',STDNT_EMAIL:'STDNT_EMAIL',STDNT_MOBILE:'STDNT_MOBILE',STDNT_ADDRESS:'STDNT_ADDRESS',STDNT_SUBJ:'STDNT_SUBJ'};
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "InsertUser.php",
data: {Tables,TableId,Columns},
cache: false,
success: function(result){
$("#table-container").html(result);
}
});

return false;
});
});



  /*$(document).on('click','#showData',function(e){

      $.ajax({    
        type: "GET",
        url: "getUser_list.php",             
        dataType: "html",                  
        success: function(data){
        console.log(data);                    
            $("#table-container").html(data); 
           
        }
    });
});*/
</script>
</head>

<body>

 <!-- Required div Starts Here -->


<div class="btshowdata">
<button id="showData">Show Student Data</button>
</div>

<div id="table-container" class="container">
    
</div>

</body>
</html>
