<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('verifylogin'); ?>
  <div class="row">
  <form>
    <fieldset>
      <legend>User Login</legend>
       
       <div class="row">
         <div class="large-4 columns">
            <label for="username">Username:</label>
            <input type="text" size="20" id="username" name="username"/>
         </div>
       </div>

       <br/>

      <div class="row">
        <div class="large-4 columns">
          <label for="password">Password:</label>
          <input type="password" size="20" id="passowrd" name="password"/>
        </div>
      </div>

      <br/>

      <input type="submit" value="Login"/>
    </fieldset>
   
  </form>
  </div>
 </body>
</html>
