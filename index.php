<?php

$listitems = array();

$listitems[] = [
    "name" => "Abstract Class",
    "link" => "/abstract.php"
];

$listitems[] = [
    "name" => "Interface",
    "link" => "/interface.php"
];

$listitems[] = [
    "name" => "Null",
    "link" => "null.php"
];

$listitems[] = [
    "name" => "Pyramid",
    "link" => "pyramid.php"
];

$listitems[] = [
    "name" => "Scope",
    "link" => "scope.php"
];

$listitems[] = [
    "name" => "String Functions",
    "link" => "string_functions.php"
];

$listitems[] = [
    "name" => "String Modify",
    "link" => "string_modify.php"
];

echo "<ul>";
foreach ($listitems as $item) {
    echo "<li><a href='" . $item["link"] . "'>" . $item["name"] . "</a></li>";
}
echo "</ul>";

?>