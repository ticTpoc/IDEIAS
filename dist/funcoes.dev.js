"use strict";

function mostrarImagem() {
  var imgatual = document.getElementById('imgatual');

  if (imgatual == null) {} else {
    imgatual.remove();
  }

  var imagem = document.getElementById('perfil').value;
  var mostrador = document.getElementById('mostrador');
  var cortado = imagem.slice(12);
  var novaImagem = document.createElement("img");
  novaImagem.setAttribute('src', '../img/perfil/' + cortado);
  novaImagem.setAttribute('height', '100px');
  novaImagem.setAttribute('width', '100px');
  novaImagem.setAttribute('id', 'imgatual');
  mostrador.appendChild(novaImagem);
  console.log(cortado);
}

function testarEnvio() {
  var cb = document.querySelector('#TC');
  var formulario = document.querySelector('#formulario');
  var senha = document.querySelector('#senha').value;
  console.log(senha);
  var senha2 = document.querySelector('#senha2').value;
  console.log(senha2);

  if (cb.checked && senha === senha2 && senha !== "") {
    formulario.setAttribute('action', 'cadastro.php');
  }
}

function clique() {}

function testar() {}