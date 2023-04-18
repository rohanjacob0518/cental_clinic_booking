<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>G.D.D.C.</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Favicons -->
  <!-- <link href="C:\wamp64\www\Semend\Assets\img\favicon.png" rel="icon">
  <link href="C:\wamp64\www\Semend\Assets\img\apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="C:\wamp64\www\Semend\Assets\css\bootstrap.min.css" rel="stylesheet">
  <link href="C:\wamp64\www\Semend\Assets\vendor\bootstrap-icons\bootstrap-icons.css" rel="stylesheet">
  <link href="C:\wamp64\www\Semend\Assets\css\all.min.css" rel="stylesheet">
  <link href="C:\wamp64\www\Semend\Assets\vendor\aos\aos.css" rel="stylesheet">
  <link href="C:\wamp64\www\Semend\Assets\vendor\glightbox\css\glightbox.min.css" rel="stylesheet">
  <link href="C:\wamp64\www\Semend\Assets\vendor\swiper\swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="C:\wamp64\www\Semend\Assets\css\main.css" rel="stylesheet">
  <style>
   /**
* Template Name: UpConstruction - v1.2.1
* Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# Set main reusable colors and fonts using CSS variables
# Learn more about CSS variables at https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties
--------------------------------------------------------------*/
/* Fonts */
:root {
  --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-primary: "Roboto", sans-serif;
  --font-secondary: "Work Sans", sans-serif;
}

/* Colors */
:root {
  --color-default: #364d59;
  --color-primary: #feb900;
  --color-secondary: #52565e;
}

/* Smooth scroll behavior */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: var(--font-default);
  color: var(--color-default);
  overflow-x: hidden;
}

a {
  color: var(--color-primary);
  text-decoration: none;
}

a:hover {
  color: #ffc732;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--font-primary);
}

/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/
section {
  padding: 80px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f5f6f7;
}

.section-header {
  text-align: center;
  padding-bottom: 70px;
}

.section-header h2 {
  font-size: 32px;
  font-weight: 700;
  position: relative;
  /* color: #2e3135; */
}

.section-header h2:before,
.section-header h2:after {
  content: "";
  width: 50px;
  height: 2px;
  background: var(--color-primary);
  display: inline-block;
}

.section-header h2:before {
  margin: 0 15px 10px 0;
}

.section-header h2:after {
  margin: 0 0 10px 15px;
}

.section-header p {
  margin: 0 auto 0 auto;
}

@media (min-width: 1199px) {
  .section-header p {
    max-width: 60%;
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 140px 0 60px 0;
  min-height: 30vh;
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.breadcrumbs:before {
  content: "";
  background-color: rgba(0, 0, 0, 0.6);
  position: absolute;
  inset: 0;
}

.breadcrumbs h2 {
  font-size: 56px;
  font-weight: 500;
  color: #fff;
  font-family: var(--font-secondary);
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
  color: var(--color-primary);
}

.breadcrumbs ol a {
  color: rgba(255, 255, 255, 0.8);
  transition: 0.3s;
}

.breadcrumbs ol a:hover {
  text-decoration: underline;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #fff;
  content: "/";
}

/*--------------------------------------------------------------
# Scroll top button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: var(--color-primary);
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: var(--color-secondary);
  line-height: 0;
}

.scroll-top:hover {
  background: #ffc732;
  color: #fff;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  inset: 0;
  z-index: 999999;
  overflow: hidden;
  background: #fff;
  transition: all 0.6s ease-out;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #fff;
  border-color: var(--color-primary) transparent var(--color-primary) transparent;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1.5s linear infinite;
  animation: animate-preloader 1.5s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.header {
  z-index: 997;
  position: absolute;
  padding: 30px 0;
  top: 0;
  left: 0;
  right: 0;
}

.header .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.header .logo h1 {
  font-size: 24px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 0;
  font-family: var(--font-primary);
}

.header .logo h1 span {
  color: var(--color-primary);
}

/*--------------------------------------------------------------
# Desktop Navigation
--------------------------------------------------------------*/
@media (min-width: 1280px) {
  .navbar {
    padding: 0;
  }

  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navbar li {
    position: relative;
  }

  .navbar>ul>li {
    white-space: nowrap;
    padding: 10px 0 10px 28px;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 3px;
    font-family: var(--font-primary);
    font-size: 14px;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.6);
    text-transform: uppercase;
    white-space: nowrap;
    transition: 0.3s;
    position: relative;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar>ul>li>a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -6px;
    left: 0;
    background-color: var(--color-primary);
    visibility: hidden;
    width: 0px;
    transition: all 0.3s ease-in-out 0s;
  }

  .navbar a:hover:before,
  .navbar li:hover>a:before,
  .navbar .active:before {
    visibility: visible;
    width: 100%;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #fff;
  }

  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 28px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
  }

  .navbar .dropdown ul li {
    min-width: 200px;
  }

  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: var(--color-default);
    font-weight: 400;
  }

  .navbar .dropdown ul a i {
    font-size: 12px;
  }

  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: var(--color-primary);
  }

  .navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }

  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
}

