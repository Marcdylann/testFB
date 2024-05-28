<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/fb.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/791e7f0898.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>
    <section class="flex-column loading">
        <img src="images/facebook.gif" alt="">
        <div class="meta">
            <img src="images/meta.png" alt="">
            <p>Logging in....</p>
            <div>
                <p>Welcome!</p>
            </div>
        </div>
    </section>
    <header>
        <nav>
            <div>
                <a href=""><img src="images/logo.png" alt=""></a>
            </div>
            <div class="search hover">
                <i class="fa-sharp fa-solid fa-magnifying-glass search_icon"></i>
                <input type="text" placeholder="Search Facebook">
            </div>
            <div class="top-icon hover toggle-menu">
                <a href="#!"><img src="images/bars.png" alt="" title="Menu"></a>
            </div>
            <ul class="top-menu">
                <li class="top-icon hover chats" data-chats="1">
                    <a href="#!"><img src="images/messenger.png" alt="" title="Messenger"></a>
                    <div class="top-icon-des">
                        <p class="top-icon-p"><small>Messenger</small></p>
                    </div>
                </li>
                <li class="top-icon hover notif" data-notif="5">
                    <a href="#!"><img src="images/notif.png" alt="" title="Notifications"></a>
                    <div class="top-icon-des">
                        <p class="top-icon-p"><small>Notifications</small></p>
                    </div>
                </li>
                <li class="top-icon profile-nav">
                    <a><img src="images/marc.png" alt=""></a>
                    <ul class="new">
                        <h3> What's New?    </h3>
                        <li>• Unlimited New Post</li>
                        <li>• Delete Existing Posts</li>
                        <li>• Liking Posts</li>
                        <li>• Delete Friend Request</li>
                        <li>• Stories Slider</li>
                        <li><small>Other functionalities are still under development, version 1.1.3-6</small></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <ul class="nav-menu flex-row">
            <li><a href="#!"><i class="fa-sharp fa-solid fa-house"></i></a></li>
            <li><a href="#!"><img src="images/friend-mobile.png" alt=""></a></li>
            <li><a href="#!"><img src="images/mes-mobile.png" alt=""></a></li>
            <li><a href="#!"><i class="fa-regular fa-bell"></i></a></li>
            <li><a href="#!"><i class="bx bx-slideshow"></i></a></li>
            <li><a href="#!"><i class="bx bx-store"></i></a></li>
        </ul>
    </header>
    <nav class="left-bar">
        <div class="signal"></div>
        <div class="flex-item">
            <div>
                <a href="#!" class="side-icon hover2">
                    <i class="fa-solid fa-house"></i>
                    <font>Home</font>
                </a>    
           </div>
           <div>
                <a href="https://www.facebook.com/Marcdylann" class="side-icon2 hover2">
                    <div class="circle-container2">
                        <img src="images/marc.png" alt="">
                    </div>
                    <font>Marc Dylan Pilapil</font>
                </a>
            </div>
        </div>
        <div class="flex-item">
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container">
                        <img src="images/compact.png" alt="">
                    </div>
                    <font>Menu</font>
                </a>
            </div>
           <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container2">
                        <img src="images/watch.png" alt="">
                    </div>
                    <font>Watch</font>
                </a>
            </div>
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container2">
                        <img src="images/marketplace.png" alt="">
                    </div>
                    <font>Marketplace</font>
                </a>
            </div>
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container2">  
                        <img src="images/gaming.png" alt="">
                    </div>
                    <font>Gaming</font>
                </a>
            </div>
        </div>
        <div class="flex-item">
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container">
                        <img src="images/group.png" alt="">
                    </div>
                    <font>Groups</font>
                </a>
            </div>
           <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container2 fp">
                        <img src="images/group-img-2.png" alt="">
                    </div>
                    <font>Bachelor of Science...</font>
                </a>
            </div>
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container2 fp">  
                        <img src="images/group-img-1.jpg" alt="">
                    </div>
                    <font>Programming Philippines</font>
                </a>
            </div>
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container2 fp">
                        <img src="images/fp2.png" alt="">
                    </div>
                    <font>Bachelor of Science...</font>
                </a>
            </div>
        </div>

        <div class="flex-item">
            <div>
                <a href="#!" class="side-icon2 hover2">
                    <div class="circle-container">
                        <img src="images/link.png" alt="">
                    </div>
                    <font>Shortcuts</font>
                </a>
            </div>
        </div>
        <div class="flex-item links">
            <small>
                <a href="https://www.facebook.com/privacy/policy/?entry_point=data_policy_redirect&entry=0">Privacy •</a>
                <a href="">Terms •</a>
                <a href="">Advertising •</a>
                <a href="">Ad Choices •</a>
                <a href="">Cookies •</a>
                <span>More •</span>
                <span>Meta &copy; 2022</span>
            </small>
            <br><br><br>
        </div>
    </nav>
     <!-- newsfeed -->
    <main class="flex-column main">
        <div class="newsfeed flex-column stories-wrapper">
            <ul class="flex-row stories-header">
                <li ><a href="#!">Stories</a>
                <div class="border-blue"></div></li>
                <li class="hover2"><a href="#!">Reels</a></li>
                <li class="hover2"><a href="#!">Rooms</a></li>
            </ul>  
            <div class="stories-scroll">
                <ul class="flex-row stories-container">
                    <div class="stories">
                        <div class="flex-column story create-story"></div>
                        <div class="create-container flex-row">
                            <div class="plus-story top-icon"><i class="fa fa-plus"></i></div>
                            <p><small>Create story</small></p>
                        </div>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-1"></div>
                        <p><small>Fireship io</small></p>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-2"></div>
                        <p><small>Pham Hanni</small></p>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-3"></div>
                        <p><small>Kim Minji</small></p>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-4"></div>
                        <p><small>Kang Haerin</small></p>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-5"></div>
                        <p><small>Mark Zuckerberg</small></p>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-6"></div>
                        <p><small>Jennie Kim</small></p>
                    </div>
                    <div class="stories">
                        <div class="flex-column story story-7"></div>
                        <p><small>Bae Suzy</small></p>
                    </div>
                </ul>
            </div>
            <div class="top-icon hover2 btn-prev">
                <a><img src="images/arrow.png" alt=""></a>
            </div>
            <div class="top-icon hover2 btn-next">
                <a><img src="images/arrow.png" alt=""></a>
            </div>
        </div>
        <div class="newsfeed flex-column header-whats">
            <div class="news-header flex-row border-bot">
                <div class="flex-row status">
                    <div class="news-dp">
                         <img src="images/marc.png" alt="">
                    </div>
                    <div class="mind-input">
                        <input class="hover post-input"type="text" placeholder="Whats on your mind, Marc?">
                    </div>
                 </div>
            </div>
            <div class="flex-row interact mind">
                <div class="flex-row interact-icons ii1">
                    <img src="images/live-vid.png" alt="">
                    <p class="live-video">Live video</p>
                </div>
                <div class="flex-row interact-icons ii2">
                    <img src="images/photo.png" alt="">
                    <p id="photo">Photo/Video</p>
                </div>
                <div class="flex-row interact-icons ii3">
                    <img src="images/happy.png" alt="">
                    <p>Feeling/activity</p>
                </div>
            </div>
        </div>
        
        <!-- ================================================== NEW POST ============================================= -->
        <div class="newsfeed post-container">
        </div>
        <!-- ============================================================================================================== -->
        <div class="newsfeed flex-column">
            <div class="news-header flex-row paragraph-box">
                <div class="flex-row">
                    <div class="news-dp">
                         <img src="images/marc.png" alt="">
                    </div>
                    <div class="dp-name">
                         <p><strong>Marc Dylan Pilapil</strong></p>
                         <div class="flex-row under-name">
                             <small>1d •</small><img src="images/globe.png" alt="" class="news-icon">
                         </div>
                    </div>
                 </div>
                 <div class="dot-menu hover2">
                    <img src="images/dotmenu.png" alt="" class="news-icon dot">
                    <div class="triangle"></div>
                    <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
                </div>
            </div>
            <div class="paragraph">
            </div>
            <div class="post">
                <div class="pic-container">
                    <img src="images/collage2.jpg" alt="">
                </div>
                <div class="pic-comment"></div>
            </div>
            <div class="news-footer flex-column">
                <div class="flex-row likes" >
                    <div class="flex-row" >
                        <img src="images/react2.png" alt="">
                        <p class="react-quan">229</p>
                    </div>
                    <div class="flex-row comments">
                        <p>105 Comments</p>
                        <p>3 Shares</p>
                    </div>
                </div>
                <div class="flex-row interact mind share">
                    <div class="flex-row interact-icons like-container" id="com-react">
                        <div class="like-icon">

                        </div>
                        <p class ="like">Like</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/comment.png" alt="">
                        <p>Comment</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/share.png" alt="">
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsfeed flex-column">
            <div class="news-header flex-row">
                <div class="flex-row">
                    <div class="news-dp">
                         <img src="images/koreanology.jpg" alt="">
                    </div>
                    <div class="dp-name">
                         <p><strong>ᴋᴏʀᴇᴀɴᴏʟᴏɢʏ</strong></p>
                         <div class="flex-row under-name">
                             <small>Sep 29 •</small><img src="images/globe.png" alt="" class="news-icon">
                         </div>
                    </div>
                 </div>
                 <div class="dot-menu hover2">
                    <img src="images/dotmenu.png" alt="" class="news-icon dot">
                    <div class="triangle"></div>
                    <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
                </div>
            </div>
            <div class="paragraph">
             <p>
                <i class="fa-solid fa-headphones"></i> 'Attention' - NewJeans
             </p>
            </div>
            <div class="post attention">
                <video autoplay controls muted>
                    <source src="images/attention.mp4">
                </video>
            </div>
            <div class="news-footer flex-column">
                <div class="flex-row likes" >
                    <div class="flex-row" >
                        <img src="images/react2.png" alt="">
                        <p class="react-quan">3K</p>
                    </div>
                    <div class="flex-row comments">
                        <p>45 Comments</p>
                        <p>582 Shares</p>
                    </div>
                </div>
                <div class="flex-row interact mind share">
                    <div class="flex-row interact-icons like-container" id="com-react">
                        <div class="like-icon">
                            
                        </div>
                        <p class ="like">Like</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/comment.png" alt="">
                        <p>Comment</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/share.png" alt="">
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="newsfeed flex-column">
            <div class="news-header flex-row paragraph-box">
                <div class="flex-row">
                    <div class="news-dp">
                         <img src="images/jennie-dp.jpg" alt="">
                    </div>
                    <div class="dp-name">
                         <p><strong>Jennie Ruby Jane</strong></p>
                         <div class="flex-row under-name">
                             <small>35m •</small><img src="images/globe.png" alt="" class="news-icon">
                         </div>
                    </div>
                 </div>
                 <div class="dot-menu hover2">
                    <img src="images/dotmenu.png" alt="" class="news-icon dot">
                    <div class="triangle"></div>
                    <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
                </div>
            </div>
            <div class="paragraph">
                <p>Jennie Kim serving looks 🌹</p>
            </div>
            <div class="post">
                <div class="pic-container">
                    <img src="images/jennie.jpg" alt="">
                </div>
                <div class="pic-comment"></div>
            </div>
            <div class="news-footer flex-column">
                <div class="flex-row likes" >
                    <div class="flex-row" >
                        <img src="images/react.png" alt="">
                        <p class="react-quan">4.6K</p>
                    </div>
                    <div class="flex-row comments">
                        <p>56 Comments</p>
                        <p>257 Shares</p>
                    </div>
                </div>
                <div class="flex-row interact mind share">
                    <div class="flex-row interact-icons like-container" id="com-react">
                        <div class="like-icon">
                        </div>
                        <p class ="like">Like</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/comment.png" alt="">
                        <p>Comment</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/share.png" alt="">
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsfeed flex-column">
            <div class="news-header flex-row">
                <div class="flex-row">
                    <div class="news-dp">
                         <img src="images/kodego-dp.png" alt="">
                    </div>
                    <div class="dp-name">
                         <p><strong>Kode Go</strong></p>
                         <div class="flex-row under-name">
                             <small>Sponsored •</small><img src="images/globe.png" alt="" class="news-icon">
                         </div>
                    </div>
                 </div>
                 <div class="dot-menu hover2">
                    <img src="images/dotmenu.png" alt="" class="news-icon dot">
                    <div class="triangle"></div>
                    <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
                </div>
            </div>
            <div class="paragraph">
             <p>
                Start your tech career with KodeGo!
                <br><br>
                Take it from John Michael Baldonado, a KodeGo graduate who landed his dream job in the tech industry even without a college degree.
                <br><br>
                Here's what John Michael liked most about our bootcamp:
                <br><br>
                ✅ Teamwork when accomplishing tasks
                <br>
                ✅ Hands-on training & beginner-friendly lessons
                <br>
                ✅ Endorsement to various companies after the bootcamp
                <br><br>
                Pursue your dream career. Sign up at KodeGo today.
             </p>
            </div>
            <div class="post">
                <video autoplay controls muted>
                    <source src="images/kodego.mp4">
                </video>
            </div>
            <div class="news-footer flex-column">
                <div class="flex-row likes" >
                    <div class="flex-row" >
                        <img src="images/react2.png" alt="">
                        <p class="react-quan" data-quan="3">2.5K</p>
                    </div>
                    <div class="flex-row comments">
                        <p>248 Comments</p>
                        <p>308 Shares</p>
                    </div>
                </div>
                <div class="flex-row interact mind share">
                    <div class="flex-row interact-icons like-container" id="com-react">
                        <div class="like-icon">
                            
                        </div>
                        <p class ="like">Like</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/comment.png" alt="">
                        <p>Comment</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/share.png" alt="">
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsfeed flex-column">
            <div class="news-header flex-row">
                <div class="flex-row">
                    <div class="news-dp">
                         <img src="images/marc.png" alt="">
                    </div>
                    <div class="dp-name">
                         <p><strong>Marc Dylan Pilapil</strong></p>
                         <div class="flex-row under-name">
                             <small>1m •</small><img src="images/globe.png" alt="" class="news-icon">
                         </div>
                    </div>
                 </div>
                <div class="dot-menu hover2">
                     <img src="images/dotmenu.png" alt="" class="news-icon dot">
                     <div class="triangle"></div>
                     <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
                </div>
            </div>
            <div class="paragraph">
    
            </div>
            <div class="post">
                <video autoplay controls muted>
                    <source src="images/portfolio.mp4">
                </video>
            </div>
            <div class="news-footer flex-column">
                <div class="flex-row likes" >
                    <div class="flex-row" >
                        <img src="images/react.png" alt="">
                        <p class="react-quan">5K</p>
                    </div>
                    <div class="flex-row comments">
                        <p>355 Comments</p>
                        <p>101 Shares</p>
                    </div>
                </div>
                <div class="flex-row interact mind share">
                    <div class="flex-row interact-icons like-container" id="com-react">
                        <div class="like-icon">
                            
                        </div>
                        <p class ="like">Like</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/comment.png" alt="">
                        <p>Comment</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/share.png" alt="">
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsfeed flex-column">
            <div class="news-header flex-row paragraph-box">
                <div class="flex-row">
                    <div class="news-dp">
                         <img src="images/aespa.jpg" alt="">
                    </div>
                    <div class="dp-name">
                         <p><strong>𝐚𝐞𝐬𝐩𝐚 𝐝𝐚𝐢𝐥𝐲</strong></p>
                         <div class="flex-row under-name">
                             <small>1h •</small><img src="images/globe.png" alt="" class="news-icon">
                         </div>
                    </div>
                 </div>
                <div class="dot-menu hover2">
                     <img src="images/dotmenu.png" alt="" class="news-icon dot">
                     <div class="triangle"></div>
                    <small class="del-post"><i class="fa-solid fa-x"></i>Hide Post</small>
                </div>
            </div>
            <div class="paragraph">
                <p>cutie</p>
            </div>
            <div class="post aespa flex-row">
                <div class="pic-container aespa flex-row">
                    <img src="images/wintergif.gif" alt="">
                </div>
                <div class="pic-comment"></div>
            </div>
            <div class="news-footer flex-column">
                <div class="flex-row likes" >
                    <div class="flex-row" >
                        <img src="images/react.png" alt="">
                        <p class="react-quan">1.1K</p>
                    </div>
                    <div class="flex-row comments">
                        <p>9 Comments</p>
                        <p>184 Shares</p>
                    </div>
                </div>
                <div class="flex-row interact mind share">
                    <div class="flex-row interact-icons like-container" id="com-react">
                        <div class="like-icon">
                        </div>
                        <p class ="like">Like</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/comment.png" alt="">
                        <p>Comment</p>
                    </div>
                    <div class="flex-row interact-icons" id="com-react">
                        <img src="images/share.png" alt="">
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>

       
    </main>
    <!-- message edit-->
    <div class="circle-edit hover">
        <img src="images/edit.png" alt="">
        <div class="edit-icon-des">
            <p class="top-icon-p"><small>New Message</small></p>
        </div>
    </div>

    <!-- right bar -->

    <nav class="right-bar">
        <div>
            <div class="rightbar-title">
                <p>Sponsored</p>
            </div>
            <a href="https://fullscale.io/careers" target="_blank">
                <div class="flex-row hover2 ads">
                    <img src="images/ad1.png" alt="">
                    <div class="ad-p">
                        <p>Full Scale is Hiring</p>
                        <small>fullscale.io</small>
                    </div>
                </div>
            </a>
            <a href="https://uniqlo.com" target="_blank">
                <div class="flex-row hover2 ads">
                    <img src="images/ad2" alt="">
                    <div class="ad-p">
                        <p>Shop UNIQLO</p>
                        <p>Outerwear</p>
                        <small>uniqlo.com</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="div-friend">
            <div class="rightbar-title">
                <div class=" flex-row friend-req">
                    <p>Friend Request</p>
                    <small><a href="#!">See all</a></small>
                </div>
            </div>
            <div class="flex-row hover2 ads friend-deactfp">
                <img src="images/c1.png" alt="">
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Facebook User</p>
                        <small>6d</small>
                    </div>
                    <div class="flex-row friend-name btn">
                        <button>Confirm</button>
                        <button onclick="del()">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="div">
            <div class="rightbar-title">
                <div class=" flex-row friend-req contact-title">
                    <p>Contacts</p>
                    <img src="images/dotmen.png" alt="">
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/c3.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Mark Zuckerberg</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/r2.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Bill Gates</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/c9.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Elon Musk</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/r3.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Jeff Bezos</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/fp8.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Steve Jobs</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/jennie.jpg" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Jennie Kim</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/sp3.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Kevin Powell</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/suzy.jpg" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Bae Suzy</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/coco.jpg" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Coco</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/c8.png" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Fireship io</p>
                    </div>
                </div>
            </div>
            <div class="flex-row hover2 ads friend contacts">
                <div class="friend-img">
                    <img src="images/nanno.jpg" alt="">
                </div>
                <div class="flex-column friend-des">
                    <div class="flex-row friend-name">
                        <p>Kitty Chicha</p>
                    </div>
                </div>
            </div>
            

            <div class="div">
                <div class="rightbar-title">
                    <div class=" flex-row friend-req contact-title">
                        <p>Group conversations</p>
                    </div>
                </div>
                <div class="flex-row hover2 ads friend contacts">
                    <img src="images/icreate.jpg" alt="">
                    <div class="flex-column friend-des">
                        <div class="flex-row friend-name">
                            <p>iCreate Developers</p>
                        </div>
                    </div>
                </div>
                <div class="flex-row hover2 ads friend contacts">
                    <img src="images/coeng.jpg" alt="">
                    <div class="flex-column friend-des">
                        <div class="flex-row friend-name">
                            <p>BSCPE 2A</p>
                        </div>
                    </div>
                </div>
                <div class="flex-row hover2 ads friend contacts">
                    <img src="images/scrimba.png" alt="">
                    <div class="flex-column friend-des">
                        <div class="flex-row friend-name">
                            <p>Scrimba Community</p>
                        </div>
                    </div>
                </div>
                <div class="flex-row hover2 ads friend contacts">
                    <img src="images/c11.png" alt="">
                    <div class="flex-column friend-des">
                        <div class="flex-row friend-name">
                            <p>Freecodecamp Org</p>
                        </div>
                    </div>
                </div>
            </div>
    </nav>

    <div class="toast">
        <p>Your input field is empty, Try again.</p><i class="fa-regular fa-x hover btn-toast"></i>
    </div>

</body>
</html>