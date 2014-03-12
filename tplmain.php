<!DOCTYPE html>
<html><head>
<title>
<?php 
if(ucwords($_REQUEST['page']) == "Home"){
	echo("");
}else{
	echo(ucwords($_REQUEST['page']).' // ');
}
?>New Life Worship Center, Gladewater TX</title>
<link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/<?php echo $css ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" media="screen" />


<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/script.js"></script>
<!--<script src="scripts/jquery.nivo.slider.js" type="text/javascript"></script>-->
<script src="scripts/jquery.tablesorter.js" type="text/javascript"></script>
<script>$(document).ready(function(){$("#mediatbl").tablesorter({headers:{2:{sorter:"shortDate"}},});});</script>
</head>
<body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5781743-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div id="topbar">
	<div id="topbar_wrap">
    	<a href="http://www.facebook.com/pages/New-Life-Worship-Center-Gladewater/132937660054214" target="_blank"><img src="images/fbicon.png" id="fbicon" /></a>
        
        <!-- ADMIN LINK -->
        <a href="index.php?page=admin" id="login">Admin</a>
        
    </div>
</div>
<div class="clearfix"></div>
<div id="header"></div>

<div id="wrap">
    <div id="headbar"></div>
	<div id="nav">
        <ul>
            <li><a href="index.php?page=home" id="home">home</a></li>
            <li><a href="index.php?page=ministries" id="ministries">ministries</a></li>
            <li><a href="index.php?page=directions" id="directions">directions</a></li>
            <li><a href="index.php?page=media" id="media">media</a></li>
        </ul>
    </div>

    <div id="main">
		<?php if($_REQUEST['page'] !== "reports"){
				if($_REQUEST['page'] !== 'admin'){
					include "includes/calendar.php";
				}
			}?>

		<!-- MAIN RIGHT-SIDE COLUMN -->
        <?php include 'pages/'.$_REQUEST['page'].'.php' ?>
	</div>
</div>
<div class="clearfix"></div>
<div id="footerBGfix">
  <div id="footer">
    <div id="footer_wrap">
      <div id="col1">
        <ul>
          <li>New Life Worship Center</li>
          <li>401 N Lee Dr</li>
          <li>Gladewater TX 75647</li>
          <li>903-845-8108</li>
          <li>nlwcgladewater@gmail.com</li>
        </ul>
      </div>
      <div id="col2">
        <ul>
          <li><a href="index.php?page=home">home</a></li>
          <li>|</li>
          <li><a href="index.php?page=ministries">ministries</a></li>
          <li>|</li>
          <li><a href="index.php?page=media">media</a></li>
        </ul>
      </div>
      <div id="col3"><!--filler--></div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
</body>
</html>