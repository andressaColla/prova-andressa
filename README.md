# Prova para programadores PHP

1 - Você deve fazer um fork desse projeto e fazer os testes PHPUnit passarem implementando o código que está sendo testado.
Comece instalando as dependências:
```bash
composer install
```

2 - Rodar os testes com 
```bash
composer test
```

Quando todos os testes passarem você pode fazer um PR para que eu revise.

## Informações sobre validação de rota
A validação da rota é algo comum em sistemas de MDF-e, onde o cliente deverá informar uma rota válida do veículo entre estados.
Rotas validas são aquelas que:
- Ocorrem dentro do estado. Exemplo: `RS,RS`. Ocorre quando a origem e destino são no mesmo estado.
- Os estados devem ser vizinhos. Por exemplo a rota `RS,SC,PR` é válida porque RS faz divisa com SC que por sua vez faz divisa com PR. A rota `RS,PR,SP` não é válida pois RS não faz divisa com PR.


## Informações sobre o Leitor de Arquivos

Essa classe deve sesr capaz de ler um arquivo e trazer as informações de acordo com o número da linha e nome da coluna. Ela será usada para importar dados de clientes de um sistema de terceiros. Precisamos certificar que a classe funciona conforme os testes.
Existe um arquivo de exemplo em tests/resources.

