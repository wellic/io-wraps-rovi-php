<?php
/**
 * metadata.php
 *
 * I/O Wraps PHP Client Library Sample App for Metadata & Search API 
 *
 * PHP version 5
 * 
 * @category Examples
 * @package  Mashery_IO_Wraps_Rovi
 * @author   Neil Mansilla <neil@mashery.com>
 * @license  https://raw.github.com/mashery/io-wraps-rovi-php/master/LICENSE.txt MIT License
 * @version  GIT: $Id:$
 * @link     https://github.com/mashery/io-wraps-rovi-php/
 * 
 */

// Client library (network/authentication)
require_once "../google-api-php-client/src/apiClient.php";

// Rovi resource/method library
require_once "../google-api-php-client/src/contrib/apiMetadataandsearchapiService.php";

// Instantiate client
$client = new apiClient();

// Set credentials
$client -> setDeveloperKey("YOUR_KEY_HERE");
$client -> setDeveloperSecret("YOUR_SECRET_HERE");

// Instantiate service
$service = new apiMetadataandsearchapiService($client);

// Initialize globals
$searchAPI = array();
$resultsObj = array();
$searchQuery = $_GET['searchQuery'];
$database = "";
$entityType = "";
$searchResultCount = 0;

if ($searchQuery) {
    $searchQuery = $_GET['searchQuery'];
    $database = $_GET['database'];
    $entityType = $_GET['entityType'];
    
    $searchAPI = $service->SearchMethods->Search(
        $database, 
        $entityType, 
        $searchQuery,
        array("format" => "json")
    );
    $resultsObj = $searchAPI['searchResponse'];    
}
?>
<!doctype html>
<html>
    <head>
        <title>Rovi Metadata &amp; Search API - Search Sample App</title>
        <link rel="stylesheet" 
            href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" />
    </head>
    <body>
        <div class="container" id="mainwrap">
            <header>
                <h1>Rovi Metadata &amp; Search API - Search Sample App</h1>
            </header>
            <div class="box">
                <div class="request">
                    <form id="section" method="GET" action="./metadata.php" 
                        class="well">
                        <div>
                            <label>Search Query</label>
                            <input type="text" name="searchQuery"
<?php 
if (isset($_GET['searchQuery'])) {
    echo ("value=\"" . $_GET['searchQuery'] . "\"");
}
?>
                            />
                        </div>
                        <div>
                            <label>Database</label>
                            <select name="database" id="database">
                                <option value="music">music</option>
                                <option value="amgvideo">amgvideo - movies &amp; 
                                    TV series on DVD</option>
                                <option value="video">video (TV)</option>
                            </select>
                        </div>
                        <div>
                            <label>Type of Content</label>
                            <select name="entityType" id="entityType">
                                <option value="album">album </option>
                                <option value="song">song </option>
                                <option value="artist">artist (music) </option>
                                <option value="movie">movie (on DVD or TV) </option>
                        </div>
                        <br />
                        <label>&nbsp;</label>
                        <div>
                            <input type="submit" value="Search">
                        </div>
                    </form>

                </div>
                <hr />
<?php
if ((isset($_GET['searchQuery']) && ($resultsObj['totalResultCounts'] > 0))): 
?>
<?php
// Display result count and range displayed
echo($resultsObj['totalResultCounts'] . " total results found. ");
echo("Showing results 1 through "); 
echo(($resultsObj['totalResultCounts'] > 20) ? '20': 
    $resultsObj['totalResultCounts']); 
?>
.
                <br />
                <br />                
<?php
// Iterate through the resultObj array
foreach ($resultsObj['results'] as $result) {
    $title = "";
    switch ($entityType) {
    case "album":
        $title = "Album Title: " . $result['album']['title'];
        if ($result['album']['primaryArtists'][0]) {
            $title = $title . "\nPrimary Artist: " . 
                $result['album']['primaryArtists'][0]['name'];    
        }
        if ($result['album']['headlineReview']['text']) {
            $title = $title . "\nReview: " . 
                $result['album']['headlineReview']['text'];    
        }
        break;
            
    case "tvseries":
        $title = "TV Video Title: " . $result['video']['masterTitle'];
        break;

    case "movie":
        $title = "Movie Video Title: " . $result['video']['masterTitle'];
        break;

    case "song":
        $title = "Song Title: " . $result['song']['title'];
        if ($result['song']['primaryArtists'][0]) {
            $title = $title . "\nPrimary Artist: " . 
                $result['song']['primaryArtists'][0]['name'];    
        }
        break;
                            
    case "artist":
        $title = "Artist: " . $result['name']['name'];
        if ($result['name']['musicGenres'][0]) {
            $title = $title . "\nGenre: " . 
                $result['name']['musicGenres'][0]['name'];
        }
        break;
    }
    
    // Output this single result info
    echo("<pre>" .$title . "\n");
    echo("Type: " . $result['type'] . "\n");
    
    // Relevance is an "array" on the payload response schema.
    echo("Relevance Score: " . $result['relevance'][0]['value']);
    echo("</pre>");
}
?>
<?php elseif ($searchQuery): ?>
<pre>No results were found with those search parameters.</pre> 
<?php endif ?>
            </div>
        </div>
    </body>
</html>