-- Tabela para armazenar informações dos utilizadores
CREATE TABLE utilizador (
    id_utilizador INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE NOT NULL,
    pass VARCHAR(255) NOT NULL
);

-- Tabela para armazenar informações das arcades
CREATE TABLE arcade (
    id_arcade INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    imagem VARCHAR(255) NOT NULL,
    descricao VARCHAR(65535) NOT NULL
);

-- Tabela para armazenar informações das reservas
CREATE TABLE reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    id_arcade INT,
    data_reserva DATE,
    hora_reserva INT,
    data_expiracao DATETIME ,
    FOREIGN KEY (id_arcade) REFERENCES arcade(id_arcade)
);


INSERT INTO `arcade` (`nome`, `imagem`, `descricao`) VALUES
("Michael Jackson's Moonwalker", 'https://upload.wikimedia.org/wikipedia/en/d/d4/Moonwalker_arcade_flyer.jpg', "Michael Jackson's Moonwalker é o nome de vários jogos de vídeo baseados no filme de 1988 de Michael Jackson, Moonwalker. A Sega desenvolveu dois beat 'em ups, lançados em 1990; um lançado nos arcades e outro lançado para as consolas Sega Genesis e Master System. Cada um dos enredos dos jogos segue vagamente o segmento 'Smooth Criminal' do filme, em que Jackson salva crianças raptadas do malvado Mr. Big, e incorpora versões sintetizadas de algumas das canções do músico."),
('Simpsons: The Arcade Game', 'https://i.pinimg.com/originals/db/4b/31/db4b3106228c21b23d66579b3a635614.jpg', "The Simpsons é um jogo de arcade beat 'em up desenvolvido e publicado pela Konami e lançado em 1991. Foi o primeiro jogo de vídeo baseado na franquia dos Simpsons a ser lançado na América do Norte. O jogo permite que até quatro jogadores controlem membros da família Simpson enquanto lutam contra vários inimigos para salvar a Maggie raptada."),
('Knights of the Round', 'https://upload.wikimedia.org/wikipedia/en/7/7f/Knights_of_the_Round_%28arcade_game_-_promo_art%29.png',"Knights of the Round é um jogo de arcade lançado pela Capcom em 1991. Um jogo de ação side-scroller baseado na lenda do Rei Artur e dos Cavaleiros da Távola Redonda, o jogo apresenta um sistema de progressão de níveis semelhante ao de um jogo de ação, com os lutadores a receberem automaticamente novas armas e armaduras à medida que avançam no jogo."),
("The King of Fighters '98", 'https://upload.wikimedia.org/wikipedia/en/1/18/The_King_of_Fighters_%2798_arcade_flyer.jpg', "The King of Fighters '98: The Slugfest, conhecido no Japão como The King of Fighters '98: Dream Match Never Ends (KOF '98), é um jogo de luta lançado pela SNK para o arcade Neo Geo e para as consolas domésticas em 1998. É o quinto jogo da série The King of Fighters. Foi anunciado pela SNK como uma 'edição especial' da série, uma vez que apresentava a maioria das personagens que apareceram nos jogos anteriores (de KOF '94 a '97)."),
('NBA Jam', 'https://upload.wikimedia.org/wikipedia/pt/a/a9/NBA_Jam.jpg', "NBA Jam é uma série de videojogos de basquetebol de longa duração baseada na National Basketball Association (NBA). Inicialmente desenvolvido como jogos de arcada pela Midway, o jogo ganhou popularidade com os seus gráficos digitalizados fotorrealistas, apresentação exagerada e estilo exagerado de jogo de basquetebol dois contra dois. Sucessor do Arch Rivals da Midway, o NBA Jam original de 1993 permitia aos jogadores saltar muitas vezes acima da sua própria altura, fazer afundanços que desafiavam as capacidades humanas e empurrar ou acotovelar livremente os adversários sem consequências. Incluía também uma variedade de personagens secretas, bem como a possibilidade de acompanhar os registos e estatísticas dos jogadores entre sessões de jogo."),
('Metal Slug 2', 'https://upload.wikimedia.org/wikipedia/en/4/4f/Metal_Slug_2_arcade_flyer.jpg', "Metal Slug 2 é um videojogo de corrida e tiro desenvolvido pela SNK. Foi originalmente lançado em 1998 para a plataforma de arcade Neo-Geo MVS como sequela do jogo Metal Slug de 1996."),
('Captain Commando', 'https://upload.wikimedia.org/wikipedia/en/c/c7/Captain_Commando.png', "Captain Commando é um jogo beat 'em up futurista de 1991, originalmente desenvolvido e publicado pela Capcom como um videojogo de arcade, e mais tarde portado para várias outras plataformas. Foi o décimo sétimo jogo produzido para o hardware CP System da empresa. O jogo tem como protagonista o super-herói titular, que foi originalmente concebido como um porta-voz fictício utilizado pela Capcom USA nos jogos de consola da empresa durante o final da década de 1980."),
('Teenage Mutant Ninja Turtles', 'https://upload.wikimedia.org/wikipedia/en/0/04/Teenage_Mutant_Ninja_Turtles_%281989_arcade_game%29.jpg' , "Teenage Mutant Ninja Turtles, lançado no Japão como TMNT: Super Kame Ninja e na Europa como Teenage Mutant Hero Turtles, é um jogo de arcade beat 'em up de 1989, lançado pela Konami e baseado na franquia Teenage Mutant Ninja Turtles, incluindo a primeira série de animação que começou a ser exibida dois anos antes. No jogo, até quatro jogadores controlam as Tartarugas Ninja titulares, lutando através de vários níveis para derrotar os inimigos das tartarugas, incluindo o Shredder, Krang e o Foot Clan"),
('Sunset Riders', 'https://upload.wikimedia.org/wikipedia/en/3/39/Sunset_Riders_arcade_flyer.jpg', "Sunset Riders é um videojogo de run and gun side-scroller desenvolvido e lançado pela Konami como um videojogo de arcade em 1991. Passa-se no Velho Oeste americano, onde o(s) jogador(es) assume(m) o controlo de caçadores de recompensas que procuram as recompensas oferecidas para vários criminosos."),
('Street Fighter II', 'https://upload.wikimedia.org/wikipedia/en/1/1d/SF2_JPN_flyer.jpg', "Street Fighter II: The World Warrior é um jogo de luta 2D desenvolvido pela Capcom e lançado originalmente para arcades em 1991. É o segundo jogo da série Street Fighter e a sequela de Street Fighter de 1987. É o décimo quarto jogo da Capcom a utilizar a placa do sistema de arcade CP System. Street Fighter II melhorou muito muitos dos conceitos introduzidos no primeiro jogo, incluindo a utilização de movimentos especiais baseados em comandos, um sistema de combinações, uma configuração de seis botões e uma maior seleção de personagens jogáveis, cada uma com um estilo de luta único."),
('Space Invaders', 'https://upload.wikimedia.org/wikipedia/en/0/0f/Space_Invaders_flyer%2C_1978.jpg', "Space Invaders é um jogo de vídeo de arcade de 1978, do género shoot 'em up, desenvolvido e lançado pela Taito no Japão e licenciado à Midway Manufacturing para distribuição no estrangeiro. Considerado um dos jogos de vídeo mais influentes de todos os tempos, Space Invaders foi o primeiro jogo de tiros fixo e estabeleceu o modelo para o género. O objetivo é derrotar onda após onda de alienígenas que descem com um laser que se move horizontalmente para ganhar o máximo de pontos possível."),
('Donkey Kong', 'https://upload.wikimedia.org/wikipedia/en/1/14/Donkey_Kong_flier.jpg', "Donkey Kong é um jogo de vídeo arcade de 1981 desenvolvido e publicado pela Nintendo. Na pele de Mario, o jogador corre e salta sobre plataformas e sobe escadas para subir a um estaleiro de construção e salvar Pauline de um gorila gigante, Donkey Kong. É o primeiro jogo da série Donkey Kong, bem como a primeira aparição de Mario num jogo de vídeo."),
('Pac-Man', 'https://upload.wikimedia.org/wikipedia/en/1/16/Pac_flyer.png', "Pac-Man, originalmente chamado Puck Man no Japão, é um jogo de vídeo de ação com labirintos de 1980, desenvolvido e lançado pela Namco para arcades. Na América do Norte, o jogo foi lançado pela Midway Manufacturing como parte do seu acordo de licenciamento com a Namco America. O jogador controla o Pac-Man, que tem de comer todos os pontos dentro de um labirinto fechado, evitando quatro fantasmas coloridos. Comer pontos grandes e intermitentes chamados 'Power Pellets' faz com que os fantasmas fiquem temporariamente azuis, permitindo ao Pac-Man comê-los para ganhar pontos de bónus."),
('Breakout', 'https://i.pinimg.com/564x/a5/53/a1/a553a1f36be42827a7c909a6a2738831.jpg', "Breakout é um videojogo de arcada desenvolvido e publicado pela Atari, Inc. e lançado em 13 de maio de 1976. Foi concebido por Steve Wozniak, com base na concetualização de Nolan Bushnell e Steve Bristow, que foram influenciados pelo jogo de arcade Pong da Atari de 1972. No Breakout, uma camada de tijolos reveste o terço superior do ecrã e o objetivo é destruí-los a todos, fazendo saltar repetidamente uma bola de uma pá contra eles."),
('Out Run', 'https://upload.wikimedia.org/wikipedia/en/0/04/Out_Run_Coverart.png', "Out Run (também estilizado como OutRun) é um videojogo de condução de arcada lançado pela Sega em setembro de 1986. É conhecido pelo seu hardware e gráficos pioneiros, pela jogabilidade não linear, pela banda sonora selecionável com música composta por Hiroshi Kawaguchi e pela caixa de arcade de luxo com simulador de movimento hidráulico. O objetivo é evitar o trânsito e chegar a um dos cinco destinos."),
('Mortal Kombat II', 'https://upload.wikimedia.org/wikipedia/en/d/df/Mortal_Kombat_II_boxart.png', "Mortal Kombat II é um jogo de luta originalmente produzido pela Midway para as máquinas de jogos em 1993. É o segundo jogo principal da franquia Mortal Kombat e uma sequela do Mortal Kombat de 1992, melhorando a jogabilidade e expandindo o mito do Mortal Kombat original, introduzindo golpes finais mais variados (incluindo vários Fatalities por personagem e novos finalizadores, como Babality e Friendship) e várias personagens icónicas, como Kitana, Mileena, Kung Lao, Noob Saibot e o vilão recorrente da série, Shao Kahn. ");