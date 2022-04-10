console.log("hi");

    
function login(){
   
     let user=  document.getElementById('username').value;
     let pw=document.getElementById('pw').value;
     if(user=='sevanth'&&pw=='semy'){
        document.getElementById('logged').innerHTML="logged in succesfully";
        alert("logged successfully");
     }
     else{
        document.getElementById('logged').innerHTML="invalid credentials";
        alert("invalid credentials");
     
     }
     
   
}