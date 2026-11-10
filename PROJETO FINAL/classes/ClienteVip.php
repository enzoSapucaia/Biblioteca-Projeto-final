<?php
class ClienteVip extends Cliente
{
    public function getTipo()
    {
        return "vip";
    }

    public function calacularValor()
    {
        return self::VALOR_ALUGUEL * 0.8;
    }
}
