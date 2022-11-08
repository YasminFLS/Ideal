var somatorio = 0;

function somatorio_quiz(valor){
  

   somatorio = somatorio + valor;
   alert(somatorio);
    

}
function abrir()
{
    window.open("Resultado.php?somatorio="+somatorio, "_self");
}