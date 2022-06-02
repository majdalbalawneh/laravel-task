@extends('layout.master')
@section('title','About')
@section('content')
<section class="about" id="about" style="margin-top:5%">
        <div class="container">
            <div class="heading text-center" >
                <h2 >About
                    <span style="color:#e55951">Us</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://www.timeoutdubai.com/cloud/timeoutdubai/2021/09/11/hfpqyV7B-IMG-Dubai-UAE.jpg" alt="about" class="img-fluid" width="100%" id="aboutus-image">
                </div>
                <div class="col-lg-6">
                    <h3 id="about-us-section" style="color:#e55951">KIDS STORE : Where kids are a big deal! </h3>
                    <p>Our website is the beloved brand of kids all over the world…and we know how to have lotsa fun! You can explore awesome DIY play activities, toy reviews, printable fun and, of course, SO many toys! The hottest, the gotta-have-’ems, the new favorite besties and more. Explore incredible collections of kids’ toys online, here at Kids Toys!</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                <i class="far fa-star"></i>Awesome Design</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                <i class="far fa-star"></i>
                                Creative Design</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                <i class="far fa-star"></i>Better Client Service</h4>
                        </div>
 
                        <div class="col-md-6">
                            <h4>
                                <i class="far fa-star"></i>
                                Speed And Flexibility</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <!---------------- news-letter-section ----------------------->
        <section class="news-letter" id="News-letter">
            <div class="news ">
              <div class="container">
                <h1 class="news-heading">Subscribe To Get The Latest <br> News About Us</h1>
                <p class="des how-de">Get the Latest news about toys , drop your <br> email below to
                  get daliy update about us</p>
                <form action="">
                  <input type="email"  maxlength="50" required placeholder="Enter your email address">
                  <button class="bt" style="background-color:#e55951">Subscribe</button>
                </form>
              </div>
            </div>
          </section>
    </section>
  
  <section class="aboutUs"> 
    <div id="Aabout">
      <div class="Aabout mm">
        <img src="../img/Majd.gif" alt="" >
        <h2 class="abouth2">{{$one}}</h2>
        <p class="aboutp">
          Full Stack Web Developer
        </p>
        <h1><a href="https://github.com/majdalbalawneh" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100028713081196"><i class="fab fa-facebook" target="_blank"></i></a>
          <a href="https://www.linkedin.com/in/majd-al-balawneh-a037411b7/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://majdalbalawneh.github.io/project1/" target="_blank"><i class="fas fa-address-card"></i></a>
        </h1>
      </div>
      

  
      <div class="Aabout ss">
        <img src="../img/ss.png" alt="" class="aboutimg">
        <h2 class="abouth2">{{$two}}</h2>
        <p class="aboutp">
          Full Stack Web Developer
        </p><br>
        <h1><a href="https://github.com/samaralkhamis" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.facebook.com/samar.alkhamis.98"><i class="fab fa-facebook" target="_blank"></i></a>
          <a href="https://www.linkedin.com/in/samar-alkhamis-942a92151/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://samaralkhamis.github.io/Projects/" target="_blank"><i class="fas fa-address-card"></i></a>
        </h1>
      </div>
    
    


      <div class="Aabout tt">
        <img src="../img/tt.png" alt="" class="aboutimg">
        <h2 class="abouth2">{{$three}}</h2>
        <p class="aboutp">
          Full Stack Web Developer
        </p><br>
        <h1><a href="https://github.com/taebah-alshlouh" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100007055973576"><i class="fab fa-facebook" target="_blank"></i></a>
          <a href="https://www.linkedin.com/in/majd-al-balawneh-a037411b7/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://taebah-alshlouh.github.io/project1/" target="_blank"><i class="fas fa-address-card"></i></a>
        </h1>
      </div>
      

     

      <div class="Aabout tttt">
        <img src="../img/100212077.png" alt="" class="aboutimg">
        <h2 class="abouth2">{{$four}}</h2>
           <p class="aboutp">
            Full Stack Web Developer
          </p>
          <h1><a href="https://github.com/tamara126enad" target="_blank"><i class="fab fa-github"></i></a>
            <a href=" https://www.facebook.com/TamaraAlShbat"><i class="fab fa-facebook" target="_blank"></i></a>
            <a href="https://www.linkedin.com/in/tamara-al-shabatat-060452123/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href=" https://tamara126enad.github.io/Academy-projects/" target="_blank"><i class="fas fa-address-card"></i></a>
          </h1>
       
    
      </div>
    
  </section>
           

</body>
@endsection