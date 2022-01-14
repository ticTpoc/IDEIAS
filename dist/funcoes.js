function mostrarImagem() {
    var imgatual = document.getElementById('imgatual');
    if (imgatual == null) {
    }
    else {
        imgatual.remove();
    }
    var imagem = document.getElementById('perfil').value;
    var mostrador = document.getElementById('mostrador');
    var cortado = imagem.slice(12);
    var novaImagem = document.createElement("img");
    novaImagem.setAttribute('src', '../img/' + cortado);
    novaImagem.setAttribute('height', '100px');
    novaImagem.setAttribute('width', '100px');
    novaImagem.setAttribute('id', 'imgatual');
    mostrador.appendChild(novaImagem);
    console.log(cortado);
}
