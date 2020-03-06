import {inputOnlyText, inputEmail} from 'http://localhost/panda/js/core.js';



export function validateForm(ids, op = null){
    //let errores = Array();
    let small = document.getElementsByTagName('small');
    let errores = Array();
    let response = true;
    let contPassword = 0;
    let indexPassword = Array();
    let indexEmail;
    let indexText = Array();
    let minPassLength = 8;
    //validar que no esten vacios
    for(let x in ids) {
        if(document.getElementById(ids[x]).classList.contains('errorInput')){
            document.getElementById(ids[x]).classList.remove('errorInput');
        } 

        if(document.getElementById(ids[x]).value == '') {
            response = false;
            errores[x] = "Can't be Empty";
        }

        //contar password
        if(document.getElementById(ids[x]).type == "password"){
            
            contPassword+=1;
            indexPassword.push(x);
        }
        //guardar indice de tipo Email
        if(document.getElementById(ids[x]).type == "email"){
            indexEmail = x;
        }

        //inputs tipo text
        if(document.getElementById(ids[x]).type == "text"){
            indexText.push(x);
        }
    
    }

    
     //validar que las passwords coincidan
    if(contPassword === 2){
        //validar que las passwords coincidan
        if(document.getElementById(ids[indexPassword[0]]).value != document.getElementById(ids[indexPassword[1]]).value || document.getElementById(ids[indexPassword[0]]).value == '' || document.getElementById(ids[indexPassword[1]]).value == '') {
            errores[indexPassword[1]] = "Password does not match";
            //errores[indexPassword[0]] = "Password does not match";
            response = false;
            
        }
    }

    //validar longitud mayor a 8
    if(document.getElementById(ids[indexPassword[0]]).value.length < minPassLength){
        errores[indexPassword[0]] = "Introduce at least "+minPassLength+" characters";
        response = false;
    }

    //validar solo texto

    for (let i = 0; i< indexText.length; i++){
        if (!inputOnlyText(document.getElementById(ids[indexText[i]]))){
            errores[indexText[i]] = "Invalid type of characters";
            response = false;
        }

    }

    //validar email
    if(!inputEmail(document.getElementById(ids[indexEmail]))){
        errores[indexEmail] = "Does not look like a Email";
        response = false;
    }else if(op){
        
        errores[indexEmail] = "Email Already used by other user";
        response = false;
    }

    
    if(errores){
        
        for(let x in ids){
           
            if(small[x] && !errores[x]){
                small[x].textContent = "";
            }else if(errores[x] && !small[x]){
               let template = `<small style="color:#dd6363;">${errores[x]}</small>`;
                document.getElementById(ids[x]).classList.add('errorInput');
                document.getElementById(ids[x]).parentElement.insertAdjacentHTML('beforeend', template);
            }else if(errores[x] && small[x]){
                small[x].textContent = errores[x];
                document.getElementById(ids[x]).classList.add('errorInput');
            }
 
        }
    }
    
    return response;

}
