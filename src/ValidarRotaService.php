<?php


namespace App;

use Exception;

class ValidarRotaService
{
    //TODO vc deve implementar esse método
    public function isValida(array $siglasEstados)
    {
        $estadosDivisas = [
            'AC'=>['AC' => 1, 'AM' => 1, 'RO' => 1],
            'AL'=>['AL' => 1, 'SE' => 1, 'PE' => 1, 'BA' => 1],
            'AP'=> ['AP' => 1, 'PA' => 1],
            'AM'=> ['AM' => 1, 'AC' => 1, 'RO' => 1, 'MT' => 1, 'PA' => 1, 'RR' => 1],
            'BA'=> ['BA' => 1, 'ES' => 1, 'MG' => 1, 'GO' => 1, 'TO' => 1, 'PI' => 1, 'PE' => 1, 'AL' => 1, 'SE' => 1],
            'CE'=> ['CE' => 1, 'PI' => 1, 'PE' => 1, 'PB' => 1, 'RN' => 1],
            'ES'=> ['ES' => 1, 'RJ' => 1, 'MG' => 1, 'BA' => 1],
            'GO'=> ['GO' => 1, 'MG' => 1, 'BA' => 1, 'TO' => 1, 'MT' => 1, 'MS' => 1],
            'MA'=> ['MA' => 1, 'PI' => 1, 'TO' => 1, 'PA' => 1],
            'MT'=> ['MT' => 1, 'MS' => 1, 'GO' => 1, 'TO' => 1, 'PA' => 1, 'AM' => 1, 'RO' => 1],
            'MS'=> ['MS' => 1, 'PR' => 1, 'SP' => 1, 'MG' => 1, 'GO' => 1, 'MT' => 1],
            'MG'=> ['MG' => 1, 'SP' => 1, 'RJ' => 1, 'ES' => 1, 'BA' => 1, 'GO' => 1, 'MS' => 1],
            'PA'=> ['PA' => 1, 'MT' => 1, 'TO' => 1, 'AP' => 1, 'AM' => 1,],
            'PB'=> ['PB' => 1, 'PE' => 1, 'RN' => 1, 'CE' => 1],
            'PR'=> ['PR' => 1, 'SC' => 1, 'MS' => 1, 'SP' => 1],
            'PE'=> ['PE' => 1, 'BA' => 1, 'AL' => 1, 'PB' => 1, 'CE' => 1, 'PI' => 1, ],
            'PI'=> ['PI' => 1, 'BA' => 1, 'PE' => 1, 'CE' => 1, 'MA' => 1, 'TO' => 1],
            'RJ'=> ['RJ' => 1, 'SP' => 1, 'ES' => 1, 'MG' => 1],
            'RN'=> ['RN' => 1, 'PB' => 1, 'CE' => 1],
            'RS'=> ['RS' => 1, 'SC' => 1],
            'RO'=> ['RO' => 1, 'AM' => 1, 'AC' => 1, 'MT' => 1],
            'RR'=> ['RR' => 1, 'AM' => 1, 'PA' => 1],
            'SC'=> ['SC' => 1, 'RS' => 1, 'PR' => 1],
            'SP'=> ['SP' => 1, 'PR' => 1, 'MS' => 1, 'MG' => 1, 'RJ' => 1],
            'SE'=> ['SE' => 1, 'AL' => 1, 'BA' => 1],
            'TO'=> ['TO' => 1, 'MT' => 1, 'GO' => 1, 'BA' => 1, 'PI' => 1, 'MA' => 1, 'PA' => 1]
        ];

        if (count($siglasEstados) <= 1) {
            return false;
        }

        $count = 1;
        $totalSiglas = count($siglasEstados); // conta quantas siglas estão sendo enviadas
        $siglaInicial = 0; //pega a primeira posição do array

        while ($count < $totalSiglas) {
            if (!isset($estadosDivisas[$siglasEstados[$siglaInicial]][$siglasEstados[$siglaInicial + 1]])) {
                return false;
            } else {
                $siglaInicial++;
            }

            $count++;
        }
        return true;
       
    }
}