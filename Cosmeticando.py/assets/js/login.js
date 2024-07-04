function MostrarCampo(){
  document.getElementById('psw').type = 'text';
}

function EsconderCampo(){
  document.getElementById('psw').type = 'password';
}

function MostrarFormLogin(){
  var f = document.getElementById('formLogin');
  f.style.display='block';
  
}

function AreaSensivel(){
  var modal = document.getElementById('formLogin');
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
}

