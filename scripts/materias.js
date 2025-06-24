
function openModal(img) {
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = img.src;
    modal.classList.add('open');
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.remove('open');
}