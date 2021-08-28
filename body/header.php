<?php  
    if (isLogged() == 1) { ?>	

            <header class="l-header " data-l-header role="banner">
                
                <a class="u-is-hidden-visually" href="#main">
                    Skip to content
                </a>

                <button aria-controls="navigation" aria-expanded="false" aria-label="Menu" class="c-toggle u-from-desktop-is-hidden" data-c-toggle data-ca-category="mobile-sidenav" data-ca-open-action="show" data-ca-close-action="hide">
                    <span class="icon icon--hamburger">
                    <span class="icon__inner"></span>
                    </span>
                </button>

                <a class="logo-android" href="index.html">
                    <img alt="TogetTech Logo" src="vues/static/2016/img/logo-togettech_1x.png" srcset="vues/static/2016/img/logo-togettech_1x.png, vues/static/2016/img/logo-togettech_1x.png 2x">
                </a>

                <nav class="c-nav c-nav--main" id="navigation" role="navigation" data-c-toggle-close="navigation" data-close-on-current-target>
                    <div class="c-nav__inner">
                        <div class="c-nav__header u-from-desktop-is-hidden">
                            <a class="logo-android" href="/">
                                <img alt="White Android Logo" src="vues/static/2016/img/logo-android-white_1x.png" srcset="/static/2016/img/logo-android-white_1x.png, /static/2016/img/logo-android-white_2x.png 2x">
                            </a>
                        </div>

                        <form action="https://www.android.com/results/" class="c-search" data-c-search id="search" method="get">
                            <label for="q">Recherche</label>
                            <input autocomplete="off" id="q" name="q" placeholder="Recherche" type="text" value="">
                            <button class="btn btn--search" type="submit">
                                <svg aria-hidden="false" aria-label="Search" class="icon icon--svg icon--ui icon--search" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                </svg>
                            </button>

                            <button class="btn btn--close u-upto-desktop-is-hidden" data-c-toggle-close="search" type="button">
                                <svg aria-hidden="false" aria-label="Close" class="icon icon--svg icon--ui icon--close" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                                </svg>
                            </button>
                            
                        </form>      
                    
                        <ul role="menubar">
                            <li class="c-nav__dropdown c-nav__dropdown--extended  has-divider" aria-haspopup="true" data-c-nav-dropdown role="menuitem" tabindex="0" data-ca-category="main-navigation" data-ca-action="expanded" data-ca-label="why android">
                                Nouveautés
                                <span class="icon icon--caret"></span>
                                <ul aria-hidden="true" role="menu">
                                    <li>
                                        <a href="versions/pie-9-0/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="pie">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Pie" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/pie_1x.png" srcset="/img/icons/why-android/pie_2x.png 2x" height="100" width="100">
                                            </span>9 Pie
                                        </a>
                                    </li>

                                    <li>
                                        <a href="play/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="play">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Play" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/play_1x.png" srcset="/img/icons/why-android/play_2x.png 2x" height="100" width="100">
                                            </span>Play
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://pay.google.com/about/?utm_source=googlepay&amp;utm_medium=web&amp;utm_campaign=android-homepage" target="_blank" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="pay">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Pay" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/pay_1x.png" srcset="/img/icons/why-android/pay_2x.png 2x" height="100" width="100">
                                            </span>Pay
                                        </a>
                                    </li>

                                    <li>
                                        <a href="security-center/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="security">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Security" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/security_1x.png" srcset="/img/icons/why-android/security_2x.png 2x" height="100" width="100">
                                            </span>Security
                                        </a>
                                    </li>

                                    <li>
                                        <a href="switch/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="switch">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Switch" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/switch_1x.png" srcset="/img/icons/why-android/switch_2x.png 2x" height="100" width="100">
                                            </span>Switch
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="applications" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="applications">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Phones" class="icon icon--svg icon--phone" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm-2 20h-4v-1h4v1zm3.25-3H6.75V4h10.5v14z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </span>Applications
                                </a>
                            </li>

                            <li>
                                <a href="services" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="services">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Tablets" class="icon icon--svg icon--tablet" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M19.25,19H4.75V3H19.25M14,22H10V21H14M18,0H6A3,3 0 0,0 3,3V21A3,3 0 0,0 6,24H18A3,3 0 0,0 21,21V3A3,3 0 0,0 18,0Z" />
                                        </svg>
                                    </span>Services
                                </a>
                            </li>

                            <li>
                                <a href="techlab" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="techlab">
                                    <span class="c-nav__icon u-from-desktop-is-hidden"> 
                                        <svg aria-hidden="false" aria-label="TV" class="icon icon--svg icon--tv" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/>
                                        </svg>
                                    </span>TechLab
                                </a>
                            </li>

                            <li>
                                <a href="formations" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="formations">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Auto" class="icon icon--svg icon--auto" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.92 5.01C18.72 4.42 18.16 4 17.5 4h-11c-.66 0-1.21.42-1.42 1.01L3 11v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 15c-.83 0-1.5-.67-1.5-1.5S5.67 12 6.5 12s1.5.67 1.5 1.5S7.33 15 6.5 15zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 10l1.5-4.5h11L19 10H5z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </span>Formations
                                </a>
                            </li>
                            <li>
                                <a href="connexion" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="connexion">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Phones" class="icon icon--svg icon--phone" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm-2 20h-4v-1h4v1zm3.25-3H6.75V4h10.5v14z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </span>Déconnexion
                                </a>
                            </li>
                        </ul>


                        <button aria-controls="search" aria-expanded="false" aria-label="Search" class="btn btn--search u-upto-desktop-is-hidden" data-c-id="c-toggle-search" data-c-toggle data-is-child-component type="button" data-g-event="search" data-g-action="expanded">
                            <svg aria-hidden="false" aria-label="Search" class="icon icon--svg icon--ui icon--search" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </button>

                        <label class="c-language-selector u-from-desktop-is-hidden" data-c-language-selector>
                            <div class="c-select">
                                <select data-c-analytics-dropdown data-ca-category="language-selector" data-ca-action="changed-language">
                                    <option value="/intl/en_ca/" data-ca-label="en_us:en_ca">English</option>
                                    <option value="/intl/fr_ca/" data-ca-label="en_us:fr_ca">Français</option>
                                </select>
                            </div>
                        </label>    
                    </div>
                </nav>

            </header> 

        <?php }else{ ?>


            <!-- Header sans connexion utilisateurs -->

            <header class="l-header " data-l-header role="banner">
                
                <a class="u-is-hidden-visually" href="#main">
                    Skip to content
                </a>

                <button aria-controls="navigation" aria-expanded="false" aria-label="Menu" class="c-toggle u-from-desktop-is-hidden" data-c-toggle data-ca-category="mobile-sidenav" data-ca-open-action="show" data-ca-close-action="hide">
                    <span class="icon icon--hamburger">
                    <span class="icon__inner"></span>
                    </span>
                </button>

                <a class="logo-android" href="index.php">
                    <img alt="TogetTech Logo" src="vues/static/2016/img/logo-togettech_1x.png" srcset="vues/static/2016/img/logo-togettech_1x.png, vues/static/2016/img/logo-togettech_1x.png 2x">
                </a>

                <nav class="c-nav c-nav--main" id="navigation" role="navigation" data-c-toggle-close="navigation" data-close-on-current-target>
                    <div class="c-nav__inner">
                        <div class="c-nav__header u-from-desktop-is-hidden">
                            <a class="logo-android" href="/">
                                <img alt="White Android Logo" src="vues/static/2016/img/logo-android-white_1x.png" srcset="/static/2016/img/logo-android-white_1x.png, /static/2016/img/logo-android-white_2x.png 2x">
                            </a>
                        </div>

                        <form action="result" class="c-search" data-c-search id="search" method="get">
                            <label for="q">Recherche</label>
                            <input autocomplete="off" id="q" name="q" placeholder="Recherche" type="text" value="">
                            <button class="btn btn--search" type="submit">
                                <svg aria-hidden="false" aria-label="Search" class="icon icon--svg icon--ui icon--search" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                </svg>
                            </button>

                            <button class="btn btn--close u-upto-desktop-is-hidden" data-c-toggle-close="search" type="button">
                                <svg aria-hidden="false" aria-label="Close" class="icon icon--svg icon--ui icon--close" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                                </svg>
                            </button>
                            
                        </form>      
                    
                        <ul role="menubar">
                            <li class="c-nav__dropdown c-nav__dropdown--extended  has-divider" aria-haspopup="true" data-c-nav-dropdown role="menuitem" tabindex="0" data-ca-category="main-navigation" data-ca-action="expanded" data-ca-label="why android">
                                Nouveautés
                                <span class="icon icon--caret"></span>
                                <ul aria-hidden="true" role="menu">
                                    <li>
                                        <a href="versions/pie-9-0/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="pie">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Pie" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/pie_1x.png" srcset="/img/icons/why-android/pie_2x.png 2x" height="100" width="100">
                                            </span>9 Pie
                                        </a>
                                    </li>

                                    <li>
                                        <a href="play/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="play">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Play" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/play_1x.png" srcset="/img/icons/why-android/play_2x.png 2x" height="100" width="100">
                                            </span>Play
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://pay.google.com/about/?utm_source=googlepay&amp;utm_medium=web&amp;utm_campaign=android-homepage" target="_blank" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="pay">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Pay" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/pay_1x.png" srcset="/img/icons/why-android/pay_2x.png 2x" height="100" width="100">
                                            </span>Pay
                                        </a>
                                    </li>

                                    <li>
                                        <a href="security-center/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="security">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Security" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/security_1x.png" srcset="/img/icons/why-android/security_2x.png 2x" height="100" width="100">
                                            </span>Security
                                        </a>
                                    </li>

                                    <li>
                                        <a href="switch/index.html" role="menuitem" tabindex="-1" data-g-event="main-navigation" data-g-action="clicked" data-g-label="switch">
                                            <span class="c-nav__icon u-upto-desktop-is-hidden">    
                                                <img alt="Switch" class="icon icon--why-android" src="vues/static/2016/img/icons/why-android/switch_1x.png" srcset="/img/icons/why-android/switch_2x.png 2x" height="100" width="100">
                                            </span>Switch
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="index.php?page=applications" class="<?php echo ($page=='applications') ? 'is-active' : '' ?>" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="applications">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Phones" class="icon icon--svg icon--phone" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm-2 20h-4v-1h4v1zm3.25-3H6.75V4h10.5v14z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </span>Applications
                                </a>
                            </li>

                            <li>
                                <a href="index.php?page=services" class="<?php echo ($page=='services') ? 'is-active' : '' ?>" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="services">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Tablets" class="icon icon--svg icon--tablet" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M19.25,19H4.75V3H19.25M14,22H10V21H14M18,0H6A3,3 0 0,0 3,3V21A3,3 0 0,0 6,24H18A3,3 0 0,0 21,21V3A3,3 0 0,0 18,0Z" />
                                        </svg>
                                    </span>Services
                                </a>
                            </li>

                            <li>
                                <a href="index.php?page=techlab" class="<?php echo ($page=='techlab' || $page=='tourdeos' || $page=='tourdemos') ? 'is-active' : '' ?>" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="techlab">
                                    <span class="c-nav__icon u-from-desktop-is-hidden"> 
                                        <svg aria-hidden="false" aria-label="TV" class="icon icon--svg icon--tv" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/>
                                        </svg>
                                    </span>TechLab
                                </a>
                            </li>

                            <li>
                                <a href="index.php?page=formations" class="<?php echo ($page=='formations') ? 'is-active' : '' ?>" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="formations">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Auto" class="icon icon--svg icon--auto" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.92 5.01C18.72 4.42 18.16 4 17.5 4h-11c-.66 0-1.21.42-1.42 1.01L3 11v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 15c-.83 0-1.5-.67-1.5-1.5S5.67 12 6.5 12s1.5.67 1.5 1.5S7.33 15 6.5 15zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 10l1.5-4.5h11L19 10H5z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </span>Formations
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=connexion" class="<?php echo ($page=='connexion') ? 'is-active' : '' ?>" role="menuitem" tabindex="0" data-g-event="main-navigation" data-g-action="clicked" data-g-label="connexion">
                                    <span class="c-nav__icon u-from-desktop-is-hidden">  
                                        <svg aria-hidden="false" aria-label="Phones" class="icon icon--svg icon--phone" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm-2 20h-4v-1h4v1zm3.25-3H6.75V4h10.5v14z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </span>Connexion
                                </a>
                            </li>
                        </ul>


                        <button aria-controls="search" aria-expanded="false" aria-label="Search" class="btn btn--search u-upto-desktop-is-hidden" data-c-id="c-toggle-search" data-c-toggle data-is-child-component type="button" data-g-event="search" data-g-action="expanded">
                            <svg aria-hidden="false" aria-label="Search" class="icon icon--svg icon--ui icon--search" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </button>

                        <label class="c-language-selector u-from-desktop-is-hidden" data-c-language-selector>
                            <div class="c-select">
                                <select data-c-analytics-dropdown data-ca-category="language-selector" data-ca-action="changed-language">
                                    <option value="/intl/en_ca/" data-ca-label="en_us:en_ca">English</option>
                                    <option value="/intl/fr_ca/" data-ca-label="en_us:fr_ca">Français</option>
                                </select>
                            </div>
                        </label>    
                    </div>
                </nav>

            </header>

        <?php
	}	
?>		