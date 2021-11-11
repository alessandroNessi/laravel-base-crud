function displayForm(id) {
    document.getElementById("deletelayout"+id).classList.add("d-none");
    document.getElementById("deleteform"+id).classList.remove("d-none");
    document.getElementById("deleteform"+id).classList.add("d-flex");
}

function hideForm(id) {
    document.getElementById("deletelayout"+id).classList.remove("d-none");
    document.getElementById("deleteform"+id).classList.remove("d-flex");
    document.getElementById("deleteform"+id).classList.add("d-none");
}