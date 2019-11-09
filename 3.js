function thirdHighest(angka){
  if(Array.isArray(angka) == true){
    if(angka.length >= 3){
      angka.sort(function(a,b){return b-a});
      return console.log(angka[2]);
    }else{
      return console.log("Minimal array length is 3!");
    }
  }else{
    return console.log("Parameter should be an array!");
  }
  
}


