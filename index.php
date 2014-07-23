<html>
<head>
<title>Chris Clark</title>
<link rel="stylesheet" type="text/css" href="profile.css"/>
<link href="lib/featherlight.css" type="text/css" rel="stylesheet" />
<link href="lightbox.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="lib/qrcode.js"></script>
<script src="lib/featherlight.js"></script>
<script src="qrlightbox.js"></script>
</head>
<body>
<div class="container">
<h2>Chris Clark</h2>
<div class="intro">
<div class="imgbox">
<a href="img/profile.jpg"><img class="profile" src="img/profile.jpg"></a>
</div>
<p>
I'm a Python developer, entrepreneur, physicist, and writer.
</p>
<ul>
<li><a href="http://architect-server.com">Architect Server</a> - home server platform
<li><a href="http://rampantlogic.com">Rampant Logic</a> - my software company
<li><a href="http://dfcd.net">dfcd.net</a> - physics research and tech projects</li>
<li><a href="http://www.amazon.com/Bitcoin-Internals-Technical-Guide-ebook/dp/B00DG8EPT0">Bitcoin Internals</a> - technical book about Bitcoin</li>
<li><a href="http://thrivebydesign.org">Thrive By Design</a> - blog about philosophy and lifehacking</li>
<li><a href="http://rampantlogic.com/entropass">Entropass</a> - cryptographic password manager</li>
<li><a href="http://grouphabits.com/1">GroupHabits</a> - social habit-tracking system</li>
</ul>
</div>
<div class="keys">
<a href="pubkey.asc">PGP Public Key</a>
</div>
<div class="icons">
<a href="https://twitter.com/clark800"><img src="img/icons/twitter.png"></a>
<a href="https://www.facebook.com/chris.clark.ucla"><img src="img/icons/facebook.png"></a>
<a href="http://instagram.com/thrivebydesign"><img src="img/icons/instagram.png"></a>
<a href="http://stackoverflow.com/users/2647751/clark800"><img src="img/icons/stackoverflow.png"></a>
<a href="https://github.com/clark800"><img src="img/icons/github.png"></a>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JD3RBU2XLGQYA"><img src="img/icons/paypal.png"></a>
<a id="bitcoin-button" href="#" onclick="showQRLightbox('1Do82XW4vK3wyVxFFSAhiGzn6dHTc68ouu', 'Bitcoin Address', 'bitcoin')"><img src="img/icons/bitcoin.png"></a>
<?php
$secret = 'g20O+G26PQ/bf0t3';
date_default_timezone_set('UTC');
$key = base64_encode(hash_pbkdf2('sha256', $secret, date('Ymd'), 2, 6, true));
print '<a href="mailto:10' . $key . '@autoexpire.email"><img src="img/icons/email.png"></a>';
?>
</div>
</div>
</body>
</html>
