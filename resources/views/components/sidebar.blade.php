<div class="sidebar">
    <div class="sidebar-container">
        <div class="logo">
            <h1>Gym System<span>.</span></h1>
            
            <small>Admin dashboard</small>
        </div>
        {{-- <hr> --}}

        <div class="admin-info">
    
            <div class="img-welcome">
                <div class="img-cont">
                    <img src="img/user.jpg" alt="">
                </div>
    
                @auth
                    <p class="welcome-msg">Hello, <span class="name">{{ auth()->user()->name }}</span></p>
                @endauth

            </div>
    
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" name="logout" class="logout-btn"><i class="fa-solid fa-right-to-bracket"></i></button>
            </form>
        
        </div> 


        <div class="navigation-container">
            <h3>Navigation</h3>
            
            <div class="sidebar-list">
                    
                <a href={{ route('home') }} class="sidebar-link"><span class="icon"><i class="fa-solid fa-house"></i></span>Dashboard</a>    
    
    
                <a href={{ route('members') }} class="sidebar-link"><span class="icon"><i class="fa-solid fa-user"></i></span>Members</a>
    
                    
                <a href="#" class="sidebar-link"><span class="icon"><i class="fa-solid fa-money-bill"></i></span>Payments</a>
    
                        
                    
                <a href="#" class="sidebar-link"><span class="icon"><i class="fa-solid fa-file"></i></span>Subscriptions</a>
            </div>
        </div>

    </div>
</div>