@media (min-width: 1280px) and (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

@media (min-width: 1280px) {

  .mobile-nav-show,
  .mobile-nav-hide {
    display: none;
  }
}

/*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/
@media (max-width: 1279px) {
  .navbar {
    position: fixed;
    top: 0;
    right: -100%;
    width: 100%;
    max-width: 400px;
    bottom: 0;
    transition: 0.3s;
    z-index: 9997;
  }

  .navbar ul {
    position: absolute;
    inset: 0;
    padding: 50px 0 10px 0;
    margin: 0;
    background: rgba(0, 0, 0, 0.8);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    font-family: var(--font-primary);
    font-size: 15px;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.7);
    white-space: nowrap;
    text-transform: uppercase;
    transition: 0.3s;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #fff;
  }

  .navbar .dropdown ul,
  .navbar .dropdown .dropdown ul {
    position: static;
    display: none;
    padding: 10px 0;
    margin: 10px 20px;
    transition: all 0.5s ease-in-out;
    border: 1px solid #222428;
  }

  .navbar .dropdown>.dropdown-active,
  .navbar .dropdown .dropdown>.dropdown-active {
    display: block;
  }

  .mobile-nav-show {
    position: relative;
    color: #fff;
    font-size: 28px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    z-index: 9999;
    padding-right: 10px;
  }

  .mobile-nav-hide {
    color: #fff;
    font-size: 32px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    position: fixed;
    right: 20px;
    top: 20px;
    z-index: 9999;
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .navbar {
    right: 0;
  }

  .mobile-nav-active .navbar:before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: 9996;
  }
}

/*--------------------------------------------------------------
# Get Started Section
--------------------------------------------------------------*/
.get-started .content {
  padding: 30px 0;
}

.get-started .content h3 {
  font-size: 36px;
  color: var(--color-secondary);
  font-weight: 600;
  margin-bottom: 25px;
  padding-bottom: 25px;
  position: relative;
}

.get-started .content h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 4px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.get-started .content p {
  font-size: 14px;
}

.get-started .php-email-form {
  background: #fff;
  padding: 30px;
  height: 100%;
}

@media (max-width: 575px) {
  .get-started .php-email-form {
    padding: 20px;
  }
}

.get-started .php-email-form h3 {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.get-started .php-email-form p {
  font-size: 14px;
  margin-bottom: 20px;
}

.get-started .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.get-started .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.get-started .php-email-form input,
.get-started .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}

.get-started .php-email-form input:focus,
.get-started .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.get-started .php-email-form input {
  padding: 12px 15px;
}

.get-started .php-email-form textarea {
  padding: 12px 15px;
}

.get-started .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.get-started .php-email-form button[type=submit]:hover {
  background: rgba(254, 185, 0, 0.8);
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Constructions Section
--------------------------------------------------------------*/
.constructions .card-item {
  border: 1px solid rgba(82, 86, 94, 0.2);
  background: #fff;
  position: relative;
  border-radius: 0;
}

.constructions .card-item .card-bg {
  min-height: 300px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.constructions .card-item .card-body {
  padding: 30px;
}

.constructions .card-item h4 {
  font-weight: 700;
  font-size: 20px;
  margin-bottom: 15px;
  color: var(--color-secondary);
}

.constructions .card-item p {
  color: var(--color-secondary);
  margin: 0;
}

/*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
.services .service-item {
  padding: 40px;
  background: #fff;
  height: 100%;
}

.services .service-item .icon {
  width: 48px;
  height: 48px;
  position: relative;
  margin-bottom: 50px;
}

.services .service-item .icon i {
  color: var(--color-secondary);
  font-size: 40px;
  transition: ease-in-out 0.3s;
  z-index: 2;
  position: relative;
  line-height: 1.8;
}

.services .service-item .icon:before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background: #f0f1f2;
  border-radius: 50px;
  z-index: 1;
  top: 10px;
  right: -15px;
  transition: 0.3s;
}

.services .service-item h3 {
  color: var(--color-default);
  font-weight: 700;
  margin: 0 0 20px 0;
  padding-bottom: 8px;
  font-size: 22px;
  position: relative;
  display: inline-block;
  border-bottom: 4px solid #ebebed;
  transition: 0.3s;
}

.services .service-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .service-item .readmore {
  margin-top: 15px;
  display: inline-block;
  color: var(--color-primary);
}

.services .service-item:hover .icon:before {
  background: var(--color-primary);
}

.services .service-item:hover h3 {
  border-color: var(--color-primary);
}

/*--------------------------------------------------------------
# Features Section
--------------------------------------------------------------*/
.features .nav-tabs {
  border: 0;
}

.features .nav-link {
  padding: 15px 0;
  transition: 0.3s;
  color: var(--color-secondary);
  border-radius: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  height: 100%;
  border: 0;
  border-bottom: 4px solid #e2e4e6;
}

.features .nav-link i {
  padding-right: 15px;
  font-size: 48px;
}

.features .nav-link h4 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}

@media (max-width: 575px) {
  .features .nav-link h4 {
    font-size: 16px;
  }
}

.features .nav-link:hover {
  color: var(--color-primary);
}

.features .nav-link.active {
  color: var(--color-primary);
  background-color: transparent;
  border-color: var(--color-primary);
}

.features .tab-content {
  margin-top: 30px;
}

.features .tab-pane h3 {
  font-weight: 700;
  font-size: 32px;
  position: relative;
  margin-bottom: 20px;
  padding-bottom: 20px;
}

.features .tab-pane h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 3px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.features .tab-pane ul {
  list-style: none;
  padding: 0;
}

.features .tab-pane ul li {
  padding-top: 10px;
}

.features .tab-pane ul i {
  font-size: 20px;
  padding-right: 4px;
  color: var(--color-primary);
}

.features .tab-pane p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Our Projects Section
--------------------------------------------------------------*/
.projects .portfolio-flters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.projects .portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 0;
  font-size: 18px;
  font-weight: 500;
  margin: 0 10px;
  line-height: 1;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.projects .portfolio-flters li:hover,
.projects .portfolio-flters li.filter-active {
  color: var(--color-primary);
}

.projects .portfolio-flters li:first-child {
  margin-left: 0;
}

.projects .portfolio-flters li:last-child {
  margin-right: 0;
}

@media (max-width: 575px) {
  .projects .portfolio-flters li {
    font-size: 14px;
    margin: 0 5px;
  }
}

.projects .portfolio-content {
  position: relative;
  overflow: hidden;
}

.projects .portfolio-content img {
  transition: 0.3s;
}

.projects .portfolio-content .portfolio-info {
  opacity: 0;
  position: absolute;
  inset: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.6);
  padding: 15px;
}

.projects .portfolio-content .portfolio-info h4 {
  font-size: 14px;
  padding: 5px 10px;
  font-weight: 400;
  color: #fff;
  display: inline-block;
  background-color: var(--color-primary);
}

.projects .portfolio-content .portfolio-info p {
  position: absolute;
  bottom: 10px;
  text-align: center;
  display: inline-block;
  left: 0;
  right: 0;
  font-size: 16px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.8);
}

