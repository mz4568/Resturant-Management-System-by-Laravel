<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partial_front_pages.head')

    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
          @include('partial_front_pages.nav')
        </nav>


        <!--== Header ==-->
        <section id="header-slider" class="owl-carousel">
          @include('partial_front_pages.headerSlider') 
        </section>



        <!--== About us ==-->
        <section id="about" class="about">
           @include('partial_front_pages.about_us') 
        </section> <!-- /#about -->


        <!--==  Menu List  ==-->
          <section id="menu-list" class="menu-list">
             @include('partial_front_pages.menuList')
            
        </section>


      <!--== Reserve A Table! ==-->
       @include('partial_front_pages.reserve') 
        <!--== Contact Table! ==-->
        <section id="contact" class="contact">
           @include('partial_front_pages.contact') 
        </section> 
        <!-- Footer-->
       @include('partial_front_pages.footer')
   

    </body>
</html>