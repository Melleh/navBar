console.log('hallo!');
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    console.log('functie loopt')
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        console.log('click!!!');
        
    });
}

// navSlide();