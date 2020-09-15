<?php

/*
    Plugin name: Fireworks Posts
    Plugin uri: https://github.com/MatheusMontealto
    Description: Plugin que gera fogos de artifício ao fundo do site.
    Version: 0.2  
    Author: Matheus Montealto
    Author uri: https://github.com/MatheusMontealto
    License: GPLv2 or later
*/


function firework(){ 
    
    echo "<style> body {background-image: url('https://cdn.edu.buncee.com/assets/b5c776c296840e5dda8cf0fdfc47ce6d/animation-holiday-fireworks-122618-7.gif?timestamp=1545838203') !important;}}</style>";
    
}
add_filter('init','firework'); // Chama a função no init

?>