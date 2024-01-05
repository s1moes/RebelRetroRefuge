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
    imagem VARCHAR(255) NOT NULL
);

-- Tabela para armazenar informações das reservas
CREATE TABLE reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    id_arcade INT,
    hora_reserva TIME NOT NULL,
    FOREIGN KEY (id_arcade) REFERENCES arcade(id_arcade)
);

INSERT INTO `arcade` (`nome`, `imagem`) VALUES
('Michael Jackson’s Moonwalker', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Michael-Jacksons-Moonwalker.jpg'),
('Simpsons: The Arcade Game', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Simpsons-The-Arcade-Game.jpg'),
('Knights of the Round', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Knights-of-the-Round.jpg'),
('The King of Fighters ’98', 'https://jogoveio.com.br/wp-content/uploads/2018/07/The-King-of-Fighters-98.png'),
('NBA Jam', 'https://jogoveio.com.br/wp-content/uploads/2018/07/NBA-Jam.png'),
('Metal Slug 2\r\n', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Metal-Slug-2.png'),
('Captain Commando', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Captain-Commando.jpg'),
('Teenage Mutant Ninja Turtles', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Teenage-Mutant-Ninja-Turtles-Turtles-in-Time.jpg'),
('Sunset Riders', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Sunset-Riders.jpg'),
('Street Fighter II\r\n', 'https://jogoveio.com.br/wp-content/uploads/2018/07/Street_Fighter_II_arcade.png'),
('Space Adventure Pinball', 'https://lh3.googleusercontent.com/BLO6DZJDLmLDMLVQhtKQYHpGNuLsc91z1gW_-aaIcpwAL6BDFXIdhV-pKA_YsgyHIfqqvieJyfVIpxnQEkFg6jaQhA=w640-h400-e365-rj-sc0x00ffffff'),
('Asphalt Retro', 'https://images.crazygames.com/games/asphalt-retro/cover-1676316474869.png?auto=format%2Ccompress&q=45&cs=strip&ch=DPR&w=1200&h=630&fit=crop'),
('Pac-Man', 'https://image.api.playstation.com/cdn/EP0700/CUSA03862_00/7YeqsfpCnlYOEWmOePFx8wv6bqiUdR92.png'),
('FIFA International Soccer', 'https://t.ctcdn.com.br/3ZqDSOf5sPs-PNukqv1N3VlDF9U=/1024x0/smart/i304277.jpeg'),
('Tekken 3', 'https://assets-prd.ignimgs.com/2022/03/13/tekken3-1647189672174.jpg'),
('Mortal Kombat II', 'https://i.ytimg.com/vi/_e2hlsi42c4/maxresdefault.jpg');