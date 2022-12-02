const slider=document.querySelector("#slider")

let sliderSection=document.querySelectorAll(".slider-section")
let sliderSectionLast=sliderSection[sliderSection.length -1]

const btnRight=document.querySelector("#btn-r")
const btnLeft=document.querySelector("#btn-l")

slider.insertAdjacentElement("afterbegin", sliderSectionLast)

function right(){
    let sliderSectionFirst=document.querySelectorAll(".slider-section")[0]
    slider.style.marginLeft="-200%"
    slider.style.transition="all 0.5s"
    setTimeout(function(){
        slider.style.transition="none"
        slider.insertAdjacentElement("beforeend",sliderSectionFirst)
        slider.style.marginLeft="-100%"
    },500)
}

function left(){
    let sliderSection=document.querySelectorAll(".slider-section")
    let sliderSectionLast=sliderSection[sliderSection.length -1]
    slider.style.marginLeft="0%"
    slider.style.transition="all 0.5s"
    setTimeout(function(){
        slider.style.transition="none"
        slider.insertAdjacentElement("afterbegin", sliderSectionLast)
        slider.style.marginLeft="-100%"
    },500)
}

btnRight.addEventListener("click",function(){
    right()
})

btnLeft.addEventListener("click",function(){
    left()
})

setInterval(function(){
    right()
}, 5000)