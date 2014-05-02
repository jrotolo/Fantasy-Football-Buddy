<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Search Players</title>
 </head>
 <body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('verifysearch'); ?>
  <div class="row">
  <form>
    <fieldset>
      <legend>Search by Player Name</legend>
       
       <div class="row">
         <div class="large-4 columns">
            <label for="search_term"></label>
            <input type="text" size="20" id="search_term" name="search_term"/>
         </div>
       </div>

      <br/>

      <input class="alert button" type="submit" value="Search"/>
    </fieldset>
   
  </form>
  </div>
 </body>
</html>
