<h1>Placeholder page</h1>
<?php

$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}

?>
