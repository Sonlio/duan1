let nav = document.querySelector(".nav-side-menu");
let link = document.querySelectorAll(".link");
link.forEach(function(a){
     a.addEventListener("click", function(){
          nav.querySelector(".active").classList.remove("active");
          a.classList.add("active");
     })
})