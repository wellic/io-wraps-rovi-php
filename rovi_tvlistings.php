<?php session_start();

// Client library (network/authentication)
require_once './_apiClient.php';

// Rovi resource/method library
require_once './contrib/apiTvlistingsapiService.php';

// Instantiate client
$client = new apiClient();

// Set credentials
$client -> setDeveloperKey("ufrrvnhf59xfx6qkvyfama8z");
$client -> setDeveloperSecret("");

// Instantiate service
$service = new apiTvlistingsapiService($client);

// Initialize globals
$searchAPI = array();
$resultsObj = array();
$searchQuery = "";
$database = "";
$entityType = "";
$format = "json";
$searchResultCount = 0;

if (isset($_GET['postalCode'])) {
	$postalCode = $_GET['postalCode'];
	$tvlistingsAPI = $service->TVListingsMethods->Services($postalCode, "en-US","US");
    $resultsObj = $tvlistingsAPI['ServicesResult'];	
}
?>
<!doctype html>
<html>
	<head>
		<title>Rovi TV Listings API - Mashery I/O Wraps Example</title>
		<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css" media="screen" />
	</head>
	<body>
		<div class="container" id="mainwrap">
			<header>
				<h1>Rovi TV Listings API - Mashery I/O Wraps Example</h1>
			</header>
			<div class="box">
				<div class="request">
					<form id="section" method="GET" action="./rovi_tvlistings.php" class="well">
						<div>
							<label>Postal Code</label>
							<input type="text" name="postalCode" <?php 
								if (isset($_GET['postalCode'])) {
									echo ("value=\"" . $_GET['postcalCode'] . "\"");
								} ?> />
						</div>
						<br />
						<label>&nbsp;</label>
						<div>
							<input type="submit" value="Search">
						</div>
					</form>

				</div>
				<hr />
				<?php if ((isset($_GET['postalCode']) && ($resultsObj['Serivices'] > 0))): ?>
				
				<?php
				// Iterate through the resultObj array
				foreach ($resultsObj['Services']['Service'] as $result) {					
					// Output this single result info
					echo("<pre>" .$result . "</pre>\n");
				}

				?>
				<?php else: ?>
					<pre>No results were found with those search parameters.</pre> 
				<?php endif ?>
			</div>
		</div>
	</body>
</html>