.projects .portfolio-content .portfolio-info .preview-link,
.projects .portfolio-content .portfolio-info .details-link {
  position: absolute;
  left: calc(50% - 40px);
  font-size: 26px;
  top: calc(50% - 14px);
  color: #fff;
  transition: 0.3s;
  line-height: 1.2;
}

.projects .portfolio-content .portfolio-info .preview-link:hover,
.projects .portfolio-content .portfolio-info .details-link:hover {
  color: var(--color-primary);
}

.projects .portfolio-content .portfolio-info .details-link {
  left: 50%;
  font-size: 34px;
  line-height: 0;
}

.projects .portfolio-content:hover .portfolio-info {
  opacity: 1;
}

.projects .portfolio-content:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials .testimonial-wrap {
  padding-left: 50px;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  padding: 30px 30px 30px 60px;
  margin: 0 15px 30px 0;
  min-height: 200px;
  box-shadow: 0px 2px 20px rgba(82, 86, 94, 0.1);
  position: relative;
  background: #fff;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 10px;
  border: 6px solid #fff;
  position: absolute;
  left: -45px;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #000;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item .stars {
  margin: 10px 0;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: #ffd565;
  font-size: 26px;
  line-height: 0;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 15px auto 15px auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #d5d7da;
  opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

@media (max-width: 767px) {
  .testimonials .testimonial-wrap {
    padding-left: 0;
  }

  .testimonials .testimonials-carousel,
  .testimonials .testimonials-slider {
    overflow: hidden;
  }

  .testimonials .testimonial-item {
    padding: 30px;
    margin: 15px;
  }

  .testimonials .testimonial-item .testimonial-img {
    position: static;
    left: auto;
  }
}

/*--------------------------------------------------------------
# Alt Services Section
--------------------------------------------------------------*/
.alt-services .img-bg {
  background-size: cover;
  background-position: center center;
  min-height: 400px;
}

.alt-services h3 {
  font-size: 28px;
  font-weight: 700;
  color: var(--color-secondary);
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.alt-services h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.alt-services .icon-box {
  margin-top: 50px;
}

.alt-services .icon-box i {
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-right: 25px;
  font-size: 28px;
  width: 56px;
  height: 56px;
  border-radius: 4px;
  line-height: 0;
  box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.08);
  background-color: #fff;
  transition: 0.3s;
}

.alt-services .icon-box:hover i {
  background-color: var(--color-primary);
  color: #fff;
}

.alt-services .icon-box h4 {
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 18px;
}

.alt-services .icon-box h4 a {
  color: #000;
  transition: 0.3s;
}

.alt-services .icon-box h4 a:hover {
  color: var(--color-primary);
}

.alt-services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about h2 {
  font-size: 48px;
  font-weight: 700;
  font-family: var(--font-secondary);
  margin: 30px 0;
}

@media (min-width: 991px) {
  .about h2 {
    max-width: 65%;
    margin: 0 0 80px 0;
  }
}

.about .our-story {
  padding: 40px;
  background-color: #f5f6f7;
}

@media (min-width: 991px) {
  .about .our-story {
    padding-right: 35%;
  }
}

.about .our-story h4 {
  text-transform: uppercase;
  font-size: 18px;
  color: #838893;
}

.about .our-story h3 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 20px;
  color: var(--color-secondary);
}

