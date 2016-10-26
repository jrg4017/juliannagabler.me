<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render(':pages:website-construction.html.twig');
        // replace this example code with whatever you need
//        return $this->render(
//            'pages/index.html.twig',
//            array(
//                'projects' => array(
//                    array(
//                        'name' => 'project 1',
//                        'id' => 'project-1',
//                        'image' => array( 'src' => 'nope', 'alt' => 'not an image')
//                    ),
//                    array(
//                        'name' => 'project 2',
//                        'id' => 'project-2',
//                        'image' => array( 'src' => 'nope', 'alt' => 'not an image')
//                    ),
//                    array(
//                        'name' => 'project 3',
//                        'id' => 'project-3',
//                        'image' => array( 'src' => 'nope', 'alt' => 'not an image')
//                    ),
//                    array(
//                        'name' => 'project 4',
//                        'id' => 'project-4',
//                        'image' => array( 'src' => 'nope', 'alt' => 'not an image')
//                    )
//                ),
//                'experience' => array(
//                    array(
//                        'jobTitle' => 'software engineering intern',
//                        'company' => 'datto, inc.',
//                        'description' => 'this is a description',
//                        'project' => 'symfony email project'
//                    ),
//                    array(
//                        'jobTitle' => 'software engineering intern',
//                        'company' => 'datto, inc.',
//                        'description' => 'this is a description'
//                    ),
//                    array(
//                        'jobTitle' => 'software engineering intern',
//                        'company' => 'datto, inc.',
//                        'description' => 'this is a description'
//                    )
//                ),
//                'skills' => array(
//                    array(
//                        'id' => 'php',
//                        'image' => array( 'src' => 'web/images/logos/php-logo', 'alt' => 'php')
//                    ),
//                    array(
//                        'id' => 'javascript',
//                        'image' => array( 'src' => 'nope', 'alt' => 'javascript')
//                    ),
//                    array(
//                        'id' => '',
//                        'image' => array( 'src' => 'nope', 'alt' => 'java')
//                    )
//                ),
//                'toolsFrameworks' => array(
//                    array(
//                        'id' => 'symfony',
//                        'image' => array( 'src' => 'nope', 'alt' => 'symfony')
//                    ),
//                    array(
//                        'id' => 'grunt',
//                        'image' => array( 'src' => 'nope', 'alt' => 'grunt')
//                    ),
//                    array(
//                        'id' => 'github',
//                        'image' => array( 'src' => 'nope', 'alt' => 'github')
//                    )
//                ),
//            )
//        );
    }
}
