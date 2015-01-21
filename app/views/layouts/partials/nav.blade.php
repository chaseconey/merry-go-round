<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Merry Go Round</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="nav" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
      	 <li>{{ HTML::link('/', 'Home') }}</li>
      	 <li>{{ HTML::linkRoute('receivers.index', 'Receivers') }}</li>
      	 <li>{{ HTML::linkRoute('calls.index', 'Calls') }}</li>
      </ul>

      <button type="button" class="btn btn-primary navbar-btn" id="call-btn">New Call</button>

      	<ul class="nav navbar-nav navbar-right">
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;
                @if(Auth::guest())
                    Guest
                @else
                    {{  Auth::user()->name }}
                @endif
                <span class="caret"></span>
			</a>
			<ul class="dropdown-menu" role="menu">
				@if(Auth::guest())
                    <li>{{ HTML::linkRoute('login', 'Login') }}</li>
                @else
                    <li>{{ HTML::linkRoute('logout', 'Logout') }}</li>
                @endif
			</ul>
		  </li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
