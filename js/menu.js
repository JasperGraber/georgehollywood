function Menu() {
    let state = document.querySelector("#sub");
    if (state.innerHTML == "Close Menu") {
        document.querySelector("#menutekst").setAttribute("class", "fas fa-bars");
        document.querySelector("#sub").innerHTML = "Open Menu";
        document.getElementById("telmenu").style.display = "none";
    }
    else {
        document.querySelector("#menutekst").setAttribute("class", "fas fa-times");
        document.querySelector("#sub").innerHTML = "Close Menu";
        document.getElementById("telmenu").style.display = "block";
    }
}
