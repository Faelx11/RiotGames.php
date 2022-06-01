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
                <h3>O que é League of Legends?</h3>
                <h5>Esse site lhe mostrará o resumo sobre o jogo de equipes League of Legends.</h5>
                <br>
                <p style="text-align: justify;">
                    League of Legends (LOL) é um jogo eletrônico multiplayer online battle arena (MOBA) desenvolvido e publicado pela Riot Games. 
                    Foi lançado em outubro de 2009 para Microsoft Windows e em março de 2013 para macOS. Inspirado em Defense of the Ancients (DotA), 
                    uma modificação de Warcraft III, os fundadores da Riot buscaram desenvolver um jogo autônomo do mesmo gênero. Desde o seu lançamento, 
                    o título é gratuito para jogar e monetizado por meio de personalização de personagens, na qual é obtenível através de uma moeda virtual comprável 
                    com dinheiro real.</br>
                    No jogo, duas equipes de cinco jogadores batalham em um combate jogador contra jogador (PvP), com cada equipe ocupando e defendendo sua metade do mapa. 
                    Cada um dos dez jogadores controla um personagem, conhecido como "campeão", com habilidades únicas e diferentes estilos de jogo.  
                </p>
            </div>
            <div class="col">
                <h3>Lanes, feitiços, itens e campeões:</h3>
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
                                Na Top Lane é onde ficam os campeões do tipo lutador como Sett, Wukong, Aatrox, Garen e entre outros. Também tem os tanques, que fazem 
                                itens para não tomar muito dano como Dr. Mundo, Ornn, Malphite, Cho´Gath, Mordekaiser e entre outros. Os feitiços que mais usam nessa lane são Teleporte e Flash.
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
                                Na Jungle fica os reponsaveis pelos dragões e monstros que ficam na selva, geralmente eles gankam as outras lanes para que os players tenham vantagem em derrubar as 
                                torres, inibidores e Nexus para ganharem o jogo mais facil. Os campeões que mais aparecem na jungle são Warwick, Lee sin, Xin Zhao, Shaco e entre outos. Os feitiços 
                                que eles mais usam nessa lane são Golpear e Flash.
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
                                Na Mid Lane ficam os campeões maguinhos como são Ahri, Zoe, Ekko, Malzahar, Neeko, Ryze e entre outros. Mas também tem os assasinos que dão muito dano como 
                                Talon, Yasuo, Yone, Zed, Irelia, Akali e entre outros. Os feitiços que eles mais usam nessa lane são Flash e Incediar.
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
                                Na Bot lane tem os AD Carry (ATIRADORES), que tem os campeões como Ashe, Xayah, Vayne, Jinx, Zeri, Miss Fortune e entre outros. Eles sempre trabalham
                                junto com os suportes de cura, tanque ou até mesmo como maguinho, os os campeões são Soraka, Karma, Leona, Pyke, Blitzcrank, Morgana, Seraphine
                                e entre outros. Os feitiços que os ADC´S usam são Curar e Flash, e os suportes usam Exaustão e Flash.
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
                        Tem diversas variedades como Itens de Armadura, Dano Magino, Corta Cura, Restauração de Mana, Ataque Rapido, Letalidade, Aumento de Escudo, Aumento de Vida, 
                        Quebra Escudo, Botas e entre outros.  
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    FEITIÇOS
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                        Todos os feitiços disponiveis no jogo são Curar, Exaustão, Teleporte, Flash, Incediar, Barreira, Clareza, Golpear e Purificar. 
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
                <h3>O que é Valorant?</h3>
                <h5>Esse site lhe mostrará o resumo sobre o jogo de FPS Valorant.</h5>
                <br>
                <p style="text-align: justify;">
                    Valorant é um jogo eletrônico multijogador gratuito para jogar de tiro em 
                    primeira pessoa desenvolvido e publicado pela Riot Games. É o primeiro jogo do 
                    gênero desenvolvido pela empresa, sendo anunciado pela primeira vez com o 
                    codinome Project A em outubro de 2019, em um evento de comemoração de 10 anos de 
                    League of Legends. Foi lançado em 2 de junho de 2020 para Microsoft Windows.<br>
                    Duas equipes de cinco jogam uma contra a outra, e os jogadores assumem o papel de 
                    "agentes" com habilidades únicas. No modo de jogo principal, a equipe atacante tem 
                    uma bomba, chamada Spike, que eles precisam plantar em um local. Se a equipe atacante 
                    proteger com sucesso a bomba e ela detonar, eles ganharão um ponto. Se a equipe 
                    defensora desarmar com sucesso a bomba ou o cronômetro de 100 segundos da rodada 
                    expirar, a equipe defensora receberá um ponto. Eliminar todos os membros da equipe 
                    adversária também ganha uma rodada. A primeira equipe a vencer o melhor de 24 rodadas 
                    vence a partida. O jogo também promove um servidor com tick rate de 128, que 
                    garante uma jogabilidade suave e baixo ping com uma expansão global de datacenters.
                </p>
            </div>
            <div class="col">
                <h3>Como começar a jogar Valorant:</h3>
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
                            usar diversas armas para entender como elas funcionam, quais são as mais 
                            antajosas dependendo da situação e com quais você joga melhor. 
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
                            Mesmo que não conheça ninguém da sua equipe, vale lembrar que Valorant é 
                            um jogo de times. Isso significa que tentar bancar o “lobo solitário”
                            provavelmente dará errado, além de não te dar a experiência para 
                            aprender a jogar com outras pessoas. No começo, o ideal é seguir sua 
                            equipe e ajudar o máximo que puder.   
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
                            Mesmo em situações de combate, evite ficar parado. Ao deixar de se mexer,
                            você se torna um alvo fácil. O ideal é aprender a mirar ao mesmo tempo 
                            que se movimenta e evita ser alvejado.   
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ENCONTRE OUTRAS PESSOAS PARA JOGAR COM VOCÊ
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                            Como um jogo de equipe, Valorant se torna ainda mais interessante quando 
                            você encontra mais gente interessada no game. Sendo assim, busque 
                            integrar grupos sobre o game ou convide amigos a jogar. Além da 
                            experiência ser mais divertida, você pode aprender mais rápido a 
                            desenvolver táticas e estratégias para vencer!
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
                            Cada personagem do jogo tem seu próprio conjunto de habilidades e 
                            vantagens. Em suas primeiras horas com o game, o ideal é usar diversos 
                            personagens. Assim, você consegue encontrar aqueles que vão mais de 
                            acordo com o seu perfil de jogo. Antes disso, porém, confira a seguir 
                            quem são os personagens de Valorant!
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
        <h3>O que é Teamfight Tatics?</h3>
        <h5>Esse site lhe mostrará o resumo sobre o jogo de estratégia TFT.</h5>
        <br>
        <p style="text-align: justify;">
        O Teamfight Tactics (abreviado como TFT) é um jogo gratuito de estratégia e auto 
        chess desenvolvido e publicado pela Riot Games. O jogo se passa no universo de 
        League of Legends e é baseado no Dota Auto Chess, onde os jogadores competem online 
        contra outros sete adversários, construindo uma equipe para ser a última em pé. O 
        jogo foi lançado como um modo de jogo de League of Legends para Microsoft Windows e 
        macOS em junho de 2019 e como um jogo independente para Android e iOS em março de 
        2020, apresentando o cross-play entre as plataformas.
        </p>
    </div>
    <div class="col">
        <h3>Informações sobre o TFT:</h3>
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
                    Teamfight Tactics é um jogo de batalhas automáticas baseado em rodadas 
                    PvP onde você monta uma equipe que batalha automaticamente. Caso nunca 
                    tenha tido contato com um jogo desse tipo, não se preocupe! O TFT contém 
                    elementos de diversos jogos de estratégia que você já conhece, como 
                    escolha de recursos de um elenco compartilhado, composição de equipes, 
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
                    As partidas do TFT ocorrem na Convergência e são baseadas em temas 
                    específicos que chamamos de Conjuntos. De meses em meses, o TFT 
                    introduz um novo universo com novos Campeões, características e 
                    personagens para jogar. Em relação às mecânicas de jogo, os novos 
                    Conjuntos são acompanhados de novas escaladas Ranqueadas, novas 
                    composições de equipe e novos itens.   
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
                    Seu avatar dentro do jogo chama-se Pequena Lenda. Essas espécies e as 
                    suas variantes controlam os poderosos exércitos que você monta durante 
                    a partida. Há dezenas de espécies e centenas de variantes das mais 
                    diversas formas e cores. Caso queira um Plumário energético ou um Choncc 
                    faminto, temos o avatar perfeito para você. As Pequenas Lendas eclodem 
                    de ovos aleatórios ou podem ser compradas diretamente com Fragmentos 
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
                    O tabuleiro que sua equipe batalha chama-se arena. Algumas delas são 
                    interativas e têm seus próprios efeitos sonoros e até mesmo músicas 
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
                    e ganhe recompensas! Se você comprar o Passe+, receberá ainda mais 
                    itens cosméticos, como Pequenas Lendas, arenas e Booms (animações únicas 
                    para quando você causar dano às Pequenas Lendas do oponente) exclusivos.
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
                        Se você deseja aprender mais sobre como jogar Teamfight Tactics, 
                        sugerimos que dê uma olhada nestes sites dos membros da incrível 
                        comunidade do TFT como TFTactics,LoL Chess, Mobalytics, Inven, 
                        League of Graphs, Blitz.gg e Tacter App (para dispositivos móveis). 
                        Neles, você encontrará descrições detalhadas dos Campeões, 
                        características e itens, além de recomendações de gerenciamento de 
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

 