.about .our-story p:last-child {
  margin-bottom: 0;
}

.about ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.about ul li {
  padding: 5px 0;
  display: flex;
  align-items: center;
}

.about ul i {
  font-size: 20px;
  margin-right: 4px;
  color: var(--color-primary);
}

.about .watch-video i {
  font-size: 32px;
  transition: 0.3s;
  color: var(--color-primary);
}

.about .watch-video a {
  font-weight: 600;
  color: var(--color-secondary);
  margin-left: 8px;
  transition: 0.3s;
}

.about .watch-video:hover a {
  color: var(--color-primary);
}

.about .about-img {
  min-height: 600px;
  background-size: cover;
  background-position: center;
}

@media (min-width: 992px) {
  .about .about-img {
    position: absolute;
    top: 0;
    right: 0;
  }
}

/*--------------------------------------------------------------
# Stats Counter Section
--------------------------------------------------------------*/
.stats-counter .stats-item {
  background: #fff;
  box-shadow: 0px 0 30px rgba(82, 86, 94, 0.05);
  padding: 30px;
}

.stats-counter .stats-item i {
  font-size: 42px;
  line-height: 0;
  margin-right: 20px;
  color: var(--color-primary);
}

.stats-counter .stats-item span {
  font-size: 36px;
  display: block;
  font-weight: 600;
  color: var(--color-secondary);
}

.stats-counter .stats-item p {
  padding: 0;
  margin: 0;
  font-family: var(--font-primary);
  font-size: 14px;
}

/*--------------------------------------------------------------
# Our Team Section
--------------------------------------------------------------*/
.team .member {
  position: relative;
}

.team .member .member-img {
  margin: 0 80px;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
}

@media (max-width: 1024px) {
  .team .member .member-img {
    margin: 0 60px;
  }
}

.team .member .member-img img {
  position: relative;
  z-index: 1;
}

.team .member .member-img .social {
  position: absolute;
  inset: 0;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  padding-bottom: 20px;
  transition: 0.3s;
  visibility: hidden;
  opacity: 0;
}

.team .member .member-img .social a {
  transition: 0.3s;
  color: #fff;
  font-size: 20px;
  margin: 0 8px;
}

.team .member .member-img .social a:hover {
  color: var(--color-primary);
}

.team .member .member-info {
  margin-top: 30px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 6px;
  font-size: 18px;
  color: var(--color-secondary);
}

.team .member .member-info span {
  font-style: italic;
  display: block;
  font-size: 15px;
  color: #838893;
  margin-bottom: 10px;
}

.team .member .member-info p {
  margin-bottom: 0;
  font-size: 14px;
}

.team .member:hover .member-img .social {
  padding-bottom: 0;
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Servie Cards Section
--------------------------------------------------------------*/
.services-cards h3 {
  font-size: 20px;
  font-weight: 700;
  color: var(--color-secondary);
}

.services-cards p {
  font-size: 15px;
}

.services-cards ul li {
  display: flex;
  align-items: center;
  font-size: 14px;
  padding-top: 10px;
}

.services-cards ul li i {
  font-size: 16px;
  color: var(--color-primary);
  margin-right: 6px;
}

/*--------------------------------------------------------------
# Projet Details Section
--------------------------------------------------------------*/
.project-details .portfolio-details-slider img {
  width: 100%;
}

.project-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.7);
  opacity: 1;
}

.project-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

.project-details .swiper-button-prev,
.project-details .swiper-button-next {
  width: 48px;
  height: 48px;
}

.project-details .swiper-button-prev:after,
.project-details .swiper-button-next:after {
  color: rgba(255, 255, 255, 0.8);
  background-color: rgba(0, 0, 0, 0.2);
  font-size: 24px;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.project-details .swiper-button-prev:hover:after,
.project-details .swiper-button-next:hover:after {
  background-color: rgba(0, 0, 0, 0.6);
}

@media (max-width: 575px) {

  .project-details .swiper-button-prev,
  .project-details .swiper-button-next {
    display: none;
  }
}

.project-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.project-details .portfolio-info h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.project-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.project-details .portfolio-info ul li {
  display: flex;
  flex-direction: column;
  padding-bottom: 15px;
}

.project-details .portfolio-info ul strong {
  text-transform: uppercase;
  font-weight: 400;
  color: #838893;
  font-size: 14px;
}

.project-details .portfolio-info .btn-visit {
  padding: 8px 40px;
  background: var(--color-primary);
  color: #fff;
  border-radius: 50px;
  transition: 0.3s;
}

.project-details .portfolio-info .btn-visit:hover {
  background: #ffc019;
}

.project-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
  color: var(--color-secondary);
}

