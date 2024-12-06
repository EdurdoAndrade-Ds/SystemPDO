DROP TABLE IF EXISTSbackup_users;

CREATE TABLE `backup_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO backup_usersVALUE ("22" , "HildegardHildegard" , "Brown FraneckiBrown Franecki" , "email@hotmail.comemail@hotmail.com" , "2208200522082005" , "2023-01-25 10:15:082023-01-25 10:15:08" , "2023-01-25 10:15:082023-01-25 10:15:08");
INSERT INTO backup_usersVALUE ("33" , "JazmyneJazmyne" , "Wiza CristWiza Crist" , "azmyne@hotmail.comazmyne@hotmail.com" , "2207200922072009" , "2023-10-24 16:43:582023-10-24 16:43:58" , "2023-10-24 16:43:582023-10-24 16:43:58");
INSERT INTO backup_usersVALUE ("55" , "LomaLoma" , "Champlin KochChamplin Koch" , "Loma@gmail.comLoma@gmail.com" , "878787878787" , "2023-10-27 13:13:212023-10-27 13:13:21" , "2023-10-27 13:13:212023-10-27 13:13:21");
INSERT INTO backup_usersVALUE ("66" , "LeannLeann" , "kub Nolankub Nolan" , "Leann@gmail.comLeann@gmail.com" , "878787878787" , "2023-10-27 13:13:372023-10-27 13:13:37" , "2023-10-27 13:13:372023-10-27 13:13:37");
INSERT INTO backup_usersVALUE ("77" , "CleoCleo" , "Little SchinnerLittle Schinner" , "Cleo@gmail.comCleo@gmail.com" , "878787878787" , "2023-10-27 13:13:542023-10-27 13:13:54" , "2023-10-27 13:13:542023-10-27 13:13:54");
INSERT INTO backup_usersVALUE ("88" , "MyriteMyrite" , "Tremblay JerdeTremblay Jerde" , "Myrite@gmail.comMyrite@gmail.com" , "878787878787" , "2023-10-27 13:14:142023-10-27 13:14:14" , "2023-10-27 13:14:142023-10-27 13:14:14");
INSERT INTO backup_usersVALUE ("99" , "AntonettaAntonetta" , "D\'Amore WisozkD\'Amore Wisozk" , "Antonetta@gmail.comAntonetta@gmail.com" , "878787878787" , "2023-10-27 13:14:352023-10-27 13:14:35" , "2023-10-27 13:14:352023-10-27 13:14:35");
INSERT INTO backup_usersVALUE ("1010" , "LauryLaury" , "Bartell IV EbertBartell IV Ebert" , "Laury@gmail.comLaury@gmail.com" , "878787878787" , "2023-10-27 13:14:572023-10-27 13:14:57" , "2023-10-27 13:14:572023-10-27 13:14:57");
INSERT INTO backup_usersVALUE ("1111" , "CarmelCarmel" , "Gottlieb RippinGottlieb Rippin" , "Carmel@gmail.comCarmel@gmail.com" , "878787878787" , "2023-10-27 13:15:292023-10-27 13:15:29" , "2023-10-27 13:15:292023-10-27 13:15:29");
INSERT INTO backup_usersVALUE ("3030" , "SpencerSpencer" , "Walsh RiceWalsh Rice" , "Spencer@gmail.comSpencer@gmail.com" , "878787878787" , "2023-10-27 17:00:102023-10-27 17:00:10" , "2023-10-27 17:00:102023-10-27 17:00:10");
INSERT INTO backup_usersVALUE ("3131" , "CitlalliCitlalli" , "Fay RolfsonFay Rolfson" , "Citlalli@gmail.comCitlalli@gmail.com" , "875445875445" , "2023-10-27 18:30:292023-10-27 18:30:29" , "2023-10-27 18:30:292023-10-27 18:30:29");
INSERT INTO backup_usersVALUE ("3232" , "AmyaAmya" , "Lakin PhD BruenLakin PhD Bruen" , "Amya@gmail.comAmya@gmail.com" , "4589449845894498" , "2023-10-27 18:30:512023-10-27 18:30:51" , "2023-10-27 18:30:512023-10-27 18:30:51");
INSERT INTO backup_usersVALUE ("3333" , "AileenAileen" , ",Altenwerth Beatty,Altenwerth Beatty" , "Aileen@gmail.comAileen@gmail.com" , "4894545848945458" , "2023-10-27 18:31:122023-10-27 18:31:12" , "2023-10-27 18:31:122023-10-27 18:31:12");
INSERT INTO backup_usersVALUE ("4646" , "Hildegard Hildegard " , "Brown FraneckBrown Franeck" , "Hildegard@gmail.comHildegard@gmail.com" , "89848948984894" , "2023-10-28 12:00:412023-10-28 12:00:41" , "2023-10-28 12:00:412023-10-28 12:00:41");
INSERT INTO backup_usersVALUE ("4747" , "JazmyneJazmyne" , "Wiza CristWiza Crist" , "Jazmyne@gmail.comJazmyne@gmail.com" , "84946848494684" , "2023-10-28 12:01:052023-10-28 12:01:05" , "2023-10-28 12:01:052023-10-28 12:01:05");
INSERT INTO backup_usersVALUE ("4848" , "LeanneLeanne" , "kub Nolankub Nolan" , "Leanne@gmail.comLeanne@gmail.com" , "485486485486" , "2023-10-28 12:01:402023-10-28 12:01:40" , "2023-10-28 12:01:402023-10-28 12:01:40");
INSERT INTO backup_usersVALUE ("4949" , "Prof.LuluProf.Lulu" , "Ullrich Ziemann Ullrich Ziemann " , "proflulu@gmail.comproflulu@gmail.com" , "56945445694544" , "2023-10-28 12:02:132023-10-28 12:02:13" , "2023-10-28 12:02:132023-10-28 12:02:13");
INSERT INTO backup_usersVALUE ("5050" , "Prof. TheodoreProf. Theodore" , "Tilman StoltenbergTilman Stoltenberg" , "proftheodore@gmail.comproftheodore@gmail.com" , "4984849848" , "2023-10-28 12:03:332023-10-28 12:03:33" , "2023-10-28 12:03:332023-10-28 12:03:33");
INSERT INTO backup_usersVALUE ("5151" , "Prof. OrinProf. Orin" , "Romaguera DareRomaguera Dare" , "Orin@gmail.comOrin@gmail.com" , "548948548948" , "2023-10-28 12:04:002023-10-28 12:04:00" , "2023-10-28 12:04:002023-10-28 12:04:00");
INSERT INTO backup_usersVALUE ("5252" , "Root Root " , "TITI" , "root@gmail.comroot@gmail.com" , "2208200522082005" , "2023-10-28 12:04:262023-10-28 12:04:26" , "2023-10-28 12:04:262023-10-28 12:04:26");
INSERT INTO backup_usersVALUE ("5353" , "MasterMaster" , "TITI" , "master@gmail.commaster@gmail.com" , "2208200522082005" , "2023-10-28 12:04:402023-10-28 12:04:40" , "2023-10-28 12:04:402023-10-28 12:04:40");
INSERT INTO backup_usersVALUE ("5454" , "Terlaq Terlaq " , "Corwin HeidenreichCorwin Heidenreich" , "Terlaq@gmail.comTerlaq@gmail.com" , "78946497894649" , "2023-10-28 12:05:112023-10-28 12:05:11" , "2023-10-28 12:05:112023-10-28 12:05:11");
INSERT INTO backup_usersVALUE ("5555" , "AlethaAletha" , "Pfeffer UllrichPfeffer Ullrich" , "aletha.corwin@gmail.comaletha.corwin@gmail.com" , "4548494945484949" , "2023-10-28 12:05:432023-10-28 12:05:43" , "2023-10-28 12:05:432023-10-28 12:05:43");
INSERT INTO backup_usersVALUE ("5656" , "KrystinaKrystina" , "Schultz FunkSchultz Funk" , "krystina.pfeffer@gmail.comkrystina.pfeffer@gmail.com" , "5859855958598559" , "2023-10-28 12:06:052023-10-28 12:06:05" , "2023-10-28 12:06:052023-10-28 12:06:05");
INSERT INTO backup_usersVALUE ("5757" , "Dr. SybleDr. Syble" , "Champlin AltenwerthChamplin Altenwerth" , "dr.schultz@gmail.comdr.schultz@gmail.com" , "48989548944898954894" , "2023-10-28 12:06:342023-10-28 12:06:34" , "2023-10-28 12:06:342023-10-28 12:06:34");
INSERT INTO backup_usersVALUE ("5858" , "Mrs. LaurianneMrs. Laurianne" , " Jones I Brekke Jones I Brekke" , "mrs.champlin@gmail.commrs.champlin@gmail.com" , "4849849848498498" , "2023-10-28 12:06:542023-10-28 12:06:54" , "2023-10-28 12:06:542023-10-28 12:06:54");
INSERT INTO backup_usersVALUE ("5959" , "MorganMorgan" , "Kuphal HegmannKuphal Hegmann" , "morgan.i@gmail.commorgan.i@gmail.com" , "484894897484894897" , "2023-10-28 12:07:132023-10-28 12:07:13" , "2023-10-28 12:07:132023-10-28 12:07:13");
INSERT INTO backup_usersVALUE ("6060" , "PenelopePenelope" , "Green IV KirlinGreen IV Kirlin" , "penelope.kuphal@gmail.compenelope.kuphal@gmail.com" , "8497849884978498" , "2023-10-28 12:07:362023-10-28 12:07:36" , "2023-10-28 12:07:362023-10-28 12:07:36");
INSERT INTO backup_usersVALUE ("6161" , "KamrynKamryn" , "Purdy V HilpertPurdy V Hilpert" , "kamryn.iv@gmail.comkamryn.iv@gmail.com" , "4898979/74898979/7" , "2023-10-28 12:07:562023-10-28 12:07:56" , "2023-10-28 12:07:562023-10-28 12:07:56");
INSERT INTO backup_usersVALUE ("6262" , "ElainaElaina" , "Schaefer DDS HammesSchaefer DDS Hammes" , "elaina.dds@gmail.comelaina.dds@gmail.com" , "8798454587984545" , "2023-10-28 12:08:142023-10-28 12:08:14" , "2023-10-28 12:08:142023-10-28 12:08:14");
INSERT INTO backup_usersVALUE ("6363" , "ConcepcionConcepcion" , "Ritchie DVM SchneiderRitchie DVM Schneider" , "concepcion.dvm@gmail.comconcepcion.dvm@gmail.com" , "778484798778484798" , "2023-10-28 12:14:022023-10-28 12:14:02" , "2023-10-28 12:14:022023-10-28 12:14:02");
INSERT INTO backup_usersVALUE ("6464" , "Dr. RebekahDr. Rebekah" , "Blick BinsBlick Bins" , "dr.blick@gmail.comdr.blick@gmail.com" , "845894984845894984" , "2023-10-28 12:14:212023-10-28 12:14:21" , "2023-10-28 12:14:212023-10-28 12:14:21");
INSERT INTO backup_usersVALUE ("6565" , "BusterBuster" , "Farrel CollierFarrel Collier" , "buster.farrel@gmail.combuster.farrel@gmail.com" , "598498489598498489" , "2023-10-28 12:14:392023-10-28 12:14:39" , "2023-10-28 12:14:392023-10-28 12:14:39");
INSERT INTO backup_usersVALUE ("6666" , "DakotaDakota" , "Abernathy SwiftAbernathy Swift" , "dakota.abernathy@gmail.comdakota.abernathy@gmail.com" , "5895895858958958" , "2023-10-28 12:14:582023-10-28 12:14:58" , "2023-10-28 12:14:582023-10-28 12:14:58");
INSERT INTO backup_usersVALUE ("6767" , "Miss GregoriaMiss Gregoria" , "Sauer Sr. WymanSauer Sr. Wyman" , "miss.sr@gmail.commiss.sr@gmail.com" , "569+85569+85" , "2023-10-28 12:15:242023-10-28 12:15:24" , "2023-10-28 12:15:242023-10-28 12:15:24");
INSERT INTO backup_usersVALUE ("6868" , "JarredJarred" , "Murphy AnkundingMurphy Ankunding" , "jarred.murphy@gmail.comjarred.murphy@gmail.com" , "8949479889494798" , "2023-10-28 12:15:512023-10-28 12:15:51" , "2023-10-28 12:15:512023-10-28 12:15:51");
INSERT INTO backup_usersVALUE ("6969" , "AileenAileen" , "Altenwerth BeattyAltenwerth Beatty" , "aileen.altenwerth@gmail.comaileen.altenwerth@gmail.com" , "48945984894598" , "2023-10-28 12:16:112023-10-28 12:16:11" , "2023-10-28 12:16:112023-10-28 12:16:11");
INSERT INTO backup_usersVALUE ("7070" , "Mr. CotyMr. Coty" , "Rogahn StarkRogahn Stark" , "mr.rogahn@gmail.commr.rogahn@gmail.com" , "4845984948459849" , "2023-10-28 12:16:292023-10-28 12:16:29" , "2023-10-28 12:16:292023-10-28 12:16:29");
INSERT INTO backup_usersVALUE ("7171" , "Prof. LelandProf. Leland" , " Shultz Emmerich Shultz Emmerich" , "prof.shultz@gmail.comprof.shultz@gmail.com" , "5895989858959898" , "2023-10-28 12:16:492023-10-28 12:16:49" , "2023-10-28 12:16:492023-10-28 12:16:49");
INSERT INTO backup_usersVALUE ("7272" , "teste1teste1" , "22" , "sladdd@gmail.comsladdd@gmail.com" , "eeweeewe" , "2023-10-28 12:32:462023-10-28 12:32:46" , "2023-10-28 12:32:462023-10-28 12:32:46");
INSERT INTO backup_usersVALUE ("7373" , "teste12teste12" , "gg" , "slea@gmail.comslea@gmail.com" , "fefe" , "2023-10-28 12:32:562023-10-28 12:32:56" , "2023-10-28 12:32:562023-10-28 12:32:56");
INSERT INTO backup_usersVALUE ("7474" , "teste3teste3" , "ghgh" , "g@dg@d" , "dd" , "2023-10-28 12:33:062023-10-28 12:33:06" , "2023-10-28 12:33:062023-10-28 12:33:06");
INSERT INTO backup_usersVALUE ("7575" , "teste4teste4" , "dd" , "dd@ddd@d" , "DdDd" , "2023-10-28 12:33:152023-10-28 12:33:15" , "2023-10-28 12:33:152023-10-28 12:33:15");
INSERT INTO backup_usersVALUE ("7676" , "teste4teste4" , "dd" , "sddds@dsdssddds@dsds" , "sdsd" , "2023-10-28 12:33:232023-10-28 12:33:23" , "2023-10-28 12:33:232023-10-28 12:33:23");
INSERT INTO backup_usersVALUE ("7878" , "dfdfdfdf" , "dfdfddfdfd" , "sldfda@gmail.comsldfda@gmail.com" , "dfddfd" , "2023-10-28 14:16:492023-10-28 14:16:49" , "2023-10-28 14:16:492023-10-28 14:16:49");


DROP TABLE IF EXISTSusers;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO usersVALUE ("11" , "EduardoEduardo" , "AndradeAndrade" , "eduardo@hotmail.comeduardo@hotmail.com" , "50555055" , "2023-01-25 10:15:082023-01-25 10:15:08" , "2023-01-25 10:15:082023-01-25 10:15:08");
INSERT INTO usersVALUE ("22" , "HildegardHildegard" , "Brown FraneckiBrown Franecki" , "email@hotmail.comemail@hotmail.com" , "2208200522082005" , "2023-01-25 10:15:082023-01-25 10:15:08" , "2023-01-25 10:15:082023-01-25 10:15:08");


