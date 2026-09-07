// ======================= marquee ==========================
  const marquee = document.querySelector('.labels_marquee');
  const track = document.querySelector('.labels_track');
  const original = document.querySelector('.labels_list');
  const label_elem = document.querySelectorAll('.labels_list li');

  const count = Math.ceil(3000 / original.scrollWidth) + Math.floor(3000 / (label_elem[0].scrollWidth * label_elem.length));

  for (let i = 0; i < count; i++) {
    const clone = original.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.appendChild(clone);
  }

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