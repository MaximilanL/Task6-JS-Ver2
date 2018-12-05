<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script></script>
    <title>JS-Task 6</title>
  </head>
  <body>  
    <form style="padding: 2%">
    <p>How many brands of cars do you want to see?</p> 
    <input id="inp">
    <button class="btn btn-primary"  id="btn">Done</button>
    </form>
    <p style="padding-left: 2%">List of brands: <span id="txtHint"></span></p>   
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script>    
    $("#btn").click(function(e){
      e.preventDefault();
      $.ajax({
        method: "POST",
        url: "/Auto.php",
        data: {q: $("#inp").val()},
        success: function(resjson){
          var result=JSON.parse(resjson);
          console.log(result);
          var str="";
          for (var i = result.length - 1; i >= 0; i--) {
            str=str+" "+result[i];            
          }
        $("#txtHint").html(str);
        }
      })
    }); 
   
  </script>
  </body>
</html>