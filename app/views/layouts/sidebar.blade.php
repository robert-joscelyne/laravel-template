</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div id="wrapper">
   <div id="header">
      @include('includes.header')
   </div>
   <div id="navigation">
      @include('includes.menu-top')
   </div>
   <div id="contentliquid"><div id="content">
         @yield('content')
      </div></div>
   <div id="leftcolumn">
      @include('includes.sidebar')
   </div>
   <div id="footer">
      @include('includes.footer')
   </div>
</div>
</body>
</html>