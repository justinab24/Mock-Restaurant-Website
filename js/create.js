// Name: Justin Abraham
// Date: October 14, 2022
// Course: IT202 003
// Assignment: Semester Project Phase 2
function init() {
    document.getElementById("createDishForm").addEventListener("submit", formValidation);
}

window.addEventListener("load", init)

function formValidation(e) {
    const dcode = document.querySelector("#codeInput").value;
    const dname = document.querySelector("#nameInput").value;
    const dprice = document.querySelector("#priceInput").value;
    if (dcode == "") {
        e.preventDefault();
        alert('must enter a code')
    } else if (dname == "") {
        e.preventDefault();
        alert('must enter a name')
    } else if (dprice.toFixed(2) != dprice) {
        e.preventDefault()
        alert('must enter a valid number')
    }
}