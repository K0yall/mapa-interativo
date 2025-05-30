@extends('layout.app')
@section('title', 'Municípios | Descubra o Vale')
@section('content')
    
    <div class="cidades-section">
        <h2>Municípios do Alto Vale</h2>
        <div class="cidades-grid">
            <!-- Card: Agrolândia -->
            <div class="cidade-card expandivel" data-bandeira="agrolandia">
                <div class="card-header">
                    <h3>Agrolândia</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-agrolandia" class="toggle-info" />
                <label for="toggle-agrolandia" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Agrolândia é um dos municípios que compõem o coração do Alto Vale do Itajaí.</p>
                    <a href="agrolandia.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Agronômica -->
            <div class="cidade-card expandivel" data-bandeira="agronomica">
                <div class="card-header">
                    <h3>Agronômica</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-agronomica" class="toggle-info" />
                <label for="toggle-agronomica" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Pequena e acolhedora, Agronômica é rica em tradições e natureza.</p>
                    <a href="agronomica.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Atalanta -->
            <div class="cidade-card expandivel" data-bandeira="atalanta">
                <div class="card-header">
                    <h3>Atalanta</h3>
                    <p class="resumo destaque">Tranquilidade e natureza</p>
                </div>
                <input type="checkbox" id="toggle-atalanta" class="toggle-info" />
                <label for="toggle-atalanta" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: 3.600</p>
                    <p>Custo de vida: Baixo</p>
                    <p>Atrativos: Cachoeiras, natureza preservada</p>
                    <p>Descrição: Atalanta é um refúgio de tranquilidade, com paisagens naturais e ambiente acolhedor.
                    </p>
                    <a href="atalanta.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Aurora -->
            <div class="cidade-card expandivel" data-bandeira="aurora">
                <div class="card-header">
                    <h3>Aurora</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-aurora" class="toggle-info" />
                <label for="toggle-aurora" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Aurora possui belas paisagens naturais e forte tradição rural.</p>
                    <a href="aurora.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Braço do Trombudo -->
            <div class="cidade-card expandivel" data-bandeira="braco_do_trombudo">
                <div class="card-header">
                    <h3>Braço do Trombudo</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-braco" class="toggle-info" />
                <label for="toggle-braco" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Município tranquilo com forte presença agrícola.</p>
                    <a href="braco-do-trombudo.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Chapadão do Lageado -->
            <div class="cidade-card expandivel" data-bandeira="chapadao_do_lageado">
                <div class="card-header">
                    <h3>Chapadão do Lageado</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-chapadao" class="toggle-info" />
                <label for="toggle-chapadao" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Município com paisagens de tirar o fôlego e clima rural.</p>
                    <a href="chapadao-do-lageado.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Dona Emma -->
            <div class="cidade-card expandivel" data-bandeira="dona_emma">
                <div class="card-header">
                    <h3>Dona Emma</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-donaemma" class="toggle-info" />
                <label for="toggle-donaemma" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Tradições e natureza caminham juntas em Dona Emma.</p>
                    <a href="dona-emma.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Ibirama -->
            <div class="cidade-card expandivel" data-bandeira="ibirama">
                <div class="card-header">
                    <h3>Ibirama</h3>
                    <p class="resumo destaque">Polo cultural e econômico</p>
                </div>
                <input type="checkbox" id="toggle-ibirama" class="toggle-info" />
                <label for="toggle-ibirama" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Rios, festividades, história</p>
                    <p>Descrição: Um dos principais centros urbanos da região, com rica história e atividades culturais.
                    </p>
                    <a href="ibirama.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Imbuia -->
            <div class="cidade-card expandivel" data-bandeira="imbuia">
                <div class="card-header">
                    <h3>Imbuia</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-imbuia" class="toggle-info" />
                <label for="toggle-imbuia" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Imbuia é uma cidade acolhedora e de forte vocação rural.</p>
                    <a href="imbuia.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Ituporanga -->
            <div class="cidade-card expandivel" data-bandeira="ituporanga">
                <div class="card-header">
                    <h3>Ituporanga</h3>
                    <p class="resumo destaque">Capital da Cebola</p>
                </div>
                <input type="checkbox" id="toggle-ituporanga" class="toggle-info" />
                <label for="toggle-ituporanga" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: 25.000</p>
                    <p>Custo de vida: Baixo</p>
                    <p>Atrativos: Festa da Cebola, Turismo rural</p>
                    <p>Descrição: Ituporanga é conhecida por sua tradição agrícola e eventos únicos que celebram a
                        cultura do Vale.</p>
                    <a href="ituporanga.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: José Boiteux -->
            <div class="cidade-card expandivel" data-bandeira="jose_boiteux">
                <div class="card-header">
                    <h3>José Boiteux</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-joseboiteux" class="toggle-info" />
                <label for="toggle-joseboiteux" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Comunidades indígenas</p>
                    <p>Descrição: Lar de povos indígenas e uma natureza exuberante.</p>
                    <a href="jose-boiteux.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Laurentino -->
            <div class="cidade-card expandivel" data-bandeira="laurentino">
                <div class="card-header">
                    <h3>Laurentino</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-laurentino" class="toggle-info" />
                <label for="toggle-laurentino" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Pequena cidade com identidade cultural forte.</p>
                    <a href="laurentino.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Lontras -->
            <div class="cidade-card expandivel" data-bandeira="lontras">
                <div class="card-header">
                    <h3>Lontras</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-lontras" class="toggle-info" />
                <label for="toggle-lontras" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Cidade com localização estratégica e belas paisagens.</p>
                    <a href="lontras.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Mirim Doce -->
            <div class="cidade-card expandivel" data-bandeira="mirim_doce">
                <div class="card-header">
                    <h3>Mirim Doce</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-mirimdoce" class="toggle-info" />
                <label for="toggle-mirimdoce" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Cidade pacata com natureza exuberante e belas paisagens.</p>
                    <a href="mirim-doce.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Petrolândia -->
            <div class="cidade-card expandivel" data-bandeira="petrolandia">
                <div class="card-header">
                    <h3>Petrolândia</h3>
                    <p class="resumo destaque">Cidade do interior com tradição agrícola</p>
                </div>
                <input type="checkbox" id="toggle-petrolandia" class="toggle-info" />
                <label for="toggle-petrolandia" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: Aproximadamente 6.000</p>
                    <p>Custo de vida: Baixo</p>
                    <p>Atrativos: Áreas rurais, paisagens naturais, festas comunitárias</p>
                    <p>Descrição: Petrolândia é uma cidade acolhedora com forte presença rural, destacando-se pela
                        tranquilidade e belezas naturais.</p>
                    <a href="petrolandia.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Presidente Getúlio -->
            <div class="cidade-card expandivel" data-bandeira="presidente_getulio">
                <div class="card-header">
                    <h3>Presidente Getúlio</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-getulio" class="toggle-info" />
                <label for="toggle-getulio" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Natureza, cultura alemã</p>
                    <p>Descrição: Rica em belezas naturais e tradições germânicas.</p>
                    <a href="presidente-getulio.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Presidente Nereu -->
            <div class="cidade-card expandivel" data-bandeira="presidente_nereu">
                <div class="card-header">
                    <h3>Presidente Nereu</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-nereu" class="toggle-info" />
                <label for="toggle-nereu" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Natureza preservada</p>
                    <p>Descrição: Município pequeno com paisagens naturais e clima rural.</p>
                    <a href="presidente-nereu.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Pouso Redondo -->
            <div class="cidade-card expandivel" data-bandeira="pouso_redondo">
                <div class="card-header">
                    <h3>Pouso Redondo</h3>
                    <p class="resumo destaque">Portal do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-pousoredondo" class="toggle-info" />
                <label for="toggle-pousoredondo" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Rios, esportes de aventura</p>
                    <p>Descrição: Conhecida como portal do Alto Vale, é ponto estratégico e turístico.</p>
                    <a href="pouso-redondo.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Rio do Campo -->
            <div class="cidade-card expandivel" data-bandeira="rio_do_campo">
                <div class="card-header">
                    <h3>Rio do Campo</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-riodocampo" class="toggle-info" />
                <label for="toggle-riodocampo" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Rios e trilhas</p>
                    <p>Descrição: Cidade com paisagens naturais e forte presença agrícola.</p>
                    <a href="rio-do-campo.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Rio do Oeste -->
            <div class="cidade-card expandivel" data-bandeira="rio_do_oeste">
                <div class="card-header">
                    <h3>Rio do Oeste</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-riodooeste" class="toggle-info" />
                <label for="toggle-riodooeste" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Cultura italiana</p>
                    <p>Descrição: Cidade com grande influência italiana e lindas paisagens.</p>
                    <a href="rio-do-oeste.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Rio do Sul -->
            <div class="cidade-card expandivel" data-bandeira="rio_do_sul">
                <div class="card-header">
                    <h3>Rio do Sul</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <div class="caracteristicas" id="caracteristicas">
                    
                </div>
                <input type="checkbox" id="toggle-rio" class="toggle-info" />
                <label for="toggle-rio" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: 72.000</p>
                    <p>Custo de vida: Médio</p>
                    <p>Atrativos: Morros, Rio Itajaí, Eventos culturais</p>
                    <p>Descrição: Rio do Sul é o polo do Alto Vale, com forte economia, qualidade de vida e muitos
                        eventos culturais.</p>
                    <a href="rio-do-sul.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Salete -->
            <div class="cidade-card expandivel" data-bandeira="salete">
                <div class="card-header">
                    <h3>Salete</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-salete" class="toggle-info" />
                <label for="toggle-salete" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Cidade charmosa e tranquila com foco na agricultura.</p>
                    <a href="salete.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Santa Terezinha -->
            <div class="cidade-card expandivel" data-bandeira="santa_terezinha">
                <div class="card-header">
                    <h3>Santa Terezinha</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-santaterezinha" class="toggle-info" />
                <label for="toggle-santaterezinha" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Município acolhedor e com grande diversidade natural.</p>
                    <a href="santa-terezinha.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Taió -->
            <div class="cidade-card expandivel" data-bandeira="taio">
                <div class="card-header">
                    <h3>Taió</h3>
                    <p class="resumo destaque">Terra dos Lagos</p>
                </div>
                <input type="checkbox" id="toggle-taio" class="toggle-info" />
                <label for="toggle-taio" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: Lagos, cachoeiras, turismo rural</p>
                    <p>Descrição: Conhecida por suas paisagens aquáticas e natureza preservada.</p>
                    <a href="taio.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Trombudo Central -->
            <div class="cidade-card expandivel" data-bandeira="trombudo_central">
                <div class="card-header">
                    <h3>Trombudo Central</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-trombudo" class="toggle-info" />
                <label for="toggle-trombudo" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Cidade com infraestrutura urbana em crescimento.</p>
                    <a href="trombudo-central.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Vidal Ramos -->
            <div class="cidade-card expandivel" data-bandeira="vidal_ramos">
                <div class="card-header">
                    <h3>Vidal Ramos</h3>
                    <p class="resumo destaque">Tradição e beleza rural</p>
                </div>
                <input type="checkbox" id="toggle-vidal" class="toggle-info" />
                <label for="toggle-vidal" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: 6.200</p>
                    <p>Custo de vida: Baixo</p>
                    <p>Atrativos: Paisagens rurais, festas típicas</p>
                    <p>Descrição: Vidal Ramos combina tradição do campo com paisagens deslumbrantes e qualidade de vida.
                    </p>
                    <a href="vidal-ramos.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Vitor Meireles -->
            <div class="cidade-card expandivel" data-bandeira="vitor_meireles">
                <div class="card-header">
                    <h3>Vitor Meireles</h3>
                    <p class="resumo destaque">Cidade do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-vitor" class="toggle-info" />
                <label for="toggle-vitor" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: -</p>
                    <p>Custo de vida: -</p>
                    <p>Atrativos: -</p>
                    <p>Descrição: Município com beleza rural e estilo de vida tranquilo.</p>
                    <a href="vitor-meireles.html" class="veja-mais">Veja mais</a>
                </div>
            </div>
            <!-- Card: Witmarsum -->
            <div class="cidade-card expandivel" data-bandeira="witmarsum">
                <div class="card-header">
                    <h3>Witmarsum</h3>
                    <p class="resumo destaque">Cidade acolhedora do Alto Vale</p>
                </div>
                <input type="checkbox" id="toggle-witmarsum" class="toggle-info" />
                <label for="toggle-witmarsum" class="botao-expandir">+ Informações</label>
                <div class="conteudo-expandido">
                    <p>População: 3.500</p>
                    <p>Custo de vida: Baixo</p>
                    <p>Atrativos: Turismo rural, cultura local</p>
                    <p>Descrição: Witmarsum é pequena e charmosa, com forte presença da agricultura familiar e beleza
                        natural.</p>
                    <a href="witmarsum.html" class="veja-mais">Veja mais</a>
                </div>
            </div>

        </div>
    </div>
    
@endsection
