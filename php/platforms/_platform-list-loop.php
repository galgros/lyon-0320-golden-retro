<div class='nav-platforms-links-container'>

<?php

$platforms = [
    'arcade' => "php/platforms/arcade.php",
    'dreamcast' => "php/platforms/dreamcast.php",
    'genesis' => "php/platforms/genesis.php",
    'nes classic' => "php/platforms/nes-classic.php",
    'nintendo 64' => "php/platforms/nintendo-64.php",
    'super nintendo' => "php/platforms/super-nintendo.php"
];

foreach ($platforms as $key => $value) {
    $ucKey = ucwords($key);
    echo "<h2><a href=", $value, ">$ucKey</a></h2>\n";
}

?>

</div>