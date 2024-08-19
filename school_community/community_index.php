<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<link rel="stylesheet" href="./assets/css/swiper.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/community.css">
<title>Social Media Website</title>
</head>
<body>
    <!----------Start nav bar------------>
    <nav>
    <div class="container nav-container">
        <div class="logo">
            <h3>Mofmed <span> Community</span></h3>
        </div>
        <div class="search-bar">
            <i class="fa fa-search"></i>
            <input type="search" placeholder="Search for User">
        </div>
        <div class="add-post">
            <label for="add-post" class="btn btn-primary mini-button">Add Post</label>
            <div class="profile-picture" id="my-profile-picture">
                <img src="./assets/images/profile-1.png" alt="">
            </div>
        </div>
    </div>
    </nav>
    <!----------End nav bar------------>

    <!----------Start Main Section------------>
    <main>
        <div class="container main-container">

            <!----------- Main Left Start----------->
            <div class="main-left">
                <!--......Profile......-->
                <a class="profile">
                    <div class="profile-picture" id="my-profile-picture">
                        <img src="./assets/images/img/profile-1.jpeg" alt="">
                    </div>
                    <div class="profile-handle">
                        <h4>Tommy Henderson</h4>
                        <p class="text-gry">
                            @BlueStreamz
                        </p>
                    </div>
                </a>

                <!--............Profile End............-->



                <!--...........Start Aside Bar..........-->
                <aside>

                    <a class="menu-item active">
                        <span><img src="./assets/icons/house-door.svg" alt=""></span> <h3>Home</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="./assets/icons/joystick.svg" alt=""></span> <h3>Explore</h3>
                    </a>

                    <a class="menu-item" id="Notify-box">
                        <span><img src="./assets/icons/bell.svg" alt=""></span> 
                        <small class="notify-counter nt" id="ntCounter1">7</small> <h3>Notification</h3>
                        
                    </a>

                    <!--............Notification Box Start............-->
                    <div class="notification-box">
                        <div>
                         <div class="profile-picture">
                             <img src="./assets/images/img/n1.jpg" alt="">
                         </div>
                         <div class="notification-body">
                             <b>Maria Mili</b> accepted your friend request
                             <small class="text-gry">1 DAY(S) AGO</small>
                         </div>
                     </div>
                     <div>
                         <div class="profile-picture">
                             <img src="./assets/images/img/n2.png" alt="">
                         </div>
                         <div class="notification-body">
                             <b>John Evan</b> and <b>and 17 others</b> commented on your post
                             <small class="text-gry">2 HOUR(S) Ago</small>
                         </div>
                     </div>
                     <div>
                         <div class="profile-picture">
                             <img src="./assets/images/img/n3.png" alt="">
                         </div>
                         <div class="notification-body">
                             <b>Emily Blakes</b> and <b>and 13 others</b> liked your post!
                             <small class="text-gry">Just Now</small>
                         </div>
                     </div>
                     <div>
                         <div class="profile-picture">
                             <img src="./assets/images/img/n4.png" alt="">
                         </div>
                         <div class="notification-body">
                             <b>Benjamin Frank</b> and <b>10 others</b> liked your post
                             <small class="text-gry">6 HOUR(s) Ago</small>
                         </div>
                     </div>
                     <div>
                         <div class="profile-picture">
                             <img src="./assets/images/img/n5.png" alt="">
                         </div>
                         <div class="notification-body">
                             <b>Mark Trump</b> and <b>31 others</b> commented on your post
                             <small class="text-gry">RECENTLY</small>
                         </div>
                     </div>
                 </div>
                    <!--............Notification Box End............-->

                    <a class="menu-item"  id="messageMenu">
                        <span><img src="./assets/icons/chat-left-dots.svg" alt=""></span> 
                        <small class="notify-counter" id="ntCounter2">9+</small> <h3>Messages</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="./assets/icons/bookmark.svg" alt=""></span> <h3>Bookmarks</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="./assets/icons/graph-up-arrow.svg" alt=""></span> <h3>Analytics</h3>
                    </a>

                    <a class="menu-item" id="theme">
                        <span><img src="./assets/icons/palette.svg" alt=""></span> <h3>Themes</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="./assets/icons/gear.svg" alt=""></span> <h3>Settings</h3>
                    </a>

                    <!--............Add Post Btn............-->
                    <label for="add-post" class="btn btn-primary btn-lg" id="create-lg">Create A Post</label>

                </aside>
                <!--...........End Aside Bar..........-->


            </div>
            <!----------- Main Left End----------->

                <!--..............Main Middle Start..............-->

            <div class="main-middle">
                <div class="middle-container">
                    <!--.............Start Stories..........-->
                <div class="stories">
                    <div class="swiper stories-wrapper mySwiper">
                        <div class="swiper-wrapper">
                                <div class="story swiper-slide">
                                    <img src="" alt="">
                                    <div class="profile-picture" id="my-profile-picture">
                                        <img src="./assets/images/img/profile-1.jpeg" alt="">
                                    </div>
                                    <label for="add-story" class="add-story">
                                        <i class="fa fa-plus" id="upload"></i>
                                        <p>Add To Your <br> Story!</p>
                                    </label>
                                    <input type="file" accept="image/jpg, image/png, image/jpeg" id="add-story">
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st1.jpg" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s1.jpg" alt="">
                                    </div>
                                    <p>Benjamin Frank</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st2.jpeg" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s2.jpg" alt="">
                                    </div>
                                    <p>Maria Mili</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st3.jpg" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s3.jpg" alt="">
                                    </div>
                                    <p>John Evan</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st4.jpg" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s5.jpg" alt="">
                                    </div>
                                    <p>Mark Trump</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st5.jpg" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s4.jpg" alt="">
                                    </div>
                                    <p>Emily Blakes</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st6.jpg" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s6.jpg" alt="">
                                    </div>
                                    <p>Lex Luthor</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/n3.png" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/st5.jpg" alt="">
                                    </div>
                                    <p>Afonja Esther</p>
                                </div>
                                <div class="story swiper-slide">
                                    <img src="./assets/images/img/st9.png" alt="">
                                    <div class="profile-picture">
                                        <img src="./assets/images/img/s5.jpg" alt="">
                                    </div>
                                    <p>Anuoluwa Rex</p>
                                </div>
                            </div>
                    </div>
                </div>
                <!--.............End Stories..........-->
                </div>

                <!--..............Post Input............-->
                <form class="add-post input-post">
                    <div class="profile-picture" id="my-profile-picture">
                        <img src="./assets/images/img/profile-1.jpeg" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind ?" id="add-post">
                    <input type="submit" value="post" class="btn btn-primary">
                </form>

                <!--..............Feed Aria Start..............-->
                <div class="feeds">
                    <div class="feed">
                        <!--..............Feed Top 1..............-->
                                <div class="feed-top">
                                    <div class="user">
                                        <div class="profile-picture" id="my-profile-picture">
                                            <img src="./assets/images/img/profile-1.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h3>Tommy Henderson</h3>
                                            <div class="time text-gry">
                                                <small>Delta, <span>JUST NOW</span></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit">
                                        <img src="./assets/icons/three-dots.svg" alt="">
                                        <ul class="edit-menu">
                                            <li><i class="fa fa-edit"></i><b>Edit</b></li>
                                            <li><i class="fa fa-bullhorn"></i><b>Report this post!</b></li>
                                        </ul>
                                    </div>
                                </div>
                        <!--..............Feed Img..............-->
                        <div class="feed-img">
                            <h2>My Latest Snapshot!
                            </h2>
                            <img src="./assets/images/img/Fedd0.jpg" alt="">
                        </div>
                        <!--..............Feed Action Aria..............-->
                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="fa fa-heart"></i></span>
                                <span><i class="fa fa-comment"></i></span>
                                <span><i class="fa fa-retweet"></i></span>
                            </div>
                            <div class="bookmark">
                                <i class="fa fa-bookmark"></i>
                            </div>
                        </div>
        
                        <!--..............Liked by..............-->
                        <div class="liked-by">
                        <span><img src="./assets/images/img/n2.png" alt=""></span>
                        <span><img src="./assets/images/img/n3.png" alt=""></span>
                        <span><img src="./assets/images/img/n4.png" alt=""></span>
                        <p><b>Akintunde Eric</k> and <b>7 others has commented</b></p>
                        </div>  
        
        
                        <!--.............Caption................-->
                        <div class="caption">
                            <div class="title">It's Tommy again!, Been exploring the hidden parts of the school recently.
                                You wouldn't believe just how photogenic this place is! it absolutely rocks!
                                Check it out!!</div>
                            <small><b>Mary Kofts</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere libero ut molestias voluptatum animi pariatur
                            <span class="hash-tag">#photography</span></small>
                        </div>
        
                        <!--.............Comments................-->
                        <div class="comments text-gry">
                            View all comments
                        </div>
                    </div>
                    <div class="feed">
                <!--..............Feed Top 0..............-->
                        <div class="feed-top">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/st4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Iran Habib</h3>
                                    <div class="time text-gry">
                                        <small>KANO, <span>2 DAYS AGO</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="edit">
                                <img src="./assets/icons/three-dots.svg" alt="">
                                <ul class="edit-menu">
                                    <li><i class="fa fa-edit"></i>Edit</li>
                                    <li><i class="fa fa-bullhorn"></i>Report this post!</li>
                                </ul>
                            </div>
                        </div>
                <!--..............Feed Img..............-->
                <div class="feed-img">
                    <h2>Hello Mofmed, I'm Habib currently in Mofmed for an intership. I'll be in your care!</h2>
                    <img src="./assets/images/img/feed1.jpeg" alt="">
                </div>
                <!--..............Feed Action Aria..............-->
                <div class="action-button">
                    <div class="interaction-button">
                        <span><i class="fa fa-heart"></i></span>
                        <span><i class="fa fa-comment"></i></span>
                        <i class="fa fa-retweet"></i></span>
                    </div>
                    <div class="bookmark">
                        <i class="fa fa-bookmark"></i>
                    </div>
                </div>

                <!--..............Liked by..............-->
                <div class="liked-by">
                <span><img src="./assets/images/img/n2.png" alt=""></span>
                <span><img src="./assets/images/img/n3.png" alt=""></span>
                <span><img src="./assets/images/img/n4.png" alt=""></span>
                <p><b>John Diggles</k> and <b>77 others has commented</b></p>
                </div>  


                <!--.............Caption................-->
                <div class="caption">
                    <div class="title">Hello Mofmed, I'm Habib currently in Mofmed for an intership. I'll be in your care!</div>
                    <small><b>Lana White</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere libero ut molestias voluptatum animi pariatur
                    <span class="hash-tag">#lifestyle</span></small>
                </div>

                <!--.............Comments................-->
                <div class="comments text-gry">
                    View all comments
                </div>
                    </div>
                    <div class="feed">
                        <!--..............Feed Top2..............-->
                        <div class="feed-top">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/st5.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Omowanle Iyanu</h3>
                                    <div class="time text-gry">
                                        <small>LAGOS, <span>2 DAYS and 3 HOURS AGO</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="edit">
                                <img src="./assets/icons/three-dots.svg" alt="">
                                <ul class="edit-menu">
                                    <li><i class="fa fa-edit"></i>Edit</li>
                                    <li><i class="fa fa-bullhorn"></i>Report this post!</li>
                                </ul>
                            </div>
                        </div>
                        <!--..............Feed Img..............-->
                        <div class="feed-img">
                            <h3>Baby Hamster!</h3>
                            <img src="./assets/images/img/feed2.jpg" alt="">
                        </div>
                        <!--..............Feed Action Aria..............-->
                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="fa fa-heart"></i></span>
                                <span><i class="fa fa-comment"></i></span>
                                <span><i class="fa fa-retweet"></i></span>
                            </div>
                            <div class="bookmark">
                                <i class="fa fa-bookmark"></i>
                            </div>
                        </div>
        
                        <!--..............Liked by..............-->
                        <div class="liked-by">
                        <span><img src="./assets/images/img/n3.png" alt=""></span>
                        <span><img src="./assets/images/img/f3.jpg" alt=""></span>
                        <span><img src="./assets/images/img/f2.jpg" alt=""></span>
                        <p><b>John Diggles</k> and <b>215 others comments</b></p>
                        </div>  
        
                        <!--.............Caption................-->
                        <div class="caption">
                            <div class="title">Hey Guys! I found this absolutely Adorbale hamster yesterday over by the playground!
                                It seems injured so i took her to the vet. You could come check her out at the school clinic!
                                His soo cute!</div>
                            <small><b>Oludare Courage</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere libero ut molestias voluptatum animi pariatur
                            <span class="hash-tag">#hamster#cutencuddly#luckyfind</span></small>
                        </div>
        
                        <!--.............Comments................-->
                        <div class="comments text-gry">
                            View all comments
                        </div>
                    </div>
                    <div class="feed">
                        <!--..............Feed Top3..............-->
                        <div class="feed-top">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/s8 (1).png" alt="">
                                </div>
                                <div class="info">
                                    <h3>Emily Akinlade</h3>
                                    <div class="time text-gry">
                                        <small>Abuja, <span>18 HOURS AGO</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="edit">
                                <img src="./assets/icons/three-dots.svg" alt="">
                                <ul class="edit-menu">
                                    <li><i class="fa fa-edit"></i>Edit</li>
                                    <li><i class="fa fa-bullhorn"></i>Report this post!</li>
                                </ul>
                            </div>
                        </div>
                        <!--..............Feed Img..............-->
                        <div class="feed-img">
                            <h3>Doctor's new assistant!</h3>
                            <img src="./assets/images/img/feed3.png" alt="">
                        </div>
                        <!--..............Feed Action Aria..............-->
                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="fa fa-heart"></i></span>
                                <span><i class="fa fa-comment"></i></span>
                                <span><i class="fa fa-retweet"></i></span>
                            </div>
                            <div class="bookmark">
                                <i class="fa fa-bookmark"></i>
                            </div>
                        </div>
                
                        <!--..............Liked by..............-->
                        <div class="liked-by">
                        <span><img src="./assets/images/img/st6.jpg" alt=""></span>
                        <span><img src="./assets/images/img/s3.jpg" alt=""></span>
                        <span><img src="./assets/images/img/s6.jpg" alt=""></span>
                        <p>Liked by <b>David Mark</k> and <b>54 others comments</b></p>
                        </div>  
                
                        <!--.............Caption................-->
                        <div class="caption">
                            <div class="title">Professor David asked for my help with the flood of patients yesterday!
                                Thankfully everyone got treated in time.I hope everyone remembers to wash their hands 
                                everytime the get the oppurtunity to! SAY NO TO GERMS!
                            </div>
                            <small><b>Jerry Simp</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere libero ut molestias voluptatum animi pariatur
                            <span class="hash-tag">#Training #Medical</span></small>
                        </div>
                
                        <!--.............Comments................-->
                        <div class="comments text-gry">
                            View all comments
                        </div>
                    </div>
                    <div class="feed">
                        <!--..............Feed Top4..............-->
                        <div class="feed-top">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/s9 (2).png" alt="">
                                </div>
                                <div class="info">
                                    <h3>Abraham Ikedu</h3>
                                    <div class="time text-gry">
                                        <small>Delta, <span>2 HOURS AND 18 MINUTES AGO</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="edit">
                                <img src="./assets/icons/three-dots.svg" alt="">
                                <ul class="edit-menu">
                                    <li><i class="fa fa-edit"></i>Edit</li>
                                    <li><i class="fa fa-bullhorn"></i>Report this post!</li>
                                </ul>
                            </div>
                        </div>
                        <!--..............Feed Img..............-->
                        <div class="feed-img">
                            <h3>New Fit Alert! </h3>
                            <img src="./assets/images/img/feed4.jpg" alt="">
                        </div>
                        <!--..............Feed Action Aria..............-->
                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="fa fa-heart"></i></span>
                                <span><i class="fa fa-comment"></i></span>
                                <span><i class="fa fa-retweet"></i></span>
                            </div>
                            <div class="bookmark">
                                <i class="fa fa-bookmark"></i>
                            </div>
                        </div>
                        
                        <!--..............Liked by..............-->
                        <div class="liked-by">
                            <span><img src="./assets/images/img/f4.jpg" alt=""></span>
                            <span><img src="./assets/images/img/st9.png" alt=""></span>
                            <span><img src="./assets/images/img/s6.jpg" alt=""></span>
                            <p>Liked by <b>Mary Kofts</k> and <b>549 others</b></p>
                        </div>  
                        
                        <!--.............Caption................-->
                        <div class="caption">
                            <div class="title">Wore a fit for baskeball pratice this morning! I just love how the sun bounces off 
                                the surfaces and reflects beauty! We are truly Wonderful Creatures...
                            </div>
                            <small><b>Lana White</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere libero ut molestias voluptatum animi pariatur
                            <span class="hash-tag">#lifestyle</span></small>
                        </div>
                        
                        <!--.............Comments................-->
                        <div class="comments text-gry">
                            View all comments
                        </div>
                    </div>
                    <div class="feed">
                        <!--..............Feed Top5..............-->
                        <div class="feed-top">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/st9.png" alt="">
                                </div>
                                <div class="info">
                                    <h3>Great Gymnist</h3>
                                    <div class="time text-gry">
                                        <small>Delta, <span>2 WEEKS AGO</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="edit">
                                <img src="./assets/icons/three-dots.svg" alt="">
                                <ul class="edit-menu">
                                    <li><i class="fa fa-edit"></i>Edit</li>
                                    <li><i class="fa fa-bullhorn"></i>Report this post!</li>
                                </ul>
                            </div>
                        </div>
                        <!--..............Feed Img..............-->
                        <div class="feed-img">
                            <h4>My Baby Girl!</h4>
                            <img src="./assets/images/img/feed6.png" alt="">
                        </div>
                        <!--..............Feed Action Aria..............-->
                        <div class="action-button">
                            <div class="interaction-button">
                                <span><i class="fa fa-heart"></i></span>
                                <span><i class="fa fa-comment"></i></span>
                                <span><i class="fa fa-retweet"></i></span>
                            </div>
                            <div class="bookmark">
                                <i class="fa fa-bookmark"></i>
                            </div>
                        </div>
                                
                        <!--..............Liked by..............-->
                        <div class="liked-by">
                            <span><img src="./assets/images/img/n2.png" alt=""></span>
                            <span><img src="./assets/images/img/n3.png" alt=""></span>
                            <span><img src="./assets/images/img/n4.png" alt=""></span>
                            <p><b>John Diggles</k> and <b>319 others comments</b></p>
                        </div>  
                                
                                
                        <!--.............Caption................-->
                        <div class="caption">
                            <div class="title">My babies grows up so fast! Adorable!</div>
                                <small><b>Gym Dude </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere libero ut molestias voluptatum animi pariatur
                                <span class="hash-tag">#Workout #Family</span></small>
                            </div>
                                
                        <!--.............Comments................-->
                        <div class="comments text-gry">
                            View all comments
                        </div>
                    </div>
                </div>
                <!-----------Return To Top Button----------->
                <button class="btn btn-primary top-button" id="topButton" onclick="goToTop()"><span><i class="fa fa-chevron-up"></i></span>Go to Top</button>
                <!--..............Feed Aria End..............-->
            </div>
            <!--..............Main Middle End..............-->


            <!----------- Main Right Start----------->
            <div class="main-right">
                    <!--...............Start Message............-->
                <div class="messages">
                    <!--...............Message Top............-->
                    <div class="message-top">
                        <h4>Message</h4> <a href="../../ChatApp/index.php"><button><span><i class="fa fa-edit"></i></span></button></a>
                    </div>
                    <!--..............Search Bar..............-->
                    <div class="message-search-bar">
                        <i class="fa fa-search"></i>
                        <input type="search" placeholder="Search message" id="message-search">
                    </div>
                    <!--...............Message Catergory............-->
                    <div class="message-categories">
                        <h6 class="active">New Chats</h6>
                        <h6>General</h6>
                        <h6 class="messsage-request">Requests(6)</h6>
                    </div>
                    <!--...............Messages............-->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="./assets/images/img/m1.jpg" alt="">
                            <div class="green-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Alexa Lisa</h5>
                            <p class="text-gry">
                                Tommy I need your notes!
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="./assets/images/img/m (7).png" alt="">
                            <div class="green-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Maria Mili</h5>
                            <p class="text-gry">
                                The club's meeting by 2!
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="./assets/images/img/m2.png" alt="">
                            <div class="in-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Akinjinmi Ayomide</h5>
                            <p class="text-gry">
                                Lol!
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="./assets/images/img/m3.jpg" alt="">
                            <div class="in-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Daniel Psalm</h5>
                            <p class="text-gry">
                                Bruh let's hop in COD sharp!
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="./assets/images/img/m4.png" alt="">
                            <div class="green-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Olubamise Praise</h5>
                            <p class="text-gry">
                                Submit to Precious quickly!
                            </p>
                        </div>
                    </div>
                </div>
                    <!--...............End Message............-->

                    <!--...............Start Friend Request............-->
                    <div class="friend-request">
                        <h4>Friend Requests</h4>
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/f1.jpg" alt="">
                                </div>
                                <div>
                                    <h5>Mark Daniel</h5>
                                    <p class="text-gry">
                                        4 mutual friends
                                    </p>
                                    <small class="text-gry alert">
                                        You have accepted this friend request
                                    </small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="decline">
                                    Delete
                                </div>
                            </div>
                        </div>
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/f2.jpg" alt="">
                                </div>
                                <div>
                                    <h5>Akinjimi Ayomide</h5>
                                    <p class="text-gry">
                                        16 mutual friends
                                    </p>
                                    <small class="text-gry alert">
                                        You have accepted this friend request
                                    </small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="decline">
                                    Delete
                                </div>
                            </div>
                        </div>
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/f3.jpg" alt="">
                                </div>
                                <div>
                                    <h5>Oluturoti Joshua</h5>
                                    <p class="text-gry">
                                        18 mutual friends
                                    </p>
                                    <small class="text-gry alert">
                                        You have accepted this friend request
                                    </small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="decline">
                                    Delete
                                </div>
                            </div>
                        </div>
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./assets/images/img/f4.jpg" alt="">
                                </div>
                                <div>
                                    <h5>Akinnagbe Racheal</h5>
                                    <p class="text-gry">
                                        9 mutual friends
                                    </p>
                                    <small class="text-gry alert">
                                        You have accepted this friend request
                                    </small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="decline">
                                    Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--...............End Friend Request............-->
            </div>
            <!----------- Main Right End----------->
        </div>
    </main>
    <!----------End Main Section------------>


    <!----------Start PopUps Aria------------>
    <!----------Start Profile PopUps------------>

    <div class="popup profile-popup">
        <div>
            <div class="popup-box profile-popup-box">
                <h1>Tommy Henderson</h1>
                <p>@BlueStreamz</p>
                <div id="my-profile-picture">
                    <img src="./assets/images/img/profile-1.jpeg">
                </div>
                <label for="profile-upload" class="btn btn-primary btn-lg">Update Profile Picture</label>
                <input type="file" accept="image/jpg, image/png, image/jpeg" id="profile-upload">
                <button class="btn btn-primary btn-lg">Log Out</button>
            </div>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>
    <!----------End Profile PopUps------------>


    <!----------Start Add Post Popup------------>
    <div class="popup add-post-popup">
        <div>
            <form class="popup-box add-post-popup">
                <h1>Add New Post</h1>
                <div class="row post-title">
                    <label>Title</label>
                    <input type="text" placeholder="What's on your mind?" id="add-post">
                </div>
                <div class="row post-img">
                    <img src="" id="postimg">
                    <label for="feed-pic-upload" class="feed-upload-button">
                        <span><i class="fa fa-plus"></i></span>
                        Upload a post!
                    </label>
                    <input type="file" accept="image/jpg, image/png, image/jpeg" id="feed-pic-upload">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add Post">
                </div>
            </form>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>
    <!----------End Add Post Popup------------>


    <!----------Start Theme Customize Popup------------>
    <div class="popup theme-customize">
        <div>
            <div class="popup-box theme-customize-popup-box">
                <h1>Customize Your Theme</h1>
                <p>Manage Your Font Size, Color, and Background</p>
    
                <!--............Font Size...........-->
                <div class="font-size">
                    <h4>Font Size</h4>
                    <div>
                        <div>
                            <h6>Aa</h6>
                        </div>
                        <div class="choose-size">
                            <span class="font-size-1"></span>
                            <span class="font-size-2 active"></span>
                            <span class="font-size-3"></span>
                            <span class="font-size-4"></span>
                            <span class="font-size-5"></span>
                        </div>
                        <div>
                            <h3>Aa</h3>
                        </div>
                    </div>
                </div>
                <!--.........Primary Colors............-->
                <div class="colors">
                    <h4>Color</h4>
                    <div class="choose-color">
                        <span class="color-1 active"></span>
                        <span class="color-2"></span>
                        <span class="color-3"></span>
                        <span class="color-4"></span>
                        <span class="color-5"></span>
                    </div>
                </div>
                <!--.........Background Colors.........-->
                <div class="background">
                    <h4>Background</h4>
                    <div class="choose-bg">
                        <div class="bg1 active">
                            <span></span>
                            <h5>Light</h5>
                        </div>
                        <div class="bg2">
                            <span></span>
                            <h5>Dark</h5>
                        </div>
                    </div>
                </div>
            </div>
            <span class="close"><i class="fa fa-close" id="close"></i></span>
        </div>
    </div>
    <!----------End Theme Customize Popup------------>


    <!----------End PopUps Aria------------>


<script src="./assets/js/swiper.js"></script>

<script src="./assets/js/community.js"></script>

</body>
</html>