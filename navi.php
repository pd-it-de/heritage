<?php

$links = do_query('SELECT * FROM links ORDER BY id');

echo "<div>";
echo "<ul class=\"nav\">";
foreach ($links as $link) {
    echo "<li><a href=\"". $link['url'] .  "\">" . $link['title'] . "</a></li>";
}
echo "</ul>";
echo "</div>";

