-- --------------------------------------------------------
-- Servidor:                     den1.mysql4.gear.host
-- Versão do servidor:           5.7.26-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela piti95.fak: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fak` DISABLE KEYS */;
/*!40000 ALTER TABLE `fak` ENABLE KEYS */;

-- Copiando dados para a tabela piti95.tbestados: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tbestados` DISABLE KEYS */;
INSERT INTO `tbestados` (`idEstados`, `Sigla`, `Nome`) VALUES
	(1, 'SP', 'São Paulo'),
	(2, 'MG', 'Minas Gerais'),
	(3, 'SC', 'Santa Catarina'),
	(4, 'BH', 'Bahia'),
	(5, 'RJ', 'Rio de Janeiro'),
	(6, 'ES', 'Espírito Santo');
/*!40000 ALTER TABLE `tbestados` ENABLE KEYS */;

-- Copiando dados para a tabela piti95.tblogin: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tblogin` DISABLE KEYS */;
INSERT INTO `tblogin` (`id`, `Nome`, `login`, `senha`, `idPessoa_Login`) VALUES
	(4, 'wesley', 'wesley@gmail.com', '123456789', 4),
	(5, 'Mel Beatriz Dutra', 'lutteo2017@gmail.com', 'gustavo3001', 5);
/*!40000 ALTER TABLE `tblogin` ENABLE KEYS */;

-- Copiando dados para a tabela piti95.tbpessoas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tbpessoas` DISABLE KEYS */;
INSERT INTO `tbpessoas` (`idPessoa`, `Nome`, `Email`, `Sobrenome`, `CEP`, `Cidade`) VALUES
	(4, 'wesley', 'wesley@gmail.com', 'natan', '05894440', 'ES'),
	(5, 'Mel Beatriz Dutra', 'lutteo2017@gmail.com', 'Santos', '05847-000', 'SP');
/*!40000 ALTER TABLE `tbpessoas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
