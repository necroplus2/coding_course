   <!-- header -->
   <header>
       <!-- header inner -->
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-3 logo_section">
                   <div class="full">
                       <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-9">
                   <div class="menu-area">
                       <div class="limit-box">
                           <nav class="main-menu">
                               <ul class="menu-area-main">
                                   <li class="active">
                                       <a href="/home">Home</a>
                                   </li>
                                   <li>
                                       <a href="/about">About</a>
                                   </li>
                                   <li>
                                       <a href="/marketing">Marketing</a>
                                   </li>
                                   <li>
                                       <a href="/blog">Blog</a>
                                   </li>
                                   <li>
                                       <a href="/contact">Contact us</a>
                                   </li>
                                   @auth
                                       @if (auth()->user()->status == 'administrator' || auth()->user()->status == 'menthor')
                                           <li>
                                               <a href="/dashboard">Dashboard</a>
                                           </li>
                                       @endif
                                       <li>
                                           <a href="">Profil</a>
                                       </li>
                                       <li>
                                           <form action="/logout" method="post">
                                               @csrf
                                               <button type="submit" class="btn">logout</button>
                                           </form>
                                       </li>
                                   @else
                                       <li>
                                           <a href="/masuk">Login</a>
                                       </li>
                                       <li>
                                           <a href="/daftar">Register</a>
                                       </li>
                                   @endauth
                               </ul>
                           </nav>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- end header inner -->
   </header>
   <!-- end header -->
