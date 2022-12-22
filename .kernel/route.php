<?php
use Kernel\Url\Router as r;
use Controller as c;
use Api as a;




// Route vers les composants.
r::notfound('/');
r::default('/accueil');
r::add('/accueil', c\Accueil::class);
r::add('/documentation', c\Documentation::class);
r::add('/manuel', c\Manuel::class);



/*
// Route vers les API.
r::add('/api', a\::class, [
    r::METHOD_GET,
    r::METHOD_POST
]);
r::add('/api/{id}', a\::class, [
    r::METHOD_GET,
    r::METHOD_PUT,
    r::METHOD_DELETE,
    r::METHOD_PATCH
]);
*/


?>