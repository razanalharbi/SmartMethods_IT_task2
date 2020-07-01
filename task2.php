<!DOCTYPE html>
<html>
<head>



  <style>
    body{
      background-color: #fefefa;}
  h1 {
     height: 200px;
    width: 400px;
    position: fixed;
    color: #0000cd;
    top: 50%;
    left: 50%;
    margin-top: -150px;
    margin-left: -200px;
    text-align: center;}
    h2 {
       height: 200px;
      width: 400px;
      position: fixed;
      color: #0000cd;
      top: 100%;
      left: 51%;
      margin-top: -150px;
      margin-left: -200px;
      text-align: bottom;}

button {background-color: #acb9d8;
border-color: #000000;
color: #212c54;
padding: 10px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
border-image: url(border.png) 30 stretch;
}

  div {

      height: 200px;
     width: 400px;
     position: fixed;
     top: 50%;
     left: 50%;
     margin-top: -80px;
     margin-left: -206px;
     text-align: center;}

    div2 {
       height: 200px;
      width: 400px;
      position: fixed;
      top: 50%;
      left: 50%;
      margin-top: -35px;
      margin-left: -200px;
      text-align: center;}

      div3 {
        height: 200px;
      width: 400px;
      position: fixed;
      top: 50%;
      left: 50%;
      margin-top: 10px;
      margin-left: -206px;
      text-align: center;}

  </style>
  <?php
  if(array_key_exists('Forwards', $_POST)) {
      Forwards();
  }
  else if(array_key_exists('Left', $_POST)) {
      Left();
  }
    else if(array_key_exists('Stop', $_POST)) {
              Stop();
          }
          else if(array_key_exists('Right', $_POST)) {
              Right();
          }
  function Forwards() {
header("Location: file:///Users/razanalharbi/Desktop/Forwards.html");
}        function Left() {
  header("Location: file:///Users/razanalharbi/Desktop/Left.html");

  }
  function Backwards() {
header("Location: file:///Users/razanalharbi/Desktop/Backwards.html");
}        function Right() {
  header("Location:file:///Users/razanalharbi/Desktop/Right.html");

  }

?>

</head>
<body>


<h1>Control Buttons</h1>
<form method="post">
<div class="container">
  <div class="vertical-center">
    <button name="Forwards" >FORWARDS<i class ='far fa-arrow-alt-circle-up'></i></button>
</div>
</div>
STOP
<div2 class="container">
  <div2 class="vertical-center">
    <button name="Left" >LEFT<i class ='far fa-arrow-alt-circle-left'></i></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button name="Backwards" >STOP<i class ='far fa-arrow-alt-circle-STOP'></i></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button name="Right" >RIGHT<i class ='far fa-arrow-alt-circle-RIGHT'></i></button>
</div2>
</div2>

<div3 class="container">
  <div3 class="vertical-center">
    <button type="button" >BACKWARDS<i class ='far fa-arrow-alt-circle-down'></i></button>
</form>
</div3>
</div3>

</body>
</html>