.project-details .portfolio-description p {
  padding: 0;
}

.project-details .portfolio-description .testimonial-item {
  padding: 30px 30px 0 30px;
  position: relative;
  background: #f5f6f7;
  height: 100%;
  margin-bottom: 50px;
}

.project-details .portfolio-description .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50px;
  border: 6px solid #fff;
  float: left;
  margin: 0 10px 0 0;
}

.project-details .portfolio-description .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 15px 0 5px 0;
  padding-top: 20px;
}

.project-details .portfolio-description .testimonial-item h4 {
  font-size: 14px;
  color: #6c757d;
  margin: 0;
}

.project-details .portfolio-description .testimonial-item .quote-icon-left,
.project-details .portfolio-description .testimonial-item .quote-icon-right {
  color: #ffd565;
  font-size: 26px;
  line-height: 0;
}

.project-details .portfolio-description .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.project-details .portfolio-description .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.project-details .portfolio-description .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 0 0 0;
  padding: 0;
}

/*--------------------------------------------------------------
# Service Details Section
--------------------------------------------------------------*/
.service-details .services-list {
  padding: 10px 30px;
  border: 1px solid #d5d7da;
  margin-bottom: 20px;
}

.service-details .services-list a {
  display: block;
  line-height: 1;
  padding: 8px 0 8px 15px;
  border-left: 3px solid #d9e3e8;
  margin: 20px 0;
  color: var(--color-secondary);
  transition: 0.3s;
}

.service-details .services-list a.active {
  font-weight: 700;
  border-color: var(--color-primary);
}

.service-details .services-list a:hover {
  border-color: var(--color-primary);
}

.service-details .services-img {
  margin-bottom: 20px;
}

.service-details h3 {
  font-size: 28px;
  font-weight: 700;
}

.service-details h4 {
  font-size: 20px;
  font-weight: 700;
}

.service-details p {
  font-size: 15px;
}

.service-details ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.service-details ul li {
  padding: 5px 0;
  display: flex;
  align-items: center;
}

.service-details ul i {
  font-size: 20px;
  margin-right: 8px;
  color: var(--color-primary);
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact .info-item {
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.08);
  padding: 20px 0 30px 0;
}

.contact .info-item i {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  font-size: 24px;
  line-height: 0;
  color: var(--color-primary);
  border-radius: 50%;
  border: 2px dotted #ffd565;
}

.contact .info-item h3 {
  font-size: 20px;
  color: #6c757d;
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-item p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.08);
  padding: 30px;
}

.contact .php-email-form .form-group {
  padding-bottom: 20px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 5px;
}

.contact .php-email-form button[type=submit]:hover {
  background: rgba(254, 185, 0, 0.8);
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Recent Blog Posts Section
--------------------------------------------------------------*/
.recent-blog-posts .post-item {
  box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
  transition: 0.3s;
}

.recent-blog-posts .post-item .post-img img {
  transition: 0.5s;
}

.recent-blog-posts .post-item .post-date {
  position: absolute;
  right: 0;
  bottom: 0;
  background-color: var(--color-primary);
  color: #fff;
  text-transform: uppercase;
  font-size: 13px;
  padding: 6px 12px;
  font-weight: 500;
}

.recent-blog-posts .post-item .post-content {
  padding: 30px;
}

.recent-blog-posts .post-item .post-title {
  font-size: 24px;
  color: var(--color-secondary);
  font-weight: 700;
  transition: 0.3s;
  margin-bottom: 15px;
}

.recent-blog-posts .post-item .meta i {
  font-size: 16px;
  color: var(--color-primary);
}

.recent-blog-posts .post-item .meta span {
  font-size: 15px;
  color: #838893;
}

.recent-blog-posts .post-item hr {
  color: #888;
  margin: 20px 0;
}

.recent-blog-posts .post-item .readmore {
  display: flex;
  align-items: center;
  font-weight: 600;
  line-height: 1;
  transition: 0.3s;
  color: #838893;
}

.recent-blog-posts .post-item .readmore i {
  line-height: 0;
  margin-left: 6px;
  font-size: 16px;
}

.recent-blog-posts .post-item:hover .post-title,
.recent-blog-posts .post-item:hover .readmore {
  color: var(--color-primary);
}

.recent-blog-posts .post-item:hover .post-img img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  overflow-x: hidden;
  padding: 0;
}

.hero .carousel {
  width: 100%;
  min-height: 100vh;
  padding: 80px 0;
  margin: 0;
  position: relative;
}

