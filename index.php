<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>STORE</title>


</head>

<body >

<button id="Change_Value" type="button">Change Value</button>


<span  id="er1">500</span>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
  $(document).on("click","#Change_Value",function(){
    let c = jQuery("#er1").text();
    var a = 100;
    $.ajax({
      url:'process.php',
      type:'POST',
      data:{a:a,c:c},
      dataType: 'json',
      success:function(data){
        $("#er1").text(data.data1);
      }
    });
  });
});
</script>



</body>
</html>
