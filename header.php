<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
   <title>Главная</title>
   <meta charset="<?php bloginfo('charset');?>">
   <meta name="format-detection" content="telephone=no">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico">
   <?php wp_head();?>
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="header__top top-header">
            <div class="top-header__container">
               <nav class="top-header__menu menu-top-header">
                  <ul class="menu-top-header__list" data-da=".menu__body, 991.98">
                     <li class="menu-top-header__item menu-top-header__item_catalog">
                        <a class="menu-top-header__link menu-top-header__link_catalog _icon-arrow-right" href="">Каталог
                           товаров</a>
                     </li>
                     <li class="menu-top-header__item"><a href="" class="menu-top-header__link">О нас</a></li>
                     <li class="menu-top-header__item"><a href="" class="menu-top-header__link">Оплата и доставка</a>
                     </li>
                     <li class="menu-top-header__item"><a href="" class="menu-top-header__link">Новости</a></li>
                     <li class="menu-top-header__item"><a href="" class="menu-top-header__link">Контакты</a></li>
                  </ul>
               </nav>
               <a class="top-header__user _icon-user" href=""><span>Личный кабинет</span></a>
               <nav hidden class="menu">
                  <button class="menu__icon icon-menu" type="button"><span></span></button>
                  <div class="menu__body">
                  </div>
               </nav>
            </div>
         </div>
         <div class="header__body body-header">
            <div class="body-header__container">
               <a class="body-header__logo" href="">
                  <img src="<?php bloginfo('template_url');?>/assets/img/logo.svg" alt="Лого SanMart">
               </a>
               <div class="body-header__search" data-da=".catalog-header__container, 479.98">
                  <form action="#" class="search-header">
                     <button class="search-header__button _icon-search" type="submit"></button>
                     <input class="search-header__input" autocomplete="off" type="text" name="form[]"
                        data-error="Ошибка" placeholder="Поиск">
                  </form>
               </div>
               <div class="body-header__actions actions-header">
                  <div class="actions-header__shedule _icon-footer-clock">
                     <div class="actions-header__clock">Пн-Пт<span>10.00 - 20.00</span></div>
                  </div>
                  <a class="actions-header__location _icon-location" href="">Красногорск</a>
                  <div class="actions-header__phones" data-da=".top-header__container, 991.98, first">
                     <a class="actions-header__phone" href="tel:84952155319"><span>8-495-215-53-19</span></a>
                     <button class="actions-header__button" type="button" data-popup="#callback">Заказать
                        звонок</button>
                  </div>
                  <a class="actions-header__favorite _icon-favorite" href=""
                     data-da=".top-header__container, 991.98, 1"></a>
                  <a class="actions-header__cart cart-header" href="" data-da=".top-header__container, 991.98, 2">
                     <div class="cart-header__icon _icon-cart"><span>0</span></div>
                     <div class="cart-header__body">
                        <div class="cart-header__summ">0 р.</div>
                        <div class="cart-header__link">Оформить заказ</div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="header__catalog catalog-header">
            <div class="catalog-header__container">
               <nav class="catalog-header__menu menu-catalog">
                  <button class="menu-catalog__back _icon-arrow-back" type="button">Назад</button>
                  <ul class="menu-catalog__list">
                     <li class="menu-catalog__item"><a href="" class="menu-catalog__link">Весь каталог</a></li>
                     <li class="menu-catalog__item"><button data-parent="1"
                           class="menu-catalog__link">Керамогранит</button>
                     </li>
                     <li class="menu-catalog__item"><button data-parent="2" class="menu-catalog__link">Керамическая
                           плитка</button></li>
                     <li class="menu-catalog__item"><a href="" class="menu-catalog__link">Крупный формат</a></li>
                     <li class="menu-catalog__item"><a href="" class="menu-catalog__link">Декор</a></li>
                     <li class="menu-catalog__item"><a href="" class="menu-catalog__link">Мозаика</a></li>
                  </ul>
                  <div class="menu-catalog__sub-menu sub-menu-catalog">
                     <button class="sub-menu-catalog__back _icon-arrow-back" type="button">Назад</button>
                     <div class="sub-menu-catalog__container">
                        <div class="sub-menu-catalog__block" hidden data-submenu="1">
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Производитель</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/de.svg"
                                          alt="Флаг">Германия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/in.svg"
                                          alt="Флаг">Индия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/es.svg"
                                          alt="Флаг">Испания</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/it.svg"
                                          alt="Флаг">Италия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/cn.svg"
                                          alt="Флаг">Китай</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/pt.svg"
                                          alt="Флаг">Португалия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/ru.svg"
                                          alt="Флаг">Россия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/tr.svg"
                                          alt="Флаг">Турция</a></li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Тип помещения</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Гостиная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Кухня</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Ванна</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Баня</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Бассейн</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Тип поверхности</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Натуральная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Матовая</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Глянцевая</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Лаппатированная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Противоскользящая</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Полированная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Сатинированная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Патинированная</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Дизайн</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Мрамор</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Камень</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Оникс</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Травертин</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Металл</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Бетон</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Моноколор</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Геометрия</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Дерево</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Популярные форматы</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">30x90</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">60x60</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">60x60</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">60x120</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="sub-menu-catalog__block" hidden data-submenu="2">
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Производитель</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/de.svg"
                                          alt="Флаг">Германия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/in.svg"
                                          alt="Флаг">Индия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/es.svg"
                                          alt="Флаг">Испания</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/it.svg"
                                          alt="Флаг">Италия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/cn.svg"
                                          alt="Флаг">Китай</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/pt.svg"
                                          alt="Флаг">Португалия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/ru.svg"
                                          alt="Флаг">Россия</a></li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">
                                       <img class="flag-icon"
                                          src="<?php bloginfo('template_url');?>/assets/img/flags/tr.svg"
                                          alt="Флаг">Турция</a></li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Тип помещения</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Гостиная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Кухня</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Ванна</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Баня</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Бассейн</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Тип поверхности</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Натуральная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Матовая</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Глянцевая</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Лаппатированная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Противоскользящая</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Полированная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Сатинированная</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Патинированная</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="sub-menu-catalog__column">
                              <div class="sub-menu-catalog__category">Дизайн</div>
                              <ul class="sub-menu-catalog__list">
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Мрамор</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Камень</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Оникс</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Травертин</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Металл</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Бетон</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Моноколор</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link"
                                       href="">Геометрия</a>
                                 </li>
                                 <li class="sub-menu-catalog__item"><a class="sub-menu-catalog__link" href="">Дерево</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>