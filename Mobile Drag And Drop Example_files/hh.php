<!DOCTYPE HTML>
<html>
<head>
<style>
#div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
	
	
	 if (e.dataTransfer && e.dataTransfer.files.length != 0) {
    var file = e.dataTransfer.files[0], // Only the first file.
      reader = new FileReader();

    reader.readAsDataURL(file);

    reader.onload = function (event) {
      console.log(file.name);
      $.ajax({
        url: "test.php",
        type: "POST",
        data: {
          id: id,
          fileName: file.name, // Your file name.
          file: event.target.result // Your file.
        },
        success: function () {
          console.log('great success');
          return true
        }
      });
    };
  }
	 
}
</script>

</head>
<body>

<p>Drag the W3Schools image into the rectangle:</p>



<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">


<?php
if(isset($_POST['btnxxx'])){

header('Location:basic_color.php');

}


?>
</body>
</html>