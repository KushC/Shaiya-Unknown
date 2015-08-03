<?php
    $line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
include 'icl/header.php';

?>
<div id="mainv">
	<iframe width="654" height="510" src="https://www.youtube.com/embed/lj-QZl6XyYU" frameborder="0" allowfullscreen></iframe>
</div>
<div id="feed">
	<div id="News-Title">
		<h1>Server Updates</h1>
	</div>

<?php
mysql_connect('127.0.0.1','feed','katie11');
mysql_select_db('news');
$query = mysql_query('SELECT * FROM news ORDER BY id DESC Limit 3');
while($output = mysql_fetch_assoc($query))
{
	echo '<div id="Boxf">';
	echo $output['subject'].'<br />';
	echo '</div>';
	echo date('D-M-Y', $output['date']).'<br / >';
	echo 'Posted by '.$output['postedby'].'<br / >';
	echo $output['news'].'<br / >';
	echo '<hr />';
}
?>
</div>
<div id="four">
	<h3>Wanna Play Shaiya Ep 4.5?</h3>
	<p>Come Join Us On The 4.5 Server. Staff Positions Are Open. Players Are Friendly, Developers Are Active, And Best Of All Its Free To Play!
		Please Note That Donation Points Are Not Currently Dropping</p>
    <button> Play 4.5!</button>
</div>
<div id="five">
  <h3>Wanna Play Shaiya Ep 5.4?</h3>
  <p>Currently The 5.4 Server Is Uner Construction Please Bare With Us While We Build It</p>
<button>Play 5.4!</button>
</div>




<?php
include 'icl/footer.php';
