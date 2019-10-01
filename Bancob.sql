CREATE TABLE ADM (
  idADM INT NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(70) NULL,
  senha VARCHAR(50) NULL,
  Email VARCHAR(50) NULL,
  PRIMARY KEY(idADM)
);

CREATE TABLE Moto (
  idMoto INT NOT NULL AUTO_INCREMENT,
  Marca VARCHAR(15) NULL,
  Valor REAL NULL,
  Ano INT NULL,
  Descricao VARCHAR(100) NULL,
  Imagem BLOB NULL,
  Imagem2 BLOB NULL,
  Imagem3 BLOB NULL,
  Imagem4 BLOB NULL,
  Imagem5 BLOB NULL,
  PRIMARY KEY(idMoto)
);

CREATE TABLE Produto (
  idProduto INT NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(50) NULL,
  Descricao VARCHAR(120) NULL,
  Valor REAL NULL,
  Imagem BLOB NULL,
  Imagem2 BLOB NULL,
  Imagem3 BLOB NULL,
  Imagem4 BLOB NULL,
  Imagem5 BLOB NULL,
  PRIMARY KEY(idProduto)
);

CREATE TABLE Servico (
  idServico INT NOT NULL AUTO_INCREMENT,
  Titulo VARCHAR(120) NULL,
  Descricao VARCHAR(120) NULL,
  Imagem BLOB NULL,
  Imagem2 BLOB NULL,
  Imagem3 BLOB NULL,
  Imagem4 BLOB NULL,
  Imagem5 BLOB NULL,
  PRIMARY KEY(idServico)
);


