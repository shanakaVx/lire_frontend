
<html>
<head>
<script>

function submitform()
   {
       var inputs = document.getElementsByClassName("inputs");
       var formdata = new FormData();
       for(var i=0; i<inputs.length; i++)
       {
           formdata.append(inputs[i].name, inputs[i].value);
       }
       var xmlhttp;
       if(window.XMLHttpRequest)
       {
           xmlhttp = new XMLHttpRequest;
       }
       else
       {
           xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
       }
       xmlhttp.onreadystatechange = function()
       {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {

          }
       }
       xmlhttp.open("POST", "test.php");
       xmlhttp.send(formdata);
   }

</script>
</head>
<body>
<form name="foo" action="form.php" method="POST" id="foo">

        <input type="submit" value="Send" onclick="submitform(); return false;" />
    </form>

<!-- The result of the search will be rendered inside this div -->
<div id="result"></div>

</body>
</html>