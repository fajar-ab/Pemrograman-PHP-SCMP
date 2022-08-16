
DROP TABLE IF EXISTS `penduduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penduduk` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `pendidikan` varchar(25) DEFAULT NULL
)

INSERT INTO `penduduk` VALUES ('0003','Dimas Syuhada','L','Simanosor Julu','SMA'),('0004','Aldinawati Siregar','P','Simanosor Julu','SD'),('0005','Nafsah Aspandi Ritoga','L','Simanosor Julu','S1'),('0006','Fajar Fadilah','L','Simanosor Julu','SMA');
