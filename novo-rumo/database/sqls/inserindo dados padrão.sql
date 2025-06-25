
select * from cidades;

INSERT INTO cidades (nome, populacao, custo_vida, atrativos, descricao, identificador_alias) VALUES
	('Agrolândia', 11269, 'Moderado', 'Cachoeiras, Turismo Rural', 'Cidade pacata com potencial turístico rural e belas paisagens naturais.', 'agrolandia'),
	('Agronômica', 5446, 'Moderado', 'Eventos culturais', 'Pequeno município com cultura regional forte e qualidade de vida tranquila.', 'agronomica'),
	('Atalanta', 3861, 'Baixo', 'Riqueza Natural', 'Rica em natureza, cachoeiras e áreas verdes preservadas.', 'atalanta'),
	('Aurora', 6071, 'Baixo', 'Turismo Ecológico', 'Cidade pequena com forte presença rural e recursos naturais.', 'aurora'),
	('Braço do Trombudo', 3579, 'Baixo', 'Ambiente Rural', 'Município com estilo de vida interiorano e comunidade unida.', 'braco_do_trombudo'),
	('Chapadão do Lageado', 2989, 'Baixo', 'Tradições Coloniais', 'Município pequeno com forte influência da colonização alemã.', 'chapadao_do_lageado'),
	('Dona Emma', 4042, 'Baixo', 'Cultura Alemã', 'Cidade marcada pela tradição germânica e vida pacata.', 'dona_emma'),
	('Ibirama', 18391, 'Moderado', 'Esportes de Aventura', 'Centro regional com destaque em esportes radicais e natureza.', 'ibirama'),
	('Imbuia', 6243, 'Baixo', 'Produção Rural', 'Conhecida pela agricultura familiar e vida tranquila.', 'imbuia'),
	('Ituporanga', 25120, 'Moderado', 'Capital da Cebola', 'Cidade destaque na produção agrícola e eventos regionais.', 'ituporanga'),
	('José Boiteux', 5285, 'Baixo', 'Cultura Indígena', 'Abriga comunidades indígenas e belezas naturais.', 'jose_boiteux'),
	('Laurentino', 7324, 'Baixo', 'Vitivinicultura', 'Cidade com tradição agrícola e produção de uvas e vinho.', 'laurentino'),
	('Lontras', 11971, 'Moderado', 'Belezas Naturais', 'Tranquilidade e acesso à natureza com bom desenvolvimento urbano.', 'lontras'),
	('Mirim Doce', 2217, 'Baixo', 'Lazer Rural', 'Município pequeno com economia voltada à agricultura.', 'mirim_doce'),
	('Petrolândia', 6666, 'Baixo', 'Patrimônio Histórico', 'Possui construções históricas e vida simples.', 'petrolandia'),
	('Presidente Getúlio', 16853, 'Moderado', 'Cachoeiras e Trilhas', 'Destino turístico regional com belas paisagens e clima agradável.', 'presidente_getulio'),
	('Presidente Nereu', 2275, 'Baixo', 'Ambiente Rural', 'Município interiorano com natureza preservada.', 'presidente_nereu'),
	('Pouso Redondo', 18142, 'Moderado', 'Comércio e Logística', 'Importante eixo logístico regional, com comércio ativo.', 'pouso_redondo'),
	('Rio do Campo', 6113, 'Baixo', 'Tradições Locais', 'Comunidade rural com forte identidade cultural.', 'rio_do_campo'),
	('Rio do Oeste', 7273, 'Baixo', 'Cultura Italiana', 'Conhecida por sua colonização italiana e belas paisagens.', 'rio_do_oeste'),
	('Rio do Sul', 74153, 'Alto', 'Centro Comercial e Universitário', 'Principal cidade do Alto Vale, com estrutura urbana e oportunidades.', 'rio_do_sul'),
	('Salete', 7103, 'Baixo', 'Feiras e Cultura', 'Cidade pequena com eventos regionais e clima interiorano.', 'salete'),
	('Santa Terezinha', 5173, 'Baixo', 'Natureza e Agricultura', 'Município rural com paisagens preservadas.', 'santa_terezinha'),
	('Taió', 18714, 'Moderado', 'Turismo de Natureza', 'Cidade com boa infraestrutura e atrativos naturais.', 'taio'),
	('Trombudo Central', 7257, 'Baixo', 'Agronegócio', 'Economia voltada ao agronegócio e qualidade de vida rural.', 'trombudo_central'),
	('Vidal Ramos', 6330, 'Baixo', 'Ambiente Rural', 'Município tranquilo com economia baseada na agricultura.', 'vidal_ramos'),
	('Vitor Meireles', 2344, 'Baixo', 'Cultura Local', 'Cidade pequena, com foco na tradição e vida simples.', 'vitor_meireles'),
	('Witmarsum', 3725, 'Baixo', 'Riqueza Ambiental', 'Município rural com foco em preservação e vida calma.', 'witmarsum');


select * from caracteristicas;

INSERT INTO caracteristicas (descricao, avaliacao) VALUES
    -- Características positivas
    ('Tranquila', 1),
    ('Segura', 1),
    ('Povo acolhedor', 1),
    ('Boa infraestrutura', 1),
    ('Educação de qualidade', 1),
    ('Saúde acessível', 1),
    ('Custo de vida baixo', 1),
    ('Natureza preservada', 1),
    ('Boas oportunidades de emprego', 1),
    ('Eventos culturais frequentes', 1),

    -- Características negativas
    ('Custo de vida elevado', 0),
    ('Falta de entretenimento', 0),
    ('Problemas de segurança', 0),
    ('Desemprego alto', 0),
    ('Falta de infraestrutura', 0),
    ('Saúde precária', 0),
    ('Educação deficiente', 0),
    ('Trânsito intenso', 0),
    ('Falta de transporte público', 0),
    ('Poluição ambiental', 0);

select * from cidade_caracteristicas

INSERT INTO cidade_caracteristicas(cidade_id, caracteristica_id, quantidade_total) VALUES
	(1, 1, 2),
	(1, 2, 1),
	(1, 4, 1),
	(2, 1, 1),
	(3, 2, 1),
	(4, 1, 1),
	(4, 2, 1);


