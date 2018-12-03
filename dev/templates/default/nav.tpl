<div class="navbar-default {$navhome|default:'navbar navbar-static-top'}">
  {if isset($navhome) eq false}
  <div class="container">
  {/if}
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  </div>
  <a class="navbar-brand" href="#" title="Yogabar" alt="Yogabar"></a>
 <div class="navbar-collapse collapse ">
    <!-- <ul class="nav navbar-nav {if isset($navhome) eq false}pull-right{/if}"> -->
        <ul class="nav navbar-nav">
      <li class="{$home}"><a href="index.php">Home</a></li>
      <li class="{$about}"><a href="about.php">About</a></li>
      <li class="{$appointments}"><a href="appointments.php">Appointments</a></li>
      <li class="{$schedule}"><a href="schedule.php">One Week Class Schedule</a></li>
      <li class="{$package}"><a href="package.php">Package</a></li>
      <li class="{$teacher}"><a href="teacher.php">Teacher</a></li>
    <!-- <li class="{$blog}"><a href="blog.php">Blog</a></li>-->
<!--     <li class="{$event}"><a href="notes.php">Events</a></li> -->
  <li class="dropdown {$event}"> 
        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
        <ul class="dropdown-menu">
 <li class="{$carddt}"><a href="notes.php">Workshop</a></li> 
         <li class="{$event}"><a href="notes_re.php">Retreat</a></li>
          
        </ul>
      </li>
 
 
 {if isset($smarty.session.UNAME)}

     <li class="dropdown {$profile}"> 
        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
        <ul class="dropdown-menu">
         <li class="{$profile}"><a href="profile.php">Profile({$smarty.session.UNAME})</a></li>
           <li class="{$carddt}"><a href="card_dt_add.php">Payment card details</a></li> 
         <li class="{$changepwd}"><a href="change_pwd.php">Change password</a></li> 
	<li class="{$history}"><a href="user_pack.php">Payment history</a></li>
        <li class="{$loginout}"><a href="logout.php">Logout</a></li>
        </ul>
      </li>

	<!--<li class="{$profile}"><a href="profile.php">Profile({$smarty.session.UNAME})</a></li>
         <li class="{$changepwd}"><a href="change_pwd.php">Change password</a></li> 
	<li class="{$history}"><a href="user_pack.php">Payment history</a></li>
        <li class="{$loginout}"><a href="logout.php">Logout</a></li> -->
 {/if}

 {if !isset($smarty.session.UNAME)}
<!--<li class="{$Registration}"><a href="register.php">Registration</a></li> -->
 <li class="{$login}"><a href="login.php">Login</a></li>
 {/if}
 
<!--
      <li class="dropdown {$news}"> 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="snapshot.php">Snapshot</a></li>
          <li><a href="notes.php">Event</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </li> -->
      <li class="{$faq}"><a href="faq.php">FAQ</a></li>
      <li class="{$contact}"><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
  {if isset($navhome) eq false}
  </div>
  {/if}
  <!--/.nav-collapse -->
</div>
