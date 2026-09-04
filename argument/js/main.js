// ======================= swiper_labels ==========================
const labels_swiper = new Swiper('.labels_swiper', {
  loop: true,
  slidesPerView: 'auto',
  slidesPerGroup: 1,
  spaceBetween: 30
});
// ======================= footer_menu ==========================
const footerMenuLinkList = document.querySelectorAll('.footer_mid nav>ul>li.menu-item-has-children a');

function resetSubMenu() {
  footerMenuLinkList.forEach((link) => {
    if (!link.nextElementSibling) return;
    link.classList.remove('active');
    link.nextElementSibling.classList.remove('active');
    link.nextElementSibling.removeAttribute('style');
  });
}

footerMenuLinkList.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    if (window.innerWidth > 1000) return;
    
    const subMenu = e.currentTarget.nextElementSibling;
    if (!subMenu) return;
    const isOpen = subMenu.classList.contains('active');
    
    resetSubMenu();
    
    if(!isOpen) {
      subMenu.classList.add('active');
      e.currentTarget.classList.add('active');
      subMenu.setAttribute('style', 'max-height:' + subMenu.scrollHeight + 'px;');
    }
  });
});