<?php 
// clik droit -> generate namespace for this fil 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// mise ne place d'un controller
class HomeController {

    // Response
    #[Route('/', name: 'home')]
    public function accueil() : Response { 
        dump(__METHOD__);
        // on retounre un objet de class Response
        return new Response('OK');
        // dd = dump() + did() ??
    }

}