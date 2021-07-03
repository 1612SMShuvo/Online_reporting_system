<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
	<h3>EUROSIA</h3>
			
			
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			<li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}<i class="entypo-logout right"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
			{{-- <li>
				<a href="extra-login.html">
					Log Out 
				</a>
			</li> --}}
		</ul>
		
	</div>
	
</div>

<hr />