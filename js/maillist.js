// Name: Justin Abraham
// Date: October 14, 2022
// Course: IT202 003
// Assignment: Semester Project Phase 2
function init() {
    document.getElementById("mailForm").addEventListener("submit", formValidation);
}

window.addEventListener("load", init)

function formValidation(e) {
    const fname = document.querySelector("#fname").value;
    const lname = document.querySelector("#lname").value;
    const uemail = document.querySelector("#uemail").value;
    if (fname == "") {
        e.preventDefault();
        alert('must enter a first name')
    } else if (lname == "") {
        e.preventDefault();
        alert('must enter a last name')
    } else if (uemail == "") {
        e.preventDefault()
        alert('must enter an email')
    }
}