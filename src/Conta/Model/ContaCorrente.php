<?php

namespace UnitBank\Conta\Model;

class ContaCorrente
{
    private $agencia = NULL;
    
    public function __construct($agencia, $conta)
    {
        $this->defineAgencia($agencia);
    }
    
    private function defineAgencia($agencia)
    {
        if(!is_numeric($agencia))
            throw new \UnexpectedValueException('Valor definido inválido!');
        
        $this->agencia = $agencia;
    }
    
    public function obtemAgencia()
    {        
        return $this->agencia;
    }
}