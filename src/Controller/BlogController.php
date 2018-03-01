<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return new Response('
        
        <html>
            <body>
                <h1 style="">
                    THE THING GO GRILLA !!!
                </h1>
            
            </body>
        
        </html>
      
        ');
    }


    /**
 * @Route("/blog", name="blog")
 */

    public function blog(Request $request)
    {

        $name = $request->query->get('name');

        return $this->render('blog.html.twig', [
            'blog_title' => 'Mon super suuper',
            'name' => $name,
        ]);


    }

    /**
     * @Route("/caca", name="caca")
     */

    public function caca(){
        return new Response('
        <html>
            <body>
                <h1 style="">
                    Bonjour
                </h1>
            
            </body>
        
        </html>
        
        ');
    }
}

