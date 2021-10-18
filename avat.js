let mobile,mobiles;



mobile = document.querySelector("#mobilex");
 mobiles = document.querySelector("#mobilex").value;

//fonksıyon calısıcak oraya bırşey yazacagı zaman

mobile.onkeypress = ıntfonk;
mobile.onkeydown= limit;






function ıntfonk(){
 var mobiles = document.querySelector("#mobilex").value;
 
 var patt1 = /[^a-zA-Z]/g;
  var result = mobiles.match(patt1);
   
    if(result === null){
      
    mobile.value = null;
        
       }else{

          
  $('#mobilex').inputmask("(599) 999-99-99");

     
    
       }
    
   
 
};


function limit(){
    mobiles = document.querySelector("#mobilex").value;
    var max_chars = 14;

    if(mobiles.length > max_chars) {
      var res =  mobiles.substr(0,max_chars);
        mobile.value = res;
    }else{}
   
   
};







