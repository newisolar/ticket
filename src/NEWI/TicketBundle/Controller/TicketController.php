<?php

namespace NEWI\TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TicketController extends Controller
{
    public function indexAction()
    {
        return $this->render('NEWITicketBundle:Ticket:index.html.twig');
    }
}
