<?php

require "espn.php";

$api = new espn();
$api -> setApiKey("gj5dr7fzaz38gres35s9ety8");
//$stats = $api->getAthleteStats(2580, 2013);
?>

<!-- Main Grid Section -->
<div class="row">
	<div class="large-3 columns">
		<div style="margin-top: 2em;" class="panel">
			<p>
				<img src="http://cdn.c.photoshelter.com/img-get2/I0000Esrshkp999k/fit=/fill=200x200/g=G00000U4CXHB0Ozs/I0000Esrshkp999k.jpg" alt="Drew Brees" />
			</p>
		</div>

		<div style="margin-top: 2em;" class="panel">
			<h2>Drew Brees <small>Quarterback #9</small></h2>
				<strong>New Orleans Saints</strong> (2006-present)
			</p>
			<p>
				<strong>Height:</strong> 6ft 0in 
			</p>
			<p>
				<strong>Weight:</strong> 209 lbs
			</p>
			<p>
				<strong>Experience: </strong> 14 Yrs
			</p>
			
		</div>
	</div>
	
	<!-- Career Panel -->
	<div class="large-9 columns">
		<div style="margin-top: 2em;" class="panel">
			<h6><strong>Career Stats</strong></h6>
			<div class="row">
				<!-- Table Layout -->
				<table>
										<thead>
											<tr>
												<th>P Cmp</th>
												<th>P Att</th>
												<th>P Pct</th>
												<th>P Yds</th>
												<th>P Avg</th>
												<th>P TD</th>
												<th>Int</th>
												<th>Sck</th>
												
												<th>P Rate</th>
												<th>R Att</th>
												<th>R Yds</th>
												<th>R Avg</th>
												<th>R TD</th>
												
												<th>Fm L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>4481</td>
												<td>6799</td>
												<td>65.9</td>
												<td>51081</td>
												<td>7.5</td>
												<td>363</td>
												<td>177</td>
												<td>271</td>
											
												<td>95.3</td>
												<td>333</td>
												<td>622</td>
												<td>1.9</td>
												<td>12</td>
												
												<td>30</td>
											</tr>
										</tbody>
				</table>
				<!-- End Table Layout -->
			</div>
		</div>
		
		<!-- End Career Panel -->
		
		
		<!-- Recent Panel -->
	
		<div style="margin-top: 2em;" class="panel">
			<h3>Recent Season Statistics</h3>
			<h5>2013</h5>
			<div class="row">
				<!-- Table Layout -->
				<table>
										<thead>
											<tr>
												<th>P Cmp</th>
												<th>P Att</th>
												<th>P Pct</th>
												<th>P Yds</th>
												<th>P Avg</th>
												<th>P TD</th>
												<th>Int</th>
												<th>Sck</th>
											
												<th>P Rate</th>
												<th>R Att</th>
												<th>R Yds</th>
												<th>R Avg</th>
												<th>R TD</th>
												
												<th>Fm L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>446</td>
												<td>650</td>
												<td>68.6</td>
												<td>5162</td>
												<td>7.9</td>
												<td>39</td>
												<td>12</td>
												<td>37</td>
												
												<td>104.7</td>
												<td>35</td>
												<td>52</td>
												<td>1.5</td>
												<td>3</td>
												
												<td>2</td>
											</tr>
										</tbody>
				</table>
				<!-- Beginning Modal Button & Display -->
				<div class="small-1 columns">
					<a href="#" class="button tiny" data-reveal-id="myModal" data-reveal>Games</a>
					<div id="myModal" class="reveal-modal medium" data-reveal>	
								<h1>Stats</h1>
									<table>
										<thead>
											<tr>
												<th>Wk</th><th>Opp</th><th>Rslt</th><th>Comp</th><th>Att</th><th>Pct</th><th>Yds</th><th>Avg</th><th>TD</th><th>Int</th><th>Sck</th><th>SckY</th><th>P Rate</th><th>R Att</th><th>R Yds</th>
													<th>R Avg</th><th>R TD</th><th>Fum</th><th>Fum L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
										</tbody>
									</table>
							
						<a class="close-reveal-modal">&#215;</a>
					</div>
				</div>
				<!-- Ending Modal Button & Display -->
			</div>
			
			<h5>2012</h5>
			<div class="row">
				<!-- Table Layout -->
				<table>
										<thead>
											<tr>
												<th>P Cmp</th>
												<th>P Att</th>
												<th>P Pct</th>
												<th>P Yds</th>
												<th>P Avg</th>
												<th>P TD</th>
												<th>Int</th>
												<th>Sck</th>
												
												<th>P Rate</th>
												<th>R Att</th>
												<th>R Yds</th>
												<th>R Avg</th>
												<th>R TD</th>
												
												<th>Fm L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>422</td>
												<td>670</td>
												<td>63.0</td>
												<td>5177</td>
												<td>7.7</td>
												<td>343</td>
												<td>19</td>
												<td>26</td>
												
												<td>96.3</td>
												<td>15</td>
												<td>5</td>
												<td>0.3</td>
												<td>1</td>
												
												<td>1</td>
											</tr>
										</tbody>
				</table>
				<!-- Beginning Modal Button & Display -->
				<div class="small-1 columns">
					<a href="#" class="button tiny" data-reveal-id="myModal2" data-reveal>Games</a>
					<div id="myModal2" class="reveal-modal medium" data-reveal>	
								<h1>Stats</h1>
									<table>
										<thead>
											<tr>
												<th>Wk</th><th>Opp</th><th>Rslt</th><th>Comp</th><th>Att</th><th>Pct</th><th>Yds</th><th>Avg</th><th>TD</th><th>Int</th><th>Sck</th><th>SckY</th><th>P Rate</th><th>R Att</th><th>R Yds</th>
													<th>R Avg</th><th>R TD</th><th>Fum</th><th>Fum L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
										</tbody>
									</table>
							
						<a class="close-reveal-modal">&#215;</a>
					</div>
				</div>
				<!-- Ending Modal Button & Display -->
			</div>
			
			<h5>2011</h5>
			<div class="row">
				<!-- Table Layout -->
				<table>
										<thead>
											<tr>
												<th>P Cmp</th>
												<th>P Att</th>
												<th>P Pct</th>
												<th>P Yds</th>
												<th>P Avg</th>
												<th>P TD</th>
												<th>Int</th>
												<th>Sck</th>
												
												<th>P Rate</th>
												<th>R Att</th>
												<th>R Yds</th>
												<th>R Avg</th>
												<th>R TD</th>
							
												<th>Fm L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>468</td>
												<td>657</td>
												<td>71.2</td>
												<td>5476</td>
												<td>8.3</td>
												<td>46</td>
												<td>14</td>
												<td>24</td>
												
												<td>110.6</td>
												<td>21</td>
												<td>86</td>
												<td>4.1</td>
												<td>1</td>
											
												<td>1</td>
											</tr>
										</tbody>
				</table>
				<!-- Beginning Modal Button & Display -->
				<div class="small-1 columns">
					<a href="#" class="button tiny" data-reveal-id="myModal3" data-reveal>Games</a>
					<div id="myModal3" class="reveal-modal medium" data-reveal>	
								<h1>Stats</h1>
									<table>
										<thead>
											<tr>
												<th>Wk</th><th>Opp</th><th>Rslt</th><th>Comp</th><th>Att</th><th>Pct</th><th>Yds</th><th>Avg</th><th>TD</th><th>Int</th><th>Sck</th><th>SckY</th><th>P Rate</th><th>R Att</th><th>R Yds</th>
													<th>R Avg</th><th>R TD</th><th>Fum</th><th>Fum L</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
											<tr>
												<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
											</tr>
										</tbody>
									</table>
							
						<a class="close-reveal-modal">&#215;</a>
					</div>
				</div>
				<!-- Ending Modal Button & Display -->
			</div>
		</div>	
		<!-- End Recent Panel-->	
			
	</div>
	
	
</div>

</div>

<!-- End Grid Section -->