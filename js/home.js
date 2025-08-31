const btnMenuToggle = document.getElementById("menu-toggle");
const divListOptionsMenu = document.getElementById("list-options-menu");

btnMenuToggle.addEventListener("click", ()=>{
    divListOptionsMenu.classList.toggle("active")
});