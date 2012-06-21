<?php

session_start();

require_once './_apiClient.php';
require_once './contrib/apiCensusapiService.php';
$client = new apiClient();
$client->setDeveloperKey("YOUR_KEY_HERE");
$service = new apiCensusapiService($client);
$response = "";
$Response = "";
$Request = "";

if (isset($_GET['keypat'])) {
	$keypat = $_GET['keypat'];
	$keyname = $_GET['keyname'];
	$sumlevid = $_GET['sumlevid'];
	$response = $service->CensusResources->Population(array("keypat"=>$keypat,"keyname"=>$keyname,"sumlevid"=>$sumlevid));
	$Response = $response["response"];
	$Request = $response["request"];
}
?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<header>
			<h1>USA TODAY Census Sample App</h1>
		</header>
		<div class="box">
			<div class="request">
				<form id="section" method="GET" action="census_population.php">
					<table>
						<tr><td>keypat</td><td><input type="text" name="keypat" value="greenville" /></td></tr>
						<tr><td>keyname</td><td><input type="text" name="keyname" value="placename" /></td></tr>
						<tr><td>sumlevid</td><td><input type="text" name="sumlevid" value="4,6" /></td></tr>
					</table>
					<br />
					<input type="submit" value="Search Census" />
				</form>

			</div>

			<?php if (isset($_GET['keypat'])): ?>
				<hr />Results<br /><br />
					<?php
						// Iterate through each response object, and hyperlink the title of each article
						foreach ($Response as $responseSet) {
							if ($responseSet == 'End') { break; }
							echo($responseSet["Placename"] . ", " . $responseSet["StatePostal"] . " has " . $responseSet["Pop"] . " people. ");
							echo("That's about " . (int)$responseSet["PopSqMi"] . " people per square mile.");
							echo("</a><br />\n");
						}
					?>
		  	<?php endif ?>
		</div>
	</body>
</html>

