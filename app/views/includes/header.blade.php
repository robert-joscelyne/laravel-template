<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div class="navbar-collapse collapse">
         <?php
         if (Auth::check())
         {
            $email = Auth::user()->email;
            echo "<p class='navbar-brand'>$email</p>";
            echo "<a class='navbar-brand navbar-right' href='/logout'>Logout</a>";
         }
         else
         {
            ?>
         <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
               <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
               <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
         </form>
         <?php
         }
         ?>
      </div><!--/.navbar-collapse -->
   </div>
</div>