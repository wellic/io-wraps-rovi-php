<?php

session_start();

require_once './_apiClient.php';
require_once './contrib/apiArticlesapiService.php';
$client = new apiClient();
$client->setDeveloperKey("YOUR_KEY_HERE");
$service = new apiArticlesapiService($client);

$StoryList = new StoryList;
$story = new Story;

if (isset($_GET['section'])) {
	$section = $_GET['section'];
	$encoding = $_GET['encoding'];
	$StoryList = new StoryList($service -> ArticlesMethods -> TopNews($encoding, $section));
}
?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<header>
			<h1>USA TODAY Headlines Section Sample App</h1>
		</header>
		<div class="box">
			<div class="request">
				<form id="section" method="GET" action="articles_headlines.php">
					Section:
					<select name="section">
						<option value="home" selected="selected"> home </option>
						<option value="news" > news </option>
						<option value="travel" > travel </option>
						<option value="money" > money </option>
						<option value="sports" > sports </option>
						<option value="life" > life </option>
						<option value="tech" > tech </option>
						<option value="weather" > weather </option>
						<option value="test" > test </option>
						<option value="nation" > nation </option>
						<option value="offbeat" > offbeat </option>
						<option value="washington" > washington </option>
						<option value="world" > world </option>
						<option value="religion" > religion </option>
						<option value="opinion" > opinion </option>
						<option value="yl-health" > yl-health </option>
						<option value="nfl" > nfl </option>
						<option value="mlb" > mlb </option>
						<option value="nba" > nba </option>
						<option value="nhl" > nhl </option>
						<option value="collegefootball" > collegefootball </option>
						<option value="collegebasketball" > collegebasketball </option>
						<option value="highschool" > highschool </option>
						<option value="motorsports" > motorsports </option>
						<option value="golf" > golf </option>
						<option value="soccer" > soccer </option>
						<option value="horseracing" > horseracing </option>
						<option value="books" > books </option>
						<option value="people" > people </option>
						<option value="music" > music </option>
						<option value="reviews" > reviews </option>
					</select><br />
					Encoding:
					<select name="encoding" class="encoding">
						<option>json</option><option>rss</option>
					</select>
					<br /><br />
					<input type="submit" value="Search Articles">
				</form>

			</div>

			<?php if (isset($_GET['section'])): ?>
				<hr />Results<br /><br />
					<?php
						// Iterate through each story object, and hyperlink the title of each article
						foreach ($StoryList->getStories() as $story) {
							echo("<a href='" . $story->getLink() . "' target='_blank'>");
							echo($story -> getTitle());
							echo("</a><br />\n");
						}
					?>
		  	<?php endif ?>
		</div>
	</body>
</html>

