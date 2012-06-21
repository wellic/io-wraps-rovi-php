<?php

session_start();

require_once './_apiClient.php';
require_once './contrib/apiArticlesapiService.php';
$client = new apiClient();
$client->setDeveloperKey("YOUR_KEY_HERE");
$service = new apiArticlesapiService($client);

$StoryList = new StoryList;
$story = new Story;

if (isset($_GET['community'])) {
	$community = $_GET['community'];
	$encoding = $_GET['encoding'];
	$StoryList = new StoryList($service ->ArticlesMethods->CommunityFeedMethods($community, $encoding));
}
?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<header>
			<h1>USA TODAY Community Feed Sample App</h1>
		</header>
		<div class="box">
			<div class="request">
				<form id="section" method="GET" action="community_feed.php">
					Community:
					<select name="community" placeholder="required">
						<option value="religion" > religion </option>
						<option value="greenhouse" > greenhouse </option>
						<option value="kindness" > kindness </option>
						<option value="ondeadline" > ondeadline </option>
						<option value="onpolitics" > onpolitics </option>
						<option value="theoval" > theoval </option>
						<option value="thecruiselog" > thecruiselog </option>
						<option value="hotelcheckin" > hotelcheckin </option>
						<option value="todayinthesky" > todayinthesky </option>
						<option value="driveon" > driveon </option>
						<option value="campusrivalry" > campusrivalry </option>
						<option value="christinebrennan" > christinebrennan </option>
						<option value="dailypitch" > dailypitch </option>
						<option value="fantasyjoe" > fantasyjoe </option>
						<option value="fantasywindup" > fantasywindup </option>
						<option value="mma" > mma </option>
						<option value="gameon" > gameon </option>
						<option value="thehuddle" > thehuddle </option>
						<option value="idolchatter" > idolchatter </option>
						<option value="entertainment" selected="selected"> entertainment </option>
						<option value="livefrom" > livefrom </option>
						<option value="pawprintpost" > pawprintpost </option>
						<option value="popcandy" > popcandy </option>
						<option value="gamehunters" > gamehunters </option>
						<option value="sciencefair" > sciencefair </option>
						<option value="technologylive" > technologylive </option>
					</select>
					<br />

					Encoding:
					<select name="encoding" class="encoding">
						<option>json</option><option>rss</option>
					</select>
					<br />
					<br />
					<input type="submit" value="Search Articles">
				</form>

			</div>

			<?php if (isset($_GET['community'])): ?>
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

