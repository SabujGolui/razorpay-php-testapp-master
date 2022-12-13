
window.addEventListener("load", function(){
    this.setTimeout(
        function open (event){
            document.querySelector(".container-popup").style.display = "block";
        },
        1000
    )
})


document.querySelector("#close").addEventListener("click", function() {
    document.querySelector(".container-popup").style.display = "none";
});




window.addEventListener("load", function(){
    this.setTimeout(
        function open (event){
            document.querySelector(".popup").style.display = "block";
        },
        500
    )
})


document.querySelector("#close").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
});