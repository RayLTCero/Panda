
export function toggleClass(element, cssClass){
    if(element.classList.contains(cssClass)){
        element.classList.remove(cssClass);
    }else{
        element.classList.add(cssClass);
    }
}

export function inputOnlyText(input){
    let expression = /^[a-zA-Z]*$/;
    let texto = input.value;
    let response = true;
    
    if(!expression.test(texto)){
        response = false;
    }
    return response;
}



export class Alien {

    
    constructor(paperFromDom, submitId, executorKeys) {
        this.submitId = Array();
        this.dropdown();
        this.fullScreen();
        this.commentBox();
        
    }

    /**Selecciono los elementos con atributo paper y agrego el evento click para que haga toggle sobre la clase visible */
    dropdown(){
        
        this.paperFromDom = Array.prototype.slice.call(document.querySelectorAll("[paper]"));
        for(let x in this.paperFromDom){
            let mouseIsOver = false;
            let isFocused = false;
            
            //solo agrego el evento click si el atributo paper es dropdown
            if(this.paperFromDom[x].getAttribute('paper') === 'dropdown') {

                this.paperFromDom[x].addEventListener('click', ()=>{
                    isFocused = (document.activeElement === this.paperFromDom[x]);
                    //target es dropdown-custom-menu
                    let target = document.querySelector(this.paperFromDom[x].getAttribute('data-target'));
                    toggleClass(target, 'visible');
                    toggleClass(this.paperFromDom[x],'active');
                    
                    target.addEventListener('mouseover',()=>{
                        mouseIsOver = true;
                    });

                    target.addEventListener('mouseout',()=>{
                        mouseIsOver = false;
                    });
                    
                    
                });
                
                
                this.paperFromDom[x].addEventListener('focusout', ()=>{
                    isFocused = (document.activeElement === this.paperFromDom[x]);
                    if(!mouseIsOver){
                        this.paperFromDom[x].classList.remove('active');
                        //seleccion todos los elementos que tengan clase visible, recorro y remuevo
                        let visible = Array.prototype.slice.call(document.querySelectorAll(".visible"));
                        for(let y in visible){
                            visible[y].classList.remove('visible');
                        }
                    }else if(mouseIsOver && !isFocused){
                        this.paperFromDom[x].focus();
                    }
                    
                });
            }
        }
    }//fin dropdown

    /**Selecciono los elementos con atributo paper y agrego el evento click para que haga toggle sobre la clase visible */
    fullScreen(){
        
        this.paperFromDom = Array.prototype.slice.call(document.querySelectorAll("[paper]"));
        for(let x in this.paperFromDom){
            let mouseIsOver = false;
            //solo agrego el evento click si el atributo paper es full-screen
            if(this.paperFromDom[x].getAttribute('paper') === 'full-screen') {

                this.paperFromDom[x].addEventListener('click', ()=>{

                    let visible = Array.prototype.slice.call(document.querySelectorAll(".visible"));
                    for(let y in visible){
                        visible[y].classList.remove('visible');
                    }
                    let active = Array.prototype.slice.call(document.querySelectorAll(".active"));
                    for(let z in active){
                        active[z].classList.remove('active');
                    }
                    //agrego clase active
                    this.paperFromDom[x].classList.add('active');
                    //target es full-screen
                    let target = document.querySelector(this.paperFromDom[x].getAttribute('data-target'));
                    target.classList.add('visible');
                    

                    

                });

                
            }
        }
    }//fin fulscreen

    /**Selecciono los elementos con atributo paper y agrego el evento click para que haga toggle sobre la clase visible */
    commentBox(){
        
        this.paperFromDom = Array.prototype.slice.call(document.querySelectorAll("[paper]"));
        for(let x in this.paperFromDom){
            
            //solo agrego el evento click si el atributo paper es full-screen
            if(this.paperFromDom[x].getAttribute('paper') === 'comment-box') {

                this.paperFromDom[x].addEventListener('click', ()=>{

                    // let visible = Array.prototype.slice.call(document.querySelectorAll(".visible"));
                    // for(let y in visible){
                    //     visible[y].classList.remove('visible');
                    // }
                    
                    
                    //target es comment-section
                    let target = document.querySelector(this.paperFromDom[x].getAttribute('data-target'));
                    target.classList.add('visible-comment');
                    

                    

                });

                
            }
        }
    }//fin comment-box

    
    
    addEventSubmit(eventType, array){
        for(let x in array){
            document.getElementById(array[x]).addEventListener(eventType, (e)=>{
                
                if(e.target.type == 'submit'){
                    let datos = new FormData(document.getElementById(array[x]));
                    this.run(array[x]);
                    

                }else{
                    return false;
                }
                e.preventDefault();
            });
        }
    }

    executor(obj){
        
        
        this.executorKeys = obj;

        
    }
    
    run(arg){
        
        for( let x in this.executorKeys){

            //console.log(arg + " = "+ x);
            if(arg == x ){
                //console.log('true');
                this.executorKeys[x]();
                break;  
            }else{
                console.log('false');
            }
            
        }
       
    }
}

