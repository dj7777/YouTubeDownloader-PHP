<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Youtube Downloader</title>
    <meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-download {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-download .form-download-heading,
      .form-download .checkbox {
        margin-bottom: 10px;
        text-align: center;
      }
      .form-download input[type="text"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .userscript {
        float: right;
        margin-top: 5px
      }
      #left{
        width:200px;
        height:700px;
        float:left;
      }
      #middle{
        width:600px;
        float:left;
      }
      #right{
        width:200px;
        float:right;
      }

    </style>
	</head>
<body>
<div id="left">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- a2zyoutube -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7675924055683611"
     data-ad-slot="4777916485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div id="middle">
	<form class="form-download" method="get" id="download" action="getvideo.php">
		<h1 class="form-download-heading">Youtube Downloader</h1>
		<input type="text" name="videoid" id="videoid" size="40" placeholder="VideoID" />
		<input class="btn btn-primary" type="submit" name="type" id="type" value="Download" />
		<p>Put in just the ID bit, the part after v=.</p>
		<p>Example: http://www.youtube.com/watch?v=<b>Fw-BM-Mqgeg</b></p>

    <!-- @TODO: Prepend the base URI -->
    <?PHP
    include_once('config.php');
    function is_chrome(){
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
		if(!strstr($agent, 'Iron')) // but not Iron
			return true;
	}
	return false;	// if isn't chrome return false
    }
   // if(($config['feature']['browserExtensions']==true)&&(is_chrome()))
    //  echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
    ?>
  </form>
  </div>
  <div id="right">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- a2zyoutube -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7675924055683611"
     data-ad-slot="4777916485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</body>
</html>
