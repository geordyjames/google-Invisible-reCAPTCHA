<?php
$config = require('config.php');
?>
<html>
  <head>
    <title>reCAPTCHA demo</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	 <script>
       function onSubmit() {
         document.getElementById("demo-form").submit();
       }
     </script>
  </head>
  <body>
    <form action="admin.php" method="POST" id="demo-form">
      <br>
	  <button class="g-recaptcha"
		data-sitekey="<?php echo $config['client-key']; ?>"
		data-callback="onSubmit">Submit
      </button>
    </form>
 
  </body>
</html>