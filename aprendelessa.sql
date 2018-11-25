DROP TABLE IF EXISTS `coincidencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `coincidencia` (
  `codCoincidencia` int(11) NOT NULL,
  `minuto` int(11) DEFAULT NULL,
  `segundo` int(11) DEFAULT NULL,
  `Palabra_codPalabra` int(11) NOT NULL,
  `Video_codVideo` int(11) NOT NULL,
  PRIMARY KEY (`codCoincidencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coincidencia`
--

LOCK TABLES `coincidencia` WRITE;
/*!40000 ALTER TABLE `coincidencia` DISABLE KEYS */;
INSERT INTO `coincidencia` VALUES (0,0,0,0,0),(1,0,10,2,1),(2,0,12,2,2),(3,0,18,2,3),(4,0,22,2,4),(5,0,26,2,5),(6,0,29,2,6),(7,0,36,2,7),(8,0,40,2,8),(9,0,44,2,9),(10,0,50,2,10),(11,0,54,2,11),(12,0,58,2,12),(13,1,4,2,13),(14,1,7,2,14),(15,1,10,2,15),(16,1,14,2,16),(17,1,18,2,17),(18,0,9,3,18),(19,0,10,3,19),(20,0,15,3,20),(21,0,21,3,21),(22,0,23,3,22),(23,0,24,3,23),(24,0,28,3,24),(25,0,32,3,25),(26,0,35,3,26),(27,0,38,3,27),(28,0,42,3,28),(29,0,45,3,29),(30,0,48,3,30),(31,0,50,3,31),(32,0,58,3,32),(33,1,2,3,33),(34,1,6,3,34),(35,1,9,3,35),(36,1,14,3,36),(37,1,18,3,37),(38,1,22,3,38),(39,1,26,3,39),(40,1,29,3,40),(41,0,8,4,41),(42,0,13,4,42),(43,0,14,4,43),(44,0,15,4,44),(45,0,16,4,45),(46,0,18,4,46),(47,0,20,4,47),(48,0,22,4,48),(49,0,26,4,49),(50,0,29,4,50),(51,0,34,4,51),(52,0,38,4,52),(53,1,18,4,53),(54,1,20,4,54),(55,1,21,4,55),(56,1,22,4,56),(57,1,24,4,57),(58,1,25,4,58),(59,1,27,4,59),(60,1,29,4,60),(61,1,31,4,61),(62,1,33,4,62),(63,1,55,4,63),(64,1,57,4,64),(65,1,59,4,65),(66,2,0,4,66),(67,2,2,4,67),(68,2,4,4,68),(69,2,5,4,69),(70,2,7,4,70),(71,2,9,4,71),(72,2,11,4,72),(73,2,13,4,73),(74,2,15,4,74),(75,2,17,4,75),(76,2,18,4,76),(77,2,20,4,77),(78,2,22,4,78),(79,2,25,4,79),(80,3,4,4,80),(81,3,7,4,81),(82,3,8,4,82),(83,3,10,4,83),(84,3,12,4,84),(85,3,18,4,85),(86,3,23,4,86),(87,3,28,4,87),(88,3,33,4,88),(89,3,36,4,89),(90,3,38,4,90),(91,0,10,5,91),(92,0,15,5,92),(93,0,20,5,93),(94,0,25,5,94),(95,0,30,5,95),(96,0,35,5,96),(97,0,40,5,97),(98,0,45,5,98),(99,0,50,5,99),(100,0,57,5,100),(101,1,3,5,101),(102,1,10,5,102),(103,1,16,5,103),(104,1,22,5,104),(105,1,27,5,105),(106,1,32,5,106),(107,1,37,5,107),(108,1,42,5,108),(109,1,47,5,109),(110,1,53,5,110),(111,1,57,5,111),(112,2,2,5,112),(113,2,7,5,113),(114,2,12,5,114),(115,2,18,5,115),(116,2,24,5,116),(117,2,28,5,117),(118,2,32,5,118),(119,2,39,5,119),(120,0,10,6,120),(121,0,16,6,121),(122,0,21,6,122),(123,0,26,6,123),(124,0,31,6,124),(125,0,39,6,125),(126,0,44,6,126),(127,0,50,6,127),(128,1,0,6,128),(129,1,3,6,129),(130,1,7,6,130),(131,1,13,6,131),(132,1,17,6,132),(133,1,21,6,133),(134,1,29,6,134),(135,1,34,6,135),(136,1,38,6,136),(137,1,42,6,137),(138,1,46,6,138),(139,1,49,6,139),(140,1,53,6,140),(141,1,59,6,141),(142,2,7,6,142),(143,2,12,6,143),(144,2,15,6,144),(145,2,19,6,145),(146,2,23,6,146),(147,2,28,6,147),(148,2,33,6,148),(149,2,38,6,149),(150,2,42,6,150),(151,2,47,6,151),(152,2,52,6,152),(153,2,59,6,153),(154,3,3,6,154),(155,0,10,7,155),(156,0,16,7,156),(157,0,21,7,157),(158,0,25,7,158),(159,0,30,7,159),(160,0,37,7,160),(161,0,42,7,161),(162,0,47,7,162),(163,0,51,7,163),(164,0,57,7,164),(165,1,1,7,165),(166,1,7,7,166),(167,1,14,7,167),(168,1,20,7,168),(169,1,27,7,169),(170,1,30,7,170),(171,0,12,334,1),(172,0,12,335,1),(173,0,17,336,1),(174,0,19,337,1),(175,0,20,338,1),(176,0,21,339,1),(177,0,23,340,1),(178,0,25,341,1),(179,0,26,342,1),(180,0,27,343,1),(181,0,29,344,1),(182,0,30,345,1),(183,0,31,346,1),(184,0,33,347,1),(185,0,34,348,1),(186,0,36,349,1),(187,0,38,350,1),(188,0,39,351,1),(189,0,40,352,1),(190,0,42,353,1),(191,0,43,354,1),(192,0,44,355,1),(193,0,46,356,1),(194,0,47,357,1),(195,0,48,358,1),(196,0,50,359,1),(197,0,51,360,1),(198,0,51,361,1),(199,0,53,362,1),(200,0,54,363,1),(201,0,55,364,1),(202,0,57,365,1),(203,0,15,366,11),(204,0,15,367,11),(205,0,17,368,11),(206,0,23,369,11),(207,0,31,370,11),(208,0,37,371,11),(209,0,42,372,11),(210,0,48,373,11),(211,0,51,374,11),(212,0,54,375,11),(213,0,57,376,11),(214,0,57,377,11),(215,1,3,378,11),(216,1,11,379,11),(217,1,17,380,11),(218,1,23,381,11),(219,1,29,382,11),(220,1,37,383,11),(221,1,42,384,11),(222,1,42,385,11),(223,1,48,386,11),(224,1,48,387,11),(225,1,54,388,11),(226,2,0,389,11),(227,2,3,390,11),(228,2,8,391,11),(229,2,16,392,11),(230,2,16,393,11),(231,2,22,394,11),(232,2,27,395,11),(233,0,14,366,8),(234,0,14,367,8),(235,0,18,368,8),(236,0,12,396,8),(237,0,19,397,8),(238,0,26,368,8),(239,0,28,398,8),(240,0,37,368,8),(241,0,38,376,8),(242,0,38,377,8),(243,0,45,368,8),(244,0,47,399,8),(245,0,53,400,8),(246,0,53,379,8),(247,1,0,401,8),(248,1,6,402,8),(249,1,11,403,8),(250,1,17,386,8),(251,1,18,380,8),(252,1,17,179,8),(253,1,24,386,8),(254,1,25,388,8),(255,1,24,180,8),(256,1,30,404,8),(257,1,30,376,8),(258,1,30,377,8),(259,1,32,181,8),(260,1,38,171,8),(261,1,43,182,8),(262,1,49,172,8),(263,1,55,173,8),(264,2,0,174,8),(265,2,5,175,8),(266,2,10,176,8),(267,2,16,177,8),(268,2,10,183,8),(269,2,16,183,8),(270,2,20,134,8),(271,2,24,178,8),(272,2,22,369,8),(273,2,31,370,8),(274,2,32,372,8),(275,2,40,371,8),(276,2,41,378,8),(277,2,48,370,8),(278,2,50,382,8),(279,0,11,184,10),(280,0,15,185,10),(281,0,18,186,10),(282,0,22,187,10),(283,0,22,189,10),(284,0,28,188,10),(285,0,28,189,10),(286,0,29,190,10),(287,0,34,191,10),(288,0,34,189,10),(289,0,35,219,10),(290,0,40,192,10),(291,0,40,193,10),(292,0,45,194,10),(293,0,45,220,10),(294,0,50,195,10),(295,0,55,196,10),(296,0,59,197,10),(297,1,4,198,10),(298,1,9,199,10),(299,1,13,200,10),(300,1,18,201,10),(301,1,22,202,10),(302,1,22,203,10),(303,1,27,204,10),(304,1,27,205,10),(305,1,27,206,10),(306,1,33,207,10),(307,1,39,208,10),(308,1,43,209,10),(309,1,47,210,10),(310,1,47,211,10),(311,1,52,212,10),(312,1,56,213,10),(313,2,0,214,10),(314,2,5,215,10),(315,2,11,216,10),(316,2,16,217,10),(317,2,21,218,10),(318,0,11,221,12),(319,0,17,222,12),(320,0,22,223,12),(321,0,27,224,12),(322,0,32,225,12),(323,0,36,226,12),(324,0,42,227,12),(325,0,47,228,12),(326,0,52,229,12),(327,0,57,230,12),(328,1,2,231,12),(329,1,7,232,12),(330,1,7,233,12),(331,1,14,234,12),(332,1,14,235,12),(333,1,18,236,12),(334,1,18,237,12),(335,1,18,238,12),(336,1,24,239,12),(337,1,24,240,12),(338,1,32,241,12),(339,1,32,242,12),(340,1,37,243,12),(341,1,37,244,12),(342,1,42,245,12),(343,1,42,246,12),(344,1,47,247,12),(345,1,47,248,12),(346,1,53,249,12),(347,1,53,250,12),(348,2,0,251,12),(349,2,0,252,12),(350,0,8,253,13),(351,0,8,254,13),(352,0,8,255,13),(353,0,8,256,13),(354,0,8,257,13),(355,0,12,258,13),(356,0,18,259,13),(357,0,22,260,13),(358,0,26,261,13),(359,0,30,262,13),(360,0,33,263,13),(361,0,37,264,13),(362,0,37,265,13),(363,0,40,266,13),(364,0,40,267,13),(365,0,45,268,13),(366,0,45,269,13),(367,0,50,270,13),(368,0,53,271,13),(369,0,53,272,13),(370,0,58,273,13),(371,0,58,274,13),(372,1,4,275,13),(373,1,9,276,13),(374,1,15,277,13),(375,1,15,278,13),(376,1,20,279,13),(377,1,20,280,13),(378,1,25,281,13),(379,1,25,282,13),(380,1,29,283,13),(381,1,29,284,13),(382,1,34,285,13),(383,1,34,286,13),(384,1,39,287,13),(385,1,43,288,13),(386,1,48,189,13),(387,1,51,289,13),(388,1,56,290,13),(389,2,1,291,13),(390,2,5,292,13),(391,2,10,293,13),(392,2,10,294,13),(393,2,15,295,13),(394,2,20,296,13),(395,2,25,297,13),(396,2,28,374,13),(397,2,35,298,13),(398,2,35,299,13),(399,2,40,300,13),(400,2,45,301,13),(401,2,45,302,13),(402,2,49,303,13),(403,2,49,304,13),(404,2,56,305,13),(405,2,56,306,13),(406,2,56,307,13),(407,2,56,308,13),(408,2,56,309,13),(409,2,56,310,13),(410,3,1,311,13),(411,3,1,312,13),(412,3,5,313,13),(413,3,5,314,13),(414,3,9,315,13),(415,3,14,316,13),(416,3,19,317,13),(417,3,24,318,13),(418,3,28,319,13),(419,3,28,320,13),(420,3,32,321,13),(421,3,32,322,13),(422,3,37,323,13),(423,3,37,324,13),(424,3,41,325,13),(425,3,41,326,13),(426,3,46,327,13),(427,3,52,328,13),(428,3,52,329,13),(429,3,52,330,13),(430,3,54,331,13),(431,3,55,332,13),(432,4,0,333,13),(433,0,13,405,4),(434,0,14,406,4),(435,0,15,407,4),(436,0,16,408,4),(437,0,18,409,4),(438,0,20,410,4),(439,0,22,411,4),(440,0,26,412,4),(441,0,29,413,4),(442,0,34,414,4),(443,0,38,415,4),(444,1,18,416,4),(445,1,20,417,4),(446,1,21,418,4),(447,1,22,419,4),(448,1,24,420,4),(449,1,25,421,4),(450,1,27,422,4),(451,1,29,423,4),(452,1,31,424,4),(453,1,33,425,4),(454,1,55,426,4),(455,1,57,427,4),(456,1,59,428,4),(457,2,0,429,4),(458,2,2,430,4),(459,2,4,431,4),(460,2,5,432,4),(461,2,7,433,4),(462,2,9,434,4),(463,2,11,435,4),(464,2,13,436,4),(465,2,15,437,4),(466,2,17,438,4),(467,2,18,439,4),(468,2,20,440,4),(469,2,22,441,4),(470,2,25,442,4),(471,3,4,443,4),(472,3,7,444,4),(473,3,8,445,4),(474,3,10,446,4),(475,3,12,447,4),(476,3,18,448,4),(477,3,23,449,4),(478,3,28,450,4),(479,3,33,451,4),(480,3,36,452,4),(481,3,38,453,4);
/*!40000 ALTER TABLE `coincidencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comentario` (
  `codComentario` int(11) NOT NULL AUTO_INCREMENT,
  `fechaHora` datetime DEFAULT NULL,
  `cantMeGusta` int(11) DEFAULT NULL,
  `Video_codVideo` int(11) NOT NULL,
  `Usuario_codUsuario` int(11) NOT NULL,
  PRIMARY KEY (`codComentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `palabra`
