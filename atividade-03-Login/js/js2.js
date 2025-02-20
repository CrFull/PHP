let tBody = document.querySelector('#tbodyItemPedido');

document.querySelector('form').addEventListener('submit', function (event) {

    event.preventDefault();
     
    let campos = obterDadosDoFormulario();

    let tr = document.createElement('tr');

 /*    campos.forEach(function(campo) {
       let td =  document.createElement('td');
       td.textContent = campo;
       tr.appendChild(td );
    });
 */
        campos.forEach(campo => {
                            let td =  document.createElement('td');
                            td.textContent = campo;
                            tr.appendChild(td );
                      });
    
    let subTotal = campos[1] * campos[2];
   
    let tdSubTotal = document.createElement('td');

    tdSubTotal.textContent = subTotal;
     tr.appendChild(tdSubTotal);

    tBody.appendChild(tr );

  });


  function obterDadosDoFormulario() {
      return [ document.querySelector('#nome').value,
               document.querySelector('#quantidade').value,
               document.querySelector('#valor').value ];

      
  }