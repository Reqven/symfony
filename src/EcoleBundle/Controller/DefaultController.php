<?php

namespace EcoleBundle\Controller;

use EcoleBundle\Entity\Classe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $classe = new Classe();
        $classe->setNom('deded');
        dump($classe);
        return 'shut up';
    }
}
