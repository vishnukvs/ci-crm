<div class="dashboard">
       <div class="navbar navbar-inverse navbar-fixed">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
              <li class="active"><?=anchor('mysite/index','Home');?></li>
                <li class="active"><?=anchor('mysite/quotes','Quotes');?></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Clients</a></li>
                <li><?=anchor('mysite/venues','Venues');?></li>
                <li><a href="#">Expos</a></li>
                <li><a href="#"><i class="icon-envelope icon-white"></i>Email</a></li>
           </ul>
            <form class="navbar-search pull-left">
            <input type="text" class="search-query" placeholder="Search">
            </form>
              <ul class="nav secondary-nav pull-right">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-off icon-white"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     <li><a href="#">Logout</a>
                  </ul>
              </ul>
          </div>
        </div>
      </div><!--end of nav bar-->
  </div><!--end of dashboard-->