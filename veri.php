<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Son Tweetler</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
	$(function(){
	
		
<?php	echo	"$.getJSON(\"http://api.twitter.com/1/statuses/user_timeline/".$_POST["nick"].".json?count=5&include_rts=1&callback=?\", function(veri){"; ?>
					$(".load").hide();
					$.each(veri, function(i, veri){
						var $text = veri.text;
						var $resim = veri.user.profile_image_url;
						var $time = veri.created_at;
						var $nick = veri.from_user_name;
						$(".tweet ul").append('<li><img src="' + $resim + '" alt="" title="' + $text + '" /><p> ' +$nick+' ('+$time+') '+$text +'</p></li>');
					});
				});
	});
	</script>
    <style type="text/css">
	
	body {font: 11px Arial}
	ul, li {padding: 0; margin: 0; list-style: none}
	.tweet {width: 400px}
	.tweet ul li {padding: 5px; border-bottom: 2px solid #ddd; overflow: auto}
	.tweet ul li img {float: left; margin-right: 10px; width: 40px; height: 40px; border: 1px solid #333}
	.tweet ul li p {color: #656565}
	</style>
		
	<style type="text/css">
        .tweet{
	width:270px;
	height:150px;
	position:absolute;
	left:50%;
	top:20%;
	margin:-75px 0 0 -135px;
}

</style>	

</head>


<body background="2.jpg" >
<form action="veri.php" method="post"  >

<table border="0" align="center" >
<tr><td align="center">
User Name  <input type="text" name="nick">


<input type="image" value="submit" src="hover.png"></td>
</tr></table>

  </form>


<div class="tweet">
	<div class="load">...</div>
	<ul></ul>
</div>
</body>
</html>