.hero .carousel-item {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
  z-index: 1;
  transition-duration: 0.4s;
}

.hero .carousel-item::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.7);
  position: absolute;
  inset: 0;
}

.hero .info {
  position: absolute;
  inset: 0;
  z-index: 2;
}

@media (max-width: 768px) {
  .hero .info {
    padding: 0 50px;
  }
}

.hero .info h2 {
  color: #fff;
  margin-bottom: 30px;
  padding-bottom: 30px;
  font-size: 56px;
  font-weight: 700;
  position: relative;
}

.hero .info h2:after {
  content: "";
  position: absolute;
  display: block;
  width: 80px;
  height: 4px;
  background: var(--color-primary);
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

@media (max-width: 768px) {
  .hero .info h2 {
    font-size: 36px;
  }
}

.hero .info p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
}

.hero .info .btn-get-started {
  font-family: var(--font-primary);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
  border: 2px solid var(--color-primary);
}

.hero .info .btn-get-started:hover {
  background: var(--color-primary);
}

.hero .carousel-control-prev {
  justify-content: start;
}

@media (min-width: 640px) {
  .hero .carousel-control-prev {
    padding-left: 15px;
  }
}

.hero .carousel-control-next {
  justify-content: end;
}

@media (min-width: 640px) {
  .hero .carousel-control-next {
    padding-right: 15px;
  }
}

.hero .carousel-control-next-icon,
.hero .carousel-control-prev-icon {
  background: none;
  font-size: 26px;
  line-height: 0;
  background: rgba(255, 255, 255, 0.2);
  color: rgba(255, 255, 255, 0.6);
  border-radius: 50px;
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero .carousel-control-prev,
.hero .carousel-control-next {
  z-index: 3;
  transition: 0.3s;
}

.hero .carousel-control-prev:focus,
.hero .carousel-control-next:focus {
  opacity: 0.5;
}

.hero .carousel-control-prev:hover,
.hero .carousel-control-next:hover {
  opacity: 0.9;
}

/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog .blog-pagination {
  margin-top: 30px;
  color: #838893;
}

.blog .blog-pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}

.blog .blog-pagination li {
  margin: 0 5px;
  transition: 0.3s;
}

