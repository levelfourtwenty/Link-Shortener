<?php

$url = $_REQUEST['urlToShort'];

if (substr( $url, 0, 4 ) === "http") {

$n = 6;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
};

$name = getName($n);
$myfile = fopen("shorten/{$name}.html", "w");
fwrite($myfile, "<html>\n<meta http-equiv=\"refresh\" content=\"0; url={$url}\">\n</meta>\n</html>");
fclose($myfile);
print "Your shortened URL is http://YOUR_URL_HERE/shorten/{$name}.html";
header('http://YOUR_URL_HERE/shorten/{$name}.html', true, 200);
die();
}
else {

echo "Error: Invalid URL";
header('Invalid Request URL', false, 400);
die();
}
?>
