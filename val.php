<html>
<head>
  
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  
  <link href="runnable.css" rel="stylesheet" />
  <!-- Load jQuery and the validate plugin -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="http://jqueryvalidation.org/files/lib/jquery.js"></script>
  
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            addr: "required",
            city: "required",
			state: "required",
        // Specify the validation error messages
        messages: {
            addr: "Please enter addr",
            city: "Please enter city",
			state: "Please enter state",
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
</head>
<body>
  <h1>Register here</h1>

  <!--  The form that will be parsed by jQuery before submit  -->
  <form action="" method="post" id="register-form" novalidate="novalidate">
  
    <div class="label">First Name</div><input type="text" id="firstname" name="firstname" /><br />
    <div class="label">Last Name</div><input type="text" id="lastname" name="lastname" /><br />
    <div class="label">Email</div><input type="text" id="email" name="email" /><br />
    <div class="label">Password</div><input type="password" id="password" name="password" /><br />
    <div style="margin-left:140px;"><input type="submit" name="submit" value="Submit" /></div>
    
  </form>
  
</body>
</html>