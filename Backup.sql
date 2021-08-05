/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.1.36-MariaDB : Database - ticket
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ticket` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ticket`;

/*Table structure for table `cvs` */

DROP TABLE IF EXISTS `cvs`;

CREATE TABLE `cvs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(40) DEFAULT NULL,
  `apellido` VARCHAR(40) DEFAULT NULL,
  `email` VARCHAR(40) DEFAULT NULL,
  `age` INT(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `cvs` */

/*Table structure for table `cvs_select` */

DROP TABLE IF EXISTS `cvs_select`;

CREATE TABLE `cvs_select` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(40) DEFAULT NULL,
  `apellido` VARCHAR(40) DEFAULT NULL,
  `email` VARCHAR(40) DEFAULT NULL,
  `age` INT(4) DEFAULT NULL,
  `participara` VARCHAR(8) DEFAULT NULL,
  `ticket` INT(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cvs_select` */

INSERT  INTO `cvs_select`(`id`,`nombre`,`apellido`,`email`,`age`,`participara`,`ticket`) VALUES (1,'Jose','Manuel','jose@gmail.com',23,'false',45343645),(2,'Leila','Nonkonw','liela@gmail.com',21,'true',65675675);

/*Table structure for table `cvs_tickets` */

DROP TABLE IF EXISTS `cvs_tickets`;

CREATE TABLE `cvs_tickets` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ticket` INT(10) DEFAULT NULL,
  `participara` VARCHAR(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `cvs_tickets` */

/*Table structure for table `invitados` */

DROP TABLE IF EXISTS `invitados`;

CREATE TABLE `invitados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Empleado` VARCHAR(10) DEFAULT NULL,
  `Codigo_Alternativo` VARCHAR(10) DEFAULT NULL,
  `Nombre` VARCHAR(70) DEFAULT NULL,
  `Cedula` VARCHAR(20) DEFAULT NULL,
  `Genero` VARCHAR(12) DEFAULT NULL,
  `Fecha_Ingreso` VARCHAR(15) DEFAULT NULL,
  `Posicion_Jerarquica` VARCHAR(60) DEFAULT NULL,
  `Departamento` VARCHAR(50) DEFAULT NULL,
  `Facilidad` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `invitados` */

/*Table structure for table `invitados2` */

DROP TABLE IF EXISTS `invitados2`;

CREATE TABLE `invitados2` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Empleado` VARCHAR(10) DEFAULT NULL,
  `Codigo_Alternativo` VARCHAR(10) DEFAULT NULL,
  `Nombre` VARCHAR(70) DEFAULT NULL,
  `Cedula` VARCHAR(20) DEFAULT NULL,
  `Departamento` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;

/*Data for the table `invitados2` */

