document.querySelector('.fa-bars').addEventListener('click', function() {
        const menu = document.querySelector(this.dataset.target);
        const body = document.querySelector('body')
        menu.classList.toggle('active');
        body.classList.toggle('no-scroll');
    });