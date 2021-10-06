<!DOCTYPE html>
<?php
$url = $_REQUEST['urlToShort'];

if (substr( $url, 0, 4 ) === "http") {


$responseData = json_decode($response);

if ($responseData->success) {


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
$safename = htmlspecialchars($name);
fwrite($myfile, "<html>\n<meta http-equiv=\"refresh\" content=\"0; url={$url}\">\n</meta>\n</html>");
fclose($myfile);
print "<head><script src=\"https://js.hcaptcha.com/1/api.js\" async defer></script><link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"><script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script><script defer=\"\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script><script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script><meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"><meta name=\"description\" content=\"Link Shortener.\"><link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css\"></head><nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\"><a class=\"navbar-brand\" href=\"/shortener.html\">Link Shortener</a></button></div></nav><body><div class=\"d-flex justify-content-center\"><div style=\"padding: 125px\"/><h1>URL Shortened.</h1><div style=\"padding: 10px\"/><h7>Your shortened URL is https://icurriculum.co/shorten/{$safename}.html</h7></div></body>";
die();

}



else {
print "ERROR: Empty URL Submitted";
}
?>
