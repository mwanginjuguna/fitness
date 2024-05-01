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

const benSwiper = new Swiper('.benefitSwiper', {
    direction:"vertical",
    autoplay: {
        delay: 12000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
    },
    slidesPerView: "auto",
    centeredSlides: true,
    autoHeight: true,
    spaceBetween: 30,
    navigation: {
        nextEl: ".benefit-swiper-next-btn",
        prevEl: ".benefit-swiper-prev-btn"
    }
});
