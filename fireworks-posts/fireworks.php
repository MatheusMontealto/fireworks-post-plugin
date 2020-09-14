<?php

/*
    Plugin name: Fireworks Posts
    Plugin uri: https://github.com/MatheusMontealto
    Description: Plugin que gera fogos de artifício ao fundo de um post.
    Version: 1.0  
    Author: Matheus Montealto
    Author uri: https://github.com/MatheusMontealto
    License: GPLv2 or later
*/


function firework(){ ?>
    
<body background="https://cdn.edu.buncee.com/assets/b5c776c296840e5dda8cf0fdfc47ce6d/animation-holiday-fireworks-122618-7.gif?timestamp=1545838203">
</body>
<?php
}
add_filter('the_content','firework'); // Chama a função no the content do post

?>