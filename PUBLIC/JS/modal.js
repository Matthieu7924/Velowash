let modal = document.querySelector('.modal-content');
let letterform = document.querySelector('.letterform');
let close = document.querySelector('.modal-close');

letterform.onclick = function () {
    modal.style.display = "block";
}
close.onclick = function () {
    modal.style.display = "none"
}
