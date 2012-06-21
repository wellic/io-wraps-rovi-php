<?php

session_start();

require_once './_apiClient.php';
require_once './contrib/apiMetadataandsearchapiService.php';
$client = new apiClient();
$client->setDeveloperKey("htxuvk7utgs6n485y674at3d");
$client->setDeveloperSecret("SecretNeil");
$service = new apiMetadataandsearchapiService($client);
$results = new SearchResponse;
$result = new SearchResult;

if (isset($_GET['movie'])) {
	$movie = $_GET['movie'];
	// $result = $service->Movie->Info(array("movie"=>$movie));
	$results = new SearchResponse($service ->Movie->Info(array("movie"=>$movie)));
	
	

//	echo("<pre>Bang\n");
//	var_dump($results);
//	echo("</pre>");


}
?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<header>
			<h1>Rovi Metadata and Search API Sample App</h1>
		</header>
		<div class="box">
			<div class="request">
				<form id="section" method="GET" action="./rovi_metadata.php">
					Movie: <input type="text" name="movie" value="dune" />
					<br />
					<input type="submit" value="Search Movies">
				</form>

			</div>

			<?php if (isset($_GET['movie'])): ?>
				<hr />Results<br /><br />
					<?php
						// Iterate through each story object, and hyperlink the title of each article
						foreach ($results->results as $result) {
							echo("<pre>Result:\n");
							var_dump($result);
							echo("</pre>");
						}
					?>
		  	<?php endif ?>
		</div>
	</body>
</html>

