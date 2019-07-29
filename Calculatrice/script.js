document.getElementById("form").addEventListener("submit",(e) => {
    e.preventDefault()
})


let btnClear = document.getElementById('clear');
btnClear.addEventListener('click', function () {
    document.getElementById("input1").value = "";
    document.getElementById("input2").value = "";
});