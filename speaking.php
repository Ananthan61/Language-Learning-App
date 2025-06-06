<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaking Practice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   
    <!-- Include the CSS for styling -->
    <style>
        /* Reset default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
      text-align: center;
      margin-top: 20px;
    }

    p {
      text-align: center;
    }

    #google_translate_element {
      text-align: right;
      margin-top: 50px;
    }

    /* Style the select box provided by Google Translate */
    .goog-te-combo {
      width: auto !important; /* Adjust the width as needed */
      font-size: 14px;
      padding: 5px;
    }

    /* Style the "You can translate..." message */
    p:last-child {
      text-align: center;
      margin-top: 20px;
    }
        .container {
    max-width: 800px; /* Your desired width */
    min-height: 450px; /* Set a minimum height as needed */
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }

        #start-recognition {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #start-recognition:hover {
            background-color: #0056b3;
        }

        #output-box {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        h1 {
        color: #333;
    }

    .lesson {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        
    }

    .lesson h2 {
        margin-top: 0;
    }

    .lesson p {
        margin-bottom: 10px;
    }

    .completed {
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

        /* Style the translated text */
        .translated-text {
            font-weight: bold;
            color: #007bff;
        }
        body {
      background-image: url('https://wallpaperset.com/w/full/e/9/8/31136.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    button:hover {
        background-color: #0056b3;
    }
    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    /* CSS for the tick mark icon */
    .lesson.completed .completed-icon {
            display: inline-block;
            font-weight: bold; /* Make the tick mark bold for visibility */
            color: green; /* Change the color of the tick mark */
        }
</style>
</head>
<body>
<?php include 'components/user_header.php'; ?>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div class="container">
       
       <h1 translate="no">Speaking Practice</h1>
       <br>
       <br>
       <p translate="no">“Speech is power: speech is to persuade, to convert, to compel.”</p>
       <br>
       <br>
       <button id="start-recognition" translate="no">Start Recognition</button>
       <br><br>
       <div id="output-box"></div> <!-- Output box for recognized speech -->
   </div>
   <br>
   <br>
   <br>
   <br>

   
   


   <script>
       const startButton = document.getElementById('start-recognition');
       const outputBox = document.getElementById('output-box');

       // Check if the browser supports the SpeechRecognition API
       if ('webkitSpeechRecognition' in window) {
           const recognition = new webkitSpeechRecognition();

           recognition.continuous = false;
           recognition.lang = 'en-US'; // Set target language for recognition (English in this example)

           recognition.onstart = function() {
               startButton.textContent = 'Listening...';
           };

           recognition.onresult = function(event) {
               const result = event.results[0][0].transcript;

               // Wrap the recognized text in a span with the class for styling
               const translatedText = `<span class="translated-text" translate="no">You said:</span> ${result}`;
               outputBox.innerHTML = translatedText;

               // Translate the recognized text into a different language (e.g., Spanish)
               translateText(result, 'es'); // Translate to Spanish
           };

           recognition.onerror = function(event) {
               outputBox.textContent = 'Recognition error: ' + event.error;
           };

           recognition.onend = function() {
               startButton.textContent = 'Start Recognition';
           };

           startButton.addEventListener('click', function() {
               recognition.start();
           });
       } else {
           outputBox.textContent = 'Speech recognition is not supported in this browser.';
       }

       // Function to translate text to a different language
       function translateText(text, targetLanguage) {
           // Make a request to a translation service or API to translate 'text' to 'targetLanguage'
           // Replace the following code with a call to a translation service or API
           // For example, you can use the Google Cloud Translation API
           // Sample code (requires API key and appropriate API setup):
           /*
           fetch('https://translation.googleapis.com/language/translate/v2?key=YOUR_API_KEY', {
               method: 'POST',
               body: JSON.stringify({
                   q: text,
                   source: 'en', // Source language (English)
                   target: targetLanguage, // Target language (e.g., 'es' for Spanish)
                   format: 'text'
               }),
               headers: {
                   'Content-Type': 'application/json',
               },
           })
           .then(response => response.json())
           .then(data => {
               const translatedText = data.data.translations[0].translatedText;
               outputBox.innerHTML += `<br><span class="translated-text">${targetLanguage.toUpperCase()} Translation:</span> ${translatedText}`;
           })
           .catch(error => {
               console.error('Translation error:', error);
           });
           */
       }
   </script>
   <div id="google_translate_element" style="position: absolute; top: 20px; right: 20px;"></div>

   <script type="text/javascript">
       function googleTranslateElementInit() {
           new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
       }
   </script>

   <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
<?php include 'components/footer.php'; ?>
</html>