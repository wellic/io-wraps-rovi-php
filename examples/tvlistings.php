<?php 
/**
 * tvlistings.php
 *
 * I/O Wraps PHP Client Library Sample App for TV Listings API 
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
require_once "../google-api-php-client/src/contrib/apiTvlistingsapiService.php";

// Instantiate client
$client = new apiClient();

// Set credentials
$client -> setDeveloperKey("YOUR_KEY_HERE");

// Instantiate service
$service = new apiTvlistingsapiService($client);

// Initialize globals
$tvlistingsAPI = array();
$resultsObj = array();
$postalCode = $_GET['postalCode'];
$searchResultCount = 0;

if ($postalCode) {
    $tvlistingsAPI = $service->TVListingsMethods->Services(
        $postalCode, 
        "en-US",
        "US"
    );
    $resultsObj = $tvlistingsAPI['ServicesResult'];
}
?>
<!doctype html>
<html>
    <head>
        <title>Rovi TV Listings API - Services Example App</title>
         <link rel="stylesheet" 
            href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" />
    </head>
    <body>
        <div class="container" id="mainwrap">
            <header>
                <h1>Rovi TV Listings API - Services Example App</h1>
            </header>
            <div class="box">
                <div class="request">
                    <form id="section" method="GET" action="./tvlistings.php" 
                        class="well">
                        <div>
                            <label>Postal Code</label>
                            <input type="text" name="postalCode"
<?php 
if ($postalCode) {
    echo ("value=\"" . $postalCode . "\"");
}
?>
                            />
                        </div>
                        <div>
                            <input type="submit" value="Search for TV Services" />
                        </div>
                    </form>

                </div>
                <hr />
<?php
// Pardon this inline control
if (($postalCode) && ($resultsObj['Services'] > 0)): 
?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ServiceClass</th>
                            <th>ServiceId</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>MSO</th>
                            <th>MSOID</th>
                        </tr>
                    </thead>
                    <tbody>    
<?php
foreach ($resultsObj['Services']['Service'] as $result) {                    
    // Output each result in row
    echo("<tr><td>" . $result['ServiceClass'] . "</td>");
    echo("<td>" . $result['ServiceId'] . "</td>");
    echo("<td>" . $result['Name'] . "</td>");
    echo("<td>" . $result['City'] . "</td>");
    echo("<td>" . $result['MSO'] . "</td>");
    echo("<td>" . $result['MSOID'] . "</td></tr>");
}
?>
                    </tbody>
                </table>
<?php elseif ($postalCode): ?>
    <pre>No results were found with those search parameters.</pre> 
<?php endif ?>
            </div>
        </div>
    </body>
</html>