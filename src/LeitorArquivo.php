<?php


namespace App;

use Exception;

class LeitorArquivo
{

    public function __construct(string $caminhoArquivo)
    {
        if(!file_exists($caminhoArquivo)) {
            throw new \InvalidArgumentException("O caminho do arquivo é inválido!");
        } else {
            $this->caminhoArquivo = $caminhoArquivo;
        }

    }

    public function getColunas(): array
    {
        $linhas = file($this->caminhoArquivo);
        foreach ($linhas as $linha) {
            $coluna = explode('  ', trim($linha));
            break;
        }
        return $coluna;
        
    }

    public function getValorLinhaColuna(int $numeroLinha, string $nomeColuna): string //0 ID
    {
        $colunas = $this->getColunas();
        $numeroColuna = array_search($nomeColuna, $colunas);
        if ($numeroColuna === false) {
            throw new \InvalidArgumentException("Coluna inexistente");
        }
        $linhas = file($this->caminhoArquivo);
        array_shift($linhas);
        $linhaProcurada = explode("  ", $linhas[$numeroColuna]);

        try {
            $linhaEncontrada = $linhaProcurada[$numeroLinha];
        } catch(Exception $e) {
            throw new \InvalidArgumentException("Linha inexistente");

        }

        return $linhaProcurada[$numeroLinha];
    }
}