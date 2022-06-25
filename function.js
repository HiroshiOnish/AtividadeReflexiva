function validation_name (elemento) {
 		if (elemento.value.length > 0) {
 			document.getElementById("msg_erro").innerHTML = ""
 		}
 		else{
 			console.log("é maior que 0")
 			document.getElementById("msg_erro").innerHTML = "Preencha o Campo nome";
 		}
 	}

 	function validation_idade (elemento) {
 		if (elemento.value.length > 0) {
 			document.getElementById("msg_erro").innerHTML = ""
 		}
 		else{
 			console.log("é maior que 0")
 			document.getElementById("msg_erro").innerHTML = "Preencha o Campo Idade";
 		}
 	}
 	function validation_endereco (elemento) {
 		if (elemento.value.length > 0) {
 			document.getElementById("msg_erro").innerHTML = ""
 		}
 		else{
 			console.log("é maior que 0")
 			document.getElementById("msg_erro").innerHTML = "Preencha o Campo Endereço";
 		}
 	}

 	function validation_telefone (elemento) {
 		if (elemento.value.length > 0) {
 			document.getElementById("msg_erro").innerHTML = ""
 		}
 		else{
 			console.log("é maior que 0")
 			document.getElementById("msg_erro").innerHTML = "Preencha o Campo Telefone";
 		}
 	}

 	
 	var line = 1;
 	function addInput(divName) {
  var newdiv = document.createElement('div');
  newdiv.innerHTML  = '['+line +']';
  newdiv.innerHTML += '<input type="text" name="text'+line +'_1" id="text'+line +'_1">';
  newdiv.innerHTML += '<input type="text" name="text'+line +'_2" id="text'+line +'_2">';
  document.getElementById(divName).appendChild(newdiv);
  line++;
}

addInput('lines');