// const typedTextSpan = document.querySelector(".typed-text");
const typedtext = document.getElementById("typed-text");
const text="Wheels and Deals !!";
const typingDelay = 200;
const erasingDelay = 100;
let charCount = 0;

function type(){
    if(charCount < text.length){
        typedtext.innerHTML += text.charAt(charCount); 
        charCount++;
        setTimeout(type, typingDelay)
    }
    else{
        setTimeout(erase, erasingDelay);
    }
}

function erase(){
    if(charCount > 0){
        typedtext.textContent = text.substring(0,charCount-1);
        charCount--;
        setTimeout(erase,erasingDelay);
    }
    else{
        charcount=0;
        setTimeout(type, typingDelay+1100);
    }
}
type();