<!DOCTYPE html>
<html>
    <head>
        <title>Riot Games</title>
        <link rel="shortcut icon" href="img/logo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <!-- Image and text -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="index.php" >
                    <img src="img/logo.jpg" width="35" height="35" class="d-inline-block align-top" alt="">
                    Riot Games
                    </a>
                </nav>
              </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="index.php"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resumo dos Jogos
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="index.php?opcao=1">League of Legends</a>
                                <a class="dropdown-item" href="index.php?opcao=2">Valorant</a>
                                <a class="dropdown-item" href="index.php?opcao=3">TeamFight Tatics</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <?php if(isset($_GET['opcao']) == FALSE){ ?>
              <div class="row">
                <div class="col-sm">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/IRELIA.png" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/Viego.png" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/BOOM.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                  &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <figure class="figure"> 
                        <a href=https://playvalorant.com/pt-br/?gclid=CjwKCAiAvaGRBhBlEiwAiY-yMHn01A2TcNCraqPYYczMk3atcFD-UIKWeKsTEGrJMeKro3FENW9zfBoCqOgQAvD_BwE&gclsrc=aw.ds><img src="img/Vava.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>
                        <figcaption class="figure-caption text-right">Valorant</figcaption>
                    </figure>
                </div>
                <div class="col-sm" style="text-align: center;">
                    <figure class="figure">
                        <a href=https://teamfighttactics.leagueoflegends.com/pt-br><img src="img/TTT.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>
                        <figcaption class="figure-caption text-right">Teamfight Tatics</figcaption>
                    </figure>
                </div>
                <div class="col-sm" style="text-align: right;">
                    <figure class="figure">
                        <a href=https://www.leagueoflegends.com/pt-br><img src="img/LoL KK.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure."></a>
                        <figcaption class="figure-caption text-right">League of Legends</figcaption>
                    </figure>
                </div>
            </div>
         </div>


            <?php }elseif($_GET['opcao'] == 1){ ?>
              <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="d-block w-100" src="img/LoL gif.gif">
                <br>
                <h3>O que ?? League of Legends?</h3>
                <h5>Esse site lhe mostrar?? o resumo sobre o jogo de equipes League of Legends.</h5>
                <br>
                <p style="text-align: justify;">
                    League of Legends (LOL) ?? um jogo eletr??nico multiplayer online battle arena (MOBA) desenvolvido e publicado pela Riot Games. 
                    Foi lan??ado em outubro de 2009 para Microsoft Windows e em mar??o de 2013 para macOS. Inspirado em Defense of the Ancients (DotA), 
                    uma modifica????o de Warcraft III, os fundadores da Riot buscaram desenvolver um jogo aut??nomo do mesmo g??nero. Desde o seu lan??amento, 
                    o t??tulo ?? gratuito para jogar e monetizado por meio de personaliza????o de personagens, na qual ?? obten??vel atrav??s de uma moeda virtual compr??vel 
                    com dinheiro real.</br>
                    No jogo, duas equipes de cinco jogadores batalham em um combate jogador contra jogador (PvP), com cada equipe ocupando e defendendo sua metade do mapa. 
                    Cada um dos dez jogadores controla um personagem, conhecido como "campe??o", com habilidades ??nicas e diferentes estilos de jogo.  
                </p>
            </div>
            <div class="col">
                <h3>Lanes, feiti??os, itens e campe??es:</h3>
                <br>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        TOP LANE:
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Na Top Lane ?? onde ficam os campe??es do tipo lutador como Sett, Wukong, Aatrox, Garen e entre outros. Tamb??m tem os tanques, que fazem 
                                itens para n??o tomar muito dano como Dr. Mundo, Ornn, Malphite, Cho??Gath, Mordekaiser e entre outros. Os feiti??os que mais usam nessa lane s??o Teleporte e Flash.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    JUNGLE
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Na Jungle fica os reponsaveis pelos drag??es e monstros que ficam na selva, geralmente eles gankam as outras lanes para que os players tenham vantagem em derrubar as 
                                torres, inibidores e Nexus para ganharem o jogo mais facil. Os campe??es que mais aparecem na jungle s??o Warwick, Lee sin, Xin Zhao, Shaco e entre outos. Os feiti??os 
                                que eles mais usam nessa lane s??o Golpear e Flash.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    MID LANE
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Na Mid Lane ficam os campe??es maguinhos como s??o Ahri, Zoe, Ekko, Malzahar, Neeko, Ryze e entre outros. Mas tamb??m tem os assasinos que d??o muito dano como 
                                Talon, Yasuo, Yone, Zed, Irelia, Akali e entre outros. Os feiti??os que eles mais usam nessa lane s??o Flash e Incediar.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    BOT LANE 
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Na Bot lane tem os AD Carry (ATIRADORES), que tem os campe??es como Ashe, Xayah, Vayne, Jinx, Zeri, Miss Fortune e entre outros. Eles sempre trabalham
                                junto com os suportes de cura, tanque ou at?? mesmo como maguinho, os os campe??es s??o Soraka, Karma, Leona, Pyke, Blitzcrank, Morgana, Seraphine
                                e entre outros. Os feiti??os que os ADC??S usam s??o Curar e Flash, e os suportes usam Exaust??o e Flash.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    ITENS
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                        Tem diversas variedades como Itens de Armadura, Dano Magino, Corta Cura, Restaura????o de Mana, Ataque Rapido, Letalidade, Aumento de Escudo, Aumento de Vida, 
                        Quebra Escudo, Botas e entre outros.  
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    FEITI??OS
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                        Todos os feiti??os disponiveis no jogo s??o Curar, Exaust??o, Teleporte, Flash, Incediar, Barreira, Clareza, Golpear e Purificar. 
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>


            <?php }elseif($_GET['opcao'] == 2){ ?>
                <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="d-block w-100" src="img/Valorant gif.gif">
                <br>
                <h3>O que ?? Valorant?</h3>
                <h5>Esse site lhe mostrar?? o resumo sobre o jogo de FPS Valorant.</h5>
                <br>
                <p style="text-align: justify;">
                    Valorant ?? um jogo eletr??nico multijogador gratuito para jogar de tiro em 
                    primeira pessoa desenvolvido e publicado pela Riot Games. ?? o primeiro jogo do 
                    g??nero desenvolvido pela empresa, sendo anunciado pela primeira vez com o 
                    codinome Project A em outubro de 2019, em um evento de comemora????o de 10 anos de 
                    League of Legends. Foi lan??ado em 2 de junho de 2020 para Microsoft Windows.<br>
                    Duas equipes de cinco jogam uma contra a outra, e os jogadores assumem o papel de 
                    "agentes" com habilidades ??nicas. No modo de jogo principal, a equipe atacante tem 
                    uma bomba, chamada Spike, que eles precisam plantar em um local. Se a equipe atacante 
                    proteger com sucesso a bomba e ela detonar, eles ganhar??o um ponto. Se a equipe 
                    defensora desarmar com sucesso a bomba ou o cron??metro de 100 segundos da rodada 
                    expirar, a equipe defensora receber?? um ponto. Eliminar todos os membros da equipe 
                    advers??ria tamb??m ganha uma rodada. A primeira equipe a vencer o melhor de 24 rodadas 
                    vence a partida. O jogo tamb??m promove um servidor com tick rate de 128, que 
                    garante uma jogabilidade suave e baixo ping com uma expans??o global de datacenters.
                </p>
            </div>
            <div class="col">
                <h3>Como come??ar a jogar Valorant:</h3>
                <br>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ENTENDA AS VANTAGENS E DESVANTAGENS DE CADA ARMA
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                            Cada equipamento do jogo tem usos indicados e contraindicados. Experimente 
                            usar diversas armas para entender como elas funcionam, quais s??o as mais 
                            antajosas dependendo da situa????o e com quais voc?? joga melhor. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    SIGA O TIME
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                            Mesmo que n??o conhe??a ningu??m da sua equipe, vale lembrar que Valorant ?? 
                            um jogo de times. Isso significa que tentar bancar o ???lobo solit??rio???
                            provavelmente dar?? errado, al??m de n??o te dar a experi??ncia para 
                            aprender a jogar com outras pessoas. No come??o, o ideal ?? seguir sua 
                            equipe e ajudar o m??ximo que puder.   
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    SE MOVIMENTE
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                            Mesmo em situa????es de combate, evite ficar parado. Ao deixar de se mexer,
                            voc?? se torna um alvo f??cil. O ideal ?? aprender a mirar ao mesmo tempo 
                            que se movimenta e evita ser alvejado.   
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ENCONTRE OUTRAS PESSOAS PARA JOGAR COM VOC??
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                            Como um jogo de equipe, Valorant se torna ainda mais interessante quando 
                            voc?? encontra mais gente interessada no game. Sendo assim, busque 
                            integrar grupos sobre o game ou convide amigos a jogar. Al??m da 
                            experi??ncia ser mais divertida, voc?? pode aprender mais r??pido a 
                            desenvolver t??ticas e estrat??gias para vencer!
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    EXPERIMENTE OS DIVERSOS AGENTES DO GAME
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                            Cada personagem do jogo tem seu pr??prio conjunto de habilidades e 
                            vantagens. Em suas primeiras horas com o game, o ideal ?? usar diversos 
                            personagens. Assim, voc?? consegue encontrar aqueles que v??o mais de 
                            acordo com o seu perfil de jogo. Antes disso, por??m, confira a seguir 
                            quem s??o os personagens de Valorant!
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
            <?php }else{ ?>
                <div class="row">
    <div class="col">
        &nbsp;
    </div>
</div>
<div class="row">
    <div class="col">
        <img class="d-block w-100" src="img/TFT gif.gif">
        <br>
        <h3>O que ?? Teamfight Tatics?</h3>
        <h5>Esse site lhe mostrar?? o resumo sobre o jogo de estrat??gia TFT.</h5>
        <br>
        <p style="text-align: justify;">
        O Teamfight Tactics (abreviado como TFT) ?? um jogo gratuito de estrat??gia e auto 
        chess desenvolvido e publicado pela Riot Games. O jogo se passa no universo de 
        League of Legends e ?? baseado no Dota Auto Chess, onde os jogadores competem online 
        contra outros sete advers??rios, construindo uma equipe para ser a ??ltima em p??. O 
        jogo foi lan??ado como um modo de jogo de League of Legends para Microsoft Windows e 
        macOS em junho de 2019 e como um jogo independente para Android e iOS em mar??o de 
        2020, apresentando o cross-play entre as plataformas.
        </p>
    </div>
    <div class="col">
        <h3>Informa????es sobre o TFT:</h3>
        <br>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            MECANICA DE JOGO
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                    Teamfight Tactics ?? um jogo de batalhas autom??ticas baseado em rodadas 
                    PvP onde voc?? monta uma equipe que batalha automaticamente. Caso nunca 
                    tenha tido contato com um jogo desse tipo, n??o se preocupe! O TFT cont??m 
                    elementos de diversos jogos de estrat??gia que voc?? j?? conhece, como 
                    escolha de recursos de um elenco compartilhado, composi????o de equipes, 
                    gerenciamento de economia e posicionamento.   
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            CONJUNTOS
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionExample">
                    <div class="card-body">
                    As partidas do TFT ocorrem na Converg??ncia e s??o baseadas em temas 
                    espec??ficos que chamamos de Conjuntos. De meses em meses, o TFT 
                    introduz um novo universo com novos Campe??es, caracter??sticas e 
                    personagens para jogar. Em rela????o ??s mec??nicas de jogo, os novos 
                    Conjuntos s??o acompanhados de novas escaladas Ranqueadas, novas 
                    composi????es de equipe e novos itens.   
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PEQUENAS LENDAS
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                    Seu avatar dentro do jogo chama-se Pequena Lenda. Essas esp??cies e as 
                    suas variantes controlam os poderosos ex??rcitos que voc?? monta durante 
                    a partida. H?? dezenas de esp??cies e centenas de variantes das mais 
                    diversas formas e cores. Caso queira um Plum??rio energ??tico ou um Choncc 
                    faminto, temos o avatar perfeito para voc??. As Pequenas Lendas eclodem 
                    de ovos aleat??rios ou podem ser compradas diretamente com Fragmentos 
                    Estelares.  
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ARENAS
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                    O tabuleiro que sua equipe batalha chama-se arena. Algumas delas s??o 
                    interativas e t??m seus pr??prios efeitos sonoros e at?? mesmo m??sicas 
                    diferentes.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            PASSES
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                    Todo Conjunto vem acompanhado de um Passe que funciona assim: jogue TFT 
                    e ganhe recompensas! Se voc?? comprar o Passe+, receber?? ainda mais 
                    itens cosm??ticos, como Pequenas Lendas, arenas e Booms (anima????es ??nicas 
                    para quando voc?? causar dano ??s Pequenas Lendas do oponente) exclusivos.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            COMO ELEVAR O SEU MODO DE JOGAR
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Se voc?? deseja aprender mais sobre como jogar Teamfight Tactics, 
                        sugerimos que d?? uma olhada nestes sites dos membros da incr??vel 
                        comunidade do TFT como TFTactics,LoL Chess, Mobalytics, Inven, 
                        League of Graphs, Blitz.gg e Tacter App (para dispositivos m??veis). 
                        Neles, voc?? encontrar?? descri????es detalhadas dos Campe??es, 
                        caracter??sticas e itens, al??m de recomenda????es de gerenciamento de 
                        economia e de como montar equipes poderosas.                        
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col">

    </div>
</div>
            <?php } ?>

            
    </body>
</html>

 