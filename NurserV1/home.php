<?php 
session_start(); 

if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) {

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="style/home.css" />
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <!--mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
     <!---->
     <title>G24 Nursery</title>
     <!--favicon-->
     <link rel="icon" href="" type="image/gif" />
     <!-- fonts -->
     <link
       href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap"
       rel="stylesheet"
     />
     <link
       rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     />
 
     <!--icons-->
     <link
       href="https://fonts.googleapis.com/icon?family=Material+Icons"
       rel="stylesheet"
     />
   </head>
 
   <body>
     <!--header section-->
     <div class="header_section">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo">
           <a href=""><img src="" /></a>
         </div>
         <div class="items">
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link" href="#">About Us</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Settings</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">More</a>
             </li>
             <button class="buttons">Create Profiles</button>
           </ul>
         </div>
       </nav>
       <div class="layout-padding container-fluid">
         <div class="carousel" data-rid="carousel">
           <div class="banner_taital">
             <h1 class="dance_text">G24 Kids<br />NURSERY <?php echo $_SESSION['firstname']; ?> </h1>
             <p class="consectetur_text">
               Since 2009, we watch<br />
               Your kids' footsteps.
             </p>
             <div class="edit">
               <button class="buttons">Edit Profile</button>
             </div>
           </div>
           <div class="image_1">
             <img src="/img/gautam-arora-78Ae6N7rNvI-unsplash.jpg" />
             <div class="overlay"></div>
           </div>
         </div>
       </div>
     </div>
     <!--Posts- 2 sided bars-->
     <div class="container">
       <div class="first-inline">
         <div class="left-menu-container">
           <ul class="menu">
             <li class="quick-options">
               <i class="small material-icons"> person_add_alt </i
               ><a href="#">Add stuff</a>
             </li>
             <li class="quick-options">
               <i class="small material-icons">insert_chart</i>
               <a href="#">Announcements</a>
             </li>
 
             <li class="quick-options">
               <i class="small material-icons">upcoming</i
               ><a href="#">Upcoming Events </a>
             </li>
             <li class="quick-options">
               <i class="small material-icons">settings</i
               ><a href="#">Settings </a>
             </li>
           </ul>
         </div>
         <div class="Posts">
           <div class="announcement-container">
             <div class="btn-container">
               <img
                 class="image_2"
                 src="/img/gautam-arora-78Ae6N7rNvI-unsplash.jpg"
               />
               <form>
                 <input
                   type="text"
                   class="announcement-input"
                   placeholder="Make New Announcement..."
                 />
               </form>
             </div>
             <div class="PostIcons">
               <i class="pstIcn small material-icons">add_a_photo</i>
               <i class="pstIcn small material-icons">gif_box</i>
               <i class="pstIcn small material-icons">mood</i>
               <i class="pstIcn small material-icons">calendar_month</i>
 
               <button type="submit" class="buttons submit_btn">Post</button>
             </div>
           </div>
           <div class="Post-container">
             <div class="post-box">
               <div class="post-area">
                 <div class="profile">
                   <img src="/img/" alt="Profile Picture" />
                   <div class="quick-info">
                     <h3 class="profile-name">Posts Manager</h3>
                     <p class="post-meta">2 hours ago</p>
                   </div>
                   <i class="options crsr small material-icons">more_vert</i>
                 </div>
                 <div class="post-header">
                   <h2>Welcome!</h2>
                 </div>
                 <div class="post-content">
                   <div class="post-image">
                     <img src="/img/6.jpeg" alt="Image Description" />
                   </div>
                   <div class="post-text">
                     <div class="bio">
                       <p>
                         Welcome to our nursery! We are dedicated to providing a
                         nurturing and stimulating environment where your child
                         can grow and develop to their fullest potential.Thank
                         you for considering our nursery as your child's home
                         away from home.
                       </p>
                     </div>
                   </div>
                   <div class="post-actions">
                     <a href="#" class="like"
                       ><i class="fas fa-thumbs-up"></i> 25 Likes</a
                     >
                     <a href="#" class="comment"
                       ><i class="fas fa-comment"></i> 10 Comments</a
                     >
                     <a href="#" class="share"
                       ><i class="fas fa-share"></i> 5 Shares</a
                     >
                   </div>
                 </div>
               </div>
             </div>
 
             <div class="post-box">
               <div class="post-area">
                 <div class="profile">
                   <img src="/img/10.jpeg" alt="Profile Picture" />
                   <div class="quick-info">
                     <h3 class="profile-name">Posts Manager</h3>
                     <p class="post-meta">10 hours ago</p>
                   </div>
                   <i class="options crsr small material-icons">more_vert</i>
                   <div class="postSetting"></div>
                 </div>
                 <div class="post-header">
                   <h2>Spring Fling event</h2>
                 </div>
                 <div class="post-content">
                   <div class="post-image">
                     <img src="/img/7.jpeg" alt="Image Description" />
                   </div>
                   <div class="post-text">
                     <div class="bio">
                       <p class="p">
                         On Saturday, May 1st, we held our annual Spring Fling
                         event at the nursery! Parents and children alike enjoyed
                         a fun-filled day of activities, games, and food. We want
                         to extend a big thank you to everyone who came out and
                         made this event such a success!"
                       </p>
                     </div>
                   </div>
                   <div class="post-actions">
                     <a href="#" class="like"
                       ><i class="fas fa-thumbs-up"></i> 25 Likes</a
                     >
                     <a href="#" class="comment"
                       ><i class="fas fa-comment"></i> 10 Comments</a
                     >
                     <a href="#" class="share"
                       ><i class="fas fa-share"></i> 5 Shares</a
                     >
                   </div>
                 </div>
               </div>
             </div>
 
             <div class="post-box">
               <div class="post-area">
                 <div class="profile">
                   <img src="/img/10.jpeg" alt="Profile Picture" />
                   <div class="quick-info">
                     <h3 class="profile-name">Posts Manager</h3>
                     <p class="post-meta">2 days ago</p>
                   </div>
                   <i class="options crsr small material-icons">more_vert</i>
                 </div>
                 <div class="post-header">
                   <h2>Child's International Day!</h2>
                 </div>
                 <div class="post-content">
                   <div class="post-image">
                     <img src="/img/5.jpeg" alt="Image Description" />
                   </div>
                   <div class="post-text">
                     <div class="bio">
                       <p class="bio">
                         We are excited to announce our upcoming event
                         celebrating Child's International Day! This special day
                         is dedicated to promoting the rights and well-being of
                         children all around the world. Our event will feature a
                         range of fun and engaging activities designed to educate
                         and inspire children and their families about the
                         importance of Child's International Day.
                       </p>
                     </div>
                   </div>
                   <div class="post-actions">
                     <a href="#" class="like"
                       ><i class="fas fa-thumbs-up"></i> 25 Likes</a
                     >
                     <a href="#" class="comment"
                       ><i class="fas fa-comment"></i> 10 Comments</a
                     >
                     <a href="#" class="share"
                       ><i class="fas fa-share"></i> 5 Shares</a
                     >
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="right-menu-container">
           <ul class="menu">
             <div class="level-title">
               <i class="small material-icons">filter_list</i>
               <h4>Levels</h4>
               <i class="options crsr small material-icons">add</i>
             </div>
 
             <li class="dropdown quick-options">
               <a href="#">1 - 2 Years Old</a
               ><i class="dropdown-icon options crsr small material-icons"
                 >more_vert</i
               >
               <ul class="dropdown-content">
                 <li><a href="#">Groups List</a></li>
                 <li><a href="#">Delete Level</a></li>
               </ul>
             </li>
             <li class="dropdown quick-options">
               <a href="#">3-4 Years Old</a
               ><i class="dropdown-icon options crsr small material-icons"
                 >more_vert</i
               >
               <ul class="dropdown-content">
                 <li><a href="#">Groups List</a></li>
                 <li><a href="#">Delete Level</a></li>
               </ul>
             </li>
             <li class="dropdown quick-options">
               <a href="#">5 Years Old</a
               ><i class="dropdown-icon options crsr small material-icons"
                 >more_vert</i
               >
               <ul class="dropdown-content">
                 <li><a class="lis" href="#">Groups List</a></li>
                 <li><a class="lis" href="#">Delete Level</a></li>
               </ul>
             </li>
           </ul>
         </div>
       </div>
     </div>
     <div class="contact">
       <div class="rectangle">
         <div class="social-icons">
           <a href="https://www.instagram.com"
             ><i class="fab fa-instagram fa-3x" style="margin-right: 20px"></i
           ></a>
           <a href="https://www.facebook.com"
             ><i class="fab fa-facebook fa-3x" style="margin-right: 20px"></i
           ></a>
           <a href="mailto:youremail@example.com"
             ><i class="far fa-envelope fa-3x"></i
           ></a>
         </div>
         <p class="copyright">&copy; 2023 G24 Nursery. All rights reserved.</p>
       </div>
     </div>
     <a href="logout.php">Logout</a>
   </body>
 </html>
 

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>