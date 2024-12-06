DROP TABLE IF EXISTSarquivos;

CREATE TABLE `arquivos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO arquivosVALUE ("1111" , "god-of-war-ragnarok-kratos-freya-atreus-2022-games-2560x1080-8677.jpggod-of-war-ragnarok-kratos-freya-atreus-2022-games-2560x1080-8677.jpg" , "arquivos/655f52d4596fd.jpgarquivos/655f52d4596fd.jpg" , "2023-11-23 10:25:402023-11-23 10:25:40" , "");
INSERT INTO arquivosVALUE ("1212" , "the-last-of-us-game-part-ii-wallpaper-2560x1080_14.jpgthe-last-of-us-game-part-ii-wallpaper-2560x1080_14.jpg" , "arquivos/655f52d45ea00.jpgarquivos/655f52d45ea00.jpg" , "2023-11-23 10:25:402023-11-23 10:25:40" , "");


