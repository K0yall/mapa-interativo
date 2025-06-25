
select * from cidades;

INSERT INTO cidades(nome, populacao, custo_vida, atrativos, descricao, identificador_alias) VALUES
	('Agrolândia', 78952, 'Elevado', 'Sul', 'Cidade do Alto Vale', 'agrolandia'),
	('Agronômica', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'agronomica'),
	('Atalanta', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'atalanta'),
	('Aurora', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'aurora'),
	('Braço do Trombudo', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'braco_do_trombudo'),
	('Chapadão do Lageado', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'chapadao_do_lageado'),
	('Dona Emma', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'dona_emma'),
	('Ibirama', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'ibirama'),
	('Imbuia', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'imbuia'),
	('Ituporanga', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'ituporanga'),
	('José Boiteux', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'jose_boiteux'),
	('Laurentino', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'laurentino'),
	('Lontras', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'lontras'),
	('Mirim Doce', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'mirim_doce'),
	('Petrolândia', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'petrolandia'),
	('Presidente Getúlio', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'presidente_getulio'),
	('Presidente Nereu', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'presidente_nereu'),
	('Pouso Redondo', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'pouso_redondo'),
	('Rio do Campo', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'rio_do_campo'),
	('Rio do Oeste', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'rio_do_oeste'),
	('Rio do Sul', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'rio_do_sul'),
	('Salete', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'salete'),
	('Santa Terezinha', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'santa_terezinha'),
	('Taió', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'taio'),
	('Trombudo Central', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'trombudo_central'),
	('Vidal Ramos', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'vidal_ramos'),
	('Vitor Meireles', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'vitor_meireles'),
	('Witmarsum', 78952, 'Elevado', 'Unidavi', 'Boa, mas bem cara e etc', 'witmarsum');


select * from caracteristicas;

INSERT INTO caracteristicas(descricao, avaliacao) VALUES
	('Tranquila', 1),
	('Segura', 1),
	('Povo Gente Boa', 1),
	('Custo Elevado', 0),
	('Falta de Entreterimento', 0);
	

select * from cidade_caracteristicas

INSERT INTO cidade_caracteristicas(cidade_id, caracteristica_id, quantidade_total) VALUES
	(1, 1, 2),
	(1, 2, 1),
	(1, 4, 1),
	(2, 1, 1),
	(3, 2, 1),
	(4, 1, 1),
	(4, 2, 1);




--para adicionar os dados nas cidades:
INSERT INTO populacaos (cidade_id, ano, populacao)
VALUES (21, 2022, 72654);

-- Trabalho e Rendimento
INSERT INTO trabalho_rendimentos (cidade_id, ano, rendimento_medio, taxa_ocupacao, desocupados)
VALUES (21, 2022, 2550.75, 61.2, 1543);

-- Educação
INSERT INTO educacaos (cidade_id, ano, taxa_escolarizacao)
VALUES (21, 2022, 98.3);

-- Economia
INSERT INTO economias (cidade_id, ano, pib, pib_per_capita, receitas_realizadas, despesas_empenhadas)
VALUES (21, 2022, 1325000000.00, 18250.50, 96500000.00, 92300000.00);

-- Saúde
INSERT INTO saudes (cidade_id, ano, estabelecimentos_sus)
VALUES (21, 2022, 18);