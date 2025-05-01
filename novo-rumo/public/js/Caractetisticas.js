const temporario = ['Tranquila', 'Segura', 'Bom de papo', 'teste', 'teste2'];

for(let i = 0; i < temporario.length; i++) {
    const novaDiv = document.createElement("div");
    novaDiv.className = 'caracteristica';
    novaDiv.textContent = temporario[i];

    document.getElementById('caracteristicas').appendChild(novaDiv);
}