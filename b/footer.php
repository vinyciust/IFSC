  <section id="footer">


  <!--
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">

  
</footer>
-->
<style>
  
/* Base */
html {
  overflow-x: hidden; }

body {
  line-height: 1.7;
  color: gray;
  font-weight: 300;
  font-size: 1.1rem; }

::-moz-selection {
  background: #000;
  color: #fff; }

::selection {
  background: #000;
  color: #fff; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a:hover {
    text-decoration: none; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  font-family: "Oswald", sans-serif; }

.border-2 {
  border-width: 2px; }

.text-black {
  color: #000 !important; }

.bg-black {
  background: #000 !important; }

.color-black-opacity-5 {
  color: rgba(0, 0, 0, 0.5); }

.color-white-opacity-5 {
  color: rgba(255, 255, 255, 0.5); }

.site-wrap:before {
  display: none;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out;
  background: rgba(0, 0, 0, 0.6);
  content: "";
  position: absolute;
  z-index: 2000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  visibility: hidden; }

.offcanvas-menu .site-wrap {
  height: 100%;
  width: 100%;
  z-index: 2; }
  .offcanvas-menu .site-wrap:before {
    opacity: 1;
    visibility: visible; }

.line-height-1 {
  line-height: 1 !important; }

.bg-black {
  background: #000; }

.site-section {
  padding: 2.5em 0; }
  @media (min-width: 768px) {
    .site-section {
      padding: 5em 0; } }
  .site-section.site-section-sm {
    padding: 4em 0; }

.site-section-heading {
  padding-bottom: 20px;
  margin-bottom: 0px;
  position: relative;
  font-size: 2.5rem; }
  @media (min-width: 768px) {
    .site-section-heading {
      font-size: 3rem; } }

.border-top {
  border-top: 1px solid #edf0f5 !important; }

.site-footer {
  padding: 4em 0; }
  @media (min-width: 768px) {
    .site-footer {
      padding: 8em 0; } }
  .site-footer p {
    color: #737373; }
  .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5 {
    color: #fff; }
  .site-footer a {
    color: #999999; }
    .site-footer a:hover {
      color: black; }
  .site-footer ul li {
    margin-bottom: 10px; }
  .site-footer .footer-heading {
    font-size: 16px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 900; }

.bg-text-line {
  display: inline;
  background: #000;
  -webkit-box-shadow: 20px 0 0 #000, -20px 0 0 #000;
  box-shadow: 20px 0 0 #000, -20px 0 0 #000; }

.text-white-opacity-05 {
  color: rgba(255, 255, 255, 0.5); }

.text-black-opacity-05 {
  color: rgba(0, 0, 0, 0.5); }

.hover-bg-enlarge {
  overflow: hidden;
  position: relative; }
  @media (max-width: 991.98px) {
    .hover-bg-enlarge {
      height: auto !important; } }
  .hover-bg-enlarge > div {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .8s all ease-in-out;
    -o-transition: .8s all ease-in-out;
    transition: .8s all ease-in-out; }
  .hover-bg-enlarge:hover > div, .hover-bg-enlarge:focus > div, .hover-bg-enlarge:active > div {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2); }
  @media (max-width: 991.98px) {
    .hover-bg-enlarge .bg-image-md-height {
      height: 300px !important; } }

.bg-image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed; }
  .bg-image.overlay {
    position: relative; }
    .bg-image.overlay:after {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.7); }
  .bg-image > .container {
    position: relative;
    z-index: 1; }

@media (max-width: 991.98px) {
  .img-md-fluid {
    max-width: 100%; } }

@media (max-width: 991.98px) {
  .display-1, .display-3 {
    font-size: 3rem; } }

.play-single-big {
  width: 90px;
  height: 90px;
  display: inline-block;
  border: 2px solid #fff;
  color: #fff !important;
  border-radius: 50%;
  position: relative;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .play-single-big > span {
    font-size: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-40%, -50%);
    -ms-transform: translate(-40%, -50%);
    transform: translate(-40%, -50%); }
  .play-single-big:hover {
    width: 120px;
    height: 120px; }

.overlap-to-top {
  margin-top: -150px; }

.ul-check {
  margin-bottom: 50px; }
  .ul-check li {
    position: relative;
    padding-left: 35px;
    margin-bottom: 15px;
    line-height: 1.5; }
    .ul-check li:before {
      left: 0;
      font-size: 20px;
      top: -.3rem;
      font-family: "icomoon";
      content: "\e5ca";
      position: absolute; }
  .ul-check.white li:before {
    color: #fff; }
  .ul-check.success li:before {
    color: #8bc34a; }
  .ul-check.primary li:before {
    color: #ff5e15; }

.select-wrap, .wrap-icon {
  position: relative; }
  .select-wrap .icon, .wrap-icon .icon {
    position: absolute;
    right: 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 22px; }
  .select-wrap select, .wrap-icon select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%; }

/* Navbar */
.site-navbar {
  font-family: "Oswald", sans-serif;
  margin-bottom: 0px;
  z-index: 1999;
  width: 100%; }
  .site-navbar .container-fluid {
    padding-left: 7rem;
    padding-right: 7rem; }
  .site-navbar .site-navigation.border-bottom {
    border-bottom: 1px solid #f3f3f4 !important; }
  .site-navbar .site-navigation .site-menu {
    margin-bottom: 0; }
    .site-navbar .site-navigation .site-menu .active > a {
      color: #000;
      display: inline-block;
      padding: 5px 20px; }
    .site-navbar .site-navigation .site-menu a {
      text-decoration: none !important;
      display: inline-block; }
    .site-navbar .site-navigation .site-menu > li {
      display: inline-block; }
      .site-navbar .site-navigation .site-menu > li .desc {
        font-size: 12px;
        color: #969696; }
      .site-navbar .site-navigation .site-menu > li > a {
        text-transform: uppercase;
        font-size: 16px;
        letter-spacing: .05rem;
        font-weight: 900;
        padding: 20px 20px;
        color: #fff;
        display: inline-block;
        text-decoration: none !important; }
        .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #000; }
    .site-navbar .site-navigation .site-menu .has-children {
      position: relative; }
      .site-navbar .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-navbar .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          content: "\e313";
          font-size: 16px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: 'icomoon'; }
      .site-navbar .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        position: absolute;
        text-align: left;
        border-top: 2px solid #000;
        -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        border-left: 1px solid #edf0f5;
        border-right: 1px solid #edf0f5;
        border-bottom: 1px solid #edf0f5;
        padding: 0px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: #fff;
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
          position: absolute; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown a {
          font-size: 16px;
          text-transform: none;
          letter-spacing: normal;
          -webkit-transition: 0s all;
          -o-transition: 0s all;
          transition: 0s all;
          color: #343a40; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown .active > a {
          color: #ff5e15 !important; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown > li {
          list-style: none;
          padding: 0;
          margin: 0;
          min-width: 200px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
            padding: 9px 20px;
            display: block; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              background: #f4f5f9;
              color: #25262a; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
            content: "\e315";
            right: 20px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
            left: 100%;
            top: 0; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
            background: #f4f5f9;
            color: #25262a; }
      .site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
        color: #000; }
      .site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
        cursor: pointer; }
        .site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
          -webkit-transition-delay: 0s;
          -o-transition-delay: 0s;
          transition-delay: 0s;
          margin-top: 0px;
          visibility: visible;
          opacity: 1; }
    .site-navbar .site-navigation .site-menu.site-menu-dark > li > a {
      color: #000; }

.site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(110%);
  -ms-transform: translateX(110%);
  transform: translateX(110%);
  -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .offcanvas-menu .site-mobile-menu {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
          color: #25262a; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 0 20px 20px 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 10px 20px;
      display: block;
      position: relative;
      color: #212529; }
      .site-mobile-menu .site-nav-wrap a:hover {
        color: #ff5e15; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li.active > a {
        color: #ff5e15 !important; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 10px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 20px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 16px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 16px;
                padding-left: 60px; }
    .site-mobile-menu .site-nav-wrap[data-class="social"] {
      float: left;
      width: 100%;
      margin-top: 30px;
      padding-bottom: 5em; }
      .site-mobile-menu .site-nav-wrap[data-class="social"] > li {
        width: auto; }
        .site-mobile-menu .site-nav-wrap[data-class="social"] > li:first-child a {
          padding-left: 15px !important; }

.sticky-wrapper {
  position: absolute;
  z-index: 100;
  width: 100%;
  background: #fff; }
  @media (max-width: 991.98px) {
    .sticky-wrapper {
      display: none; } }
  .sticky-wrapper + .site-blocks-cover {
    margin-top: 96px; }
  .sticky-wrapper .site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    background: #ff5e15; }
    .sticky-wrapper .site-navbar .site-logo a {
      color: #000; }
    .sticky-wrapper .site-navbar .site-menu > li {
      display: inline-block; }
      .sticky-wrapper .site-navbar .site-menu > li > a.active {
        color: #000;
        position: relative; }
        .sticky-wrapper .site-navbar .site-menu > li > a.active:after {
          height: 2px;
          background: #fff;
          content: "";
          position: absolute;
          bottom: 0;
          left: 20px;
          right: 20px; }
      .sticky-wrapper .site-navbar .site-menu > li.active > a {
        color: #000; }
  .sticky-wrapper.is-sticky .site-navbar {
    -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
    box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2); }
    .sticky-wrapper.is-sticky .site-navbar .site-logo a {
      color: #000; }
    .sticky-wrapper.is-sticky .site-navbar .site-menu > li {
      display: inline-block; }
      .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a {
        padding: 10px 20px;
        display: inline-block;
        text-decoration: none !important; }
        .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a:hover {
          color: #000; }
        .sticky-wrapper.is-sticky .site-navbar .site-menu > li > a.active:after {
          background: #ff5e15; }
      .sticky-wrapper.is-sticky .site-navbar .site-menu > li.active > a {
        color: #000; }
  .sticky-wrapper .shrink {
    padding-top: 10px !important;
    padding-bottom: 10px !important; }

/* Blocks */
.intro-section {
  background-size: cover;
  position: relative; }
  .intro-section, .intro-section .container .row {
    height: 100vh;
    min-height: 700px; }
  .intro-section.innerpage, .intro-section.innerpage .container .row {
    height: 75vh;
    min-height: 500px; }
  .intro-section:before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: #222;
    opacity: .3;
    border-bottom-right-radius: 0px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; }
    @media (max-width: 991.98px) {
      .intro-section:before {
        width: 100%; } }
  .intro-section h1 {
    font-size: 3rem;
    font-weight: 300;
    color: #fff; }
    .intro-section h1 strong {
      font-weight: 700; }
  .intro-section p {
    color: #fff;
    font-size: 1.1rem; }
    .intro-section p a {
      color: #fff;
      text-decoration: underline; }

.custom-breadcrumns {
  padding: 20px 0; }
  .custom-breadcrumns span, .custom-breadcrumns a {
    font-size: 14px; }
  .custom-breadcrumns a {
    display: inline-block;
    color: #bdbdbd; }
    .custom-breadcrumns a:hover {
      color: #ff5e15; }
  .custom-breadcrumns .current {
    color: #ff5e15; }

.section-title-underline {
  color: #000; }
  .section-title-underline span {
    display: inline-block;
    border-bottom: 4px solid #ff5e15; }
  .section-title-underline.style-2 {
    color: #fff; }
    .section-title-underline.style-2 span {
      border-color: #ff5e15; }

.section-bg {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 4rem 0; }
  .section-bg.style-1 {
    position: relative; }
    .section-bg.style-1:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #183661;
      opacity: .9;
      z-index: 0; }
    .section-bg.style-1 > .container {
      z-index: 2; }
    .section-bg.style-1 .icon {
      font-size: 3.5rem;
      color: #ff5e15; }
    .section-bg.style-1 h3 {
      font-size: 20px;
      color: #ff5e15;
      margin-bottom: 30px; }
    .section-bg.style-1 p {
      color: #7697c6; }

.news-updates {
  padding: 5rem 0; }
  .news-updates .section-heading {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 40px; }
    .news-updates .section-heading h2 {
      margin-bottom: 0;
      line-height: 0; }
    .news-updates .section-heading a {
      font-size: 16px; }
  .news-updates .post-entry-big .img-link {
    position: relative;
    display: inline-block;
    margin-bottom: 30px;
    overflow: hidden; }
    .news-updates .post-entry-big .img-link img {
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    .news-updates .post-entry-big .img-link:before {
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      position: absolute;
      content: "";
      background: #000;
      opacity: 0;
      z-index: 2;
      visibility: hidden;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    .news-updates .post-entry-big .img-link img {
      z-index: 1; }
    .news-updates .post-entry-big .img-link:hover:before {
      opacity: .6;
      visibility: visible; }
    .news-updates .post-entry-big .img-link:hover img {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05); }
  .news-updates .post-entry-big .post-content .post-meta a {
    display: inline-block;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: bold;
    color: #939393; }
  .news-updates .post-entry-big .post-content .post-heading {
    line-height: .9; }
    .news-updates .post-entry-big .post-content .post-heading a {
      font-size: 18px;
      font-weight: bold;
      color: #303030; }
      .news-updates .post-entry-big .post-content .post-heading a:hover {
        color: #ff5e15; }
  .news-updates .post-entry-big.horizontal .img-link {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px; }

.social-wrap a {
  display: inline-block;
  width: 40px;
  height: 40px;
  background: #ff5e15;
  position: relative; }
  .social-wrap a > span {
    position: absolute;
    color: #fff;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  .social-wrap a:hover {
    background: #000; }

.block-number-1 .icon {
  color: #fff;
  font-size: 2rem; }

.ftco-testimonial-1 .ftco-testimonial-vcard img {
  width: 50px;
  height: 50px;
  border-radius: 50%; }

.ftco-testimonial-1 .ftco-testimonial-vcard h3 {
  font-size: 1.2rem;
  display: block;
  margin-bottom: 0;
  color: #000; }

.ftco-testimonial-1 p {
  color: #a2a2a2; }

.hero-slide {
  position: relative; }
  @media (max-width: 991.98px) {
    .hero-slide .owl-nav {
      display: none; } }
  .hero-slide .owl-nav .owl-prev,
  .hero-slide .owl-nav .owl-next {
    position: absolute;
    top: 50%;
    text-align: center;
    width: 70px;
    height: 70px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    background: #fff; }
    .hero-slide .owl-nav .owl-prev > span,
    .hero-slide .owl-nav .owl-next > span {
      font-size: 1.7rem;
      position: absolute;
      top: 50%;
      left: 50%;
      color: #000;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    .hero-slide .owl-nav .owl-prev:hover,
    .hero-slide .owl-nav .owl-next:hover {
      background: #ff5e15; }
      .hero-slide .owl-nav .owl-prev:hover > span,
      .hero-slide .owl-nav .owl-next:hover > span {
        color: #fff; }
  .hero-slide .owl-nav .owl-prev {
    left: 0; }
  .hero-slide .owl-nav .owl-next {
    right: 0; }
  .hero-slide .owl-dots {
    position: absolute;
    bottom: 30px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    text-align: center; }
    .hero-slide .owl-dots .owl-dot {
      display: inline-block; }
      .hero-slide .owl-dots .owl-dot > span {
        border-radius: 0%;
        display: inline-block;
        width: 18px;
        height: 4px;
        margin: 2px 5px;
        background: white; }
      .hero-slide .owl-dots .owl-dot.active > span {
        background: #ff5e15; }

.owl-slide-3, .owl-slide {
  position: relative; }
  .owl-slide-3 .owl-stage, .owl-slide .owl-stage {
    padding-top: 30px;
    padding-bottom: 30px; }
  .owl-slide-3 .owl-nav .owl-prev,
  .owl-slide-3 .owl-nav .owl-next, .owl-slide .owl-nav .owl-prev,
  .owl-slide .owl-nav .owl-next {
    position: absolute;
    top: 50%;
    text-align: center;
    width: 40px;
    height: 40px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    background: #fff; }
    .owl-slide-3 .owl-nav .owl-prev > span,
    .owl-slide-3 .owl-nav .owl-next > span, .owl-slide .owl-nav .owl-prev > span,
    .owl-slide .owl-nav .owl-next > span {
      font-size: 1.5rem;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .owl-slide-3 .owl-nav .owl-prev, .owl-slide .owl-nav .owl-prev {
    left: 0; }
  .owl-slide-3 .owl-nav .owl-next, .owl-slide .owl-nav .owl-next {
    right: 0; }
  .owl-slide-3 .owl-dots, .owl-slide .owl-dots {
    position: absolute;
    bottom: -30px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    text-align: center; }
    .owl-slide-3 .owl-dots .owl-dot, .owl-slide .owl-dots .owl-dot {
      display: inline-block; }
      .owl-slide-3 .owl-dots .owl-dot > span, .owl-slide .owl-dots .owl-dot > span {
        border-radius: 0%;
        display: inline-block;
        width: 18px;
        height: 4px;
        margin: 2px 5px;
        background: rgba(0, 0, 0, 0.2); }
      .owl-slide-3 .owl-dots .owl-dot.active > span, .owl-slide .owl-dots .owl-dot.active > span {
        background: #ff5e15; }

.owl-slide .owl-nav {
  display: none; }

.feature-1 .icon-wrapper {
  position: relative;
  width: 96px;
  height: 55.43px;
  right: 0;
  left: 0;
  margin: 0 auto;
  z-index: 1;
  margin-top: -33.94px;
  background: #ccc; }
  .feature-1 .icon-wrapper > span {
    width: 96px;
    height: 96px;
    text-align: center;
    font-size: 3rem;
    line-height: 96px;
    display: inline-block;
    position: absolute;
    top: -20px;
    left: 0; }
  .feature-1 .icon-wrapper:before, .feature-1 .icon-wrapper:after {
    content: "";
    position: absolute;
    z-index: -1;
    width: 67.88px;
    height: 67.88px;
    -webkit-transform: scaleY(0.5774) rotate(-45deg);
    -ms-transform: scaleY(0.5774) rotate(-45deg);
    transform: scaleY(0.5774) rotate(-45deg);
    background-color: inherit;
    left: 14.06px; }
  .feature-1 .icon-wrapper:before {
    top: -33.94px; }
  .feature-1 .icon-wrapper:after {
    bottom: -33.94px; }

.feature-1 .feature-1-content {
  padding: 50px 20px 20px 20px;
  text-align: center; }
  .feature-1 .feature-1-content h2 {
    font-size: 1.3rem;
    color: #000; }

.course-1-item {
  -webkit-box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1); }
  .course-1-item figure {
    position: relative; }
  .course-1-item .category {
    background: #ff5e15;
    padding: 20px; }
    .course-1-item .category h3 {
      color: #fff;
      font-size: 20px;
      margin-bottom: 0; }
  .course-1-item .price {
    position: absolute;
    bottom: 0;
    right: 0;
    -webkit-transform: translatey(-100%);
    -ms-transform: translatey(-100%);
    transform: translatey(-100%);
    padding: 10px 20px;
    background: #183661;
    color: #fff; }
  .course-1-item .course-1-content {
    padding: 20px 40px;
    text-align: center; }
    .course-1-item .course-1-content h2 {
      margin: 0 0 30px 0;
      font-size: 18px;
      color: #000; }
    .course-1-item .course-1-content .rating {
      text-align: center; }
      .course-1-item .course-1-content .rating > span {
        display: inline-block;
        margin: 2px; }
    .course-1-item .course-1-content .desc {
      font-size: 15px; }

.footer {
  padding: 4rem 0;
  background: #000;
  font-size: 15px;
  color: #fff; }
  .footer .footer-heading {
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    text-transform: uppercase; }
    .footer .footer-heading > span {
      border-bottom: 2px solid #ff5e15; }
  .footer ul li {
    margin-bottom: 10px; }
  .footer a {
    color: #fff; }
    .footer a:hover {
      color: #ff5e15;
      text-decoration: underline; }
  .footer .copyright {
    color: #fff;
    padding-top: 7rem;
    text-align: center; }

.ftco-subscribe-1 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative; }
  .ftco-subscribe-1:before {
    position: absolute;
    content: "";
    background: #183661;
    opacity: .7;
    z-index: 1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0; }
  .ftco-subscribe-1 > .container {
    position: relative;
    z-index: 2; }
    .ftco-subscribe-1 > .container h2, .ftco-subscribe-1 > .container p {
      color: #fff; }
  .ftco-subscribe-1 .form-control {
    height: auto !important; }

.video-1 {
  position: relative;
  display: block; }
  .video-1 .play {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    border-radius: 50%; }
    .video-1 .play > span {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
  .video-1:hover {
    -webkit-box-shadow: 0 5px 30px -10px rgba(0, 0, 0, 0.3);
    box-shadow: 0 5px 30px -10px rgba(0, 0, 0, 0.3); }

#loader {
  position: fixed;
  width: 96px;
  height: 96px;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
  border-radius: 16px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity .2s ease-out, visibility 0s linear .2s;
  -o-transition: opacity .2s ease-out, visibility 0s linear .2s;
  transition: opacity .2s ease-out, visibility 0s linear .2s;
  z-index: 2000; }

#loader.fullscreen {
  padding: 0;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: none;
  -ms-transform: none;
  transform: none;
  background-color: #fff;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none; }

#loader.show {
  -webkit-transition: opacity .4s ease-out, visibility 0s linear 0s;
  -o-transition: opacity .4s ease-out, visibility 0s linear 0s;
  transition: opacity .4s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1; }

#loader .circular {
  -webkit-animation: loader-rotate 2s linear infinite;
  animation: loader-rotate 2s linear infinite;
  position: absolute;
  left: calc(50% - 24px);
  top: calc(50% - 24px);
  display: block;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg); }

#loader .path {
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  -webkit-animation: loader-dash 1.5s ease-in-out infinite;
  animation: loader-dash 1.5s ease-in-out infinite;
  stroke-linecap: round; }

@-webkit-keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loader-rotate {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

@keyframes loader-dash {
  0% {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0; }
  50% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -35px; }
  100% {
    stroke-dasharray: 89, 200;
    stroke-dashoffset: -136px; } }

/*engineers*/
.services-1-wrap .service-1 {
  padding: 20px 30px;
  border: 1px solid #efefef;
  border-right: none;
  position: relative; }
  @media (max-width: 1199.98px) {
    .services-1-wrap .service-1 {
      border: 1px solid #efefef;
      margin-bottom: 30px; } }
  .services-1-wrap .service-1 .number {
    position: absolute;
    right: 10px;
    top: 10px;
    font-weight: 400;
    font-family: "Oswald", sans-serif;
    color: #dcdcdc; }
  .services-1-wrap .service-1 .service-1-icon {
    position: relative;
    margin-left: 20px; }
    .services-1-wrap .service-1 .service-1-icon:before {
      position: absolute;
      content: "";
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
      z-index: -1;
      left: -20px;
      border-top: 40px solid transparent;
      border-bottom: 40px solid transparent;
      border-right: 40px solid #ff5e15; }
    .services-1-wrap .service-1 .service-1-icon > span {
      color: #000;
      font-size: 4rem; }
  .services-1-wrap .service-1 .service-1-content .service-heading {
    font-size: 1.5rem;
    color: #000;
    font-weight: 400; }
  .services-1-wrap .service-1 .service-1-content p {
    font-size: 15px; }

.services-1-wrap [class^="col-"]:last-child .service-1 {
  border-right: 1px solid #efefef; }

.header-top > .container {
  padding-top: 40px;
  padding-bottom: 40px; }

.header-top .quick-contact-icons .icon {
  margin-right: 10px; }
  .header-top .quick-contact-icons .icon span {
    font-size: 40px;
    line-height: 0; }

.header-top .quick-contact-icons .text .h4 {
  font-size: 1.2rem;
  color: #000;
  margin-bottom: 0; }

.header-top .quick-contact-icons .text .caption-text {
  font-size: 1rem; }

.block-2 {
  background: #09162a;
  padding: 7rem 0; }
  .block-2 .img-overlap {
    margin-top: -150px; }

.block-3 {
  background: #09162a;
  padding: 7rem 0;
  margin-bottom: 14rem; }

.section-title {
  color: #fff;
  font-weight: 300; }
  .section-title strong {
    font-weight: 700; }

.section-subtitle {
  font-weight: 300;
  color: #ff5e15;
  text-transform: uppercase;
  font-size: 1.3rem; }

.line-height-0 {
  line-height: 0; }

.projects-carousel-wrap {
  position: relative;
  margin-bottom: -200px; }

.project-item {
  position: relative;
  overflow: hidden; }
  .project-item:before {
    content: "";
    background: rgba(0, 0, 0, 0.7);
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    opacity: 0;
    visibility: hidden;
    z-index: 1;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .project-item img {
    -webkit-transition: .5s all ease;
    -o-transition: .5s all ease;
    transition: .5s all ease;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1); }
  .project-item .project-item-contents {
    z-index: 9;
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
    opacity: 0;
    visibility: hidden; }
    .project-item .project-item-contents .project-item-category {
      color: #ff5e15;
      font-family: "Oswald", sans-serif;
      text-transform: uppercase; }
    .project-item .project-item-contents .project-item-title {
      color: #fff;
      margin-bottom: 0; }
  .project-item:hover:before {
    opacity: 1;
    visibility: visible; }
  .project-item:hover .project-item-contents {
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    transform: translateY(0%);
    opacity: 1;
    visibility: visible; }
  .project-item:hover img {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2); }

.form-control:hover, .form-control:focus, .form-control:active {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none; }

.btn {
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: .2rem;
  font-family: "Oswald", sans-serif; }

.quote-form-wrap {
  background: #09162a;
  padding: 5rem; }

.quote-form .form-control {
  border: none;
  padding-left: 0;
  padding-right: 0;
  border-bottom: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 0;
  padding-top: 10px;
  padding-bottom: 10px;
  background: transparent;
  color: #fff; }
  .quote-form .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #fff; }
  .quote-form .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: #fff; }
  .quote-form .form-control:-ms-input-placeholder {
    /* IE 10+ */
    color: #fff; }
  .quote-form .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: #fff; }

.quote-form .btn-primary:hover {
  background: #000;
  border-color: #000;
  color: #fff; }

.person {
  position: relative; }
  .person figure {
    margin-bottom: 0;
    padding-bottom: 0;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px; }
  .person img {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .person .person-contents {
    text-align: center; }
    .person .person-contents h3 {
      color: #000; }
    .person .person-contents .position {
      color: #ff5e15; }
  .person:hover img {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05); }
  .person .social {
    position: absolute;
    bottom: 10px;
    left: 10px;
    z-index: 2; }
    .person .social a {
      display: block;
      margin-bottom: 10px;
      width: 40px;
      height: 40px;
      background: #fff;
      position: relative; }
      .person .social a > span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
      .person .social a:hover {
        background: #000;
        color: #fff; }

.testimonial img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 20px; }

.testimonial blockquote p {
  font-size: 20px;
  color: #000;
  font-weight: 700; }

.testimonial .client-name {
  font-family: "Oswald", sans-serif;
  text-transform: uppercase;
  font-size: 1.2rem;
  color: #ff5e15; }

.blog-entry .img-link {
  display: block;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px; }
  .blog-entry .img-link img {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .blog-entry .img-link:hover img {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05); }

.blog-entry .blog-entry-contents h3 {
  line-height: 1; }
  .blog-entry .blog-entry-contents h3 a {
    color: #000;
    font-weight: 400;
    font-size: 1.5rem; }

.blog-entry .blog-entry-contents .meta {
  font-size: 1rem; }
  .blog-entry .blog-entry-contents .meta, .blog-entry .blog-entry-contents .meta a {
    color: #b0b0b0; }
  .blog-entry .blog-entry-contents .meta a {
    color: #ff5e15; }

.block-4 h3 {
  color: #fff;
  font-weight: 300;
  text-transform: uppercase; }

.block-4 p {
  color: #fff; }

.block-4 .form-subscribe .form-control {
  color: #fff;
  border: 2px solid #fff;
  background: none;
  border-radius: 0; }

.block-4 .form-subscribe .btn {
  background: #000;
  border-color: #000;
  border-radius: 0; }
  .block-4 .form-subscribe .btn:hover, .block-4 .form-subscribe .btn:active, .block-4 .form-subscribe .btn:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    background-color: #000;
    border-color: #000;
    outline: none; }

.sidebar-box {
  margin-bottom: 30px;
  padding: 25px;
  font-size: 15px;
  width: 100%;
  float: left;
  background: #fff; }
  .sidebar-box *:last-child {
    margin-bottom: 0; }
  .sidebar-box h3 {
    font-size: 18px;
    margin-bottom: 15px; }

.categories li, .sidelink li {
  position: relative;
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px dotted #dee2e6;
  list-style: none; }
  .categories li:last-child, .sidelink li:last-child {
    margin-bottom: 0;
    border-bottom: none;
    padding-bottom: 0; }
  .categories li a, .sidelink li a {
    display: block; }
    .categories li a span, .sidelink li a span {
      position: absolute;
      right: 0;
      top: 0;
      color: #ccc; }
  .categories li.active a, .sidelink li.active a {
    color: #000;
    font-style: italic; }

.comment-form-wrap {
  clear: both; }

.comment-list {
  padding: 0;
  margin: 0; }
  .comment-list .children {
    padding: 50px 0 0 40px;
    margin: 0;
    float: left;
    width: 100%; }
  .comment-list li {
    padding: 0;
    margin: 0 0 30px 0;
    float: left;
    width: 100%;
    clear: both;
    list-style: none; }
    .comment-list li .vcard {
      width: 80px;
      float: left; }
      .comment-list li .vcard img {
        width: 50px;
        border-radius: 50%; }
    .comment-list li .comment-body {
      float: right;
      width: calc(100% - 80px); }
      .comment-list li .comment-body h3 {
        font-size: 20px; }
      .comment-list li .comment-body .meta {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: .1em;
        color: #ccc; }
      .comment-list li .comment-body .reply {
        padding: 5px 10px;
        background: #e6e6e6;
        color: #000;
        text-transform: uppercase;
        font-size: 14px; }
        .comment-list li .comment-body .reply:hover {
          color: #000;
          background: #e3e3e3; }

.search-form {
  background: #f7f7f7;
  padding: 10px; }
  .search-form .form-group {
    position: relative; }
    .search-form .form-group input {
      padding-right: 50px; }
  .search-form .icon {
    position: absolute;
    top: 50%;
    right: 20px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%); }

.post-meta {
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: .2em; }
  .post-meta a {
    color: #fff;
    border-bottom: 1px solid rgba(255, 255, 255, 0.5); }


</style>

<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="img/logo.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Nossa Empresa</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Promoções</a></li>
                <li><a href="#">Produtos</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Nossos Serviços</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Restauração de motos</a></li>
                  <li><a href="#">Manutenção</a></li>
                  <li><a href="#">Personalização</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contatos</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#"><i class="fa  fa-phone"></i> Telefone:(49) 0000-0000</a></li>
                  <li><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                  <li><a href="#"><i class="fa  fa-whatsapp"></i> Whats</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>                   
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados para EMI/2016.1
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    </body>
    </html>