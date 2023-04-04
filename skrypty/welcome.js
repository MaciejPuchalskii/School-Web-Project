let intro = document.querySelector('.intro');
let welcome = document.querySelector('.przywitanie');
let logoSpan = document.querySelectorAll('.welcome');

window.addEventListener('DOMContentLoaded', ()=> {

    setTimeout(() => {
        
        logoSpan.forEach((span, idx) => {
            setTimeout(() => {
                span.classList.add('active');
            }, (idx + 1) * 100)
        });

        setTimeout(()=>{
            logoSpan.forEach((span, idx) => {

                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50)
            });
        },1000);
        
    }, 1300);

    setTimeout(() => {
        intro.style.top = '-100vh';
    }, 3000);
});