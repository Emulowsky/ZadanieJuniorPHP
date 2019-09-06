<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StartController extends AbstractController
{
    public function welcome()
    {
		return $this->render('start.html.twig');
    }
}
