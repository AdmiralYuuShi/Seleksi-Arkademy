function biodata(get_name, get_age){
  let data = {
      name : get_name,
      age : get_age,
      address : "Komp. Mekarsari Endah RT 01 RW 24 Baleendah Kab. Bandung",
      hobbies : ['Reading Novel and Manga','Watching Anime','Riding Bicycle'],
      is_married : false,
      list_school : {
        "name" : "SMKN 7 Baleendah",
        "year_in" : 2016,
        "year_out" : 2019
      },
      skill : {
        "php_native" : "advance",
        "codeigniter" : "advance",
        "bootstrap" : "advance",
        "javascript" : "beginner",
        "japanese_language" : "advance"
      },
      interest_in_coding : true
  }
  return JSON.stringify(data);
}
