<form method="post" action="#"> 
	Posted By:<br /><input name="postedby" id="postedby" type="Text" size="50" maxlength="50"><br />
	Subject:<br /><input name="subject" id="subject" type="Text" size="50" maxlength="50"><br />
	<textarea name="news" id="news" cols="50" rows="5"></textarea><br />
	<input type="Submit" name="submit" id="submit" value="Enter News">
</form>
<?php
function clear($message)
{
	if(!get_magic_quotes_gpc())
		$message = addslashes($message);
	$message = strip_tags($message);
	$message = htmlentities($message);
	return trim($message);
}
if ($_POST['submit'])
{ 
	if (empty($_POST['postedby']))
		die('Enter a name.'); 
	else if (empty($_POST['subject']))
		die('Enter a subject.'); 
	else if (empty($_POST['news']))
		die('Enter an article.'); 
	$postedby = clear($_POST['postedby']); 
	$subject = clear($_POST['subject']); 
	$news = clear($_POST['news']); 
	$date = mktime();
	mysql_connect('localhost','feed','katie11');
	mysql_select_db('news');
	if(mysql_query("INSERT INTO news (id , postedby , news , subject , date) VALUES ('', '$postedby', '$news', '$subject', '$date')"))
		echo 'News Entered.';
	mysql_close(); 
}
?>