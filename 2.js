function username(un){
  let condition = /[a-z]/g;
  if(un.length >= 5 && un.match(condition).length == un.length){
    return true;
  }else{
    return false;
  }
}

function password(pw){
  let condition1 = /\d{2}/g;
  let condition2 = /\@|\&/g;
  let condition3 = /[A-Z]{4}/g;

  if( pw.length == 7 &&
      condition1.test(pw) &&
      condition2.test(pw) &&
      condition3.test(pw)
    ){
    return true;
  }else{
    return false;
  }
}
