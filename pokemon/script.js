// JavaScript Document

function Alerta(){
		alert("funcão indisponivel no momento");
		
		}
function checkNumber(valor) {
  var regra = /^[0-9]+$/;
  if (valor.match(regra)) {
  
  }else{
   var mensagem = document.getElementById("mensagem");
		mensagem.innerHTML = "Valor entre 0 e 999";
  }
};

function selecione(selecao){
	if(selecao == "Selecione..."){
		var mensagem = document.getElementById("mensagem");
		mensagem.innerHTML = "Selecione um tipo";
		}
	}    		