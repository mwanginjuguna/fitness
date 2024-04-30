import { register } from 'swiper/element/bundle';
import Swiper from "swiper";
import 'swiper/swiper-bundle.css';
register();

const swiper = new Swiper('.mySwiper', {
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
    },
    autoHeight: true,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-next-btn",
        prevEl: ".swiper-prev-btn"
    }
});
