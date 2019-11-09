
function printWords(words){
  upWord = words.toUpperCase();
  splitWord = upWord.split('');
  vocal = ['A','I','U','E','O'];
  
  for(i = 0; i <= splitWord.length; i++){
    if(splitWord[i] == 'A'|splitWord[i] == 'I'|splitWord[i] == 'U'|splitWord[i] == 'E'|splitWord[i] == 'O'){
      console.log(splitWord[i]);
    }
  }
  for(i = 0; i <= splitWord.length; i++){
    if(splitWord[i] != 'A' && splitWord[i] != 'I' && splitWord[i] != 'U' && splitWord[i] != 'E' && splitWord[i] != 'O'){
      console.log(splitWord[i]);
    }
  }
}
