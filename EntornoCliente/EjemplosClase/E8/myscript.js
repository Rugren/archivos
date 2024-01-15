for(let i =0; i<10;i++){
    document.getElementById('btn'+i).addEventListener('click', aparecer)
  }

  function aparecer(evt){
    document.getElementById('resultado').innerHTML = document.getElementById('resultado').innerHTML+ evt.target.value;
  }