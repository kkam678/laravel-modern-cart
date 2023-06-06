import './bootstrap';

import Alpine from 'alpinejs';
import Swiper from "swiper";


window.Alpine = Alpine;

Alpine.start();


const swiper = new Swiper('.swiper', {
    // Swiper 옵션 설정
});
