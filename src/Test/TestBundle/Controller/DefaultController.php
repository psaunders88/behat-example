<?php

namespace Test\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Default Controller
 * 
 * @package Test\TestBundle\Controller\DefaultController
 * @author  Paul Saunders
 */
class DefaultController extends Controller
{
    /**
     * Index action, just outputs the index template
     * 
     * @return Response 
     */
    public function indexAction()
    {
        return $this->render('TestTestBundle:Default:index.html.twig');
    }

    /**
     * Test Page Action
     * This is just so I can show and example of testing a hyperlink with Behat
     * 
     * @return Response 
     */
    public function testPageAction()
    {
        return $this->render('TestTestBundle:Default:testpage.html.twig');
    }
}
