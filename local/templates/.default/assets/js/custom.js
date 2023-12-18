const activeMenu = () => {
  const menuItem = document.querySelectorAll('.certificates-tabs__item');
  menuItem.forEach((item,i) => {
    if(i === 0){
      item.classList.add('certificates-tabs__item_active');
    }
    item.addEventListener('click', () => {
      menuItem.forEach((btn) => {
        btn.classList.remove('certificates-tabs__item_active');
      });
      item.classList.add('certificates-tabs__item_active');
    })
  })
};
activeMenu();


const activeMenuTabs = () => {
  const menuItem = document.querySelectorAll('.tabs__item');
  menuItem.forEach((item) => {
    item.addEventListener('click', () => {
      menuItem.forEach((btn) => {
        btn.classList.remove('tabs__item_active');
      });
      item.classList.add('tabs__item_active');
    })
  })
};
activeMenuTabs();