--

DROP TABLE IF EXISTS `palabra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `palabra` (
  `codPalabra` int(11) NOT NULL,
  `palabra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codPalabra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `palabra`
--

LOCK TABLES `palabra` WRITE;
/*!40000 ALTER TABLE `palabra` DISABLE KEYS */;
INSERT INTO `palabra` VALUES (0,'palabra'),(1,'colores'),(2,'verde claro'),(3,'verde oscuro'),(4,'anaranjado'),(5,'azul'),(6,'amarillo'),(7,'rojo'),(8,'rosado'),(9,'morado'),(10,'café'),(11,'celeste'),(12,'blanco'),(13,'negro'),(14,'gris'),(15,'dorado'),(16,'plateado'),(17,'bronce'),(18,'partes'),(19,'cuerpo'),(20,'cabeza'),(21,'pelo'),(22,'ojo'),(23,'ojos'),(24,'nariz'),(25,'labios'),(26,'lengua'),(27,'dientes'),(28,'oido'),(29,'cuello'),(30,'brazo'),(31,'mano'),(32,'dedo'),(33,'uñas'),(34,'corazon'),(35,'sangre'),(36,'pecho'),(37,'estomago'),(38,'pie'),(39,'piel'),(40,'nalgas'),(41,'números'),(42,'0'),(43,'1'),(44,'2'),(45,'3'),(46,'4'),(47,'5'),(48,'6'),(49,'7'),(50,'8'),(51,'9'),(52,'10'),(53,'11'),(54,'12'),(55,'13'),(56,'14'),(57,'15'),(58,'16'),(59,'17'),(60,'18'),(61,'19'),(62,'20'),(63,'21'),(64,'22'),(65,'23'),(66,'24'),(67,'25'),(68,'26'),(69,'27'),(70,'28'),(71,'29'),(72,'30'),(73,'40'),(74,'50'),(75,'60'),(76,'70'),(77,'80'),(78,'90'),(79,'100'),(80,'200'),(81,'300'),(82,'400'),(83,'500'),(84,'600'),(85,'700'),(86,'800'),(87,'900'),(88,'1000'),(89,'1000000'),(90,'1000000000'),(91,'naturaleza'),(92,'animal'),(93,'arbol'),(94,'planta'),(95,'hoja'),(96,'flor'),(97,'raiz'),(98,'montaña'),(99,'volcan'),(100,'piedra'),(101,'cueva'),(102,'camino'),(103,'tierra'),(104,'tierra(planeta)'),(105,'sol'),(106,'luna'),(107,'estrella'),(108,'fuego'),(109,'ceniza'),(110,'humo'),(111,'viento'),(112,'relampago'),(113,'nube'),(114,'oscuridad'),(115,'lluvia'),(116,'trueno'),(117,'agua'),(118,'rio'),(119,'mar'),(120,'relaciones'),(121,'persona'),(122,'hombre'),(123,'mujer'),(124,'muchacho'),(125,'muchacha'),(126,'familia'),(127,'esposos'),(128,'mamá'),(129,'papá'),(130,'bebé'),(131,'hijo'),(132,'hija'),(133,'hermano'),(134,'hermana'),(135,'gemelos'),(136,'niño'),(137,'niña'),(138,'abuelo'),(139,'abuela'),(140,'nieto'),(141,'nieta'),(142,'divorsio'),(143,'tío'),(144,'tía'),(145,'primo'),(146,'prima'),(147,'sobrino'),(148,'sobrina'),(149,'amigo'),(150,'amiga'),(151,'enemigos'),(152,'joven'),(153,'viejo'),(154,'pueblo'),(155,'prendas'),(156,'ropa'),(157,'falda'),(158,'blusa'),(159,'camisa'),(160,'corbata'),(161,'pantalones'),(162,'calzonsillos'),(163,'calzoneta'),(164,'calzones'),(165,'zapato'),(166,'tenis'),(167,'tacón'),(168,'media'),(169,'calcetin'),(170,'sosten'),(171,'espere'),(172,'bien portado'),(173,'buen provecho'),(174,'salud (estornudo)'),(175,'salud (brindis)'),(176,'Dios te bendiga (católico)'),(177,'Dios te bendiga (evangélico)'),(178,' qué tal'),(179,'Adiós cuidate'),(180,'Adiós mucho gusto'),(181,'clases'),(182,'lo siento'),(183,'Dios'),(184,'Palabras'),(185,'Igual'),(186,'Diferente'),(187,'feliz cumpleaños'),(188,'feliz año nuevo'),(189,'feliz'),(190,'año nuevo'),(191,'feliz navidad'),(192,'me gusta  '),(193,'me encanta'),(194,'comida favorita'),(195,'entienden'),(196,'futbol'),(197,'ventana'),(198,'idea'),(199,'problema'),(200,'folder'),(201,'baño'),(202,'chistoso'),(203,'gracioso'),(204,'mucho '),(205,'más  '),(206,'mayoría'),(207,'también'),(208,'pero'),(209,'depende'),(210,'listo'),(211,'preparado'),(212,'trabajo'),(213,'Dolor'),(214,'confianza'),(215,'tráfico'),(216,'rehabilitación'),(217,'terapia'),(218,'zapatos'),(219,'nevidad'),(220,'comida'),(221,'grado'),(222,'primero'),(223,'segundo'),(224,'tercero'),(225,'cuarto'),(226,'quinto'),(227,'sexto'),(228,'séptimo'),(229,'octavo'),(230,'noveno'),(231,'décimo'),(232,'dólar'),(233,'$'),(234,'dinero'),(235,'pisto'),(236,'%'),(237,'porcentaje'),(238,'por ciento'),(239,'paréntesis'),(240,'()'),(241,'#'),(242,'numeral'),(243,'punto'),(244,'.'),(245,'coma'),(246,','),(247,'dos puntos'),(248,':'),(249,'¿?'),(250,'interrogación'),(251,'\"\"\"'),(252,'comillas'),(253,'adjetivo'),(254,'cualidad'),(255,'calificativo'),(256,'adjetivos'),(257,'cualidades'),(258,'aburrido'),(259,'alto'),(260,'avergonzado'),(261,'bajo'),(262,'barato'),(263,'bien'),(264,'bolo'),(265,'borracho'),(266,'bonito'),(267,'bonita'),(268,'caliente'),(269,'caluroso'),(270,'callado'),(271,'cansado'),(272,'fatigado'),(273,'celoso'),(274,'celosa'),(275,'chambroso'),(276,'colorado'),(277,'contento'),(278,'contenta'),(279,'disgustado'),(280,'disgustada'),(281,'enamorado'),(282,'enamorada'),(283,'enojado'),(284,'enojada'),(285,'envidioso'),(286,'envidiosa'),(287,'espeso'),(288,'excelente'),(289,'feo'),(290,'flaco'),(291,'gordo'),(292,'grande'),(293,'húmedo'),(294,'mojado'),(295,'humilde'),(296,'inteligente'),(297,'loco'),(298,'mañoso'),(299,'ladrón'),(300,'mejor'),(301,'mentiroso'),(302,'mentirosa'),(303,'mudo'),(304,'muda'),(305,'creído'),(306,'creída'),(307,'engreído'),(308,'engreída'),(309,'presumido'),(310,'presumida'),(311,'orgulloso'),(312,'orgullosa'),(313,'pálido'),(314,'pálido'),(315,'pequeño'),(316,'pícaro'),(317,'pobre'),(318,'rico'),(319,'sordo'),(320,'sorda'),(321,'sucio'),(322,'sucia'),(323,'tímido'),(324,'tímida'),(325,'tonto'),(326,'tonta'),(327,'triste'),(328,'no olvides'),(329,'olvides'),(330,'olvidar'),(331,'practicar'),(332,'LESSA'),(333,'aprendelessa.com'),(334,'Abecedario'),(335,'Alfabeto'),(336,'a'),(337,'b'),(338,'c'),(339,'ch'),(340,'d'),(341,'e'),(342,'f'),(343,'g'),(344,'h'),(345,'i'),(346,'j'),(347,'k'),(348,'l'),(349,'ll'),(350,'m'),(351,'n'),(352,'ñ'),(353,'o'),(354,'p'),(355,'q'),(356,'r'),(357,'rr'),(358,'s'),(359,'t'),(360,'u'),(361,'v'),(362,'w'),(363,'x'),(364,'y'),(365,'z'),(366,'normas de cortesía'),(367,'saludos'),(368,'hola'),(369,'buenos días'),(370,'buenas tardes'),(371,'buenas noches'),(372,' cómo estás'),(373,'bien'),(374,'mal'),(375,'más o menos'),(376,' bienvenido'),(377,'bienvenida'),(378,'te veo mañana'),(379,'gracias'),(380,'cuidate'),(381,'suerte'),(382,'te veo después'),(383,'permiso'),(384,'perdón'),(385,'disculpa'),(386,'adiós'),(387,'despedida'),(388,'mucho gusto'),(389,'de nada'),(390,'pase adelante'),(391,'cuántos años tienes'),(392,'presentar personas'),(393,'presentación'),(394,'necesito'),(395,'por favor'),(396,'parte'),(397,'te amo mucho'),(398,'qué necesitas'),(399,'me gusta verte'),(400,'Gracias igual'),(401,'estoy bien'),(402,'estoy regular'),(403,'estoy mal'),(404,'bienvenido a clases'),(405,'cero'),(406,'uno'),(407,'dos'),(408,'tres'),(409,'cuatro'),(410,'cinco'),(411,'seis'),(412,'siete'),(413,'ocho'),(414,'nueve'),(415,'diez'),(416,'once'),(417,'doce'),(418,'trece'),(419,'catorce'),(420,'quince'),(421,'dieciseis'),(422,'diecisite'),(423,'dieciocho'),(424,'diecinueve'),(425,'veinte'),(426,'veintiuno'),(427,'veintidos'),(428,'veintitres'),(429,'veinticuatro'),(430,'veinticinco'),(431,'veintiseis'),(432,'veintisiete'),(433,'veintiocho'),(434,'veintinueve'),(435,'treinta'),(436,'cuarenta'),(437,'cincuenta'),(438,'sesenta'),(439,'setenta'),(440,'ochenta '),(441,'noventa'),(442,'cien'),(443,'doscientos'),(444,'trescientos'),(445,'cuatrocientos'),(446,'quinientos'),(447,'seiscientos'),(448,'setecientos'),(449,'ochocientos'),(450,'novecientos'),(451,'mil'),(452,'un millón'),(453,'un billón');
/*!40000 ALTER TABLE `palabra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reproduccion`
--

DROP TABLE IF EXISTS `reproduccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `reproduccion` (
  `codReproduccion` int(11) NOT NULL AUTO_INCREMENT,
  `videoVisto` tinyint(4) DEFAULT NULL,
  `Usuario_codUsuario` int(11) NOT NULL,
  `Video_codVideo` int(11) NOT NULL,
  PRIMARY KEY (`codReproduccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reproduccion`
--

LOCK TABLES `reproduccion` WRITE;
/*!40000 ALTER TABLE `reproduccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `reproduccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sugerencia`
--

DROP TABLE IF EXISTS `sugerencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sugerencia` (
  `codSugerencia` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(300) DEFAULT NULL,
  `Usuario_codUsuario` int(11) NOT NULL,
  PRIMARY KEY (`codSugerencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sugerencia`
--

LOCK TABLES `sugerencia` WRITE;
/*!40000 ALTER TABLE `sugerencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `sugerencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) DEFAULT NULL,
  `apellido` varchar(75) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `video` (
  `codVideo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(75) DEFAULT NULL,
  `etiquetas` varchar(75) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `url` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`codVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (0,'2018-11-05','Introducción','Aprende LESSA, introducción',1,'mhi6g_0Nfn8'),(1,'2018-11-05','Alfabeto','abecedario, alfabeto, lessa',39,'BKKueXko5S8'),(2,'2018-11-05','Los Colores','colores, negro, azul, rosado, anaranjado, blanco, plateado, dorado, verde, ',8,'yJAQDYOKMJU'),(3,'2018-11-05','Partes del Cuerpo','partes, cuerpo, cabeza, pelo, ojos, nariz, labios, lengua, dientes, oido, c',2,'I-PbA6DlBGk'),(4,'2018-11-05','Los Numeros','numeros, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, ',4,'suw2gAGYRV4'),(5,'2018-11-05','Naturaleza','naturaleza, animal, arbol, planta, hoja, flor, raiz, montaña, volcan, piedr',1,'w_DWFdsl5D4'),(6,'2018-11-05','Relaciones Personales','relaciones, persona, hombre, mujer, muchacho, muchacha, familia, esposos, m',0,'L1a3Kpic8cU'),(7,'2018-11-05','Prendas de vestir','prendas, vestir, ropa, falda, blusa, camisa, corbata, pantalones, calzonsil',1,'8rpU6QhZZ4s'),(8,'2018-11-05','Normas de Cortesía Parte 2','saludos, palabras de cortesía, normas de cortesía',2,'WfGs_xDMPq4'),(10,'2018-11-05','Palabras de uso común','palabras de uso común, palabras básicas, primeras palabras',8,'HlpB6XEjZa4'),(11,'2018-11-05','Normas de Cortesía Parte 1','saludos, palabras de cortesía, normas de cortesía',1,'SDYBefVYvwk'),(12,'2018-11-05','Números Ordinales y símbolos','símbolos, números, ordinales, primero, segundo, posiciones',4,'9_PSnrnYcS8'),(13,'2018-11-05','Adjetivos','adjetivos, cualidades,  calificativo, cualidad, adjetivo, característica',1,'kpck2qHWUTQ');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'aprendelessa'
--

--
-- Dumping routines for database 'aprendelessa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-25 10:20:41
