<?php 

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta 
{
    private $titular; // composição de objeto Titular
    protected $saldo;

    private static $numeroDeContas = 0;

    public function __construct(Titular $titular){

        $this->titular = $titular;
        $this->saldo = 0;
        
        self::$numeroDeContas++; //atributo da classe: static
        
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        
        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo Indisponível";
            return;
        }
        
        $this->saldo -= $valorSaque;
        
    }

    public function depositar($valorADepositar): void 
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
        
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }    

    public static function recuperarNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    abstract protected function percentualTarifa(): float;
}