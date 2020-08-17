
let btn = document.querySelectorAll('.landing_ii__list-li');

function hiddenBlock() {
    let activeBlock = document.querySelectorAll('.is-active');

    activeBlock.forEach(el => {
        el.classList.remove('is-active')
    })
}

btn.forEach((el) => {

    el.addEventListener('click', (e) => {
        if (el.getElementsByClassName('is-active')[0] !== undefined) {
            el.getElementsByClassName('landing_ii__list-item')[0].classList.remove('is-active');
            hiddenBlock();
        } else {
            hiddenBlock()
            el.getElementsByClassName('landing_ii__list-item')[0].classList.add('is-active');
        }
    })
})
