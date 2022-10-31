function somatorio_quiz(valor){
    var somatorio = getCookie("somatorio");

    if (somatorio == ''){
        document.cookie = 'somatorio = valor'
    }else{
        somatorio = document.cookie
        alert(somatorio)
        somatorio += $valor
        document.cookie = `somatorio = ${somatorio}`
        
    }
    

}