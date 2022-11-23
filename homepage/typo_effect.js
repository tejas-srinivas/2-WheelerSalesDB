var i=0,text;
text = "Wheels and Deals"

function typing() {
    if(i<text.length){
        document.getElementById("text").innerHTML += text.charAt(i);
        i++;
        setTimeout(text,100);
    }
}
typing();