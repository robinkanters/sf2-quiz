<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class QuizController extends Controller
{
    /**
     * @Route("/quiz/list")
     * @Template()
     */
    public function listAction()
    {
        return array(
            // ...
        );
    }

    /**
     * @Route("/show")
     * @Template()
     */
    public function showAction()
    {
        return array(
            // ...
        );
    }

}
