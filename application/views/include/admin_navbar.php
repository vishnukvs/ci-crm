<div class="dashboard">
       <div class="navbar navbar-inverse navbar-fixed">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
                <li class="active"><a href="<?=base_url('/dashboard');?>"><i class="icon-home icon-white"></i>Home</a></li>
                <li><a href="<?=base_url('/quotes');?>">Quotes</a></li>
                <li><a href="<?=base_url('/events');?>">Events</a></li>
                <li><a href="<?=base_url('/clients');?>">Clients</a></li>
                <li><a href="<?=base_url('/venues');?>">Veneus</a></li>
                <li><a href="<?=base_url('/expos');?>">Expos</a></li>
                 <li><a href="<?=base_url('/emails');?>"><i class="icon-envelope icon-white"></i>Email</a></li>
            </ul>
            <form class="navbar-search pull-left">
            <input type="text" class="search-query" placeholder="Search">
            </form>
              <ul class="nav secondary-nav pull-right">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="icon-wrench"></i>  Setup</a></li>
                     <div class="divider">
                     </div>
                    <li><a href="#">Logout</a></li>
                  </ul>
              </ul>
          </div>
        </div>
      </div><!--end of nav bar-->
  </div><!--end of dashboard-->
