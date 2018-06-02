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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Domain\Model\Oportunidade;

class OportunidadeControler extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function salvarAction (Request $request)
    {
        $serializerService = $this->get('infra.serializer.service');
        $OportunidadeService = $this->get('app.oportunidade.service');
        try {
            $oportunidade = $serializerService->converter($request->getContent(), Oportunidade::class);
            $OportunidadeService ->salvar($oportunidade);
        } catch (\Exception $exception) {
           return new Response($exception->getMessage(),  400);
    }
        return new Response("Operação concluida com sucesso.");
    }

    /**
     * @Route ("/oportunidade/listarTudo")
     */
    public function getOportunidadesAction(){
        $oportunidadeService = $this->get('app.oportunidade.service');
        $serializerService = $this->get('infra.serializer.service');
        try{
            $oportunidades = $oportunidadeService->listarTudo();
          //  dump($oportunidades);die;
        }catch (\Exception $exception){
            return new Response($exception->getMessage(),400);
        }

        return new Response($serializerService->toJsonByGroups($oportunidades));
    }
}