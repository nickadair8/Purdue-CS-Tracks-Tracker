let softwareBtn = document.querySelector('.Software_button');
const btn = document.getElementsByTagName('button');
let selectorContainer = document.querySelector('.selector-container');
let closeBtn = document.querySelector('.close-btn');


for (i = 0; i < btn.length - 1; i++) {
    btn[i].addEventListener('click', function () {
        selectorContainer.style.display = 'block';
    })
}

closeBtn.addEventListener('click', function () {
    selectorContainer.style.display = 'none';
})