INSERT  INTO `invitados2`(`id`,`Codigo_Empleado`,`Codigo_Alternativo`,`Nombre`,`Cedula`,`Departamento`) VALUES (1,'1','ERA-001','ERASMO DE JESUS HERNANDEZ','001-1088212-3','GERENCIA OPERACIONES'),
(2,'2','JOR-010','JORGE CORDERO NATERA','001-0180269-2','GERENCIA ESTACIONES OPERACION ISLA'),
(3,'3','MIG-002','MIGUEL ORLANDO SANTOS HERNANDEZ','001-0739491-8','MANTENIMIENTO EQUIPOS'),
(4,'4','RAF-005','RAFAEL LEONIDAS ESTEVEZ','001-0187492-3','MANTENIMIENTO EQUIPOS'),
(5,'5','EDU-001','EDUARDO MONTERO FLORENTINO','001-1079140-7','MANTENIMIENTO EQUIPOS'),
(6,'6','RAF-0010','RAFAEL SEGURA MORILLO','017-0007866-8','INFORMACION Y TECNOLOGIA'),
(7,'7','ROB-003','ROBERTO ANTONIO ROSARIO','031-0073922-0','MANTENIMIENTO EQUIPOS'),
(8,'8','CES-002','CESAR NICOLAS GARCIA ESPINOSA','011-0002109-4','MANTENIMIENTO EQUIPOS'),
(9,'9','WIL-003','WILLIAM BVDO. GRACIANO MATEO','047-0058357-0','VENTAS RETAILS'),
(10,'10','AND-001','ANDRES PLASENCIA BATISTA','001-0563822-5','MANTENIMIENTO EQUIPOS'),
(11,'11','TEO-002','TEOFILO ANTONIO RAMIREZ AYBAR','090-0016596-0','DESPACHO REFINERIA'),
(12,'12','SEV-002','SEVERINO MONEGRO LANTIGUA','047-0050068-1','MANTENIMIENTO EQUIPOS'),
(13,'13','AGU-002','AGUSTIN JAVIER PAULINO','001-0960455-3','ADMINISTRACION'),
(14,'14','FEL-002','FELIPE ABRAHAM CONSTANZO PUENTE','025-0024807-1','INFORMACION Y TECNOLOGIA'),
(15,'15','ALT-001','ALTAGRACIA FRANCO SANTANA','001-1034482-7','RECURSOS HUMANOS'),
(16,'16','JOS-012','JOSE FRANCISCO QUEZADA','079-0012360-0','MANTENIMIENTO EQUIPOS'),(17,'17','CAT-001','CATALINO MONTERO FLORENTINO','001-0541317-3','FLOTA PROPIA MANTENIMIENTO'),(18,'19','YES-001','YESENIA LETICIA SANO VALENZUELA','001-0148584-5','GERENCIA ESTACIONES OPERACION ISLA'),(19,'20','GER-001','GERALDINO AMBIORIX DIAZ CANDELARIO','031-0188494-2','AUDITORIA INTERNA'),(20,'22','MAR-016','MARIBEL GARCIA PEREZ','005-0028674-5','CONTABILIDAD'),(21,'23','RAF-008','RAFAEL ARTEMIO CRUZ MEDRANO','001-0123038-1','GERENCIA OPERACIONES'),(22,'25','FRA-010','FRANCISCA YANES PE„A SOLIS','001-0481660-8','GERENCIA FINANZAS'),(23,'27','RIC-002','RICARDO ANTONIO ROJAS ACOSTA','057-0007147-4','MANTENIMIENTO EQUIPOS'),(24,'29','RAM-008','RAMON SANTIAGO PAREDES','001-0314416-8','MANTENIMIENTO EQUIPOS'),(25,'30','GUI-001','GUILLERMO ASENCIO','001-0673557-4','FLOTA PROPIA CHOFERES TARIFA'),(26,'31','AUR-001','AURELINA GARCIA HERNANDEZ','225-0007991-2','GERENCIA ESTACIONES OPERACION ISLA'),(27,'32','MAN-007','MANUEL MARIA LEONOR HOOGLIUTER','001-0097794-1','FLOTA PROPIA MANTENIMIENTO'),(28,'34','FID-001','FIDEL  ENRIQUILLO DE LA CRUZ ABREU','047-0157092-3','GERENCIA FINANZAS'),(29,'35','JUA-019','JUAN BAUTISTA RODRIGUEZ','093-0039186-0','FLOTA PROPIA CHOFERES TARIFA'),(30,'36','PED-013','PEDRO ANT. FRIAS GARCIA','001-0328824-7','FLOTA PROPIA MANTENIMIENTO'),(31,'38','JOR-006','JORGE ROSA MARTINEZ','002-0029861-0','FLOTA PROPIA CHOFERES TARIFA'),(32,'39','FEL-007','FELIX MANUEL DIROCHE SOTO','001-1708868-2','CREDITOS Y COBROS'),(33,'40','ANG-004','ANGELA MARIA ANDUJAR TAVERAS','041-0002563-6','CONTABILIDAD'),(34,'41','ENM-003','ENMANUEL LIRIANO DIAZ','224-0027513-1','FLOTA PROPIA CHOFERES SALARIOS'),(35,'42','JUL-011','JULIO ANIBAL MEJIA FERNANDEZ','001-0529561-2','GERENCIA FINANZAS'),(36,'43','SAN-008','SANTIAGO NAVARRO','001-0669866-5','FLOTA PROPIA CHOFERES TARIFA'),(37,'45','ANT-005','ANTONIO FRIAS GENAO','059-0012204-4','MANTENIMIENTO Y EDIFICACIONES'),(38,'46','JOS-039','JOSE FRANCISCO SORIANO ARREDONDO','093-0033474-6','FLOTA PROPIA MANTENIMIENTO'),(39,'47','FRA-020','FRANCIS IVANOE GUERRERO CASADO','001-0245898-1','CREDITOS Y COBROS'),(40,'48','VIT-001','VITTORIO FERRARA','001-1618567-9','VENTAS INDUSTRIAL'),(41,'49','FEX-001','FELIX CRISTIAN ANGELES PEREZ','001-0115113-2','INFORMACION Y TECNOLOGIA'),(42,'52','MIG-014','MIGUEL ALBERTO CALDERON NU„EZ','123-0003254-2','FLOTA PROPIA CHOFERES SALARIOS'),(43,'53','WIL-014','WILSON MANUEL AMPARO SERRANO','057-0013552-7','MANTENIMIENTO Y EDIFICACIONES'),(44,'54','ANA-009','ANAIS DEL CARMEN AYBAR MORALES','001-1335579-6','GERENCIA VENTAS Y MERCADEO'),(45,'55','JOS-046','JOSE ALBERTO RAMOS ORTIZ','001-0263472-2','FLOTA PROPIA MANTENIMIENTO'),(46,'56','ANG-013','ANGEL YORADY MATA BATISTA','017-0007219-0','FLOTA PROPIA CHOFERES SALARIOS'),(47,'58','IVE-001','IVELISSE GONZALEZ','001-0016828-5','CONTABILIDAD'),(48,'59','AMA-003','AMADO ANTONIO JIMENEZ DIAZ','001-0959100-8','ADMINISTRACION'),(49,'60','JAI-002','JAILY ALEXANDER MARTINEZ PE„A','001-1194179-5','GERENCIA ESTACIONES OPERACION ISLA'),(50,'61','FRA-022','FRANCISCA SUGEY UBEN CASTILLO','001-1347775-6','CONTABILIDAD'),(51,'62','ANA-002','ANA JOSEFA PERALTA SANTANA','001-0286807-2','RECURSOS HUMANOS'),(52,'63','GEO-001','GEOVANI ANTONIO JIMENEZ NU„EZ','123-0002898-7','FLOTA PROPIA CHOFERES SALARIOS'),(53,'64','HIP-001','HIPOLITO ROSARIO MORETA','093-0012627-4','MANTENIMIENTO Y EDIFICACIONES'),(54,'65','CAR-008','CARLOS ESTEBAN PAULINO REYES','001-0920176-4','VENTAS INDUSTRIAL'),(55,'66','YEN-002','YENNIFER ELAINE PEREZ FELIZ','019-0012809-9','CREDITOS Y COBROS'),(56,'67','MAR-026','MARINO CORDERO DE LA ROSA','001-0357182-4','CREDITOS Y COBROS'),(57,'69','VIC-016','VICTOR MANUEL LUGO HILARIO','225-0036980-0','DESPACHO REFINERIA'),(58,'70','JOE-003','JOEL ANTONIO SARANTE BAUTISTA','001-1538012-3','AUDITORIA INTERNA'),(59,'71','CRI-007','CRISTIAN ERNESTO ANGELES BETANCES','001-1661150-0','SERVICIO AL CLIENTE'),(60,'72','ALB-006','ALBERTIS WALDIS BELLO PI„A','002-0139840-1','MANTENIMIENTO Y EDIFICACIONES'),(61,'78','SAN-011','SANTO ALMONTE','068-0034978-6','FLOTA PROPIA CHOFERES TARIFA'),(62,'80','JUL-012','JULIO CESAR MALLEN MENDOZA','037-0079981-4','FLOTA PROPIA CHOFERES TARIFA'),(63,'83','ORL-003','ORLANDO OCHOA SANTANA','001-0041338-4','MANTENIMIENTO EQUIPOS'),(64,'84','RAM-014','RAMON ALBERTO ANTIGUA SEVERINO','001-0839532-8','FLOTA PROPIA MANTENIMIENTO'),(65,'85','MAR-032','MARIBEL  DE LA ASCENCION GONZALEZ PANTALEON','001-0918231-1','GERENCIA ESTACIONES OPERACION ISLA'),(66,'86','MOD-001','MODESTO ANTONIO DOMINGUEZ LORENZO','104-0001705-8','FLOTA PROPIA CHOFERES TARIFA'),(67,'89','JUS-001','JUSTO GERMAN CABRAL HERRERA','001-1112359-2','CONTABILIDAD'),(68,'90','VIC-018','VICTOR MANUEL SORIANO SANCHEZ','010-0018490-1','FLOTA PROPIA CHOFERES TARIFA'),(69,'91','ANT-006','ANTONIO NOLASCO ALMONTE VIRONE','001-0833274-3','FLOTA PROPIA CHOFERES TARIFA'),(70,'92','OSC-003','OSCAL CABRERA MARTINEZ','082-0015079-8','FLOTA PROPIA CHOFERES TARIFA'),(71,'93','SAL-004','SALLY ARTURINA VARGAS PE„A','068-0043847-2','LEGAL'),(72,'95','HEN-006','HENRY ALEXANDER GARCIA PIRON','016-0013612-9','AUDITORIA INTERNA'),(73,'96','EVE-001','EVELYN DINORAH AVILA FERREIRA','001-1632871-7','VENTAS INDUSTRIAL'),(74,'100','CES-005','CESAR AUGUSTO AQUINO','008-0025151-4','FLOTA PROPIA MANTENIMIENTO'),(75,'102','HEC-010','HECTOR MATEO HERNANDEZ','093-0011773-7','FLOTA PROPIA CHOFERES SALARIOS'),(76,'104','VIC-019','VICENTE ASENCIO GERMAN','093-0040226-1','MANTENIMIENTO EQUIPOS'),(77,'105','PED-018','PEDRO MARTINEZ RODRIGUEZ','045-0015463-0','MANTENIMIENTO Y EDIFICACIONES'),(78,'106','RIC-004','RICARDO NARCISO VERAS ABREU','001-1235104-4','GERENCIA ESTACIONES OPERACION ISLA'),(79,'109','EST-004','ESTHER MARGARITA DIAZ ACOSTA','001-0171971-4','CONTABILIDAD'),(80,'117','MAY-001','MAYERLING EMILIA GABOT RODRIGUEZ','001-1441357-8','SERVICIO AL CLIENTE'),(81,'118','NEL-009','NELSON ROJAS ACEVEDO','093-0053326-3','MANTENIMIENTO Y EDIFICACIONES'),(82,'120','ALE-011','ALEXANDER ALBERTO VASQUEZ BURGOS','001-1374662-2','GERENCIA ESTACIONES OPERACION ISLA'),(83,'123','FAU-004','FAUSTO DAVID VINICIO FERRAND','225-0066753-4','CONTABILIDAD'),(84,'124','YOE-003','YOESMIN BUSSI PAULA','228-0006746-8','FLOTA PROPIA CHOFERES SALARIOS'),(85,'125','JUA-041','JUAN PABLO ALMONTE VENTURA','001-1655013-8','CONTABILIDAD'),(86,'126','MAN-021','MANUEL DE JESUS DAVIS PENN','001-0549075-9','FLOTA PROPIA MANTENIMIENTO'),(87,'128','RAF-019','RAFAEL DANERY DIAZ MINYETY','013-0018039-3','MANTENIMIENTO EQUIPOS'),(88,'133','LUI-030','LUIS ALBERTO PE„A ROMERO','093-0072260-1','CONTABILIDAD'),(89,'137','PED-019','PEDRO ELIGIO FLORES SANTOS','001-0118307-7','AUDITORIA INTERNA'),(90,'145','LOR-002','LORAYNNE MARIA CANDELARIO FERRER','223-0107118-3','RECURSOS HUMANOS'),(91,'146','DAR-002','DARIO GUZMAN CORDERO','082-0021086-5','FLOTA PROPIA CHOFERES TARIFA'),(92,'147','REI-001','REIMY CRISTOBAL JIMENEZ CUEVAS','093-0070150-6','FLOTA PROPIA CHOFERES TARIFA'),(93,'148','CRI-010','CRISTIAN RAFAEL AMPARO BEATO','402-2438509-2','FLOTA PROPIA MANTENIMIENTO'),(94,'150','ALV-002','ALVIN ALVARADO LOPEZ','001-1746857-9','DESPACHO REFINERIA'),(95,'155','ROB-007','ROBERT BIENVENIDO BATISTA BELTRE','010-0088866-7','VENTAS RETAILS'),(96,'157','EUC-001','EUCEBIO GUZMAN DIAZ','022-0024948-6','CONTABILIDAD'),(97,'160','FAU-006','FAUSTINO MIGUEL QUEZADA CARMONA','001-0907604-2','FLOTA PROPIA CHOFERES TARIFA'),(98,'161','PAB-004','PABLO TRINIDAD SANCHEZ','001-0675796-6','FLOTA PROPIA CHOFERES TARIFA'),(99,'162','RAM-016','RAMON RAFAEL LOPEZ MOLINA','047-0058956-9','FLOTA PROPIA CHOFERES TARIFA'),(100,'163','ROD-002','RODOLFO NIVAR VALDEZ','068-0043845-6','FLOTA PROPIA CHOFERES TARIFA'),(101,'164','WIL-020','WILSON VALERIO GONZALEZ','093-0003547-5','FLOTA PROPIA CHOFERES TARIFA'),(102,'165','QUE-002','QUELBYN BARDEMIRO VOLQUEZ MEDRANO','001-0320518-3','FLOTA PROPIA CHOFERES TARIFA'),(103,'166','IGN-002','IGNACIO ALCANTARA NAVARRO','228-0003745-3','MANTENIMIENTO EQUIPOS'),(104,'168','JUA-044','JUAN JOSE PI„EYRO CABRAL','001-0755088-1','FLOTA PROPIA CHOFERES TARIFA'),(105,'170','WIL-021','WILLY OMAR PIRON CUELLO','012-0083335-6','FLOTA PROPIA CHOFERES TARIFA'),(106,'171','YOI-001','YOIDY JOSE MARTICH HERRERA','402-2430603-1','CREDITOS Y COBROS'),(107,'178','SAN-014','SANDRO DE LOS SANTOS BETANCES','402-2156220-6','RECURSOS HUMANOS'),(108,'179','ROS-007','ROSY ELENA RAMIREZ VELOZ','225-0010112-0','CONTABILIDAD'),(109,'180','GEN-003','GENESIS GONZALEZ DIAZ','083-0000446-5','MANTENIMIENTO EQUIPOS'),(110,'183','ALI-002','ALIX GARCIA NAPOLES','001-1593303-8','FLOTA PROPIA CHOFERES TARIFA'),(111,'184','AMB-003','AMBIORIS GUZMAN PE„ALO','082-0005849-6','FLOTA PROPIA CHOFERES TARIFA'),(112,'185','HEC-014','HECTOR RAMON GARCIA RODRIGUEZ','001-0677643-8','FLOTA PROPIA CHOFERES TARIFA'),(113,'190','MIG-013','MIGUEL ANTONIO SANCHEZ DOVAL','135-0000193-1','CONTABILIDAD'),(114,'191','REY-004','REYMER LIZANDRO CARRASCO HERRERA','225-0063205-8','GERENCIA OPERACIONES'),(115,'193','NIC-005','NICOLE MARIE BRUGAL PAGAN','001-1750656-8','GERENCIA ESTACIONES OPERACION ISLA'),(116,'194','EUL-001','EULOGIO FERMIN MEJIA','065-0013098-1','GERENCIA OPERACIONES'),(117,'197','EDD-004','EDDY WILBER DURAN PICHARDO','223-0014678-8','INFORMACION Y TECNOLOGIA'),(118,'198','EDD-005','EDIBERTO ANTONIO CABRERA FERMIN','031-0385182-4','CONTABILIDAD'),(119,'199','YES-002','YESENIA EVANGELINA BAEZ LARA','003-0062393-1','VENTAS INDUSTRIAL'),(120,'201','CAR-015','CARLOS GUILLERMO RICART MORE','001-1781038-2','GERENCIA FINANZAS'),(121,'202','HEI-002','HEIDY EMILIO RODRIGUEZ DE LA CRUZ','001-0147779-2','GERENCIA ESTACIONES OPERACION ISLA'),(122,'203','SIL-003','SILVESTRE SANCHEZ BAUTISTA','001-0439345-9','RECURSOS HUMANOS'),(123,'205','MAR-047','MARINO ENRIQUE MEDINA HERRERA','023-0141932-7','DESPACHO REFINERIA'),(124,'206','ISM-004','ISMAEL MARIANO GARCIA INOA','054-0087544-8','MANTENIMIENTO EQUIPOS'),(125,'208','JUN-003','JUNIOR RAFAEL HENRIQUEZ FERNANDEZ','031-0409678-3','FLOTA PROPIA CHOFERES SALARIOS'),(126,'209','SEN-001','SENIA BAEZ GOMEZ','001-1045921-1','SERVICIO AL CLIENTE'),(127,'210','JOS-074','JOSE LUIS FERNANDEZ VASQUEZ','001-0274506-4','CREDITOS Y COBROS'),(128,'211','GIL-002','GILBERTO MIGUEL VILLANUEVA PEREZ','001-1020651-3','GERENCIA VENTAS Y MERCADEO'),(129,'212','LAU-001','LAURY MERCEDES VELAZQUEZ SALADIN','001-1636366-4','SERVICIO AL CLIENTE'),(130,'215','JUA-049','JOSE ERNESTO DE LA CRUZ GERMAN','093-0070183-7','MANTENIMIENTO EQUIPOS'),(131,'218','MAR-049','MARIOLA CRISTINA GARCIA','001-1809416-8','SERVICIO AL CLIENTE'),(132,'219','ANA-008','ANA KIREMNE PI„A MOREL','123-0010936-5','GERENCIA ESTACIONES OPERACION ISLA'),(133,'220','CES-007','CESAR RODRIGUEZ CARRASCO','011-0032136-1','MANTENIMIENTO EQUIPOS'),(134,'221','MAR-050','MARCOS MANUEL PEREZ VALDEZ','402-2028767-2','RECURSOS HUMANOS'),(135,'225','CRI-012','CRISTOPHE ENMANUEL ROSARIO REYNOSO','049-0056683-9','GERENCIA OPERACIONES'),(136,'227','MAR-051','MARLIN KARINA POLANCO CRISOSTOMO','402-2201760-6','CONTABILIDAD'),(137,'230','REN-002','RENE DAGOBERTO PE„A CASTELLANOS','031-0437265-5','GERENCIA ESTACIONES OPERACION ISLA'),(138,'231','MIR-003','MIRANGELY VIZCAINO GARCIA','402-2026477-0','ADMINISTRACION'),(139,'235','SAN-017','SANDY MORENO PEREZ','008-0027030-8','DESPACHO REFINERIA'),(140,'236','DEN-002','DENIS YINET NU„EZ LOPEZ','402-2023347-8','GERENCIA FINANZAS'),(141,'243','AMB-004','AMBIORIX MATEO QUEZADA','225-0025531-4','CREDITOS Y COBROS'),(142,'244','MAR-055','MARIEL ALMONTE ESQUEA','001-1201812-2','RECURSOS HUMANOS'),(143,'246','LUI-033','LUILLY PAMELA VOLQUEZ REYES','223-0093115-5','CREDITOS Y COBROS'),(144,'247','EBE-001','EBEL MARTINEZ DE LOS SANTOS','001-1620838-0','CREDITOS Y COBROS'),(145,'248','FRA-037','FRANCIS ANDRES CALDERON SOSA','001-1744174-1','FLOTA PROPIA MANTENIMIENTO'),(146,'249','MER-002','MERARI PAMELIS MEJIA MATOS','223-0101835-8','CONTABILIDAD'),(147,'250','WIL-027','WILFY TAVAREZ HERNANDEZ','402-2054398-3','CONTABILIDAD'),(148,'251','LUI-034','LUIS ROBERTO DIAZ TRIGO','001-1403119-8','GERENCIA OPERACIONES'),(149,'253','MOI-001','MOISES CRISOSTOMO CASTILLO','402-2335689-6','INFORMACION Y TECNOLOGIA'),(150,'254','MAY-002','MAYDALIS LINETTY MEDINA DE VARGAS','223-0164988-9','SERVICIO AL CLIENTE'),(151,'255','MAY-003','MAYELINE JUDITH RAIGOSO SURIEL','402-2279536-7','LEGAL'),(152,'257','JUL-017','JULIAN PEREZ CEBALLOS','001-0976483-7','MANTENIMIENTO Y EDIFICACIONES'),(153,'258','FRA-038','FRANCISCO ALBERTO MARTINEZ DE LA CRUZ','402-2164026-7','DESPACHO REFINERIA'),(154,'259','MEL-004','MELVIN DAVID COMPRES DE LOS SANTOS','056-0147862-0','VENTAS INDUSTRIAL'),(155,'261','LUI-035','LUIS ALEXANDER PEREZ PEREZ','091-0004593-0','MANTENIMIENTO Y EDIFICACIONES'),(156,'262','BRY-002','BRYAN VASQUEZ RODRIGUEZ','402-2433807-5','MANTENIMIENTO Y EDIFICACIONES'),(157,'263','JOS-078','JOSE ELIAS ALMONTE RODRIGUEZ','031-0180129-2','MANTENIMIENTO Y EDIFICACIONES'),(158,'264','VMAN-024','MANUEL GUILLERMO BURDIE SOLANO','054-0119312-2','MANTENIMIENTO Y EDIFICACIONES'),(159,'266','FEL-010','FELIX MORENO','001-0718394-9','FLOTA PROPIA MANTENIMIENTO'),(160,'267','ARI-011','ARISMENDY VALDEZ REYES','001-1518925-0','FLOTA PROPIA CHOFERES TARIFA'),(161,'268','NOS-001','NOSLEN BRIAN LLUBERES VILLAR','402-2307894-6','CONTABILIDAD'),(162,'269','ALE-016','ALEX PAUL LEONOR JOHNSON','001-0089834-5','GERENCIA OPERACIONES'),(163,'270','PED-024','PEDRO JUNIOR HEREDIA DEL JESUS','123-0015953-5','FLOTA PROPIA CHOFERES TARIFA'),(164,'271','ROL-001','ROLANDO DO„E PINEDA','002-0122722-0','FLOTA PROPIA CHOFERES TARIFA'),(165,'272','JOA-004','JOAN MANUEL ROSARIO CORPORAN','002-0134999-0','FLOTA PROPIA CHOFERES TARIFA'),(166,'275','EUN-001','EUNNIEL YAMILETH PE„A FRIAS','402-2213755-2','CREDITOS Y COBROS'),(167,'277','IRO-001','IRONESA OILDA MARTES POLANCO','223-0013464-4','RECURSOS HUMANOS'),(168,'278','LUD-002','LUDDY CASTRO SANCHEZ','028-0091057-8','VENTAS INDUSTRIAL'),(169,'279','OLG-003','OLGA IRIS RUIZ DE JESUS DE BAEZ','001-1626175-1','CREDITOS Y COBROS'),(170,'281','YAR-001','YARISOL AMELIA HERRERA MOREL','402-2316541-2','RECURSOS HUMANOS'),(171,'282','GLE-003','GLENNYS NOLASCO HERNANDEZ','001-1691057-1','CREDITOS Y COBROS'),(172,'283','FAU-007','FAUSTO JOSE GARCIA GOMEZ','054-0089601-4','MANTENIMIENTO Y EDIFICACIONES'),(173,'284','HAD-001','HADELYN URBAEZ RODRIGUEZ','001-1279906-9','VENTAS INDUSTRIAL'),(174,'289','ELI-008','ELIEZER CASTILLO TIBREY','002-0170010-1','MANTENIMIENTO Y EDIFICACIONES'),(175,'290','SAN-018','SANTA GUANTE DE PAULA','224-0017110-8','RECURSOS HUMANOS'),(176,'293','QUI-002','QUIRICO FERNANDO MENDEZ MATOS','018-0044139-4','MANTENIMIENTO Y EDIFICACIONES'),(177,'294','EDW-013','EDWIN JOSE PARRA GARCIA','402-1481376-4','DESPACHO REFINERIA'),(178,'296','LAU-002','LAURA AZUCENA FERRERAS RUIZ','402-0071480-2','VENTAS INDUSTRIAL'),(179,'298','ROB-010','ROBERT JOEL CABRERA CUEVAS','402-2447096-9','LEGAL'),(180,'299','CAR-018','CARLOS JULIO PEREZ HILARIO','001-1194263-7','FLOTA PROPIA MANTENIMIENTO'),(181,'300','JUA-051','JUAN HERNANDEZ DEL ORBE','001-1686291-3','MANTENIMIENTO EQUIPOS'),(182,'301','YUD-002','YUDELKIS GOMEZ NU„EZ','048-0074934-5','RECURSOS HUMANOS'),(183,'302','KAT-003','KATHERINE LICELOT URENA ESTEVEZ','402-2443028-6','CONTABILIDAD'),(184,'306','FRA-039','FRANCISCO TOMAS MOTA ROSARIO','047-0108795-1','CREDITOS Y COBROS'),(185,'307','WIL-029','WILMER RAMON GENAO SUERO','402-3400566-4','DESPACHO REFINERIA'),(186,'310','310','ROMANI ROJAS QUI„ONES','223-0077270-8','AUDITORIA INTERNA'),(187,'312','312','PALOMA VANIESSE MENDEZ SORIANO','010-0096254-6','ADMINISTRACION'),(188,'313','313','CARLOS ALEXANDER BAEZ MEDRANO','001-1588473-6','FLOTA PROPIA CHOFERES SALARIOS'),(189,'314','314','YARITZA YLDANIA PINEDA ARAUJO','402-2314319-5','GERENCIA VENTAS Y MERCADEO'),(190,'315','315','KELVIN MANUEL FELIZ GONZALEZ','020-0013671-9','FLOTA PROPIA CHOFERES TARIFA'),(191,'316','316','ANGEL MANUEL GUZMAN GUZMAN','082-0021594-8','FLOTA PROPIA CHOFERES TARIFA'),(192,'317','317','ESMERALDA DE LA CRUZ BEATO','001-1374338-9','FLOTA PROPIA CHOFERES TARIFA'),(193,'318','318','MAXIMILIANO MERCEDES MA„ON','001-1359094-7','FLOTA PROPIA CHOFERES TARIFA'),(194,'319','319','GUSTAVO ANTONIO CHECO PIERALDYS','018-0053555-9','FLOTA PROPIA CHOFERES TARIFA'),(195,'320','320','JOSE MANUEL DIAZ JIMENEZ','402-3649147-4','INFORMACION Y TECNOLOGIA'),(196,'322','322','RAFAELA ROSADO DE LA ROSA','001-1827267-3','RECURSOS HUMANOS'),(197,'324','324','RUBELIS PAMELA CRUZ LARA','402-2198648-8','RECURSOS HUMANOS');

