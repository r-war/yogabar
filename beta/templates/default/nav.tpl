<div class="navbar-default {$navhome|default:'navbar navbar-static-top'}">
  {if isset($navhome) eq false}
  <div class="container">
  {/if}
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  </div>
  <a class="navbar-brand" href="#" title="Yogabar" alt="Yogabar">Yogabar</a>
  <div class="navbar-collapse collapse ">
    <ul class="nav navbar-nav {if isset($navhome) eq false}pull-right{/if}">
      <li class="{$home}"><a href="index.php">Home</a></li>
      <li class="{$about}"><a href="about.php">About</a></li>
      <li class=""><a href="https://clients.mindbodyonline.com/classic/ws?studioid=248385&stype=-102">Booking </a></li>
      <li class="{$package}"><a href="package.php">Package</a></li>
      <li class="{$teacher}"><a href="teacher.php">Teacher</a></li>
      <li class="dropdown {$news}"> 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="snapshot.php">Snapshot</a></li>
          <li><a href="notes.php">Event</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </li>
      <li class="{$faq}"><a href="faq.php">FAQ</a></li>
      <li class="{$contact}"><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
  {if isset($navhome) eq false}
  </div>
  {/if}
  <!--/.nav-collapse -->
</div>