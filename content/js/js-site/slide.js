window.addEventListener("load", function() {{
    // SLIDE SHOW
    const slider = document.querySelector('.slider');
    const sliderMain = document.querySelector('.slider-main');
    const sliderItems = document.querySelectorAll('.slider-item');
    const dotItems = document.querySelectorAll('.slider-dot-item');
    const next = document.querySelector('.slider-next');
    const prev = document.querySelector('.slider-prev');
    const sliderItemWidth = sliderItems[0].offsetWidth;
    const slidesLength = sliderItems.length;
    let positionX = 0;
    let index = 0;

    next.addEventListener("click", function(){
        changeSlide(1);
    });

    prev.addEventListener("click", function(){
        changeSlide(-1);
    });

    function changeSlide(direction) {
        if(direction == 1) {
            if(index >= slidesLength - 1) {
                index = slidesLength - 1;
                return;
            }
            positionX = positionX - sliderItemWidth;
            sliderMain.style = `transform: translateX(${positionX}px)`;
            index++;
        }else if(direction == -1) {
            if(index <= 0) {
                index = 0;
                return;
            };
            positionX = positionX + sliderItemWidth;
            sliderMain.style = `transform: translateX(${positionX}px)`;
            index--;
        }
    }
}})