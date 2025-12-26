<style type="text/css">
  #main .container { font-family: "Garamond"; font-size: 14pt; font-weight: 500; line-height: 18pt; background-color: azure; padding: 30px; }
  #book { max-width: 768px; margin: 0 auto; background-color: #fff; border: 1px teal solid; padding: 30px; border-radius: 20px; }
  #book .image { background-color: azure; border: 1px teal solid; padding: 20px; margin: 20px auto 20px auto; display: inline-block; clear: both; }
  p hr { display: none; }
</style>
<hr />
<div id="book">
<?php
$full = file_get_contents(__DIR__ . '/_summary.html');
$body = explode('<body class="c60 c158">', $full)[1];
$body = explode('</body>', $body)[0];
$body = str_replace('<hr style="page-break-before:always;display:none;">', '<hr />', $body);
$body = str_replace('"images/', '"' . replaceHtml('%site-base%%section%/%nodeSlug%/assets/summary-images/'), $body);
$body = str_replace('href="http','target="_blank" href="http', $body);
echo $body;
?>
</div>
