<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    

    <title>Portfolio</title>
</head>
<body>
    {{-- nav menu --}}
    <div class="container">
        <nav id="header">
            <div class="nav-logo">
                <p class="nav-name">logo</p>
            </div>
            <div class="nav-menu" id="myNavMenu">
                <ul class="nav_menu_list">

                    <li class="nav_list">
                        <a href="#home" class="nav_link active-link">Home</a>
                        <div class="circle"></div>
                    </li>

                    <li class="nav_list">
                        <a href="#about" class="nav_link ">About</a>
                        <div class="circle"></div>
                    </li>

                    <li class="nav_list">
                        <a href="#Projects" class="nav_link ">Projects</a>
                        <div class="circle"></div>
                    </li>

                    <li class="nav_list">
                        <a href="#contact" class="nav_link ">contact</a>
                        <div class="circle"></div>
                    </li>

                </ul>
            </div>
            {{-- Dark mode --}}
            
            <div class="mode">
                <div class="moon-sun" id="toggle-switch">
                    <i class="fa fa-moon" id="moon"></i>
                    <i class="fa fa-sun" id="sun" ></i>
                </div>
            </div>
            <div class="nav-menu-btn">
                <i class="uil uil-bars" onclick="myMenuFunctoin()"></i>
                
            </div>


        </nav>
        {{-- main --}}
        <main class="wrapper" >
            <section class="featured-box" id="home">
                <div class="featured-text">
                    <div class="hello">
                        <p>Hello I,m</p>
                    </div>
                    <div class="featured-name">
                        <span class="typedText"></span>
                    </div>
                    <div class="text-info">
                        <p>My name is Anas! I,m a web developer with 6+ Month of experience</p>
                    </div>
                    <div class="text-btn">
                        <button class=" btn hire-btn"><a href="#contact">Hire me</a></button>
                        <button class="btn"><a download="{{ asset('CV_2024-05-29_Anas_MOUHIB_HAYANI.pdf') }}" href="{{ asset('CV_2024-05-29_Anas_MOUHIB HAYANI (1).pdf') }}">Download cv</a> <i class="uil uil-file"></i></button>
                    </div>
                    <div class="socical_icons">
                        {{-- <div class="icon_circle"></div> --}}
                        <div class="icon"><i class="uil uil-instagram"></i></div>
                        <div class="icon"><i class="uil uil-behance-alt"></i></div>
                        <div class="icon"><i class="uil uil-github-alt"></i></div>
                        <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
                        
                    </div>
                </div>
                <div class="featured-image">
                    <div class="image">
                        <img src="{{ asset('asset/[removal.ai]_fe57d9a9-4743-4511-8fd2-1c00ccb4df75-popo.png') }}" alt="">
                    </div>
                </div>
            </section>
            {{-- about box --}}
            <section class="section" id="about">
            <div class="top-header"> 
                <h1>About me </h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="about-info">
                        <figure class="about-me">
                            <figcaption>
                               <img src="{{ asset('asset/popo.jpg') }}" alt="" class="profile" /> 
                                <h2>Web developer</h2>
                                <p>My name is Anas! I,m a web developer with 6+ Month of experience</p>
                        </figure>
                        <button class="about-me-btn">Hire Me</button>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-box">
                        <span class="title">HTML</span>
                        <div class="skill-bar html">
                            <span class="skill-per">
                                <span class="tooltip">80%</span>
                            </span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <span class="title">CSS</span>
                        <div class="skill-bar css">
                            <span class="skill-per">
                                <span class="tooltip">80%</span>
                            </span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <span class="title">JS</span>
                        <div class="skill-bar ">
                            <span class="skill-per js">
                                <span class="tooltip"> 63%</span>
                            </span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <span class="title">PHP</span>
                        <div class="skill-bar ">
                            <span class="skill-per php">
                                <span class="tooltip">40%</span>
                            </span>
                        </div>
                    </div>

                    <div class="skill-box">
                        <span class="title">LARAVEL</span>
                        <div class="skill-bar ">
                            <span class="skill-per laravel">
                                <span class="tooltip">60%</span>
                            </span>
                        </div>
                    </div>

                    
                    <div class="skill-box">
                        <span class="title">REACT JS</span>
                        <div class="skill-bar ">
                            <span class="skill-per reactjs">
                                <span class="tooltip">56%</span>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        {{-- Project box --}}
        <section class="section" id="Projects">
            <div class="top-header">
                <h1>Projects</h1>
            </div>
            <div class="project-container">
                <div class="project-box">
                    <i class="uil uil-briefcase-alt" ></i>
                    <h3>Comleted</h3>
                    <label>10+ Finished</label>
                </div>

                <div class="project-box">
                    <i class="uil uil-users-alt" ></i>
                    <h3>Clients</h3>
                    <label>70+ Happy clients</label>
                </div>

                <div class="project-box">
                    <i class="uil uil-award" ></i>
                    <h3>Xperience</h3>
                    <label>6+ Month in  web development</label>
                </div>

             

            </div>
        </section>
        {{-- contact bpx --}}
        <section class="section" id="contact">
            <div class="top-header">
                <h1>Let's Work Together</h1>
                <span>Do you have a project in your mind,  </span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="contact-info">
                        <h2>Find me <i class="uil uil-corner-right-down" ></i></h2>
                        <p><i class="uil uil-envelope"></i>email : 0656029237anas@gmail.com</p>
                        <p><i class="uil uil-phine" ></i>phone :+212775706688</p>
                    </div>
                </div>
                @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
   
        <div class="form-control">
            
            <form action="{{ url("contact") }}" method="POST">
                @csrf
            <div class="form-inputs">
                <input type="text" name="name" class="input-field" placeholder="Your Name" required>
                <input type="email" name="email" class="input-field" placeholder="Your Email" required>
            </div>
            <div class="text-area">
                <input type="text" name="subject" class="input-subject" placeholder="Subject" required>
                <textarea name="message" placeholder="Message" required></textarea>
            </div>
            <div class="form-button">
                <button type="submit" class="btn">Send<i class="uil uil-message"></i></button>
            </div>
        </form>
        </div>
   
            </div>
        </section>
        </main>
        {{-- footer --}}
        <footer>
            <div class="middle-footer">
                <ul class="footer-menu">
                    <li class="footer_menu_list">
                        <a href="#home">Home</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#about">About</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#projects">Projects</a>
                    </li>
                    <li class="footer_menu_list">
                        <a href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
            <div class="footer-social-icons">
                <div class="icon"><i class="uil uil-instagram"></i></div>
                        <div class="icon"><i class="uil uil-behance-alt"></i></div>
                        <div class="icon"><i class="uil uil-github-alt"></i></div>
                        <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
            </div>
            <div class="bottom-footer">
                <p>Copyrigh&copy; <a href="#home" style="text-decoration: none;">CodeCreators</a>All rights reserved</p>
            </div>
        </footer>
    </div>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
<script src="js/script.js"></script>
</html>
