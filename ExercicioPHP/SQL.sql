CREATE database if not exists teste;
use teste;

Create table if not exists tabela_teste(
	RA integer,
    nome varchar(50),
    endereco varchar(50),
    curso varchar(50)
);

SELECT * FROM tabela_teste;