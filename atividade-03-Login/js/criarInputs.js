
function criaInputs(){

    debugger
    var qtd = <?php echo $_SESSION['qtdAlunos'] ?>;
    int j = 0, a = 1;
    let divNome = document.querySelector("#inputsNome");
    let divNotas = document.querySelector("#inputsNota");

    for(int i=0; i<qtd; i++){
           var labelNome = "<label for='Nome do Aluno'>Nome do Aluno</label>";
           document.getElementById('inputsNome').innerHTML = labelNome;
           var inputNome = document.createElement("input");
           inputNome.type = "text";
           inputNome.name = "nomeAluno"+ j;
           inputNome.class = "form-control";
           
           divNome.appendChild(inputNome);

           for(int x=0; x<3; x++){
               if(x==0){
                   var labelNota = "<label for='Primeira Nota'>Primeira Nota</label>";
                   document.getElementById('inputsNota').innerHTML = labelNota;
               }else if(x==1){
                   var labelNota = "<label for='Segunda Nota'>Segunda</label>";
                   document.getElementById('inputsNota').innerHTML = labelNota;
               }else{
                   var label = "<label for='Terceira Nota'>Terceira Nota</label>";
                   document.getElementById('inputsNota').innerHTML = labelNota;
               }
               var inputNota = document.createElement("input");
               inputNota.type = "text";
               inputNota.name = "nota"+ a;
               inputNota.class = "form-control";
               inputNota.onkeyup = "somenteNumeros(this);";
               
               divNotas.appendChild(inputNota);
               a++;
           }

           j++;
       }
    }  

}