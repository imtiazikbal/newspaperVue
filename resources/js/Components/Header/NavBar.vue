<script setup >
import { Link } from '@inertiajs/vue3'

</script>
<template>
    <!-- Navbar start -->
    
    <b class="screen-overlay"></b>
    <div class="d-sm-none navbar navbar-light shadow-sm sticky-top" style="background:#eee; box-shadow: 0 .2rem .2rem rgba(0,0,0,.15) !important; padding-bottom: 0rem;"> 
        <a class="navbar-brand" href=""> 
            <img src="" width="140" class="image-fluid py-1" style="" alt="">
        </a>
        <button class="navbar-toggler navbar-light border-0 mt-1 p-0" type="button" data-toggle="collapse" data-trigger="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="font-size:26px; padding:0px!important;"></span>
        </button>
    </div>
    <div style="background:#fff;">
        <div class="container d-none d-sm-block">
            <div class="row d-flex justify-content-between py-3" style="color: #ddd;">
                <div class="col-3 d-flex align-items-center">
                    <Link href="/">
                                    
    
                        <img src="https://www.kalbela.com/templates/web-view/images/logo.png" width="220" class="image-fluid" style="" alt="">
                    </Link>
                </div>
    
        
             
  <div v-for="featured in $page.props.featured.news" :key="featured.id"  class="col-3 d-flex justify-content-center align-items-center">
    <Link :href="`/news/get-news-by-title/${featured.id}`" class="text-decoration-none">
      <div class="row no-gutters">
        <div class="col-8 d-flex align-items-center">
          <h4 class="titleHead5">{{ featured.title }}</h4>
        </div>
        <div class="col-4">
          <img :src="'/' + featured.image" width="80%" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </Link>
  </div>



            </div>
        </div>
    </div>
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light sticky-top py-1 px-md-0" style="background: #fff !important; text-align: center!important; border-top: 1px solid #ddd; border-bottom: 2px solid #bbb5b5;">
            <div class="container">
                <div class="offcanvas-header mt-2">  
                    <div class="row">
                        <div class="col-12 d-md-none float-right">
                            <a href=""> 
                                <button class="navbar-toggler border-0">
                                    <img src="https://www.kalbela.com/assets/news_photos/2024/03/17/image_73824_1710673387.webp" class="img-fluid" alt="Responsive image">
    
            
                                </button>
                            </a>
                            <div class="text-right float-right">
                                  <button class="btn btn-danger btn-close float-right text-right" style="margin-top:20px; padding:4px 14px;">&times</button>
                            </div>
                          </div>
                    </div>
    
                </div>
                <ul id="style1stNav" class="navbar-nav">
                    <li class="nav-item style1stNav">
                        <a class="nav-link pl-0" href="#">সর্বশেষ</a>
                    </li>
    
                    <!-- Input Cat page start -->			
    
         
            <li class="nav-item style1stNav" v-for="category in $page.props.headerData" :key="category.id">
                        <Link class="nav-link" href="/categorys/index"> {{ category.cName}}</Link>
                    </li>
     
                    
                    <!-- Input Cat page End -->
    
                    <li class="nav-item style1stNav">
                        <a class="nav-link" href="#">ছবিঘর</a>
                    </li>
    
                    <li class="nav-item style1stNav">
                        <a class="nav-link" href="#">ভিডিও</a>
                    </li>
    
                </ul>
                <ul id="" class="navbar-nav ml-auto">
    
                    <li class="nav-item style2ndNav">
                        <a class="nav-link" href="about.php"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg> খুজুন </a>
                    </li>
    
                    <li class="nav-item style2ndNav">
                        <a class="nav-link" href="about.php"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
              </svg> LogIn</a>
                    </li>
    
                    <li class="nav-item style2ndNav">
                    
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
                       
                    </li>
                </ul>
            </div>
        </nav>
    
    <!-- Navbar End --></template>

    <style>


h4.titleHead5 {
    color: black;
}

.nav-link {
    color: #111!important;
}
.style1stNav {
    font-size: 18px;
    font-size: bold;
    padding: 5px 5px 0px;
    text-align: left;
}
.style1stNav:hover {
    background: #eee;
    border-bottom: 3px solid red;
    margin-bottom: -5px;
}

.style2ndNav {
    font-size: 20px;
    font-size: bold;
    margin-left: 5px;
    padding: 5px 5px 0px;
    border-right: 1px solid #999;
    text-align: right;
}

