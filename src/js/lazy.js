const images = document.querySelectorAll('img');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            if(!entry.target.classList.contains('header__logo__image')){
                entry.target.setAttribute('src', entry.target.dataset.src)
            }
            
        }

        if(entry.target.classList.contains('header__logo__image')){
            observer.unobserve(entry.target);
        }
    });
});

images.forEach(image => {
    observer.observe(image);
})