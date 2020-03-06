import {toggleClass, Alien} from './core.js';
import { validateForm} from './validation.js';


document.addEventListener('DOMContentLoaded', ()=>{
    const url = "http://localhost/panda/";
    window.errores = Array();
    var alien = new Alien();
    var submitIds = Array('formPostCreator','formRegister','formSignIn');

    /**================
     * =Preview Img PC=
     * ================*/
    
    if(document.getElementById('picBtn') !== null){

        var picBtn = document.getElementById('picBtn');
        picBtn.addEventListener('click', (e)=>{
            e.preventDefault();
           let photoBtn = document.getElementById('photoBtn');
            photoBtn.click();
        });
        photoBtn.addEventListener("change", ()=>{
            console.log('cambio');
            let supportedImg = ["image/jpg", "image/jpeg", "image/png", "image/gif"];
            let invalidElemets = false;
            console.log(photoBtn.files.length);
            if(photoBtn.files.length > 1){
                invalidElemets = true;
                
                
            }else{
                if(supportedImg.indexOf(photoBtn.files[0].type) != -1){
                    let imgCodified = URL.createObjectURL(photoBtn.files[0]);
                    if(document.getElementById("postArea").parentElement.parentElement.childElementCount <= 2){
                        
                        
                        let template = `<img style="width:200px;" src="${imgCodified}" class="border rounded mx-auto d-block" alt="...">`;
                         document.getElementById("postArea").parentElement.insertAdjacentHTML("afterend", template);
    
                    }else{
                        document.getElementById("postArea").parentElement.parentElement.children[2].src = imgCodified;
                    }
                    
                }else {
                    invalidElemets = true;
                }
            }
            
            if(invalidElemets) alert('Invalid Elements')
        });
    }

    
    //console.log('mierda');
    /**===============
     * =SUBMIT EVENTS=
     * ===============*/
     var idsRegister = Array("inputName","inputSurname","inputBirthdate","inputEmail","inputPassword","inputPasswordC");
     var usedEmail = false;
     alien.executor({
         formPostCreator: function(){
            console.log('send');
         },
         formRegister: function(data){
        
            if(validateForm(idsRegister, usedEmail)){
                fetch(url+'user/save',{
                    body: data,
                    method: 'POST'
                }).then(response =>{
                   return response.text();
                }).then(data =>{
                    console.log(data);
                    data = JSON.parse(data);
                    if(data.url){
                        location.assign(data.url);
                    }
                });
                
            }
            
         },
         formSignIn: function(data){
             if(validateForm(["inputEmailL","inputPassword"])){
                 fetch(url+'user/login',{
                     body: data,
                     method: 'POST'
                 }).then(response => response.text()
                 ).then(data => {
                     data = JSON.parse(data);
                     if(data.url){
                         location.assign(data.url);
                     }else{
                         alertify.error(data.Error);
                     }
                     
                 });

             }
         }
     });
     
     alien.addEvent('submit', submitIds);
     if(document.getElementById("inputEmail")){
         let inputEmail = document.getElementById("inputEmail");
         var data;
             inputEmail.addEventListener('keyup',()=>{
                  data = new FormData(); 
                  data.append("email", inputEmail.value);
                fetch(url+'user/verify_email',{
                    body: data,
                    method: 'POST'
                }).then(response => response.text()
                ).then(data => {
                    if(data){
                        usedEmail = data;
                        inputEmail.classList.add('errorInput');
                        window.errores = "Email Already used by other user";
                    }else{
                        usedEmail = false;
                    }
                }).catch((error)=>{
                    console.log(error);
                });
            });

     }
     

     
    
});