.style2ndNav:hover {
    background: #eee;
    border-bottom: 3px solid red;
    margin-bottom: -5px;
}

.activedd {
    background: #eee; border-bottom: 3px solid red; margin-bottom: -5px;
}
.style1stNav:focus { border-bottom: 2px solid red; border-radius: 5px;
}

.offcanvas-header{ display:none; }
.screen-overlay {
  height: 100%;
  z-index: 30;
  position: fixed;
  top: 0;
  left: 0;
  opacity:0;
  visibility:hidden;
  background-color: rgba(34, 34, 34, 0.6);
  transition:opacity .2s linear, visibility .1s, width 1s ease-in;
}
.screen-overlay.show {
  transition:opacity .5s ease, width 0s;
  opacity:1;
  width:100%;
  visibility:visible;
}

.cstmBG {
    background: rgb(182,182,182);
    background: linear-gradient(0deg, rgba(182,182,182,1) 0%, rgba(255,255,255,1) 5%);
    z-index: 2
}

.dropdown-item:hover { background-color: #eee; }

#logo {
  overflow: hidden;
  transition: 0.5s;
  width: 300px;
  z-index: 0;

}

@media all and (max-width:676px) { 
    .cstmBG { padding: 0em .8em;}
    .offcanvas-header{ display:block; }
    .mobile-offcanvas{
        visibility: hidden;
        transform:translateX(-100%);
        border-radius:0; 
        display:block;
        position: fixed;
        top: 0; left:0;
        height: 100%;
        z-index: 1200;
        width:70%;
        overflow-y: scroll;
        overflow-x: hidden;
        transition: visibility .2s ease-in-out, transform .2s ease-in-out;
    }
    .mobile-offcanvas.show { visibility: visible; transform: translateX(0); }
}

/*dropdown_hover */	
.dropdown:hover > .dropdown-menu {
       display: block;
}

.dropdown-item:hover {
    background-color: #e4e4e4;
}

/*mega menu */
.menu-large {
  position: static !important;
}

.megamenu {
    margin-top: 0px;
      padding: 0px 20px;
      width: 100%;
} 

.megamenu > div > li > ul {

  padding: 10px 0 0;
}

.megamenu > div > li > ul > li {
  list-style: none;

}

.megamenu > div > li > ul > li > a {
    font-size: 18px;
    clear: both;
    color: #444;
    font-weight: normal;
    white-space: normal;
    display: block;
    margin: 5px 0px;
    padding: 2px 3px;
    text-decoration: none;
    border-bottom: 1px solid #ddd;
    transition: all .4s;
}

.megamenu > div > li > ul > li > a:hover {
    background-color: white;
    border-left: 10px solid hsla(190, 80%, 40%, 1);
    padding-left: 5px;
}


.megamenu2 > div > li > a {
    font-size: 22px;
    clear: both;
    color: #333!important;
    display: block;
    padding: 10px 10px;
    text-decoration: none;
    transition: all .4s;
}






.dropdown-header {
    color: #333!important;
    font-size: 18px;
    font-weight: bold;
      padding: 5px 0px !important; 
}
.dropdown-header:hover {
      text-decoration: none;
}

.singleDDMenu > div > a {
    font-size: 18px;
    padding-left: 15px;
    color: #333!important;
    white-space: normal;
    text-decoration: none;
    transition: all .4s;
}
.singleDDMenu > div > a:hover {
    border-left: 10px solid hsla(190, 80%, 40%, 1);
}


/* ======Navbar Margin ======*/
.navmargin {
    margin-top: 100px;
}
@media (max-width: 768px) {
    .navmargin {
        margin-top: 120px;
    } 
}

/*mega menu */
/*trending menu start */
div.scrollmenu {
    overflow: auto;
    white-space: nowrap;
  } @media only screen and (max-width: 600px) { 
    div.scrollmenu {
      -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
  }
  div.scrollmenu::-webkit-scrollbar {
    display: none;
  }

  div.scrollmenu a {
  color: white;
  font-size: 12px;
  padding: 3px 12px;
  margin-right: 10px;
  border-radius: 15px;
  background-color: #3A495E;
  text-decoration: none;
    border-image-slice: 1;
    transition: all;
    transition: 0.3s ease-in;
  } @media only screen and (max-width: 600px) 
    { div.scrollmenu a {
      display: inline-block; margin-right: 2px; }
    }


  div.scrollmenu a:hover {
    background-color: #eee;
  }

</style>