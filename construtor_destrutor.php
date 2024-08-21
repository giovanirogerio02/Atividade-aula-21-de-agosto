        <?php

        // chamei a classe pessoa class Pessoa; {
            // publiquei o nome nulo; public $nome = null;

          // fiz a função construir com o nome;  function __construct($nome) {
                echo 'Objeto iniciado';
                $this->nome = $nome;
            }

           // foi se feito a função destruir, abrir um echo com o nome objeto removido; function __destruct() {
                echo 'Objeto removido';
            }
    

          // a função get serve para apontar e criamos um nome atributo;  function __get($atributo) {
                return $this->$atributo;
            }

           // a função correr foi criada para ressaltar que alguem está correndo; function correr() {
                return $this->__get('nome') . 'está correndo!';
            }

        }

    // foi criado o nome pessoa com o nome Geovanne Roggerio; $pessoa = new Pessoa('Geovanne Roggerio');

    // com o nome get para apontar o nome no local; echo '<br />Nome: ' . $pessoa->__get('nome');
    // mostrar na tela a pessoa correndo; echo $pessoa->correr();
   // função unset pessoa; unset($pessoa);

    // função com erro inexistente, ou seja, ele não existe; echo $pessoa;

        ?>
