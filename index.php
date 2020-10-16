<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Tugas UAS </title>
    
    <!-- Bootstrap -->
    <link href="template/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="template/assets/style.css" rel="stylesheet">
    
   
</head>

<body>
    <!-- happy code -->
    
    <div class="container">
        <!-- bagian header -->
        <div class="row">
            <div class="col-md-12 header" id="site-header">
            <!-- isi header -->
            <header>
                <h1 class="title-site">Test UTS Web Design</h1>
                <p class="description">let's try, never give up man</p>
            </header>
                <nav class="menus">
                <ul>
                    <li><a href="#home-content" id="link_home">Home</a></li>
                    <li><a href="#about-us" id="link_about">About Us</a></li>
                    <li><a href="#form" id="link_form">Form</a></li>
                    <li><a href="#hobby" id="link_hobby">Hobby</a></li>
                    <li><a href="#contact-us" id="link_Contact">Contact Us</a></li>
                </ul>
                </nav>
            </div>
        </div>
        <!-- end bagian header -->
        
        <!-- bagian wrapper 2 kolom -->
        <div class="row">
            <div class="col-md-8 articles" id="site-content">
            <!-- isi content -->
            <article class="posts" id="home-content">
                <h2 class="title-post">Home Page</h2>
                <div class="meta-post">
                    <span><em class="glyphicon glyphicon-user"></em>Onphpid</span>
                    <span><em class="glyphicon glyphicon-time"></em>13 juni 2015</span>
                </div>
                <div class="content">
                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                </article>
                
                <article class="posts" id="about-us">
                <h2 class="title-post">About Us</h2>
                <div class="meta-post">
                    <span><em class="glyphicon glyphicon-user"></em>Onphpid</span>
                    <span><em class="glyphicon glyphicon-time"></em>13 juni 2015</span>
                </div>
                <div class="content">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                </article>
                
                <article class="posts" id="form">
                <h2 class="title-post">Form</h2>
                <div class="meta-post">
                    <span><em class="glyphicon glyphicon-user"></em>Onphpid</span>
                    <span><em class="glyphicon glyphicon-time"></em>13 juni 2015</span>
                </div>
                <div class="content">
                    <p>It has survived not only</p>
                </div>
                </article>
                
                <article class="posts" id="hobby">
                <h2 class="title-post">Hobby</h2>
                <div class="meta-post">
                    <span><em class="glyphicon glyphicon-user"></em>Onphpid</span>
                    <span><em class="glyphicon glyphicon-time"></em>13 juni 2015</span>
                </div>
                <div class="content">
                    <p> only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                </div>
                </article>
                
                <article class="posts" id="contact-us">
                <h2 class="title-post">Contact Us</h2>
                <div class="meta-post">
                    <span><em class="glyphicon glyphicon-user"></em>Onphpid</span>
                    <span><em class="glyphicon glyphicon-time"></em>13 juni 2015</span>
                </div>
                <div class="content">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
                </div>
                </article>
            </div>
            
            <div class="col-md-4 sidebar" id="site-sidebar">
            <!-- isi sidebar -->
            <aside class="widgets">
                <h3 class="widget-title">Latest Post</h3>
                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </aside>
            </div>
        </div>
        <!-- end bagian wrapper -->
        
        <!-- Bagian footer -->
        <div class="row">
            <div class="col-md-12 footer" id="site-footer">
                <!-- isi footer -->
                <footer class="copyright tect-center"><p>&copy; 2019 Desain Web Kenny Aprilizka</p></footer>
            </div>
        </div>
    
    
    </div>
     <!-- jQuery Lokal -->
    <script src="template/assets/js/jquery.min.js"></script>
    <script src="template/assets/js/bootstrap.min.js"></script>
    
    
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function(){
            $("#link_about").click(function(){
               $("#about-us").show(); 
            })
        })
    </script>
    
    <script src="http://ajax.googleapis.com/ajax/1.11.3/jquery.min.js"></script>
	<script src="template/asset/js/jquery.min.js"></script>
	<script src="template/asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
