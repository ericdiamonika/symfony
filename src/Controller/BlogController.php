<?php

namespace App\Controller;

use App\DataFixtures\PostFixtures;
use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Services\Calculator;
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
     * @Route("/form", name="form")
     */
    public function newPost() {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        return $this->render('post.html.twig',
            [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/put/{a}/{b}", name="maths_add")
     */

    public function put(float $a, float $b, Calculator $calculator )
    {

        $result = $calculator->add($a, $b);

        return $this->render('maths.html.twig', [
            'a' => $a,
            'b' => $b,
            'result' => $result,
        ]);
    }

    /**
     *
     * Matches /caca/*
     *
     * @Route("/caca/{slug}/{age}")
     */

    public function caca($slug, $age){

        return $this->render('url.html.twig', [
            'blog_title' => 'Mon super suuper',
            'slug' => $slug,
            'age' => $age,
        ]);

    }
}

