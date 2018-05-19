<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario15
 * Date: 12/05/2018
 * Time: 14:49
 */

namespace Domain\Model;


use JMS\Serializer\Annotation as Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class Oportunidade
{
    /**
     * @var int
     */
    private $idOportunidade;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var \DateTime
     */
    private $periodoinicial;

    /**
     * @var \DateTime
     */
    private $periodofinal;

    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \DateTime $periodoinicial
     * @param \DateTime $periodofinal
     */
    public function __construct(
        string $descricao,
        \DateTime $periodoinicial,
        \DateTime $periodofinal)
    {
        $this->descricao = $descricao;
        $this->periodoinicial = $periodoinicial;
        $this->periodofinal = $periodofinal;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoinicial()
    {
        return $this->periodoinicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodofinal()
    {
        return $this->periodofinal;
    }


}