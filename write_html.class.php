<?php


    function html_start(string $title, string $cssfile='') {
    echo "<!DOCTYPE html>\n
        <html>\n<head>\n";
    echo "<title> $title </title>\n";
    echo "<meta charset=\"UTF-8\">\n
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    echo "<link rel=\"stylesheet\" href=\"./css/style.css\">\n";
    if ($cssfile !='') echo "<link rel=\"stylesheet\" href=\"$cssfile\">";
    echo "</head><body>\n";
}


function html_end(){
    echo '</body></html>';
}