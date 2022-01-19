const pictures = [
  "pic-1",
  "pic-2",
  "pic-3",
  "pic-4",
  "pic-5",
];

const buttons = document.querySelectorAll('.btn')
const imageDIV = document.querySelector('.img-container')
let counter = 0

buttons.forEach(function(button) {
    button.addEventListener('click', function (e) {
        if (button.classList.contains('btn-left')) {
            counter--
            if (counter < 0) {
                counter = pictures.length - 1
            }
            imageDIV.style.backgroundImage = `url('./img/${pictures[counter]}.jpeg')`
        }
        if (button.classList.contains('btn-right')) {
            counter++
            if (counter > pictures.length - 1) {
                counter = 0
            }
            imageDIV.style.backgroundImage = `url('./img/${pictures[counter]}.jpeg')`
        }
    })
})