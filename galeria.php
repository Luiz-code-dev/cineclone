<?php include "cabecalho.php" ?>

<?php

    $filme1 = [
    "titulo" => "Vingadores: Guerra Infinita",
    "nota" => 9.7,
    "sinopse" => "Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso,
                 o maligno Thanos. Em uma missão para coletar todas as seis pedras infinitas,
                 Thanos planeja usá-las para infligir sua vontade maléfica sobre a realidade.",
    "poster" => "https://www.themoviedb.org/t/p/w300/89QTZmn34iwXYeCpVxhC9UrT8sX.jpg",
];

    $filme2 = [
    "titulo" => "Ad Astra",
    "nota" => 9.7,
    "sinopse" => "Roy McBride é um engenheiro espacial, portador de um leve grau de autismo,
                 que decide empreender a maior jornada de sua vida: viajar para o espaço,
                 cruzar a galáxia e tentar descobrir o que aconteceu com seu pai,
                  um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.",
    "poster" => "https://www.themoviedb.org/t/p/w300/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg",
];

    $filme3 = [
    "titulo" => "Mortal Kombat(2021)",
    "nota" => 7.7,
    "sinopse" => "Nova aventura baseada no videogame Mortal Kombat. Na história,
                um jovem que nunca treinou artes marciais acaba envolvido em
                um gigantesco torneio de luta envolvendo guerreiros da Terra e lutadores e outras dimensões.",
    "poster" => "https://www.themoviedb.org/t/p/w300/w8BVC3qrCWCiTHRz4Rft12dtQF0.jpg",
];

    $filme4 = [
    "titulo" => "Pecado Cósmico(2021)",
    "nota" => 6.9,
    "sinopse" => "Sete soldados desonestos lançam um ataque preventivo contra uma civilização alienígena recém-descoberta
                 na esperança de acabar com uma guerra interestelar antes de começar.",
    "poster" => "https://www.themoviedb.org/t/p/w300/oOiqpWM5id30m7Z5Zuo5cJlwKfV.jpg",
];

    $filme5 = [
    "titulo" => "O Espião Inglês(2021)",
    "nota" => 5.3,
    "sinopse" => "Durante a Guerra Fria, diversos civis atuaram como espiões para impedir o avanço soviético no mundo.
                Greville Wynne, um engenheiro elétrico britânico, foi um desses homens recrutados pelo Serviço de Inteligência Militar Britânico,
                O MI5. Através de informações cruciais obtidas por uma de suas fontes, Wynne conseguiu determinar o fim da Crise dos Mísseis de Cuba, em 1962.",
    "poster" => "https://www.themoviedb.org/t/p/w300/ydMTW0cK6enMEVX7fJGWjFzfscm.jpg",
];


    $filmes = [$filme1, $filme2, $filme3, $filme4, $filme5];


?>




<body>
   <nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
        </div>
     <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        <div class="nav-content">
     <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
     </ul>
    </div>
  </nav>
<div class="row">
    <?php foreach ($filmes as $filme) : ?>
    <div class="col s2">
        <div class="card hoverable">
                <div class="card-image">
                <img src="<?php echo $filme["poster"] ?>">
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
               <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?php echo $filme["nota"] ?>
               </p>
               <span class="card-title"><?php echo $filme["titulo"] ?></span>
                <p><?php echo $filme["sinopse"] ?></p>
                </div>
        </div>
    </div>

<?php endforeach ?>
</div>
  

</body>
</html>