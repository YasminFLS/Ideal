var somatorio = 0;

function somatorio_quiz(valor){
  

   somatorio = somatorio + valor;

    

}
function abrir()
{
    window.open("Resultado.php?somatorio="+somatorio, "_self");
}