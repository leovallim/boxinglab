const images = document.querySelectorAll('img');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.setAttribute('src', entry.target.dataset.src)
        }
    });
});

images.forEach(image => {
    observer.observe(image);
})