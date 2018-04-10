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
                    <div class="card" id="pagamento-pac">
                        <img src="pac.png" alt="PAC">    
                        <div class="conteudo">
                            <input type="radio">            
                        </div>
                    </div>
                    <div class="card" id="pagamento-sedex">
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
            <div id="grid_metodo-pagamento">metodo pagamento</div>
            <div id="grid_dados-pagamento">informacao pagamento</div>
        </section>
    </div>
    <footer id="grid_footer">
        <div id="grid_footer-logo">logo</div>
        <div id="grid_footer-social-media">midias sociais</div>
    </footer>
</body>