window.addEventListener("load", function() {
    // ẨN HIỆN BACKGROUND MENU
    const headerMenu = document.querySelector('.header-menu');

    window.addEventListener('scroll', () => {
        if (window.scrollY >= 30) {
            headerMenu.style = 'position: fixed; background-color: rgb(0, 0, 0);'
        } else {
            headerMenu.style = 'background-color: transparent;'
        }
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

    // ẨN HIỆN FORM LOGIN
    const iconShowLogins = document.querySelectorAll('.icon-show-login')
    const wrapperLogin = document.querySelector('.wrapper-login')
    const mainLogin = document.querySelector('.main-login')
    const iconCloseLogin = document.querySelector('.icon-close-form-login')

    // Hiển thị form login (thêm class open vào wrapper-login)
    function showFormLogin() {
            wrapperLogin.classList.add('open')
    }

    // Nhận sự kiện click của nút icon user
    for(const iconShowLogin of iconShowLogins) {
        iconShowLogin.addEventListener("click", showFormLogin)
    }
    
    // Ẩn form login (gở bỏ class open trong wrapper-login)
    function hideFormLogin() {
            wrapperLogin.classList.remove('open')
    }
    // Nghe hành vi click vào button close
    iconCloseLogin.addEventListener('click', hideFormLogin)

    // Nghe hành vi click bên ngoài (Xóa open trong wrapper-login)
    wrapperLogin.addEventListener('click', hideFormLogin)

    // Không xóa class open khi click vào mainLogin
    mainLogin.addEventListener('click', function (event) {
            event.stopPropagation()
    })

    // ACTIVE LINKS
    const currentLocation = location.href;
    const links = document.querySelectorAll('.link');
    const amountLinks = links.length;
    for (let i = 0; i < amountLinks; i++) {
        if(links[i].href === currentLocation) {
            links[i].className = "active";
        }
    }
});