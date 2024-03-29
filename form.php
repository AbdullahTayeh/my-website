<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/3c86a84a5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="file.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
    <title>Get In Touch | AbdullahTayeh</title>
  </head>

 
  <body>
    <header>
      
    <div id="nav-logo-section" class="nav-section ">
        <a href="index.html">
        <i class="fa-solid fa-star"></i>
        </a>
      </div>
      <div id="nav-link-section" class="nav-section">
        <A href="About.html">ABOUT</A>
        <A href="Work.html">WORK</A>
      </div>

      <div id="nav-social-section" class="nav-section">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=7868">
          <i class="fa-brands fa-whatsApp"></i>
        </a>

        <a target="_blank" href="https://github.com/AbdullahTayeh?tab=repositories" >
          <i class="fa-brands fa-gitHub"></i>
        </a>

        <a target="_blank" href="https://www.linkedin.com/in/abta/">
            <i class="fa-brands fa-linkedin"></i>
        </a>
      </div>
      <div id="nav-contact-section" class="nav-section">
      <a href="/form.html">GET IN TOUCH</a>
      </div>
    
    </header>
<main>
    <article data-index="0" data-status="active">
        <div class="article-image-section article-section"></div>
        <div class="article-description-section article-section">
          <h2>Where my coding journey started.</h2>
          <h1><a target="_blank" href="https://github.com/AbdullahTayeh?tab=repositories">Projects:</a> including <a target="_blank" href="https://github.com/AbdullahTayeh/ATM">ATM service</a>, <a target="_blank" href="https://github.com/AbdullahTayeh/Python-Library-Management">Queue Management System</a>.</h1>
        </div>
        <div class="article-title-section article-section">
          <h1>Python / C#</h1>
          <i class="fa-solid fa-comments"></i>
        </div>
        <div class="article-nav-section article-section">
          <button class="article-nav-button" type="button" onclick="handleLeftClick()">
              <i class="fa-sharp fa-solid fa-arrow-left"></i>
          </button>
          <button class="article-nav-button" type="button" onclick="handleRightClick()">
              <i class="fa-sharp fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </article>
      <article data-index="1" data-status="inactive">    
        <div class="article-image-section article-section"></div>
        <div class="article-description-section article-section">
         
          <img src="./WhatsApp Image 2023-04-09 at 14.21.20.jpeg">

        </div>
        <div class="article-title-section article-section">
            <h1>The University of Salford</h1>
            <i class="fa-solid fa-comments"></i>
        </div>
        <div class="article-nav-section article-section">
          <button class="article-nav-button" type="button" onclick="handleLeftClick()">
              <i class="fa-sharp fa-solid fa-arrow-left"></i>
          </button>
          <button class="article-nav-button" type="button" onclick="handleRightClick()">
              <i class="fa-sharp fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </article>
      <article data-index="2" data-status="inactive">    
        <div class="article-image-section article-section"></div>
        <div class="article-description-section article-section">
          <p><a target="_blank" href="https://www.w3schools.com/html/">*HTML </a>is the standard markup language for Web pages.</p>
          <p><a target="_blank" href="https://www.w3schools.com/css/">*CSS </a> is the language we use to style an HTML document.</p>
          <p><a target="_blank" href="https://www.w3schools.com/js/">*JavaScript </a> is a programming language that is one of the core technologies of the World Wide Web.</p>
        </div>
        <div class="article-title-section article-section">
          <h2>This Website has been done using Vanilla JS</h2>
          <i class="fa-solid fa-comments"></i>
        </div>
        <div class="article-nav-section article-section">
          <button class="article-nav-button" type="button" onclick="handleLeftClick()">
              <i class="fa-sharp fa-solid fa-arrow-left"></i>
          </button>
          <button class="article-nav-button" type="button" onclick="handleRightClick()">
              <i class="fa-sharp fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </article>
      <article data-index="3" data-status="inactive">    
        <div class="article-image-section article-section"></div>
        <div class="article-description-section article-section">

             <h2><a target="_blank" href="https://www.prisma.io/" >*Prisma: </a>  is a server-side library that helps developers read and write data to the database in an intuitive, efficient and safe way.</h2> 
             <h2> <a target="_blank" href="https://svelte.dev/" >*Svelte:</a> is a radical new approach to building user interfaces. Svelte shifts your work into a compile step that happens when you build your app.</h2>

        </div>
        <div class="article-title-section article-section">
          <h2>Learning top tier tech</h2>
          <i class="fa-solid fa-comments"></i>
        </div>
        <div class="article-nav-section article-section">
          <button class="article-nav-button" type="button" onclick="handleLeftClick()">
              <i class="fa-sharp fa-solid fa-arrow-left"></i>
          </button>
          <button class="article-nav-button" type="button" onclick="handleRightClick()">
              <i class="fa-sharp fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </article>
      <script src="file.js"></script>
    </body>

</main>

<?php


if($_POST["message"]) {


mail("your@email.address", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>




