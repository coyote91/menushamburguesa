<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

 <link rel="stylesheet" href="./css/style.css">


  </head>
  <body>


<!--  URL original del menu    https://www.hartisland.net/      --->

<a href="" id="toggle-nav" class="header-button  "> <!---  añadir clase  open    para que salga la x al dar click -->
  <span class="hamburger">
    <span class="base"></span>
  </span>
  <span class="label">Menu</span>
</a>


<nav id="main-nav" role="navigation" class="open"> <!--- open -->
      <div id="page-overlay" style="display: none;"></div>      <!-- si se da click entonces añadir   display: block;  --->
      <ul>
        <li><a href="/" address="true">Home</a></li>
        <li><a href="/about" address="true">The Hart Island project</a>
          <ul>
            <li><a href="/about" address="true">About us</a></li>
            <li><a href="/mission" address="true">Our Mission</a></li>
            <li><a href="/board" address="true">The Board</a></li>
            <li><a href="/history" address="true">The History</a></li>
            <li><a href="/faq" address="true">FAQ</a></li>
          </ul>
        </li>
        <li><a href="/burial_records/search" address="true">Search</a></li>
        <li><a href="/burial_records/map" address="true">Interactive map</a></li>
        <li><a href="/news_and_events" address="true">News and events</a></li>
        <li><a href="/album_categories" address="true">Media gallery</a></li>
        <li><a href="/donate" address="true">Help and donate</a></li>
        <li><a href="/contact" address="true">Contact</a></li>
        <li class="menu-social">
          <a target="_blank" rel="nofollow" href="https://www.facebook.com/hartisland?ref=hl" class="social-button icon-facebook"></a>
          <a target="_blank" rel="nofollow" href="https://twitter.com/hartisland" class="social-button icon-twitter"></a>
          <a class="social-button icon-mail" rel="nofollow" target="_blank" href="/contact"></a>
        </li>
      </ul>
    </nav>

  </body>
</html>
