function teste(){
    var contador = document.getElementById('contador').value;
    if(contador == '0'){
        document.getElementById('planta').src='2.jpg';
        document.getElementById('contador').value='1';
    }else if(contador == '1'){
       document.getElementById('planta').src='3.jpg';
       document.getElementById('contador').value='2';
    }else{
       document.getElementById('planta').src='4.jpg';
    }


    contador++;

}