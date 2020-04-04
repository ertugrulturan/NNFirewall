# NNFirewall - PHP Layer7 Firewall (Cloudflare + HCaptcha)
Upload all files to the home directory (public_html),
Register to https://cloudflare.com and https://hcaptcha.com key code + domain name edit(nnfconfig.php);
-----------------------------------------------
<?php
//YoutWeb site domain (url) - Not: https://site.com/ Use: https://site.com
$mywebsiteurlx = "https://site.com";
//CloudFlare Api Connect;
//X-Auth-Email & X-Auth-Key
$mailcf = "yourmail@mail.com";
$keycf = "CloudFlare api key here";
//hcaptcha.com api key;
$hcaptchakeycodesecret = "hcaptcha.com register and generated SECRET code here";
$hcaptchakeycodepub = "hcaptcha site key code";
?>
-----------------------------------------------
And include saldiri-koru.php your web site all file or only index.php;
-----------------------------------------------
<?php
include("saldiri-koru.php");
-----------------------------------------------
</pre>
<h2>Testing firewall</h2>
[![IMAGE ALT TEXT](http://img.youtube.com/vi/0wSH9jhQyC4/0.jpg)](http://www.youtube.com/watch?v=0wSH9jhQyC4 "NNFirewall - Layer7 Güvenlik Duvarı (PHP) Trailer")
