// rootからbottom:-200pxの位置で発火
const options = {
  root: null,
  rootMargin: "0px 0px -200px",
  threshold: 0
};

let items = ['.scroll-fadein', '.scroll-fadein-right', '.scroll-fadein-left',];

for( let i=0; i <= 10; i++) {
  items.push('.scroll-fadein-delay' + i);
};
const item = items.join();

const scrollFadeins = document.querySelectorAll(item);

scrollFadeins.forEach((target) => this.onIntersect(target, options));

function onIntersect(target, options) {
  const observer = new IntersectionObserver(this.addShowClass, options);
  // 監視したい要素をobserveする。
  observer.observe(target);
}
function addShowClass(entries) {
  for(const e of entries) {
    if (e.isIntersecting) {
      e.target.classList.add("show");

    }
  }
}