.blog .blog-pagination li a {
  color: var(--color-secondary);
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog .blog-pagination li.active,
.blog .blog-pagination li:hover {
  background: var(--color-primary);
  color: #fff;
}

.blog .blog-pagination li.active a,
.blog .blog-pagination li:hover a {
  color: var(--color-white);
}

/*--------------------------------------------------------------
# Blog Posts List
--------------------------------------------------------------*/
.blog .posts-list .post-item {
  box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
  transition: 0.3s;
}

.blog .posts-list .post-img img {
  transition: 0.5s;
}

.blog .posts-list .post-date {
  position: absolute;
  right: 0;
  bottom: 0;
  background-color: var(--color-primary);
  color: #fff;
  text-transform: uppercase;
  font-size: 13px;
  padding: 6px 12px;
  font-weight: 500;
}

.blog .posts-list .post-content {
  padding: 30px;
}

.blog .posts-list .post-title {
  font-size: 24px;
  color: var(--color-secondary);
  font-weight: 700;
  transition: 0.3s;
  margin-bottom: 15px;
}

.blog .posts-list .meta i {
  font-size: 16px;
  color: var(--color-primary);
}

.blog .posts-list .meta span {
  font-size: 15px;
  color: #838893;
}

.blog .posts-list p {
  margin-top: 20px;
}

.blog .posts-list hr {
  color: #888;
  margin-bottom: 20px;
}

.blog .posts-list .readmore {
  display: flex;
  align-items: center;
  font-weight: 600;
  line-height: 1;
  transition: 0.3s;
  color: #838893;
}

.blog .posts-list .readmore i {
  line-height: 0;
  margin-left: 6px;
  font-size: 16px;
}

.blog .posts-list .post-item:hover .post-title,
.blog .posts-list .post-item:hover .readmore {
  color: var(--color-primary);
}

.blog .posts-list .post-item:hover .post-img img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Blog Details
--------------------------------------------------------------*/
.blog .blog-details {
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  padding: 30px;
}

.blog .blog-details .post-img {
  margin: -30px -30px 20px -30px;
  overflow: hidden;
}

.blog .blog-details .title {
  font-size: 28px;
  font-weight: 700;
  padding: 0;
  margin: 20px 0 0 0;
  color: var(--color-secondary);
}

.blog .blog-details .content {
  margin-top: 20px;
}

.blog .blog-details .content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .blog-details .content blockquote {
  overflow: hidden;
  background-color: rgba(82, 86, 94, 0.06);
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .blog-details .content blockquote p {
  color: var(--color-default);
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .blog-details .content blockquote:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: var(--color-primary);
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .blog-details .meta-top {
  margin-top: 20px;
  color: #6c757d;
}

.blog .blog-details .meta-top ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog .blog-details .meta-top ul li+li {
  padding-left: 20px;
}

.blog .blog-details .meta-top i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
  color: var(--color-primary);
}

.blog .blog-details .meta-top a {
  color: #6c757d;
  font-size: 14px;
  display: inline-block;
  line-height: 1;
  transition: 0.3s;
}

.blog .blog-details .meta-top a:hover {
  color: var(--color-primary);
}

.blog .blog-details .meta-bottom {
  padding-top: 10px;
  border-top: 1px solid rgba(82, 86, 94, 0.15);
}

.blog .blog-details .meta-bottom i {
  color: #838893;
  display: inline;
}

.blog .blog-details .meta-bottom a {
  color: rgba(82, 86, 94, 0.8);
  transition: 0.3s;
}

.blog .blog-details .meta-bottom a:hover {
  color: var(--color-primary);
}

.blog .blog-details .meta-bottom .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .cats li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .tags li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags li+li::before {
  padding-right: 6px;
  color: var(--color-default);
  content: ",";
}

.blog .blog-details .meta-bottom .share {
  font-size: 16px;
}

.blog .blog-details .meta-bottom .share i {
  padding-left: 5px;
}

.blog .post-author {
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .post-author img {
  max-width: 120px;
  margin-right: 20px;
}

.blog .post-author h4 {
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
  color: var(--color-secondary);
}

.blog .post-author .social-links {
  margin: 0 10px 10px 0;
}

.blog .post-author .social-links a {
  color: rgba(82, 86, 94, 0.5);
  margin-right: 5px;
}

.blog .post-author p {
  font-style: italic;
  color: rgba(108, 117, 125, 0.8);
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Blog Sidebar
--------------------------------------------------------------*/
.blog .sidebar {
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .sidebar .sidebar-title {
  font-size: 20px;
  font-weight: 700;
  padding: 0;
  margin: 0;
  color: var(--color-secondary);
}

.blog .sidebar .sidebar-item+.sidebar-item {
  margin-top: 40px;
}

.blog .sidebar .search-form form {
  background: #fff;
  border: 1px solid rgba(82, 86, 94, 0.3);
  padding: 3px 10px;
  position: relative;
}

.blog .sidebar .search-form form input[type=text] {
  border: 0;
  padding: 4px;
  border-radius: 4px;
  width: calc(100% - 40px);
}

.blog .sidebar .search-form form input[type=text]:focus {
  outline: none;
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  background: var(--color-primary);
  color: var(--color-secondary);
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  line-height: 0;
}

.blog .sidebar .search-form form button i {
  line-height: 0;
}

.blog .sidebar .search-form form button:hover {
  background: rgba(254, 185, 0, 0.8);
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li+li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: var(--color-secondary);
  transition: 0.3s;
}

.blog .sidebar .categories ul a:hover {
  color: var(--color-default);
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: rgba(54, 77, 89, 0.4);
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item {
  display: flex;
}

.blog .sidebar .recent-posts .post-item+.post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  max-width: 80px;
  margin-right: 15px;
}

.blog .sidebar .recent-posts h4 {
  font-size: 15px;
  font-weight: bold;
}

.blog .sidebar .recent-posts h4 a {
  color: var(--color-secondary);
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: var(--color-primary);
}

.blog .sidebar .recent-posts time {
  display: block;
  font-style: italic;
  font-size: 14px;
  color: rgba(54, 77, 89, 0.4);
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: #838893;
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid rgba(131, 136, 147, 0.4);
  display: inline-block;
  transition: 0.3s;
}

.blog .sidebar .tags ul a:hover {
  color: var(--color-secondary);
  border: 1px solid var(--color-primary);
  background: var(--color-primary);
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: rgba(131, 136, 147, 0.8);
  font-size: 14px;
}

/*--------------------------------------------------------------
# Blog Comments
--------------------------------------------------------------*/
.blog .comments {
  margin-top: 30px;
}

.blog .comments .comments-count {
  font-weight: bold;
}

.blog .comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .comments .comment .comment-img {
  margin-right: 14px;
}

.blog .comments .comment .comment-img img {
  width: 60px;
}

.blog .comments .comment h5 {
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .comments .comment h5 a {
  font-weight: bold;
  color: var(--color-default);
  transition: 0.3s;
}

.blog .comments .comment h5 a:hover {
  color: var(--color-primary);
}

.blog .comments .comment h5 .reply {
  padding-left: 10px;
  color: var(--color-secondary);
}

.blog .comments .comment h5 .reply i {
  font-size: 20px;
}

.blog .comments .comment time {
  display: block;
  font-size: 14px;
  color: rgba(82, 86, 94, 0.8);
  margin-bottom: 5px;
}

.blog .comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .comments .reply-form p {
  font-size: 14px;
}

.blog .comments .reply-form input {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .comments .reply-form input:focus {
  box-shadow: none;
  border-color: rgba(254, 185, 0, 0.8);
}

.blog .comments .reply-form textarea {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: rgba(254, 185, 0, 0.8);
}

.blog .comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .comments .reply-form .btn-primary {
  border-radius: 4px;
  padding: 10px 20px;
  border: 0;
  background-color: var(--color-secondary);
}

.blog .comments .reply-form .btn-primary:hover {
  color: var(--color-secondary);
  background-color: var(--color-primary);
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  color: #fff;
  background: url("../img/footer-bg.jpg") top center no-repeat;
  background-size: cover;
  font-size: 14px;
  padding: 80px 0 60px 0;
  position: relative;
}

.footer:before {
  content: "";
  background: rgba(0, 0, 0, 0.8);
  position: absolute;
  inset: 0;
}

.footer .footer-content .footer-info {
  margin-bottom: 30px;
}

.footer .footer-content .footer-info h3 {
  font-size: 28px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
  text-transform: uppercase;
}

.footer .footer-content .footer-info h3 span {
  color: var(--color-primary);
}

.footer .footer-content .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: var(--font-primary);
  color: #fff;
}

.footer .footer-content .social-links a {
  font-size: 18px;
  display: inline-block;
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  line-height: 1;
  margin-right: 8px;
  border-radius: 4px;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

.footer .footer-content .social-links a:hover {
  background: var(--color-primary);
  text-decoration: none;
}

.footer .footer-content h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-content .footer-links {
  margin-bottom: 30px;
}

.footer .footer-content .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-content .footer-links ul li {
  padding: 8px 0;
}

.footer .footer-content .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-content .footer-links ul a {
  color: rgba(255, 255, 255, 0.6);
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

.footer .footer-content .footer-links ul a:hover {
  color: #fff;
}

.footer .footer-legal .copyright {
  padding-top: 30px;
  border-top: 1px solid rgba(255, 255, 255, 0.15);
}

.footer .footer-legal .credits {
  padding-top: 4px;
  font-size: 13px;
  color: #fff;
}

.footer .footer-legal .credits a {
  color: var(--color-primary);
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="hmpg.php" class="logo d-flex align-items-center">
        <h1>GOOD DAY DENTAL CLINIC</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="file:///C:/wamp64/www/Semend/Views/index.html" class="active">Home</a></li>
          <li><a href="http://localhost/semend/Views/ptn_tkn.php">Book Doctors Appointment</a></li>
          <li><a href="http://localhost/semend/Views/drslogin.php">Doctors Login</a></li>
          <li><a href="http://localhost/semend/Views/adminlogin.php">Admin Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <br><span>Good Day Dental Clinic</span></h2>
            <p data-aos="fade-up">Taking care of your health includes taking care of your smile. Oral health is essential for your well-being. Dental checkups and cleanings are important for healthy teeth and gums and for diagnosing and treating dental problems. Our friendly, high quality dental team is here to help you keep your teeth healthy.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="http://localhost/semend/Views/ptn_tkn.php" class="btn-get-started">Get Appointment</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(https://img.freepik.com/vector-premium/hombre-que-sufre-silla-dental_107173-5572.jpg)"></div>
      <div class="carousel-item" style="background-image: url(https://img.freepik.com/free-vector/dentist-woman-examining-patient-teeth-clinic_1308-91587.jpg?w=1060&t=st=1670777905~exp=1670778505~hmac=c2ff6018c0b70bf2ec9e4c69b763e46633acd8779663a33f55656df750869914)"></div>
      <div class="carousel-item" style="background-image: url(https://img.freepik.com/free-vector/patient-dentist-office-illustration_33099-2009.jpg?w=1380&t=st=1670777935~exp=1670778535~hmac=4c564ce5807803b626bbd583169c757d32926de8c1b4d86ae00b7916c42b326f)"></div>
      <div class="carousel-item" style="background-image: url(https://img.freepik.com/vector-premium/paciente-asustado-sillon-dental_107173-10252.jpg?w=1380)"></div>

      <!-- <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a> -->

      <!-- <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>

  </section><!-- End Hero Section -->
  <!-- Vendor JS Files -->
  <script src="C:\wamp64\www\Semend\Assets\vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
  <script src="C:\wamp64\www\Semend\Assets\vendor\aos/aos.js"></script>
  <script src="C:\wamp64\www\Semend\Assets\vendor\glightbox\js\glightbox.min.js"></script>
  <script src="C:\wamp64\www\Semend\Assets\isotope-layout\isotope.pkgd.min.js"></script>
  <script src="C:\wamp64\www\Semend\Assets\vendor\swiper\swiper-bundle.min.js"></script>
  <script src="C:\wamp64\www\Semend\Assets\vendor\purecounter\purecounter_vanilla.js"></script>
  <script src="C:\wamp64\www\Semend\Assets\vendor\php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="C:\wamp64\www\Semend\Assets\js\main.js"></script>

</body>

</html>