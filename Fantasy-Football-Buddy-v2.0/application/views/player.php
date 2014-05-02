<?php foreach ($players as $key => $value): ?>
  <?php if ($key == 'player_name') $player_name = $value ?>
  <?php if ($key == 'player_team') $player_team = $value ?>
  <?php if ($key == 'position') $position = $value ?>
  <?php if ($key == 'total_yards') $total_yards = $value ?>
  <?php if ($key == 'tds') $tds = $value ?>
  <?php if ($key == 'status') $status = $value ?>
  <?php if ($key == 'img_path') $img_path = $value ?>
  <?php if ($key == 'twitter_handle') $twitter_handle = $value ?>
  <?php if ($key == 'espn_id') $espn_id = $value ?>
<?php endforeach ?>

<?php 

require "espn.php";

$api = new espn();
$api->setApiKey("gj5dr7fzaz38gres35s9ety8");
$headlines = $api->getAtheleteNews($espn_id);
//$playerInfo = $api->getAtheleteInfo(2580);

?>

<!-- Main Grid Section -->
  <div class="row">
    <div class="large-3 columns">
      <div style="margin-top: 2em;" class="panel">
        <p>
          <img src="http://localhost/Fantasy-Football-Buddy-v1.0/images/players/<?php echo $img_path ?>" alt="Drew Brees" />
        </p>
      </div>
    </div>
    <div class="large-9 columns">
       <div style="margin-top: 2em;" class="panel"> 
        <h2><?php echo $player_name ?> <small><?php echo $position ?> #9</small></h2>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <p><strong><?php echo $player_team ?></strong> (2006-present)</p>
        <p><strong>Height:</strong> 6ft 0in  <strong>Weight:</strong> 209 lbs</p>
        <p><strong>TDS:</strong> <?php echo $tds ?>  &nbsp;<strong>YDS:</strong> <?php echo $total_yards ?> &nbsp;<strong>Status:</strong> <?php echo $status ?>  &nbsp;</p>
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="jerryg311">Tweet</a><div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>

      </div> 
    </div>
  </div>
 
 
 
  <div class="row">
 
    <div class="large-3 columns">
      <div class="panel">
        <a class="twitter-timeline"  href="https://twitter.com/<?php echo $twitter_handle ?>"  data-widget-id="440583964915277824">Tweets by @<?php echo $twitter_handle ?></a>
      </div>
    </div>
    
    <div class="large-9 columns">
      <div class="panel">
        <h2>Top News on <?php echo $player_name ?></h2>

        <br />

        

        <?php for($i=0; $i < count($headlines); $i++)  { 
                echo "<h5>".$headlines[$i]['title']."&nbsp;&nbsp;&nbsp;<a href=\"".$headlines[$i]['web_link']."\">"."Read</a>";
                echo "<br /><small>".$headlines[$i]['description']."</small></h5>";
                echo "<br />";
            }
        ?>
      </div>
    </div>

    <div class="large-12 columns">
      <h3>Videos</h3> 
    </div>
    <div class="large-3 columns">
      <div style="margin-top: 2em;" class="panel">
        <p>
          <img src="http://placehold.it/200x200" />
        </p>
      </div>
    </div>

    <div class="large-3 columns">
      <div style="margin-top: 2em;" class="panel">
        <p>
          <img src="http://placehold.it/200x200" />
        </p>
      </div>
    </div>

    <div class="large-3 columns">
      <div style="margin-top: 2em;" class="panel">
        <p>
          <img src="http://placehold.it/200x200" />
        </p>
      </div>
    </div>

    <div class="large-3 columns">
      <div style="margin-top: 2em;" class="panel">
        <p>
          <img src="http://placehold.it/200x200" />
        </p>
      </div>
    </div>


  </div>

 
 
  <!-- End Grid Section -->