
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Image Gallery</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>   
    </head>
    <?php
    session_start();
    $_SESSION['name']=$_POST['fname'];
    ?>
    <body id="home">
        <style>
            *{
                font-family:montserrat;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins',sans-serif;
            }
            body{
                background-image: url('images/bgimg.jpg');
                background-size: cover;
                padding: 10px;
                
            }
            .navbar .navbar-nav .nav-link:hover{
                background-color:#FFACB7 ;
                color: rgb(252, 248, 248);
            }
            @media screen and (min-width: 992px){
                .navbar{
                    padding:0;
                }

            }
            .navbar .navbar-nav .nav-link:hover{
                padding:lem;
                transition: all .5s;
            }
            @media screen and (min-width: 991px){
                .navbar-brand{
                    padding-left: .7em;
                }
            }
            .navbar-nav{
                padding-top: unset;
            }
            .navbar-nav i{
                size: 10px;;
            }
            nav{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .wrapper{
                
                margin:50px auto;
                max-width:1100px;
            }
            .wrapper nav{
                display: flex;
                justify-content: center;
            }
            nav .items{
                display: flex;
                max-width: 900px;
                width: 100%;
               justify-content: space-between;

            }
            nav .items .item{
                padding: 7px 25px;
                font-size: 18px;
                font-weight: 500;
                color: #007bff;
                border: 2px solid #007bff;
                border-radius: 50px;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            nav .items .item:hover{
                color: #fff;
                background: #007bff;

            }
            .gallery{
                display: flex;
                flex-wrap: wrap;
                margin-top: 30px;
                

            }
            .gallery .image{
                padding: 8px;
                width:calc(100% / 4);
                

            }
            .gallery .image.hide{
                display: none;
            }
            .gallery .image.show{
                animation: animate 0.4s ease;
            }
            @keyframes animate{
                0%{
                    transform: scale(0.5);
                }

                100%{
                    transform: scale(1);

                }
            }
            .gallery .image span{
                display: flex;
                width: 100%;
                overflow: hidden;

            }
            .gallery .imgage .img{
                width: 100%;
                vertical-align: middle;
                transition: all 0.3s ease;

            }
            .preview-box{
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: #fff;
                max-width: 700px;
                width: 100%;
                box-shadow: 0px 0px 15px rgba(0,0,0,0.2);

            }
            .preview-box .image-box{
                display: flex;
                width: 100%;
            }
            .image-box img{
                width: 100%;
            }
            .gallery .image:hover img{
                transform: scale(1.1);
            }
            @media(max-width:1000px){
                .gallery .image{
                    width: calc(100% / 3);
                }
            }
            @media(max-width:800px){
                .gallery .image{
                    width: calc(100% / 2);
                }
            }
            @media(max-width:700px){
                nav .items{

                    max-width: 600px;
                }
                nav .items .item{
                    padding: 7px 15px;
                }
                    
            }
            @media(max-width:600px){
                nav .items{

                   flex-wrap: wrap;
                   justify-content: center;
                }
                nav .items .item{
                    margin: 5px;
                }
                .gallery .image{
                    width: 100%;
                }
                    
            }
            .image-container {
               
               display: inline-block;
               margin: 10px;
               text-align: center;
            }
   
           .image-container img {
               display: block;
               margin: 0 auto;
               max-width: 50%;
               height: auto;
           }  
           .services{
                text: center;
           }
           .services .image-container{
               text-align: center;
               
               background: rgb(223, 169, 240);  
               
           }
           .footer{
            background: black;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
           }
           .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(25rem,1fr));
            gap: 3rem;
            justify-content: space-around;
           }
           .footer .box-container .box h3{
            color: white;
            font-size: 2.5rem;
            padding-bottom: 2rem;

           }
           .footer .box-container .box a{
            color: lightwhite;
            font-size: 1rem;
            padding-bottom: 1rem;
            display: block;
           }
           .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            }
            .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            }
            .profile p{
                font-size: 2rem;
            }
           
 
        </style>

            <div class="alert alert-dark fade show alert-dismissible" role="alert">
                <h4>Welcome! <?php echo $_SESSION['name'];?> To The Page Where One Can Explore The World</h4>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        
            <nav class="navbar navbar-expand-lg mt-2" id="navexample">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home">
                        <img src="images/logo2.png" width="90" height="110" class="mt-0 rounded-circle"><img src="images/logo1.jpeg" width="90" height="60" class="rounded-circle">
                    </a>
                    <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mynav">
                        Menu
                    </button>
                    <div class="collapse navbar-collapse me-auto w3-small" id="mynav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Login.html">My Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                
                </div>
            </nav>
            <div class="wrapper"  data-bs-spy="scroll" data-bs-target="#navexample" data-bs-offset="1" tabindex="0">
                <nav>
                    <div class="items">
                        <span class="item active" data-name="all">All</span>
                        <span class="item" data-name="traveling">Traveling</span>
                        <span class="item" data-name="beaches">Beaches</span>
                        <span class="item" data-name="waterfalls">Waterfalls</span>
                        <span class="item" data-name="photography">Photography</span>
                        <span class="item" data-name="cityscapes">Cityscapes</span>
                        <span class="item" data-name="deserts">Deserts</span>
                    </div>
                </nav>
                <!--filter images-->
                <div class="gallery">
                    <div class="image" data-name="traveling"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal1"><span><img src="images/t1.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="traveling"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal1"><span><img src="images/t2.jpeg" height="200" width="300"></span></a></div>
                    <div class="image" data-name="traveling"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal1"><span><img src="images/t3.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="traveling"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal1"><span><img src="images/t4.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="beaches"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal2" ><span><img src="images/b1.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="beaches"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal2" ><span><img src="images/b2.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="beaches"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal2" ><span><img src="images/b3.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="beaches"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal2" ><span><img src="images/b4.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="waterfalls"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal3"><span><img src="images/w1.jpeg" height="200"> </span></a> </div>
                    <div class="image" data-name="waterfalls"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal3"><span><img src="images/w2.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="waterfalls"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal3"><span><img src="images/w3.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="waterfalls"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal3"><span><img src="images/w4.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="photography"><a class=""data-bs-toggle="modal" data-bs-target="#mymodal4"><span><img src="images/p1.jpeg" height="200" width="300"> </a></span></div>
                    <div class="image" data-name="photography"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal4"><span><img src="images/p2.jpeg" height="200" width="300"> </span></a></div>
                    <div class="image" data-name="photography"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal4" ><span><img src="images/p3.jpeg" height="200" width="300"> </span></a></div>
                    <div class="image" data-name="photography"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal4" ><span><img src="images/p4.jpeg" height="200" width="300"> </span></a></div>
                    <div class="image" data-name="cityscapes"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal5" ><span><img src="images/c1.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="cityscapes"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal5" ><span><img src="images/c2.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="cityscapes"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal5" ><span><img src="images/c3.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="cityscapes"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal5" ><span><img src="images/c4.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="deserts"><a class="" data-bs-toggle="modal" data-bs-target="#mymoda6" ><span><img src="images/d1.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="deserts"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal6" ><span><img src="images/d2.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="deserts"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal6" ><span><img src="images/d3.jpeg" height="200"> </span></a></div>
                    <div class="image" data-name="deserts"><a class="" data-bs-toggle="modal" data-bs-target="#mymodal6" ><span><img src="images/d4.jpeg" height="200"> </span></a></div>


                    <div class="modal" data-bs-backdrop="static" id="mymodal1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Traveling</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                    
                                </div>
                                <div class="modal-body">
                                    Welcome to a realm where the world's most awe-inspiring landscapes and cultures converge – the "Traveling" category of our online image gallery. Here, every click becomes a ticket to explore the far corners of our planet, offering a visual escape that knows no bounds.
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal" data-bs-backdrop="static" id="mymodal2">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Beaches</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Welcome to a world of coastal enchantment, where the rhythmic symphony of waves meets the soft caress of sand – our "Beaches" category invites you to bask in the splendor of sun-soaked shores and endless horizons.
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="modal" data-bs-backdrop="static" id="mymodal3">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Waterfalls</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Our "Waterfalls" collection invites you to witness the artistry of nature as it sculpts landscapes with the gentle touch of flowing water. Each photograph encapsulates the mesmerizing journey of water as it cascades down rugged cliffs, creating a spectacle that captivates the senses and nourishes the soul.
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="modal" data-bs-backdrop="static" id="mymodal4">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Photography</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Our "Photography" category celebrates the craft that freezes time, allowing us to relive emotions, explore landscapes, and connect with the human experience. Each image is a canvas where colors blend harmoniously, where details emerge from obscurity, and where fleeting moments are forever preserved.
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="modal" data-bs-backdrop="static" id="mymodal5">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Cityscapes</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    In "Cityscapes," every photograph captures the rhythm and energy of urban living, where towering skyscrapers reach for the heavens and bustling streets come alive with the ebb and flow of humanity. Each image is a love letter to the architectural marvels that define our cities and the stories that play out within their streets.
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="modal" data-bs-backdrop="static" id="mymodal6">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Deserts</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Welcome to a realm of vast expanse and tranquil isolation – our "Deserts" category invites you to journey into the heart of arid landscapes, where nature's quietude speaks volumes and the sands weave stories of ancient whispers.
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
                <section class="services" id="services" justify-content-center>
                        <h3 class="mb-3 " align="center"><b>Our Servies</b></h5>
                        <div class="image-container">
                            <div class="image-container">
                                <img src="images/gallery.png" alt="Gallery Overview">
                                <p>Gallery Overview</p>
                            </div>
                        
                            <div class="image-container">
                                <img src="images/category.jpeg" alt="Category Overview">
                                <p>Category Overview</p>
                            </div>
                            <div class="image-container">
                                <img src="images/image.png" alt="Image Description">
                                <p>Image Description</p>
                            </div>
                            <div class="image-container">
                                <img src="images/call.png" alt="Call to Action">
                                <p>Call to Action</p>
                            </div>
                            <div class="image-container">
                                <img src="images/education.jpeg" alt="Education Content">
                                <p>Education Content</p>
                            </div>
                        </div>
                </section>
                <section class="footer text-white container-fluid mt-3" id="footer">
                        <div class="box-container">
                            <div class="box">
                                <h3>About Us</h3>
                                <p>At [Your Gallery Name], we believe in the incredible power of images to capture moments, evoke emotions, and tell stories that transcend words. Our online image gallery is a vibrant hub where photographers, artists, and enthusiasts from around the world gather to celebrate the beauty and diversity of visual storytelling
                                    Join us on this creative voyage as we celebrate the magic of images, encourage meaningful interactions, and foster a community united by a shared love for visual storytelling. Together, let's paint a picture of inspiration, imagination, and connection through the lens of [Your Gallery Name].
                                    Welcome to our gallery, where every click tells a story..</p>
                            </div>
                            <div class="box">
                                <h3>Contact Info</h3>
                                <a href="#"><i class='bx bxs-phone-call'></i>+123-456-7890</a>
                                <a href="#"><i class='bx bxs-phone-call'></i>+111-222-3333</a>
                                <a href="#"><i class='bx bxs-envelope'></i></i>shaikhanas@gmail.com</a>
                                <a href="#"><i class='bx bxs-map'></i>+mumbai,India -400104</a>


                                <p>Contact us for more Informtion</p>
                            </div>
                        </div>
                </section>

                
                    


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        
        <script src="mysite_project_script.js"></script>    
    </body>
</html>
<?php
$con = mysqli_connect('localhost','root',"",'project');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$query1="INSERT INTO `project` VALUES('$fname','$lname','$email','$password','$cpassword');";
mysqli_query($con,$query1);
?>

