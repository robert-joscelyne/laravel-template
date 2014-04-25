<div class="navbar navbar-fixed-top" role="navigation">
      <div class="navbar-header">
         <a class="navbar-brand" href="#"><img src="/img/logo.png"</a>
      </div>
      <div class="navbar-collapse collapse">
         <?php
         if (Auth::check())
         {
            $email = Auth::user()->email;
            echo "<p class='navbar-brand'>$email</p>";
            $uuid = uniqid ($prefix = "", $more_entropy = true);
            echo "<p class='navbar-brand'>$uuid</p>";
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
      <div class="headerdiv">&nbsp;</div>
</div>