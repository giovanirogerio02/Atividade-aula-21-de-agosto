<?php

class Funcionario {

    // foi se criado a função atributos; atributos
    // publicou o nome nome; public $nome= null;
    // a segunda opção telefone; public $telefone= null;
    // a publicação número; public $numFilhos=null;

   // função nome para this exibir nome; function setNome($nome) {
        $this->nome = $nome;
    }

   // função que aponta o nome e retorna em seguida;  function getNome() {
        return $this->nome;
    }

    // a função numero de filhos é apontada na tela com o número de filhos; function getNumFilhos() {
        return $this->numFilhos;
    }

    // função para número de filhos; function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    // opção de função telefone; function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // função aponta telefone na tela; function getTelefone ($telefone) {
        return $this->telefone = $telefone;
    }

    // função que mostra e retorna o nome da pessoa e o número de filhos; funções e métodos
    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

   // função modifica e retorna o número de filhos na tela; function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

    // obs: Esses parágrafos podem ser feitos quantas vezes quiser, mostrando sempre a função de cada um;

}
// a opção funcionário; $y= new Funcionario();
// para apontar o nome Geovanne; $y->setNome('Geovanne');
// apontar o número de filhos; $y->setNumFilhos(0);
echo $y->resumirCardFunc();
// para separar as linhas de cada opção; echo '<hr>';
// echo get nome para mostrar e exibir a quantidade de filhos na tela; echo $y->getNome() . 'possui ' . $y->getNumFilhos() . 'filhos';
?>
