const modal = document.querySelector('.modal');
// const btn = document.getElementById("btn");
const buttons = document.querySelectorAll("#btn");
buttons.forEach(button => {
    button.addEventListener('click', openModal);
});
const close = document.querySelector(".close");

// btn.addEventListener('click', openModal);
close.addEventListener('click', closeModal);

function openModal(e){
    e.preventDefault();
    modal.style.display = "flex";
}

function closeModal(){
    modal.style.display = "none";
}


