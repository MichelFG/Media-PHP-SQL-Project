<?php

class write_html {
    function html_start() {
        echo "<!doctype>";
        echo "<html>";
        echo "<head>";
        echo "<body>";
    }
        function html_end() {
        echo "</html>";
        echo "</head>";
        echo "</body>";
    }
}