<div class='nav-platforms-links-container'>

<?php

$platforms = [
    'arcade' => "platforms/arcade.php",
    'dreamcast' => "platforms/dreamcast.php",
    'genesis' => "platforms/genesis.php",
    'nes classic' => "platforms/nes-classic.php",
    'nintendo 64' => "platforms/nintendo-64.php",
    'super nintendo' => "platforms/super-nintendo.php"
];

foreach ($platforms as $key => $value) {
    $ucKey = ucwords($key);
    echo "<h2><a href=", $value, ">$ucKey</a></h2>\n";
}

?>

</div>