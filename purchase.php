<html>
  <head>
    <title>Cart Checkout</title>
    <?php
		$url = 'http://'.$_GET['link'];
    foreach ($_GET as $index => $value) {
		if($index != 'link') {
			$url .= '&'.$index.'='.$value;
		}
    }
    ?>
    <META http-equiv="refresh" content="0;URL=<?php echo $url; ?>" onClick="fbq('track', 'Purchase');"
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '<?php echo $_GET['pixel']; ?>');
fbq('track', 'Purchase');
</script>
<!-- End Facebook Pixel Code -->
  </head>
  </body>
</html>
