<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link " href="/">Home</a>
            <a class="nav-link " href="/news">News</a>


            @if(Auth::check()) 
	            <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>  
                <a class="nav-link" href="/news/create">Create News</a>  
                <a class="nav-link" href="/logout">Logout</a>
			@else
				 <a class="nav-link" href="/login">Login</a>
				 <a class="nav-link" href="/register">Register</a>
            @endif

        </nav>
    </div>
</div>