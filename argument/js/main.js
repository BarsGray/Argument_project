// ======================= swiper_bunner ==========================
const bunner_swiper = new Swiper('.bunner_swiper', {
  loop: true,
  centeredSlides: false,
  slidesPerView: 1,
  slidesPerGroup: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".bunner_btn_next",
    prevEl: ".bunner_btn_prev"
  },
  pagination: {
    el: ".bunner_pagination",
    clickable: true,
  }
});
// ======================= tubs =======================
const tubs_row = document.querySelector('.services_tubs_row');

if (tubs_row) {
  const activeTab = tubs_row.querySelector('.active');

  tubs_row.addEventListener('wheel', (e) => {
    e.preventDefault();
    const direction = e.deltaY > 0 ? 1 : -1;
    const scrollStep = 200;

    tubs_row.scrollBy({ left: direction * scrollStep, behavior: 'smooth' });
  }, { passive: false });
}
// ======================= marquee ==========================
const marquee = document.querySelector('.labels_marquee');
const track = document.querySelector('.labels_track');
const original = document.querySelector('.labels_list');
const label_elem = document.querySelectorAll('.labels_list li');

if (marquee && label_elem ) {
  const count = Math.ceil(3000 / original.scrollWidth) + Math.floor(3000 / (label_elem[0].scrollWidth * label_elem.length));
  
  for (let i = 0; i < count; i++) {
    const clone = original.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.appendChild(clone);
  }
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
// ======================= footer_menu ==========================
const accordionList = document.querySelectorAll('.accordion');
accordionList.forEach((acc) => {
  acc.addEventListener('click', (e) => {
    const accItem = e.target.closest('.accordion_item');
    if(accItem) {
      // const accItemTitle = accItem.querySelector('.accordion_item_title');
      const accItemText  = accItem.querySelector('.accordion_item_text');

      accItem.classList.add('active');
      accItemText.style.maxHeight = accItemText.scrollHeight + 'px';
    }
  });
});
