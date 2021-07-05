# GamerStatistic

Execução do código!

Adicionar na pasta raiz do XamppServer ou WamppServer. Ter o banco de dados Mysql instalado. 

Segue estrutura para o banco de dados:

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL DEFAULT 'NOT NULL',
  `email` varchar(220) NOT NULL DEFAULT 'NOT NULL',
  `senha` varchar(220) NOT NULL DEFAULT 'NOT NULL',
  `cep` int(11) DEFAULT NULL,
  `cidade` varchar(220) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `bairro` varchar(220) DEFAULT NULL,
  `rua` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

