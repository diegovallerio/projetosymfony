<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario15
 * Date: 12/05/2018
 * Time: 15:06
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OportunidadeControler extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function salvarAction (Request $request) {
        $serializerService = $this->get('infra.serializer.service');
        dump($serializerService); die;

    }
}