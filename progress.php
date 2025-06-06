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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">
   <style>
   body {
      background-image: url('https://wallpaperset.com/w/full/e/9/8/31136.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
</style>

</head>
<body>

<?php include 'components/user_header.php'; ?>

<body>
    <div class="skills_section">
        <div class="skills_head">
            <h2>My <span>Skills</span></h2>
            <p>Here is my skills to represent my Expertise</p>
        </div>
         
        <div class="skills_main">
            <div class="skill_bar">
                <div class="info">
                    <p>Tamil</p>
                    <P>8%</P>
                </div>
                <div class="bar">
                    <span class="html"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>English</p>
                    <P>17%</P>
                </div>
                <div class="bar">
                    <span class="css"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>Hindi</p>
                    <P>24%</P>
                </div>
                <div class="bar">
                    <span class="sass"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>French</p>
                    <P>20%</P>
                </div>
                <div class="bar">
                    <span class="js"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>German</p>
                    <P>80%</P>
                </div>
                <div class="bar">
                    <span class="react"></span>
                </div>
            </div>
            <div class="skill_bar">
                <div class="info">
                    <p>Japanese</p>
                    <P>21%</P>
                </div>
                <div class="bar">
                    <span class="node"></span>
                </div>
            </div>
           
        </div>
    </div>
</body>
</html>











<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>