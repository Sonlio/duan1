window.addEventListener("load", function() {
// TABS
    $('.tab-links li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    $('.tab-links li').click(function(){
        $('.tab-links li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    })

// PLUS AND MINUS QUANTITY
    $('input.ip-quantity').each(function() {
        var $this = $(this),
        qty = $this.parent().find('.is-form'),
        min = Number($this.attr('min')),
        max = Number($this.attr('max'))
        if (min == 0) {
        var d = 0
        } else d = min
        $(qty).on('click', function() {
        if ($(this).hasClass('btn-minus-quantity')) {
            if (d > min) d += -1
        } else if ($(this).hasClass('btn-plus-quantity')) {
            var x = Number($this.val()) + 1
            if (x <= max) d += 1
        }
        $this.attr('value', d).val(d)
        })
    })

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

    [...dotItems].forEach(item => item.addEventListener("click", function(e){
        [...dotItems].forEach(de => de.classList.remove("dot-selected"));
        e.target.classList.add("dot-selected");
        const slideIndex = parseInt(e.target.dataset.index);
        index = slideIndex;
        positionX = -1 * index * sliderItemWidth;
        sliderMain.style = `transform: translateX(${positionX}px)`;
    }))

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
        [...dotItems].forEach(de => de.classList.remove("dot-selected"));
        dotItems[index].classList.add("dot-selected");
    }
});

// ANIMATION
// window.addEventListener("load", function() {
//     const colProducts = document.querySelectorAll('#col-product');
//     window.addEventListener('scroll', () => {
//         if (window.scrollY > 50) {
//             [...colProducts].forEach(product => product.style ='transform: translateX(0);')
//         }else {
//             [...colProducts].forEach(product => product.style ='transform: translateX(-500%);')
//         }
//     });
// });