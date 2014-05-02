<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
 </head>
 <body>
   

       <!-- Header and Nav -->
 
  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h1>Welcome <?php echo $username; ?>!</h1><a href="pages/logout">Logout</a>
      </div>
    </div>
  </div>
  <!-- End Header and Nav -->
  <div class="row">
 <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 columns ">
      <div class="panel">
        <a href="#"><img src="http://placehold.it/300x240&text=[img]" /></a>
        <h5><a href="#"><?php echo $username; ?></a></h5>
          <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">

        </div>
 
      </div>
    </div>
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-6 columns">
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
 
 
          <h6>2 Comments</h6>
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&text=[img]" /></div>
        <div class="large-10 columns">
          <p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
          <ul class="inline-list">
            <li><a href="">Reply</a></li>
            <li><a href="">Share</a></li>
          </ul>
 
 
          <h6>2 Comments</h6>
          <div class="row">
            <div class="large-2 columns small-3"><img src="http://placehold.it/50x50&text=[img]" /></div>
            <div class="large-10 columns"><p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p></div>
          </div>
        </div>
      </div>
      <!-- End Feed Entry -->
 
    </div>
 
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="large-3 columns hide-for-small">
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
    </aside>
 
  </div>

  
 
 </body>
</html>
