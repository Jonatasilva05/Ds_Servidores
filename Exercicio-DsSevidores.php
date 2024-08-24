<?php
    require "style.php"
?>

<header>
    <h1>
        Atividade - Aula conceitos PHP - 23/08/2024
    </h1>
    <a href="">Link repositório do GitHub</a>
</header>

<main class="container">
    <div class="modulo">
        <div class="card1">
            <h2>1. Estamos aprendendo PHP!</h2>
            <section>
                <p>
                    <?php
                        echo "Vamos prosseguir aprendendo PHP";
                    ?>
                </p>
                <p>
                    <span>Listagem 1</span>. Exemplo de uso do <span>PHP</span>(index.php)
                </p>
                <p>
                    O arquivo index foi salvo com a extensão .php para mostrarmos ao nosso interpretador que há um código <span>PHP</span> a ser interpretado. Além disso, no exemplo usamos a função <span class="echoSpan">echo</span> para escrever na tela uma mensagem.
                </p>
            </section>
        </div>

        <section>
            <h2>Como comentar o código no PHP</h2>
            <p>
                Para comentarmos o nosso <span>PHP</span> usamos duas barras ou # para comentários de uma linha, e para comentários de múltiplas linhas usamos /**/, o mesmo usado no CSS. Observe alguns exemplos na <span>Listagem 2.</span>
            </p>
        </section>

        <div class="card2">
            <section>
                <p>
                    <?php
                        echo "Oi, Eu serei visto na sua tela";
                        //Eu não! Sou apenas um comentário.

                        echo "Oi, Eu também serei visto por você";
                        #Já eu não serei!

                        echo "E eu aqui novamente na sua tela, rs";
                        /*Eu não aparecerei na sua tela novamente pois sou um comentário*/
                    ?>
                </p>
            </section>
        </div>

        <section>
            <h2>Variáveis no PHP</h2>
            <p>
                Para criarmos uma variável basta ultilizar o sinal de cifrão. Uma variável pode armazenar textos e números. Além disso, a linguagem PHP é case sensitive, então A é diferente de a. Observe um exemplo de uso de variáveis na <span>Listagem 3.</span>
            </p>
        </section>

        <div class="card3">
            <section>
                <p>
                    <?php
                        $name = "Guilherme";
                        $age = 20;

                        echo $name; //Guilherme
                        echo "<br>";
                        echo $age; //20
                    ?>
                </p>
            </section>
        </div>

        <section>
            <p>
                No exemplo criamos uma variável <span class="echoSpan">$name</span> e declaramos a ela uma string, sendo assim precisamos colocá-la entre aspas. Já a outra variável <span class="echoSpan">$age</span> é declarada como inteiro, então não é necessário o uso de aspas. Ao usarmos o comando <span class="echoSpan">echo</span> nas variáveis, o resultado impresso é o conteúdo dessa variável.
            </p>
            <p>
                Para a nomeação de variáveis, as dicas a seguir são necessárias:
            </p>

            <ul>
                <li>Não inicie o nome de uma variável com números;</li>
                <li>Não ultilize espaços em brancos;</li>
                <li>Não ultilize caracteres especiais, somente underline;</li>
                <li>Crie variáveis com nomes que ajudarão a identificar melhor a mesma;</li>
                <li>Evite ultilizar letras maiúsculas.</li>
            </ul>

            <p>
                Falaremos agora sobre alguns dos tipos de variáveis que existem no <span>PHP:</span>
            </p>

            <ul>
                <li><span>Booleanos:</span>Este é o tipo mais simples, pois só pode expressar apenas dois valores: <span>TRUE(1)</span> ou <span>FALSE(0, null ou uma string vazia);</span></li>
                <li><span>Integer:</span>é um numero inteiro, podendo ser negativo ou positivo;</li>
                <li><span>Float:</span>também chamado de double ou numeros reais representados com um ponto para separar os dígitos do valor das casas decimais.</li>
                <li><span>Strings:</span>é uma palavra ou frase entre aspas ou duplas, assim como também pode ser binário, como o conteúdo de um arquivo MP3 ou JPG. Veja os exemplos na <span>Listagem 4.</span></li>
            </ul>
        </section>

        <div class="card4">
            <p>
                <?php
                    $a = "mundo!";
                    echo "Olá, $a"; //Olá, mundo!
                    echo 'Olá, $a'; //Olá, $a
                ?>
            </p>
        </div>

        <section>
            <p>
                Note que quando declaramos no <span class="echoSpan">echo 'Olá, $a';</span>, o PHP interpretou o conteúdo da variável <span class="echoSpan">$a'</span>, pois está entre aspas duplas. E quando usamos a mesma forma, só que entre aspas simples <span class="echoSpan">echo 'Olá, $a';</span>, não temos o mesmo resultado.
            </p>
            <p>
                Então quando queremos que o PHP interprete o valor de nossa dentro de uma string é necessário o uso de aspas duplas.
            </p>
            <p>
                Além disso, podemos usar umm ponto para concatenar strings, assim como o sinal + JavaScript, como mostra o código da <span>Listagem 5.</span>
            </p>
        </section>

        <div class="card5">
            <section>
                <p>
                    <?php
                        echo "Olá," . "mundo!";
                        //Olá, mundo!
                    ?>
                </p>
            </section>
        </div>

        <section>
            <h2>Constantes no PHP</h2>
            <p>
                O valor de uma constante jamais poderá ser alterado enquanto estiver executada e para defini-la ultilizamos a função <span class="spanItalic">define()</span> ou <span class="spanItalic">const</span>, como mostra a <span>Listagem 6.</span>
            </p>
        </section>

        <div class="card6">
            <section>
                <p>
                    <?php
                        define("PHP", "Linguagem Open - Source");

                        const HTML = "Linguagem de marcação";

                        echo PHP; //Linguagem Open - Souce

                        echo HTML; //Linguagem de marcação
                    ?>
                </p>
            </section>
        </div>

        <section>
            <p>Ultilizando a função <span class="echoSpan">define()</span> ou a palavra reservada <span class="echoSpan">const</span> definimos que as constantes com os nommes de PHP e HTML respectivamente, com o valor:Linguagem Open - Source e Linguagem de marcação.</p>

            <h2>Arrays no PHP</h2>

            <p>
                um <span class="spanItalic">array</span> que mantém uma série de elementos que podem ter diferentes tipos, como mostra a <span>Listagem 7.</span>
            </p>
        </section>

        <div class="card7">
            <p>
                <?php
                    $php = array("Zend" => "CERTIFICAÇÃO", 6 => false);
                    echo $php["Zend"]; //CERTIFICAÇÃO
                    echo $php[6]; //0

                    //Zend é nossa chave e CERTIFICAÇÃO nosso valor
                    // 6 é nossa chave e false(0) é nosso valor
                ?>
            </p>
        </div>








    </div>
</main>