<div class='nav-platforms-links-container'>

<?php

$platforms = [
    'arcade' => "php/platforms/arcade.html",
    'dreamcast' => "php/platforms/dreamcast.html",
    'genesis' => "php/platforms/genesis.html",
    'nes classic' => "php/platforms/nes-classic.html",
    'nintendo 64' => "php/platforms/nintendo-64.html",
    'super nintendo' => "php/platforms/super-nintendo.html"
];

foreach ($platforms as $key => $value) {
    $ucKey = ucwords($key);
    echo "<h2><a href=", $value, ">$ucKey</a></h2>\n";
}

?>
    
</div>