/*Table structure for table `invitados_select` */

DROP TABLE IF EXISTS `invitados_select`;

CREATE TABLE `invitados_select` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Empleado` VARCHAR(10) DEFAULT NULL,
  `Codigo_Alternativo` VARCHAR(10) DEFAULT NULL,
  `Nombre` VARCHAR(70) DEFAULT NULL,
  `Cedula` VARCHAR(20) DEFAULT NULL,
  `Departamento` VARCHAR(50) DEFAULT NULL,
  `Ticket` VARCHAR(10) DEFAULT NULL,
  `Participacion` VARCHAR(10) DEFAULT NULL,
  `Nombre_Util` VARCHAR(30) DEFAULT NULL,
  `Apellido_Util` VARCHAR(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `invitados_select` */

INSERT  INTO `invitados_select`(`id`,`Codigo_Empleado`,`Codigo_Alternativo`,`Nombre`,`Cedula`,`Departamento`,`Ticket`,`Participacion`,`Nombre_Util`,`Apellido_Util`) VALUES (1,'14','FEL-002','FELIPE ABRAHAM CONSTANZO PUENTE','025-0024807-1','INFORMACION Y TECNOLOGIA','dfgdfd','true','FELIPE','CONSTANZO'),
(2,'253','MOI-001','MOISES CRISOSTOMO CASTILLO','402-2335689-6','INFORMACION Y TECNOLOGIA','43543453','true','MOISES','CRISOTO'),
(3,'197','EDD-004','EDDY WILBER DURAN PICHARDO','223-0014678-8','INFORMACION Y TECNOLOGIA','34534534','true','EDDY','DURAN'),
(4,'320','320','JOSE MANUEL DIAZ JIMENEZ','402-3649147-4','INFORMACION Y TECNOLOGIA','34534343','true','JOSE','MANUEL');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;