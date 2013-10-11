// JavaScript Document

// LocalStorage
var email = document.getElementById("email");
var nome = document.getElementById("nome");
var cep = document.getElementById("cep");
var rua = document.getElementById("rua");
var num = document.getElementById("num");
var comp = document.getElementById("comp");
var bairro = document.getElementById("bairro");
var cidade = document.getElementById("cidade");
var uf = document.getElementById("uf");
if(localStorage.getItem("semail")) {
	email.value = localStorage.getItem("semail");
}
if(localStorage.getItem("snome")) {
	nome.value = localStorage.getItem("snome");
}
if(localStorage.getItem("scep")) {
	cep.value = localStorage.getItem("scep");
}
if(localStorage.getItem("srua")) {
	rua.value = localStorage.getItem("srua");
}
if(localStorage.getItem("snum")) {
	num.value = localStorage.getItem("snum");
}
if(localStorage.getItem("scomp")) {
	comp.value = localStorage.getItem("scomp");
}
if(localStorage.getItem("sbairro")) {
	bairro.value = localStorage.getItem("sbairro");
}
if(localStorage.getItem("scidade")) {
	cidade.value = localStorage.getItem("scidade");
}
if(localStorage.getItem("suf")) {
	uf.value = localStorage.getItem("suf");
}
setInterval(function(){
	localStorage.setItem("semail", email.value);
	localStorage.setItem("snome", nome.value);
	localStorage.setItem("scep", cep.value);
	localStorage.setItem("srua", rua.value);
	localStorage.setItem("snum", num.value);
	localStorage.setItem("scomp", comp.value);
	localStorage.setItem("sbairro", bairro.value);
	localStorage.setItem("scidade", cidade.value);
	localStorage.setItem("suf", uf.value);
}, 1000);
