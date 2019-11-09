function createMatrix(jumlah){

  for(i = 1; i <= jumlah; i++ ){
    
      matrix = [Math.floor((Math.random() * 9) + 1),Math.floor((Math.random() * 9) + 1),Math.floor((Math.random() * 9) + 1)]; 
      console.log(matrix);
  }
}
