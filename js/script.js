import initWarnEvent from './libs/modules/warn-event.js';
import initWritingText from './libs/modules/writing-text.js';
import initScreenAnimation from './libs/modules/screen-animation.js';
import initScrollSuave from './libs/modules/scroll-suave.js';

import {
  ScrollAnima,
  ScrollAnima2,
  scrollAnima3,
  scrollAnima4
} from './libs/modules/scroll-animation.js';

import initWhatsShrink from './libs/modules/whatsapp-shrink.js';
import initMenuMobile from './libs/modules/menu-mobile.js';
import initForms from './libs/modules/forms.js';
import SlideNav from './libs/modules/slide.js';
import initFade from './libs/modules/fades.js';
import initConfigForm from './libs/modules/configForm.js';

const scrollAnima = new ScrollAnima('[data-anime="scroll"]', 'show-button', 5.17)
scrollAnima.init();
const scrollAnima2 = new ScrollAnima2('[data-anime="scrollP"]', 'show-button', 4.8)
scrollAnima2.init();

const slide = new SlideNav('.slide', '.slide-wrapper');
if(slide) {
  slide.init();
  slide.addControl('.custom-controls');
}
// const scrollAnima3 = new ScrollAnima3('[data-anime="scrollPort"]', 'show-button', 1.8)
// scrollAnima3.init();
// const scrollAnima4 = new ScrollAnima4('[data-anime="scrollWpp"]', 'hide-whpp', 1.0)
// scrollAnima4.init();

initWarnEvent();
initWritingText();
initScreenAnimation();
initFade();
initConfigForm();
initScrollSuave();
initWhatsShrink();
initMenuMobile();
initForms();
scrollAnima3();
scrollAnima4();


// [data-anime="scroll"] classe da tag > show-button. inerheight = 6.0 do top
// [data-anime="scrollP"] classe da tag > show-button. inerheight = 4.8 do top
// [data-anime="scrollPort"] classe da tag > show-button. inerheight = 2.8 do top
// [data-anime="scrollWpp"] classe da tag > hide-whpp. innerheight = 1.1 do bottom


// initScrollAnimationPlanos,
// initScrollAnimationPortfolio,
// initScrollAnimationWppSumir,
