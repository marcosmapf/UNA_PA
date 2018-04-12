<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="pagamento.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
    <script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
    <title>Pet Stop</title>
</head>
<body>
    <header id="grid_header">
        <div id="grid_header-logo">logo</div>
        <nav id="grid_header-navbar">navbar</nav>
        <div id="grid_header-icons">icones</div>
    </header>
    <div id="wrapper">
        <section id="grid_confirmacao-compra">
            <div id="grid_metodo-entrega">
                <div id="grid_opcoes-entrega">                    
                    <div class="card">
                        <img src="pac.png" alt="PAC">    
                        <div class="conteudo">
                            <input type="radio">            
                        </div>
                    </div>
                    <div class="card">
                        <img src="sedex.png" alt="Sedex">
                        <div class="conteudo">    
                            <input type="radio">
                        </div>           
                    </div>
                </div>
                <div id="grid_valor-entrega">
                    <p>Frete para {{endereco-cidade}}: R$ {{valor}}</p>
                </div>
            </div>
            <div id="grid_info-entrega">
                <h3> Endereço de Entrega </h3>
                <p id="nome-cliente">{{nome-cliente}}</p>
                <p id="endereco-residencia">{{endereco-residencia}}</p>
                <p id="endereco-bairro">{{endereco-bairro}}</p>
                <p id="endereco-cidade">{{endereco-cidade}} - {{endereco-UF}}</p>
                <p id="endereco-cep">{{endereco-cep}}</p>
                <p id="alterar-endereco">Alterar endereço de entrega</p>
            </div>
            <div id="grid_revisao-produtos">
                <p>revisao produtos</p>
            </div>
        </section>
        <section id="grid_pagamento">
            <div id="grid_metodo-pagamento">
                {{metodos pagamentos}}
            </div>
            <div id="grid_dados-pagamento">
                <!--Se o pagamento for através de cartão de crédito-->
                <div id="grid_pagamento-cartao">
                    <div id="grid_pagamento-cartao-numero">
                        <label for="cartao-numero">Número do Cartão</label>
                        <input id="cartao-numero" type="text"> <!--Adicionar pattern e mask com angular-->
                    </div>
                    <div id="grid_pagamento-cartao-lista">
                        <div></div>    
                        <ul id="lista-cartoes">
                            <li class="pagamento-cartao">
                                <svg id="cartao-visa" class="pagamento-cartao-svg active" viewBox="0 0 60 38">
                                    <path fill="#1e2eb6" d="m 4 0 52 0 c 2.2 0 4 1.8 4 4 l 0 30 c 0 2.2 -1.8 4 -4 4 L 4 38 C 1.8 38 0 36.2 0 34 L 0 4 C 0 1.8 1.8 0 4 0 Z"></path>
                                    <path fill="#f3f3f3" d="M 4 0 C 3.7 0 3.3 0.1 3 0.1 L 3 31 60 31 60 4 C 60 1.8 58.2 0 56 0 L 4 0 Z m 32.3 7.6 c 1.4 0 2.5 0.3 3.2 0.6 l -0.5 2.8 -0.3 -0.2 c -0.7 -0.3 -1.5 -0.5 -2.7 -0.5 -1.4 0 -2.1 0.6 -2.1 1.1 -0 0.6 0.8 1 2 1.6 2.1 0.9 3 2.1 3 3.6 -0 2.7 -2.5 4.5 -6.3 4.5 -1.6 -0 -3.2 -0.3 -4 -0.7 l 0.5 -2.9 0.5 0.2 c 1.2 0.5 1.9 0.7 3.4 0.7 1 0 2.1 -0.4 2.1 -1.3 0 -0.6 -0.5 -1 -1.9 -1.6 -1.4 -0.6 -3.2 -1.7 -3.1 -3.6 0 -2.5 2.5 -4.3 6.1 -4.3 z m -16.1 0.4 3.8 0 -5.7 13.1 -3.8 0 -3.2 -11.4 c 2.3 1.1 4.3 3.4 5 5.5 l 0.3 1.8 3.6 -9 z m 5.2 0 3.6 0 -2.2 13.1 -3.6 0 2.2 -13.1 z m 20.3 0 2.7 0 3 13.1 -3.4 0 -0.4 -2 -4.5 0 -0.7 2 -3.8 0 5.3 -12 c 0.4 -0.9 1 -1.1 1.9 -1.1 z m 0.3 3.6 c -0.2 0.5 -0.5 1.3 -0.5 1.2 0 0 -1.1 2.9 -1.4 3.7 l 3 0 c -0.1 -0.7 -0.8 -3.8 -0.8 -3.8 l -0.2 -1.1 z"></path>
                                    <path fill="#fb9905" d="m 7.4 8 0 0.2 C 11.9 9.3 15 12 16.2 15.2 L 14.9 9.1 C 14.7 8.3 14.1 8 13.3 8 l -5.9 0 z"></path>
                                </svg>
                            </li>
                            <li class="pagamento-cartao">
                                <svg id="card-mastercard" class="pagamento-cartao-svg" viewBox="0 0 60 38">
                                    <path fill="#3232c8" d="m 4 0 52 0 c 2.2 0 4 1.8 4 4 l 0 30 c 0 2.2 -1.8 4 -4 4 L 4 38 C 1.8 38 0 36.2 0 34 L 0 4 C 0 1.8 1.8 0 4 0 Z"></path>
                                    <path fill="#ff9900" d="M 55 19.1 C 55 10.8 48.3 4 40.1 4 31.9 4 25.2 10.8 25.2 19.1 l 0 0 c 0 8.3 6.7 15.1 14.9 15.1 8.2 0 14.9 -6.8 14.9 -15.1 l 0 0 z"></path>
                                    <path fill="#cc0000" d="M 20.1 4 C 11.9 4 5.3 10.8 5.3 19.1 c 0 8.3 6.7 15.1 14.9 15.1 3.9 0 7.4 -1.5 10 -3.9 0 0 -0 -0 -0 -0 l 0 0 c 0.5 -0.5 1 -1 1.5 -1.6 l -3 0 c -0.4 -0.5 -0.8 -1 -1.1 -1.6 l 5.3 0 c 0.3 -0.5 0.6 -1.1 0.9 -1.6 l -7 0 c -0.2 -0.5 -0.4 -1 -0.6 -1.6 l 8.2 0 c 0.5 -1.5 0.8 -3.1 0.8 -4.8 0 -1.1 -0.1 -2.2 -0.3 -3.2 l -9.1 0 c 0.1 -0.5 0.3 -1.1 0.4 -1.6 l 8.2 0 C 34.1 13.7 33.9 13.2 33.6 12.7 l -7 0 c 0.3 -0.5 0.5 -1.1 0.9 -1.6 l 5.3 0 c -0.3 -0.6 -0.7 -1.1 -1.2 -1.6 l -2.9 0 C 29.2 8.9 29.7 8.4 30.2 7.9 27.5 5.5 24 4 20.2 4 c -0 0 -0.1 -0 -0.1 0"></path>
                                    <path fill="#fff" d="m 25.7 22.9 0.2 -1.4 -0.4 0 c -0.6 0 -0.6 -0.3 -0.6 -0.5 l 0.4 -2.8 0.8 0 0.2 -1.5 -0.8 0 0.2 -0.9 -1.6 0 c 0 0 -0.9 5.2 -0.9 5.9 0 0.9 0.5 1.4 1.3 1.3 0.6 0 1 -0.2 1.2 -0.2 z M 29 18.1 c 0.9 0 0.7 1 0.7 1.1 l -1.8 0 c 0 -0.1 0.2 -1.1 1 -1.1 z m -2.8 2.2 c 0 2.3 1.5 2.8 2.8 2.8 1.2 0 1.7 -0.3 1.7 -0.3 L 31 21.3 c 0 0 -0.9 0.4 -1.7 0.4 -1.7 0 -1.4 -1.3 -1.4 -1.3 l 3.2 0 c 0 0 0.2 -1 0.2 -1.5 0 -1 -0.5 -2.3 -2.3 -2.3 -1.6 0 -2.8 1.7 -2.8 3.7 z m 12.9 2.6 0.3 -1.7 c 0 0 -0.8 0.4 -1.3 0.4 -1.1 0 -1.6 -0.9 -1.6 -1.8 0 -1.9 1 -2.9 2.1 -2.9 0.8 0 1.5 0.5 1.5 0.5 l 0.3 -1.7 c 0 0 -1 -0.4 -1.8 -0.4 -1.8 0 -3.6 1.6 -3.6 4.6 0 2 1 3.3 2.9 3.3 0.6 0 0.8 -0.2 1.2 -0.3 z M 17.2 20.2 c 0 0.3 -0.2 1.5 -1.1 1.5 -0.5 0 -0.6 -0.4 -0.6 -0.6 0 -0.4 0.2 -1 1.4 -1 l 0.3 0 z m -2.1 -3.1 -0.2 1.4 c 0 0 0.7 -0.3 1.7 -0.3 0.6 0 1 0.1 1 0.5 0 0.3 -0.1 0.4 -0.1 0.4 l -0.7 0 c -1.4 0 -2.8 0.6 -2.8 2.4 0 1.4 1 1.7 1.5 1.7 1.1 0 1.6 -0.7 1.6 -0.7 l -0.1 0.6 1.4 0 0.6 -4.4 c 0 -1.9 -1.6 -1.9 -2.2 -1.9 -0.6 0 -1.4 0.2 -1.7 0.3 z m 8 4 c 0 -2 -1.9 -1.6 -1.9 -2.4 0 -0.4 0.3 -0.5 0.9 -0.5 0.2 0 1.1 0.1 1.1 0.1 l 0.2 -1.4 c 0 0 -0.6 -0.1 -1.5 -0.1 -1.2 0 -2.4 0.5 -2.4 2.1 0 1.8 2 1.6 2 2.4 0 0.5 -0.6 0.6 -1 0.6 -0.7 0 -1.4 -0.3 -1.4 -0.2 l -0.2 1.4 c 0 0 0.5 0.2 1.8 0.2 0.6 0 2.3 -0.1 2.4 -2.2 z m 27.3 0.5 c -0.6 0 -0.8 -0.5 -0.8 -1.2 0 -1.2 0.6 -2 1.3 -2 0.6 0 0.9 0.4 0.9 1.3 -0.1 1.7 -0.8 1.9 -1.4 1.9 z m 2 -6.2 -0.3 2.1 c 0 0 -0.6 -0.8 -1.5 -0.8 -1.5 0 -2.7 1.8 -2.7 3.8 0 1.3 0.7 2.6 2 2.6 1 0 1.5 -0.7 1.5 -0.7 l -0.1 0.6 1.6 0 1.2 -7.6 -1.6 0 z M 8.3 23 l 1 -5.7 0.1 5.7 1.1 0 2.1 -5.7 -0.9 5.7 1.6 0 1.3 -7.6 -2.5 0 -1.6 4.7 -0.1 -4.7 -2.3 0 -1.3 7.6 z m 24.6 0 c 0.5 -2.6 0.6 -4.8 1.7 -4.4 0.2 -1 0.4 -1.4 0.6 -1.8 l -0.3 0 c -0.7 0 -1.2 1 -1.2 1 l 0.1 -0.9 -1.5 0 -1 6.2 1.6 0 z m 10.3 -2.8 c 0 0.3 -0.2 1.5 -1.1 1.5 -0.5 0 -0.6 -0.4 -0.6 -0.6 0 -0.4 0.2 -1 1.4 -1 l 0.3 0 z M 41 17.1 40.8 18.5 c 0 0 0.7 -0.3 1.7 -0.3 0.6 0 1 0.1 1 0.5 0 0.3 -0.1 0.4 -0.1 0.4 l -0.7 0 c -1.4 0 -2.8 0.6 -2.8 2.4 0 1.4 1 1.7 1.5 1.7 1.1 0 1.6 -0.7 1.6 -0.7 l -0.1 0.6 1.4 0 0.6 -4.4 c 0 -1.9 -1.6 -1.9 -2.2 -1.9 -0.6 0 -1.4 0.2 -1.7 0.3 z m 5.4 5.9 c 0.5 -2.6 0.6 -4.8 1.7 -4.4 0.2 -1 0.4 -1.4 0.6 -1.8 l -0.3 0 c -0.7 0 -1.2 1 -1.2 1 l 0.1 -0.9 -1.5 0 -1 6.2 1.6 0 z"></path>
                                </svg>
                            </li>
                            <li class="pagamento-cartao">
                                <svg id="card-american" class="pagamento-cartao-svg" viewBox="0 0 60 38">
                                    <path fill="#3781cd" d="m 4 0 52 0 c 2.2 0 4 1.8 4 4 l 0 30 c 0 2.2 -1.8 4 -4 4 L 4 38 C 1.8 38 0 36.2 0 34 L 0 4 C 0 1.8 1.8 0 4 0 Z"></path>
                                    <path fill="#fff" d="m 5.2 8.8 c -1.3 3.1 -2.6 6.1 -4 9.2 l 4.7 0 0.6 -1.5 1.3 0 0.6 1.5 c 16.4 0.1 32.2 0 46.4 0 l 0 -9.2 -38.5 0 -1 2.4 -1 -2.4 z m 21.8 1.3 3.5 0 c 1.8 0 2.6 0.7 2.6 1.8 0 1.4 -0.6 1.8 -1.1 1.8 0.9 0 1 1.1 1 1.8 l 0 1.3 -1.5 0 0 -0.8 c 0 -1.1 -0.2 -1.6 -1.3 -1.6 l -1.6 0 0 2.4 -1.5 0 0 -6.6 z m -20.9 0 2.2 0 2.6 6.2 0 -6.2 2.5 0 2 4.5 1.8 -4.5 2.5 0 0 6.6 -1.6 0 0 -5.2 -2.2 5.2 -1.3 0 -2.2 -5.2 0 5.2 -3.1 0 -0.6 -1.5 -3.2 0 -0.6 1.5 -1.6 0 2.7 -6.6 z m 14.8 0 5.1 0 0 1.4 -3.5 0 0 1.2 3.5 0 0 1.4 -3.5 0 0 1.3 3.5 0 0 1.4 -5.1 0 0 -6.6 z m 13.1 0 1.6 0 0 6.6 -1.6 0 z m 5.4 0 1.5 0 0 1.4 -1.4 0 c -1.2 0 -1.6 0.8 -1.6 1.9 0 1.1 0.4 1.8 1.5 1.8 l 0.7 0 2.1 -5.2 2.3 0 2.6 6.2 0 -6.2 2.3 0 2.7 4.6 0 -4.6 1.6 0 0 6.6 0 0 -2.1 0 -2.9 -4.9 0 4.9 -3.1 0 -0.6 -1.5 -3.1 0 -0.6 1.5 -1.8 0 c -2.3 0 -3 -1.4 -3 -3.2 0 -1.9 0.5 -3.3 2.9 -3.3 z m -32.2 1.1 -1 2.6 2.1 0 -1 -2.6 z m 36 0 -1 2.6 2.1 0 z m -14.7 1.7 1.8 0 c 0.8 0 1.1 -0.2 1.1 -0.7 0 -0.6 -0.4 -0.7 -1 -0.7 l -1.9 0 z m -14.5 7 0 9.2 8 0 1.3 -1.4 1.2 1.4 5 0 0 -2.2 c 1.7 0.1 1.9 -0.1 2.6 -0.3 l 0 2.5 23 0 c 4 0 4.2 -3.8 3.2 -5 l 0 -4.2 -33.7 0 -1.2 1.4 -1.2 -1.4 z m 1.4 1.3 6.1 0 1.9 2.2 1.9 -2.2 4.8 0 c 1.2 0 2.6 0.3 2.6 2.2 0 1.8 -1.3 2.2 -2.6 2.2 l -1.9 0 0 2.2 -3 0 -1.9 -2.2 -1.9 2.2 -6 0 z m 18 0 3.5 0 c 2.4 -0.1 2.6 1 2.6 1.8 0 1.1 -0.7 1.6 -1.1 1.8 0.3 0.1 0.6 0.4 0.7 0.6 0.2 0.3 0.2 0.6 0.2 1.2 l 0 1.3 -1.5 0 0 -0.8 c 0 -1.1 -0.2 -1.6 -1.3 -1.6 l -1.6 0 0 2.4 -1.5 0 0 -6.6 z m 7 0 5.1 0 0 1.4 -3.6 0 0 1.2 3.5 0 0 1.3 -3.5 0 0 1.3 3.6 0 0 1.4 -5.1 0 z m 8 0 3 0 0 1.4 -2.8 0 c -0.6 0 -0.8 0.3 -0.8 0.6 0 0.4 0.4 0.6 0.9 0.6 l 0.8 0 c 1.9 0 2.2 0.9 2.2 1.9 0 1.4 -0.8 2.1 -2.4 2.1 l -3 0 0 -1.4 3 0 c 0.4 0 0.8 -0.1 0.8 -0.6 -0.1 -0.5 -0.3 -0.5 -0.7 -0.5 -1.4 -0.1 -3.2 0 -3.2 -2 0 -1.9 1.1 -2.1 2.2 -2.1 z m 5.9 0 3 0 0 1.4 -2.7 0 c -0.7 0 -0.8 0.2 -0.8 0.6 0 0.5 0.5 0.6 0.9 0.6 l 0.8 0 c 1.7 0.1 2.3 0.7 2.3 2 0 1.7 -1.2 2 -2.4 2 l -2.9 0 0 -1.4 2.9 0 c 0.6 0 0.8 -0.3 0.8 -0.6 0 -0.5 -0.4 -0.5 -0.7 -0.5 -1.4 -0.1 -3.2 0 -3.2 -2 0 -1.7 1 -2.1 2 -2.1 z m -27.6 0.7 -2.3 2.6 2.3 2.7 z m -9.8 0.7 0 1.2 3.3 0 0 1.3 -3.3 0 0 1.3 3.7 0 1.7 -1.9 -1.7 -1.9 -3.8 0 z m 11.3 0 0 1.7 2 0 c 0.6 0 0.9 -0.3 0.9 -0.9 0 -0.6 -0.4 -0.8 -0.9 -0.8 z m 6.8 1.5 1.9 0 c 0.7 0 1.1 -0.2 1.1 -0.7 0 -0.6 -0.3 -0.7 -1 -0.7 l -2 0 c 0 0.2 -0 1.1 -0 1.4 z"></path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <div id="grid_pagamento-cartao-validade">
                        <legend for="cartao-validade">Validade</legend>
                        <div id="cartao-validade">
                            <input id="cartao-validade-mes" type="text"> <!-- Adicionar datas válidas com angular ou php-->
                            <input id="cartao-validade-ano" type="text"> <!-- Adicionar opcoes válidas com angular ou php-->
                        </div>
                    </div>
                    <div id="grid_pagamento-cartao-seguranca">
                        <label for="cartao-codigo-seguranca">Código de segurança</label>
                        <input id="cartao-codigo-seguranca" type="text">
                    </div>
                    <div id="grid_pagamento-cartao-parcelas">
                        <label for="cartao-parcelas-">Número de parcelas</label>
                        <input id="cartao-parcelas" type="text"> <!-- Adicionar pattern e mask com angular válidas com angular ou php-->
                    </div>
                    <div id="grid_pagamento-cartao-pagar">
                        <label for="pagamento-pagar-botao">Valor Total: R$ {{valor-total}}</label>
                        <button id="pagamento-pagar-botao">Pagar com cartão de crédito</button>
                    </div>
                </div>          
            </div>
        </section>
    </div>
    <footer id="grid_footer">
        <div id="grid_footer-logo">logo</div>
        <div id="grid_footer-social-media">midias sociais</div>
    </footer>
</body>

<!--Identificadores e tamanhos
- American Express: 34 / 37               Tamanho: 15
- Visa: 4                                 Tamanho: 13, 16 ou 19
- Mastercard: 2221 - 2720 ou 51 a 55      Tamanho: 16
-
- Algoritmo de validação: Luhn Algorithm
- Último digito: Dígito de validação
- Começando do dígito logo após ao digito de validação (último), multiplique todos os digitos onde i % 2 = 0 por 2 e,
ao final, some todos os números. Se o resultado por modulo de 10 (total % 10) for igual a 0, o numero é válido

Exemplo:
4111 1111 1111 1111  (VISA) Digito Validação: 1
8121 2121 2121 2121
Soma: 12 + 6 + 6 + 6 = 30 % 10 = 0 (Válido) (Validar com Angular) e implementar o algoritmo de Luhn
-->