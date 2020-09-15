const triggers = Array.from(document.querySelectorAll('[data-toggle="collapse"]'));
const btn = document.querySelector('.btn-collapse');
const activeClass = "disable-on";

window.addEventListener('click', (ev) => {
  const elm = ev.target;
  const element = event.target.closest(".btn-collapse");
  if (triggers.includes(elm)) {
    const selector = elm.getAttribute('data-target');
    collapse(selector, 'toggle');
  }
  if (!element) return;
    const activeElement = element.parentElement.querySelector(".disable-on");
    activeElement && activeElement.classList.remove(activeClass);
    (element === activeElement) || element.classList.add(activeClass);
}, false);

const fnmap = {
  'toggle': 'toggle',
  'show': 'add',
  'hide': 'remove'
};
const collapse = (selector, cmd) => {
  const targets = Array.from(document.querySelectorAll(selector));
  targets.forEach(target => {
    target.classList[fnmap[cmd]]('show');
  });
}
