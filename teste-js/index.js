function teste(){
    var contador = document.getElementById('contador').value;
    if(contador == '0'){
        document.getElementById('planta').src='2.jpg';
        document.getElementById('contador').value='1';
        alert('Parabéns, sua planta está morrendoolllll corretamente!');
    }else if(contador == '1'){
       document.getElementById('planta').src='3.jpg';
       document.getElementById('contador').value='2';
       alert('Continue regando para ver mais progresso!');
    }else if(contador == '2'){
       document.getElementById('planta').src='4.jpg';
       document.getElementById('contador').value='3';
       document.getElementById('continuar').style='display: block;'
       alert('Eba! Sua planta chegou ao estágio final!');
    }else if(contador == '3'){
        alert('Ai você matou a planta afogadaaa...');
        document.getElementById('continuar').style='display: none;'
        document.getElementById('refresh').style='display: block;'
        document.getElementById('contador').value='4';
        document.getElementById('planta').src='5.jpg';
    }else{
        alert('Reinicie o jogo!');
    }
}

function refresh(){
    window.location.reload();
}