<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <a href="https://app.speakandimprove.com/flow/LSKSE001/1/1" target="_blank">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<style>
body {
   background-image: url('https://wallpaperset.com/w/full/e/9/8/31136.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
 }
    <button id="animated-button">
      <span>Speak & Improve</span>
      <div class="animation-container">
        <div class=""></div>
        <div class=""></div>
        <div class=""></div>
      </div>
    </button>
  </a>
<style>
  #animated-button {
  background-color: #0099FF;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  color: white;
  font-size: 16px;
  cursor: pointer;
  position: relative;
}

#animated-button .animation-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

#animated-button .animation-line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: white;
  animation-name: animate-line;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}

@keyframes animate-line {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(0);
  }
}

</style>  
</head>
<body>
<?php include 'components/user_header.php'; ?>
<?php include 'components/footer.php'; ?> 
</body>
</html>

