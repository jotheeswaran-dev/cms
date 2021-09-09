<?php

// query string
var_dump($_SERVER["QUERY_STRING"]); // traditionally used to pass values to scripts

echo "             ";

// $_GET - We can pass as many varibles but at end all of them will be string
// http://localhost:8080/php/cms/querystring.php?id=1&name=%22string%22&is_published=true
var_dump($_GET);
