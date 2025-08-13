
// Navegación entre slides
const slides = document.querySelectorAll('.slide-section');
const navs = document.querySelectorAll('.slide-btn');
navs.forEach((btn, idx) => {
    btn.onclick = () => {
        slides.forEach((s, i) => { s.classList.toggle('active', i===idx); });
        navs.forEach((b, i) => b.classList.toggle('active', i===idx));
    }
});
// Materias por año
const subjBtns = document.querySelectorAll('.button_subjects');
const subjLists = [
    document.getElementById('subjects_1'),
    document.getElementById('subjects_2'),
    document.getElementById('subjects_3')
];
subjBtns.forEach((btn, idx) => {
    btn.onclick = () => {
        subjLists.forEach((ul, i) => { ul.style.display = (i===idx)?'block':'none'; });
        subjBtns.forEach(b=>b.classList.remove('active'));
        btn.classList.add('active');
    }
});