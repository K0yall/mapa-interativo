const temporario = ['Tranquila', 'Segura', 'Bom de papo', 'teste', 'teste2', 'Pelo menos 30'];

const gridCidades = document.querySelector('.cidades-grid');

if (gridCidades) {
    const cidades = Array.from(gridCidades.children);

    cidades.forEach(cidade => {
        // console.log(cidade)
        const divCaracteristicas = document.createElement("div");
        divCaracteristicas.className = 'caracteristicas';
        
        for (let i = 0; i < temporario.length; i++) {
            const novaCaracteristica = document.createElement("div");
            novaCaracteristica.className = 'caracteristica';
            novaCaracteristica.textContent = temporario[i];

            // document.getElementById('caracteristicas').appendChild(novaCaracteristica);
            divCaracteristicas.appendChild(novaCaracteristica);
        }

        cidade.insertBefore(divCaracteristicas, cidade.querySelector('.botao-expandir'));
    })
}

