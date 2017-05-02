<?php
use PHPUnit\Framework\TestCase;
use UnitBank\Conta\Model\ContaCorrente;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class ContaCorrenteTest extends TestCase
{

    private $contaCorrente;
    
    private $numAgencia = 200;
    
    private $numConta = 5000;

    public function setUp()
    {
        $this->contaCorrente = new ContaCorrente(200,5000);
    }

    /**
     * @test
     */
    public function verificaSeInstanciaConta()
    {
        $this->assertInstanceOf("\UnitBank\Conta\Model\ContaCorrente", $this->contaCorrente);
    }

    /**
     * @test
     */
    public function verificaSeDefineAgencia()
    {
        $this->assertEquals($this->numAgencia, $this->contaCorrente->obtemAgencia());
    }
    
    /**
     * @test
     * @expectedException UnexpectedValueException
     */
    public function verificaSeLancaExcessaoNaDefinicaoDeAgencia()
    {
        $contaCorrente = new ContaCorrente("asiojasij",2000);
    }
    
//     /**
//      * @test
//      */
//     public function verificaSeEPossivelCriarConta()
//     {
//     }
}   