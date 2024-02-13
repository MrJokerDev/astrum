document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        arrows: false,
        focus: 'center',
    } );
    splide.mount();

    var reviewsSlider = new Splide( '.reviews-slider', {
        type: 'loop',
        focus: 'center',
        perPage: 3,
        gap: "130px",
        arrows: false,
        breakpoints: {
            600: {
                perPage: 1,
                focus  : 'center'
            },
        }
    } );
    reviewsSlider.mount();

    let faqHeaders = document.querySelectorAll('.faq__item-head');

    faqHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            
            if (this.classList.contains('active')) {
                // If active, collapse the content
                this.classList.remove('active');
                content.style.maxHeight = null;
                content.style.opacity = "0";
            } else {
                // If not active, expand the content
                this.classList.add('active');
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.opacity = "1";

                // Optional: Close other opened items
                faqHeaders.forEach(innerHeader => {
                    if (innerHeader !== header && innerHeader.classList.contains('active')) {
                        innerHeader.classList.remove('active');
                        innerHeader.nextElementSibling.style.maxHeight = null;
                        innerHeader.nextElementSibling.style.opacity = "0";
                    }
                });
            }
        });
    });



    const TELEGRAM_TOKEN = '6483637341:AAGMx_HeY8HBE40q0adcqnkrp3DTaU2G4KY';
    const CHAT_ID = '-1001916869674';
    const inputName = document.querySelector('.cta__right-input-name');
    const inputPhone = document.querySelector('.cta__right-input-phone');

    document.querySelector('.cta__right').addEventListener('submit', async (e) => {
        e.preventDefault();
        const nameValue = inputName.value;
        const phoneValue = inputPhone.value;
        const txt = `<b>Имя:</b> ${nameValue}%0A<b>Телефон номер:</b> ${phoneValue}`
        const response = await fetch(`https://api.telegram.org/bot${TELEGRAM_TOKEN}/sendMessage?chat_id=${CHAT_ID}&parse_mode=html&text=${txt}`, {
            method: "POST",
        });
        const data = await response.json();
        alert("Сообщение отправлено!");
        inputName.value = '';
        inputPhone.value = '';
    })
    
});