<?php
$url = $_REQUEST['urlToShort'];

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
$myfile = fopen("{$name}.html", "w");
fwrite($myfile, "<html>\n<meta http-equiv=\"refresh\" content=\"0; url={$url}\">\n</meta>\n</html>");
fclose($myfile);
print "Your shortened URL is https://icurriculum.co/{$name}.html";
header('https://YOUR_URL_HERE/{$name}.html', true, 200);
die();

?>
