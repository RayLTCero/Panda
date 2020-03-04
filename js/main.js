import {toggleClass, Alien} from './core.js';
document.addEventListener('DOMContentLoaded', ()=>{
    var alien = new Alien();
    var submitIds = Array('formPostCreator');

    /**================
     * =Preview Img PC=
     * ================*/
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


    /**===============
     * =SUBMIT EVENTS=
     * ===============*/
     
     alien.executor({
         formPostCreator: function(){
             console.log('send');
         },
         formRegister: function(){
             console.log('me voy a registrar');
         }
     });
     alien.addEventSubmit('click', submitIds);
     
     
});