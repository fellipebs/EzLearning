<?php

$termo = "+";
$termo2 = "soma =";
$termo3 = "window.alert(soma)";
//procura determinado termo no arquivo
if( strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo2) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo3) !== false) {
    echo "Parabéns Atividade Feita corretamente";
}else if(strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo) == false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo2) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo3) !== false){
    echo "Faltou a operação de soma";
}else if(strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo2) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo3) == false){
    echo "Faltou a imprimir a variável na tela";
}else if(strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo2) == false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo3) !== false){
    echo "Faltou guardar a soma na variavel";
}
else if(strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo) !== false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo2) == false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo3) == false){
    echo "Faltou guardar a soma na variavel e imprimir na tela";
}else if(strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo) == false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo2) == false and strpos(file_get_contents("../../../atividades/matematica/somar/juan_js.txt"),$termo3) !== false){
    echo "Faltou a operação de soma e guardar a soma na variavel";
}
else{
    echo "Refaça a atividade";
}
?>