document.addEventListener('DOMContentLoaded', () => {
  const openModalBtnElement = document.querySelector('#openModal');
  const modalElement = document.querySelector('.modal');

  if (!openModalBtnElement || !modalElement) {
    return;
  }

  openModalBtnElement.addEventListener('click', () => {
    modalElement.classList.add('open');
  });

  modalElement.addEventListener('click', () => {
    modalElement.classList.remove('open');
  });
});