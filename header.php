<link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300;400;700&family=Poppins:wght@200;400;600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* font-family: 'Nunito', sans-serif !important; */
}
nav{
  position: fixed;
  z-index: 9999;
  width: 100%;
  font-family: 'Nunito', sans-serif;
  background: whitesmoke;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);

}
nav .wrapper{
  position: relative;
  max-width: 1300px;
  padding: 0px 30px;
  height: 70px;
  line-height: 70px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.row{
    margin-left:0 !important;
    margin-right:0 !important;
}
.wrapper .logo{
    padding:0 0 0 0;
}
.wrapper .logo a{
  color: #f2f2f2;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
  font-family: 'Nunito', sans-serif
}
.wrapper .nav-links{
  display: inline-flex;
}
.nav-links li{
  list-style: none;
}
.nav-links li a{
  color: #15233d;
  text-decoration: none;
  font-size: 18px;
  font-weight: 700;
  padding: 9px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
  font-family: 'Nunito', sans-serif !important;
}
.nav-links li a:hover{
  background: #f05336;
  color:white;
}
.nav-links .mobile-item{
  display: none;
}
.nav-links .drop-menu{
  position: absolute;
  background: #242526;
  width: 300px;
  line-height: 45px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.nav-links li:hover .drop-menu,
.nav-links li:hover .mega-box{
  transition: all 0.3s ease;
  top: 70px;
  opacity: 1;
  visibility: visible;
}
.drop-menu li a{
  width: 100%;
  display: block;
  padding: 0 0 0 15px;
  font-weight: 400;
  border-radius: 0px;
  color:white;
  font-family: 'Nunito', sans-serif !important;
}
.mega-box{
  position: fixed;
  left: 0;
  width: 100%;
  padding: 0 30px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
}
.mega-box .content{
  background: #242526;
  padding: 25px 20px;
  display: flex;
  width: 100%;
  justify-content: space-between;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.mega-box .content .row{
  width: calc(25% - 30px);
  line-height: 45px;
}
.content .row img{
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.content .row header{
  color: #f2f2f2;
  font-size: 20px;
  font-weight: 500;
  font-family: 'Nunito', sans-serif
}
.content .row .mega-links{
  margin-left: -40px;
  border-left: 1px solid rgba(255,255,255,0.09);
}
.row .mega-links li{
  padding: 0 20px;
}
.row .mega-links li a{
  padding: 0px;
  padding: 0 20px;
  color: #d9d9d9;
  font-size: 17px;
  display: block;
  font-family: 'Nunito', sans-serif
}
.row .mega-links li a:hover{
  color: #f2f2f2;
}
.wrapper .btn{
  color: #344d77;
  font-size: 20px;
  cursor: pointer;
  display: none;
  font-family: 'Nunito', sans-serif;
}
.wrapper .btn.close-btn{
  position: absolute;
  right: 30px;
  top: 10px;
  color:white;
}
#logo{
    bottom:0;
    width:85%;
}

@media screen and (max-width: 970px) {
  .wrapper .btn{
    display: block;
    margin-bottom:0 !important;
  }
  .wrapper .nav-links{
    position: fixed;
    height: 100vh;
    width: 100%;
    max-width: 350px;
    top: 0;
    left: -100%;
    background: #242526;
    display: block;
    padding: 50px 10px;
    line-height: 50px;
    overflow-y: auto;
    box-shadow: 0px 15px 15px rgba(0,0,0,0.18);
    transition: all 0.3s ease;
  }
  .wrapper .nav-links li a{
    color:white;
  }
 
  /* custom scroll bar */
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-track {
    background: #242526;
  }
  ::-webkit-scrollbar-thumb {
    background: #3A3B3C;
  }
  #menu-btn:checked ~ .nav-links{
    left: 0%;
  }
  #menu-btn:checked ~ .btn.menu-btn{
    display: none;
  }
  #close-btn:checked ~ .btn.menu-btn{
    display: block;
  }
  .nav-links li{
    margin: 15px 10px;
  }
  .nav-links li a{
    padding: 0 20px;
    display: block;
    font-size: 20px;
  }
  .nav-links .drop-menu{
    position: static;
    opacity: 1;
    top: 65px;
    visibility: visible;
    padding-left: 20px;
    width: 100%;
    max-height: 0px;
    overflow: hidden;
    box-shadow: none;
    transition: all 0.3s ease;
  }
  #showDrop:checked ~ .drop-menu,
  #showMega:checked ~ .mega-box{
    max-height: 100%;
  }
  .nav-links .desktop-item{
    display: none;
  }
  .nav-links .mobile-item{
    display: block;
    color: #f2f2f2;
    font-size: 20px;
    font-weight: 500;
    padding-left: 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .nav-links .mobile-item:hover{
    background: #3A3B3C;
  }
  .drop-menu li{
    margin: 0;
  }
  .drop-menu li a{
    border-radius: 5px;
    font-size: 18px;
  }
  .mega-box{
    position: static;
    top: 65px;
    opacity: 1;
    visibility: visible;
    padding: 0 20px;
    max-height: 0px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .mega-box .content{
    box-shadow: none;
    flex-direction: column;
    padding: 20px 20px 0 20px;
  }
  .mega-box .content .row{
    width: 100%;
    margin-bottom: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .mega-box .content .row:nth-child(1),
  .mega-box .content .row:nth-child(2){
    border-top: 0px;
  }
  .content .row .mega-links{
    border-left: 0px;
    padding-left: 15px;
  }
  .row .mega-links li{
    margin: 0;
  }
  .content .row header{
    font-size: 19px;
  }
}
nav input{
  display: none;
}

.body-text{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  text-align: center;
  padding: 0 30px;
}
.body-text div{
  font-size: 45px;
  font-weight: 600;
}



    .sticky-icon {
        z-index: 9999;
        position: fixed;
        top: 30%;
        right: 0%;
        width: 220px;
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(160px, 0px);
        border-radius: 50px 0px 0px 50px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        text-transform: uppercase;
        padding: 10px;
        font-size: 22px;
        font-family: 'Nunito', sans-serif !important;
        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #FFF;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    /*.search_icon a:hover i  {
    transform:rotate(360deg);}*/
    .Facebook {
        background-color: #2C80D3;
        color: #FFF;
    }

    .Youtube {
        background-color: #fa0910;
        color: #FFF;
    }

    .Twitter {
        background-color: #53c5ff;
        color: #FFF;
    }

    .Instagram {
        background-color: #FD1D1D;
        color: #FFF;
    }

    .Google {
        background-color: #d34836;
        color: #FFF;
    }

    .sticky-icon a i {
        background-color: #FFF;
        height: 40px;
        width: 40px;
        color: #000;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    .sticky-icon a svg {
        background-color: #FFF;
        height: 40px;
        width: 40px;
        color: #000;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
        padding-top:7px;
        padding-bottom:7px;
    }

    .sticky-icon a i.fa-facebook-f {
        background-color: #FFF;
        color: #2C80D3;
    }

    .sticky-icon a i.fa-google-plus-g {
        background-color: #FFF;
        color: #d34836;
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #FD1D1D;
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #fa0910;
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #53c5ff;
    }

    .fas fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    }

    #header {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        background-color: rgb(255, 255, 255);
        /* Orange background color */
        transition: background-color 0.5s ease-in-out;
        position:fixed;
      }
    #header.scrolled {
        background-color: rgb(255, 255, 255);
        /* Blue background color when scrolled */
    }
    #header .container {
        width: 100%;
    }
    .navbar-nav>li>a {
        font-family: 'Nunito', sans-serif !important;
        text-transform: none;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1.5rem;
    }
    .navbar-default .navbar-nav>li>a,
    .navbar-default .navbar-text {
        color: black;
      }
    .navbar-brand img {
        max-width: 100%;
        height: auto;
        /* padding-top:10px;
    margin-left:-50px; */
    }
    .box .box-title h4 {
        font-family: 'Nunito', sans-serif !important;
        font-size: 15px;
        line-height: 3rem;
    }


    

</style>

<script>
    // Add this script to your HTML file, preferably just before the </body> tag
    document.addEventListener('DOMContentLoaded', function () {
        window.addEventListener('scroll', function () {
            var header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    });
</script>


<body>
    <!-- startr Modal pop up -->

    <!-- end model pop up -->
    <!-- <div class="stickyEnrollWidget">
        <div class="col-sm-6 col-xs-12 text-center text-white purchase-button">
            <a href="#" type="button" data-toggle="modal" data-target="#myModal" class="stickyEnquiryWidget" id="enquiry_button"></a>
        </div> -->
    <!-- <div class="col-sm-6 col-xs-12 text-center text-white purchase-button"> <a type="button" class="template-button launch-modal" href="#" data-toggle="modal" data-target="#myModal"><i class="" aria-hidden="true"></i> Enquiry Now</a> </div> -->

    <!-- </div> -->
    <div class="sticky-icon">
        <a href="https://www.linkedin.com/company/26552568/admin/" target="_blank" class="Youtube"><i
                class="fa fa-linkedin-square" style="color: #146ebe;"></i> Linkedin </a>
        <a href="https://twitter.com/SoftflameL" target="_blank" class="Twitter"><i class="fa fa-twitter"></i> </i>
            Twitter </a>
        <a href="https://www.instagram.com/softflame_solutions/" target="_blank" class="Instagram"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
<path fill="#304ffe" d="M41.67,13.48c-0.4,0.26-0.97,0.5-1.21,0.77c-0.09,0.09-0.14,0.19-0.12,0.29v1.03l-0.3,1.01l-0.3,1l-0.33,1.1 l-0.68,2.25l-0.66,2.22l-0.5,1.67c0,0.26-0.01,0.52-0.03,0.77c-0.07,0.96-0.27,1.88-0.59,2.74c-0.19,0.53-0.42,1.04-0.7,1.52 c-0.1,0.19-0.22,0.38-0.34,0.56c-0.4,0.63-0.88,1.21-1.41,1.72c-0.41,0.41-0.86,0.79-1.35,1.11c0,0,0,0-0.01,0 c-0.08,0.07-0.17,0.13-0.27,0.18c-0.31,0.21-0.64,0.39-0.98,0.55c-0.23,0.12-0.46,0.22-0.7,0.31c-0.05,0.03-0.11,0.05-0.16,0.07 c-0.57,0.27-1.23,0.45-1.89,0.54c-0.04,0.01-0.07,0.01-0.11,0.02c-0.4,0.07-0.79,0.13-1.19,0.16c-0.18,0.02-0.37,0.03-0.55,0.03 l-0.71-0.04l-3.42-0.18c0-0.01-0.01,0-0.01,0l-1.72-0.09c-0.13,0-0.27,0-0.4-0.01c-0.54-0.02-1.06-0.08-1.58-0.19 c-0.01,0-0.01,0-0.01,0c-0.95-0.18-1.86-0.5-2.71-0.93c-0.47-0.24-0.93-0.51-1.36-0.82c-0.18-0.13-0.35-0.27-0.52-0.42 c-0.48-0.4-0.91-0.83-1.31-1.27c-0.06-0.06-0.11-0.12-0.16-0.18c-0.06-0.06-0.12-0.13-0.17-0.19c-0.38-0.48-0.7-0.97-0.96-1.49 c-0.24-0.46-0.43-0.95-0.58-1.49c-0.06-0.19-0.11-0.37-0.15-0.57c-0.01-0.01-0.02-0.03-0.02-0.05c-0.1-0.41-0.19-0.84-0.24-1.27 c-0.06-0.33-0.09-0.66-0.09-1c-0.02-0.13-0.02-0.27-0.02-0.4l1.91-2.95l1.87-2.88l0.85-1.31l0.77-1.18l0.26-0.41v-1.03 c0.02-0.23,0.03-0.47,0.02-0.69c-0.01-0.7-0.15-1.38-0.38-2.03c-0.22-0.69-0.53-1.34-0.85-1.94c-0.38-0.69-0.78-1.31-1.11-1.87 C14,7.4,13.66,6.73,13.75,6.26C14.47,6.09,15.23,6,16,6h16c4.18,0,7.78,2.6,9.27,6.26C41.43,12.65,41.57,13.06,41.67,13.48z"></path><path fill="#4928f4" d="M42,16v0.27l-1.38,0.8l-0.88,0.51l-0.97,0.56l-1.94,1.13l-1.9,1.1l-1.94,1.12l-0.77,0.45 c0,0.48-0.12,0.92-0.34,1.32c-0.31,0.58-0.83,1.06-1.49,1.47c-0.67,0.41-1.49,0.74-2.41,0.98c0,0,0-0.01-0.01,0 c-3.56,0.92-8.42,0.5-10.78-1.26c-0.66-0.49-1.12-1.09-1.32-1.78c-0.06-0.23-0.09-0.48-0.09-0.73v-7.19 c0.01-0.15-0.09-0.3-0.27-0.45c-0.54-0.43-1.81-0.84-3.23-1.25c-1.11-0.31-2.3-0.62-3.3-0.92c-0.79-0.24-1.46-0.48-1.86-0.71 c0.18-0.35,0.39-0.7,0.61-1.03c1.4-2.05,3.54-3.56,6.02-4.13C14.47,6.09,15.23,6,16,6h10.8c5.37,0.94,10.32,3.13,14.47,6.26 c0.16,0.39,0.3,0.8,0.4,1.22c0.18,0.66,0.29,1.34,0.32,2.05C42,15.68,42,15.84,42,16z"></path><path fill="#6200ea" d="M42,16v4.41l-0.22,0.68l-0.75,2.33l-0.78,2.4l-0.41,1.28l-0.38,1.19l-0.37,1.13l-0.36,1.12l-0.19,0.59 l-0.25,0.78c0,0.76-0.02,1.43-0.07,2c-0.01,0.06-0.02,0.12-0.02,0.18c-0.06,0.53-0.14,0.98-0.27,1.36 c-0.01,0.06-0.03,0.12-0.05,0.17c-0.26,0.72-0.65,1.18-1.23,1.48c-0.14,0.08-0.3,0.14-0.47,0.2c-0.53,0.18-1.2,0.27-2.02,0.32 c-0.6,0.04-1.29,0.05-2.07,0.05H31.4l-1.19-0.05L30,37.61l-2.17-0.09l-2.2-0.09l-7.25-0.3l-1.88-0.08h-0.26 c-0.78-0.01-1.45-0.06-2.03-0.14c-0.84-0.13-1.49-0.35-1.98-0.68c-0.7-0.45-1.11-1.11-1.35-2.03c-0.06-0.22-0.11-0.45-0.14-0.7 c-0.1-0.58-0.15-1.25-0.18-2c0-0.15,0-0.3-0.01-0.46c-0.01-0.01,0-0.01,0-0.01v-0.58c-0.01-0.29-0.01-0.59-0.01-0.9l0.05-1.61 l0.03-1.15l0.04-1.34v-0.19l0.07-2.46l0.07-2.46l0.07-2.31l0.06-2.27l0.02-0.6c0-0.31-1.05-0.49-2.22-0.64 c-0.93-0.12-1.95-0.23-2.56-0.37c0.05-0.23,0.1-0.46,0.16-0.68c0.18-0.72,0.45-1.4,0.79-2.05c0.18-0.35,0.39-0.7,0.61-1.03 c2.16-0.95,4.41-1.69,6.76-2.17c2.06-0.43,4.21-0.66,6.43-0.66c7.36,0,14.16,2.49,19.54,6.69c0.52,0.4,1.03,0.83,1.53,1.28 C42,15.68,42,15.84,42,16z"></path><path fill="#673ab7" d="M42,18.37v4.54l-0.55,1.06l-1.05,2.05l-0.56,1.08l-0.51,0.99l-0.22,0.43c0,0.31,0,0.61-0.02,0.9 c0,0.43-0.02,0.84-0.05,1.22c-0.04,0.45-0.1,0.86-0.16,1.24c-0.15,0.79-0.36,1.47-0.66,2.03c-0.04,0.07-0.08,0.14-0.12,0.2 c-0.11,0.18-0.24,0.35-0.38,0.51c-0.18,0.22-0.38,0.41-0.61,0.57c-0.34,0.26-0.74,0.47-1.2,0.63c-0.57,0.21-1.23,0.35-2.01,0.43 c-0.51,0.05-1.07,0.08-1.68,0.08l-0.42,0.02l-2.08,0.12h-0.01L27.5,36.6l-2.25,0.13l-3.1,0.18l-3.77,0.22l-0.55,0.03 c-0.51,0-0.99-0.03-1.45-0.09c-0.05-0.01-0.09-0.02-0.14-0.02c-0.68-0.11-1.3-0.29-1.86-0.54c-0.68-0.3-1.27-0.7-1.77-1.18 c-0.44-0.43-0.82-0.92-1.13-1.47c-0.07-0.13-0.14-0.25-0.2-0.39c-0.3-0.59-0.54-1.25-0.72-1.97c-0.03-0.12-0.06-0.25-0.08-0.38 c-0.06-0.23-0.11-0.47-0.14-0.72c-0.11-0.64-0.17-1.32-0.2-2.03v-0.01c-0.01-0.29-0.02-0.57-0.02-0.87l-0.49-1.17l-0.07-0.18 L9.5,25.99L8.75,24.2l-0.12-0.29l-0.72-1.73l-0.8-1.93c0,0,0,0-0.01,0L6.29,18.3L6,17.59V16c0-0.63,0.06-1.25,0.17-1.85 c0.05-0.23,0.1-0.46,0.16-0.68c0.85-0.49,1.74-0.94,2.65-1.34c2.08-0.93,4.31-1.62,6.62-2.04c1.72-0.31,3.51-0.48,5.32-0.48 c7.31,0,13.94,2.65,19.12,6.97c0.2,0.16,0.39,0.32,0.58,0.49C41.09,17.48,41.55,17.91,42,18.37z"></path><path fill="#8e24aa" d="M42,21.35v5.14l-0.57,1.19l-1.08,2.25l-0.01,0.03c0,0.43-0.02,0.82-0.05,1.17c-0.1,1.15-0.38,1.88-0.84,2.33 c-0.33,0.34-0.74,0.53-1.25,0.63c-0.03,0.01-0.07,0.01-0.1,0.02c-0.16,0.03-0.33,0.05-0.51,0.05c-0.62,0.06-1.35,0.02-2.19-0.04 c-0.09,0-0.19-0.01-0.29-0.02c-0.61-0.04-1.26-0.08-1.98-0.11c-0.39-0.01-0.8-0.02-1.22-0.02h-0.02l-1.01,0.08h-0.01l-2.27,0.16 l-2.59,0.2l-0.38,0.03l-3.03,0.22l-1.57,0.12l-1.55,0.11c-0.27,0-0.53,0-0.79-0.01c0,0-0.01-0.01-0.01,0 c-1.13-0.02-2.14-0.09-3.04-0.26c-0.83-0.14-1.56-0.36-2.18-0.69c-0.64-0.31-1.17-0.75-1.6-1.31c-0.41-0.55-0.71-1.24-0.9-2.07 c0-0.01,0-0.01,0-0.01c-0.14-0.67-0.22-1.45-0.22-2.33l-0.15-0.27L9.7,26.35l-0.13-0.22L9.5,25.99l-0.93-1.65l-0.46-0.83 l-0.58-1.03l-1-1.79L6,19.75v-3.68c0.88-0.58,1.79-1.09,2.73-1.55c1.14-0.58,2.32-1.07,3.55-1.47c1.34-0.44,2.74-0.79,4.17-1.02 c1.45-0.24,2.94-0.36,4.47-0.36c6.8,0,13.04,2.43,17.85,6.47c0.22,0.17,0.43,0.36,0.64,0.54c0.84,0.75,1.64,1.56,2.37,2.41 C41.86,21.18,41.94,21.26,42,21.35z"></path><path fill="#c2185b" d="M42,24.71v7.23c-0.24-0.14-0.57-0.31-0.98-0.49c-0.22-0.11-0.47-0.22-0.73-0.32 c-0.38-0.17-0.79-0.33-1.25-0.49c-0.1-0.04-0.2-0.07-0.31-0.1c-0.18-0.07-0.37-0.13-0.56-0.19c-0.59-0.18-1.24-0.35-1.92-0.5 c-0.26-0.05-0.53-0.1-0.8-0.14c-0.87-0.15-1.8-0.24-2.77-0.25c-0.08-0.01-0.17-0.01-0.25-0.01l-2.57,0.02l-3.5,0.02h-0.01 l-7.49,0.06c-2.38,0-3.84,0.57-4.72,0.8c0,0-0.01,0-0.01,0.01c-0.93,0.24-1.22,0.09-1.3-1.54c-0.02-0.45-0.03-1.03-0.03-1.74 l-0.56-0.43l-0.98-0.74l-0.6-0.46l-0.12-0.09L8.88,24.1l-0.25-0.19l-0.52-0.4l-0.96-0.72L6,21.91v-3.4 c0.1-0.08,0.19-0.15,0.29-0.21c1.45-1,3-1.85,4.64-2.54c1.46-0.62,3-1.11,4.58-1.46c0.43-0.09,0.87-0.18,1.32-0.24 c1.33-0.23,2.7-0.34,4.09-0.34c6.01,0,11.53,2.09,15.91,5.55c0.66,0.52,1.3,1.07,1.9,1.66c0.82,0.78,1.59,1.61,2.3,2.49 c0.14,0.18,0.28,0.36,0.42,0.55C41.64,24.21,41.82,24.46,42,24.71z"></path><path fill="#d81b60" d="M42,28.72V32c0,0.65-0.06,1.29-0.18,1.91c-0.18,0.92-0.49,1.8-0.91,2.62c-0.22,0.05-0.47,0.05-0.75,0.01 c-0.63-0.11-1.37-0.44-2.17-0.87c-0.04-0.01-0.08-0.03-0.11-0.05c-0.25-0.13-0.51-0.27-0.77-0.43c-0.53-0.29-1.09-0.61-1.65-0.91 c-0.12-0.06-0.24-0.12-0.35-0.18c-0.64-0.33-1.3-0.63-1.96-0.86c0,0,0,0-0.01,0c-0.14-0.05-0.29-0.1-0.44-0.14 c-0.57-0.16-1.15-0.26-1.71-0.26l-1.1-0.32l-4.87-1.41c0,0,0,0-0.01,0l-2.99-0.87h-0.01l-1.3-0.38c-3.76,0-6.07,1.6-7.19,0.99 c-0.44-0.23-0.7-0.81-0.79-1.95c-0.03-0.32-0.04-0.68-0.04-1.1l-1.17-0.57l-0.05-0.02h-0.01l-0.84-0.42L9.7,26.35l-0.07-0.03 l-0.17-0.09L7.5,25.28L6,24.55v-3.43c0.17-0.15,0.35-0.29,0.53-0.43c0.19-0.15,0.38-0.29,0.57-0.44c0.01,0,0.01,0,0.01,0 c1.18-0.85,2.43-1.6,3.76-2.22c1.55-0.74,3.2-1.31,4.91-1.68c0.25-0.06,0.51-0.12,0.77-0.16c1.42-0.27,2.88-0.41,4.37-0.41 c5.27,0,10.11,1.71,14.01,4.59c1.13,0.84,2.18,1.77,3.14,2.78c0.79,0.83,1.52,1.73,2.18,2.67c0.05,0.07,0.1,0.14,0.15,0.2 c0.37,0.54,0.71,1.09,1.03,1.66C41.64,28.02,41.82,28.37,42,28.72z"></path><path fill="#f50057" d="M41.82,33.91c-0.18,0.92-0.49,1.8-0.91,2.62c-0.19,0.37-0.4,0.72-0.63,1.06c-0.14,0.21-0.29,0.41-0.44,0.6 c-0.36-0.14-0.89-0.34-1.54-0.56c0,0,0,0,0-0.01c-0.49-0.17-1.05-0.35-1.65-0.52c-0.17-0.05-0.34-0.1-0.52-0.15 c-0.71-0.19-1.45-0.36-2.17-0.46c-0.6-0.1-1.19-0.16-1.74-0.16l-0.46-0.13h-0.01l-2.42-0.7l-1.49-0.43l-1.66-0.48h-0.01l-0.54-0.15 l-6.53-1.88l-1.88-0.54l-1.4-0.33l-2.28-0.54l-0.28-0.07c0,0,0,0-0.01,0l-2.29-0.53c0-0.01,0-0.01,0-0.01l-0.41-0.09l-0.21-0.05 l-1.67-0.39l-0.19-0.05l-1.42-1.17L6,27.9v-4.08c0.37-0.36,0.75-0.7,1.15-1.03c0.12-0.11,0.25-0.21,0.38-0.31 c0.12-0.1,0.25-0.2,0.38-0.3c0.91-0.69,1.87-1.31,2.89-1.84c1.3-0.7,2.68-1.26,4.13-1.66c0.28-0.09,0.56-0.17,0.85-0.23 c1.64-0.41,3.36-0.62,5.14-0.62c4.47,0,8.63,1.35,12.07,3.66c1.71,1.15,3.25,2.53,4.55,4.1c0.66,0.79,1.26,1.62,1.79,2.5 c0.05,0.07,0.09,0.13,0.13,0.2c0.32,0.53,0.62,1.08,0.89,1.64c0.25,0.5,0.47,1,0.67,1.52C41.34,32.25,41.6,33.07,41.82,33.91z"></path><path fill="#ff1744" d="M40.28,37.59c-0.14,0.21-0.29,0.41-0.44,0.6c-0.44,0.55-0.92,1.05-1.46,1.49c-0.47,0.39-0.97,0.74-1.5,1.04 c-0.2-0.05-0.4-0.11-0.61-0.19c-0.66-0.23-1.35-0.61-1.99-1.01c-0.96-0.61-1.79-1.27-2.16-1.57c-0.14-0.12-0.21-0.18-0.21-0.18 l-1.7-0.15L30,37.6l-2.2-0.19l-2.28-0.2l-3.37-0.3l-5.34-0.47l-0.02-0.01l-1.88-0.91l-1.9-0.92l-1.53-0.74l-0.33-0.16l-0.41-0.2 l-1.42-0.69L7.43,31.9l-0.59-0.29L6,31.35v-4.47c0.47-0.56,0.97-1.09,1.5-1.6c0.34-0.32,0.7-0.64,1.07-0.94 c0.06-0.05,0.12-0.1,0.18-0.14c0.04-0.05,0.09-0.08,0.13-0.1c0.59-0.48,1.21-0.91,1.85-1.3c0.74-0.47,1.52-0.89,2.33-1.24 c0.87-0.39,1.78-0.72,2.72-0.97c1.63-0.46,3.36-0.7,5.14-0.7c4.08,0,7.85,1.24,10.96,3.37c1.99,1.36,3.71,3.08,5.07,5.07 c0.45,0.64,0.85,1.32,1.22,2.02c0.13,0.26,0.26,0.52,0.37,0.78c0.12,0.25,0.23,0.5,0.34,0.75c0.21,0.52,0.4,1.04,0.57,1.58 c0.32,1,0.56,2.02,0.71,3.08C40.21,36.89,40.25,37.24,40.28,37.59z"></path><path fill="#ff5722" d="M38.39,39.42c0,0.08,0,0.17-0.01,0.26c-0.47,0.39-0.97,0.74-1.5,1.04c-0.22,0.12-0.44,0.24-0.67,0.34 c-0.23,0.11-0.46,0.21-0.7,0.3c-0.34-0.18-0.8-0.4-1.29-0.61c-0.69-0.31-1.44-0.59-2.02-0.68c-0.14-0.03-0.27-0.04-0.39-0.04 l-1.64-0.21h-0.02l-2.04-0.27l-2.06-0.27l-0.96-0.12l-7.56-0.98c-0.49,0-1.01-0.03-1.55-0.1c-0.66-0.06-1.35-0.16-2.04-0.3 c-0.68-0.12-1.37-0.28-2.03-0.45c-0.69-0.16-1.37-0.35-2-0.53c-0.73-0.22-1.41-0.43-1.98-0.62c-0.47-0.15-0.87-0.29-1.18-0.4 c-0.18-0.43-0.33-0.88-0.44-1.34C6.1,33.66,6,32.84,6,32v-1.67c0.32-0.53,0.67-1.05,1.06-1.54c0.71-0.94,1.52-1.8,2.4-2.56 c0.03-0.04,0.07-0.07,0.1-0.09l0.01-0.01c0.31-0.28,0.63-0.53,0.97-0.77c0.04-0.04,0.08-0.07,0.12-0.1 c0.16-0.12,0.33-0.24,0.51-0.35c1.43-0.97,3.01-1.73,4.7-2.24c1.6-0.48,3.29-0.73,5.05-0.73c3.49,0,6.75,1.03,9.47,2.79 c2.01,1.29,3.74,2.99,5.06,4.98c0.16,0.23,0.31,0.46,0.46,0.7c0.69,1.17,1.26,2.43,1.68,3.75c0.05,0.15,0.09,0.3,0.13,0.46 c0.08,0.27,0.15,0.55,0.21,0.83c0.02,0.07,0.04,0.14,0.06,0.22c0.14,0.63,0.24,1.29,0.31,1.95c0,0.01,0,0.01,0,0.01 C38.36,38.22,38.39,38.82,38.39,39.42z"></path><path fill="#ff6f00" d="M36.33,39.42c0,0.35-0.02,0.73-0.06,1.11c-0.02,0.18-0.04,0.36-0.06,0.53c-0.23,0.11-0.46,0.21-0.7,0.3 c-0.45,0.17-0.91,0.31-1.38,0.41c-0.32,0.07-0.65,0.13-0.98,0.16h-0.01c-0.31-0.19-0.67-0.42-1.04-0.68 c-0.67-0.47-1.37-1-1.93-1.43c-0.01-0.01-0.01-0.01-0.02-0.02c-0.59-0.45-1.01-0.79-1.01-0.79l-1.06,0.04l-2.04,0.07l-0.95,0.04 l-3.82,0.14l-3.23,0.12c-0.21,0.01-0.46,0.01-0.77,0h-0.01c-0.42-0.01-0.92-0.04-1.47-0.09c-0.64-0.05-1.34-0.11-2.05-0.18 c-0.69-0.08-1.39-0.16-2.06-0.24c-0.74-0.08-1.44-0.17-2.04-0.25c-0.47-0.06-0.88-0.11-1.21-0.15c-0.28-0.32-0.53-0.65-0.77-1.01 c-0.36-0.54-0.67-1.11-0.91-1.72c-0.18-0.43-0.33-0.88-0.44-1.34c0.29-0.89,0.67-1.73,1.12-2.54c0.36-0.66,0.78-1.29,1.24-1.89 c0.45-0.59,0.94-1.14,1.47-1.64v-0.01c0.15-0.15,0.3-0.29,0.45-0.42c0.28-0.26,0.57-0.5,0.87-0.73h0.01 c0.01-0.02,0.02-0.02,0.03-0.03c0.24-0.19,0.49-0.36,0.74-0.53c1.48-1.01,3.15-1.76,4.95-2.2c1.19-0.29,2.44-0.45,3.73-0.45 c2.54,0,4.94,0.61,7.05,1.71h0.01c1.81,0.93,3.41,2.21,4.7,3.75c0.71,0.82,1.32,1.72,1.82,2.67c0.35,0.64,0.65,1.31,0.9,1.99 c0.02,0.06,0.04,0.11,0.06,0.16c0.17,0.5,0.32,1.02,0.45,1.54c0.09,0.37,0.16,0.75,0.22,1.13c0.02,0.12,0.04,0.23,0.05,0.35 C36.28,37.99,36.33,38.7,36.33,39.42z"></path><path fill="#ff9800" d="M34.28,39.42v0.1c0,0.34-0.03,0.77-0.06,1.23c-0.03,0.34-0.06,0.69-0.09,1.02c-0.32,0.07-0.65,0.13-0.98,0.16 h-0.01C32.76,41.98,32.39,42,32,42h-1.75l-0.38-0.11l-1.97-0.6l-2-0.6l-4.63-1.39l-2-0.6c0,0-0.83,0.33-2,0.72h-0.01 c-0.45,0.15-0.94,0.31-1.46,0.47c-0.65,0.19-1.34,0.38-2.02,0.53c-0.7,0.16-1.39,0.28-2.01,0.33c-0.19,0.02-0.38,0.03-0.55,0.03 c-0.56-0.31-1.1-0.68-1.59-1.09c-0.43-0.36-0.83-0.75-1.2-1.18c-0.28-0.32-0.53-0.65-0.77-1.01c0.07-0.45,0.15-0.89,0.27-1.32 c0.3-1.19,0.77-2.33,1.39-3.37c0.34-0.59,0.72-1.16,1.16-1.69c0.01-0.03,0.04-0.06,0.07-0.08c-0.01-0.01,0-0.01,0-0.01 c0.13-0.17,0.27-0.33,0.41-0.48c0-0.01,0-0.01,0-0.01c0.41-0.44,0.83-0.86,1.29-1.25c0.16-0.13,0.31-0.26,0.48-0.39 c0.03-0.03,0.06-0.05,0.1-0.08c2.25-1.72,5.06-2.76,8.09-2.76c3.44,0,6.57,1.29,8.94,3.41c1.14,1.03,2.11,2.26,2.84,3.63 c0.06,0.1,0.12,0.21,0.17,0.32c0.09,0.18,0.18,0.37,0.26,0.57c0.33,0.72,0.59,1.48,0.77,2.26c0.02,0.08,0.04,0.16,0.06,0.24 c0.08,0.37,0.15,0.75,0.2,1.13C34.24,38.21,34.28,38.81,34.28,39.42z"></path><path fill="#ffc107" d="M32.22,39.42c0,0.2-0.01,0.42-0.02,0.65c-0.02,0.37-0.05,0.77-0.1,1.18c-0.02,0.25-0.06,0.5-0.1,0.75h-5.48 l-1.06-0.17l-4.14-0.66l-0.59-0.09l-1.35-0.22c-0.59,0-1.87,0.26-3.22,0.51c-0.71,0.13-1.43,0.27-2.08,0.36 c-0.08,0.01-0.16,0.02-0.23,0.03h-0.01c-0.7-0.15-1.38-0.38-2.02-0.68c-0.2-0.09-0.4-0.19-0.6-0.3c-0.56-0.31-1.1-0.68-1.59-1.09 c-0.01-0.12-0.02-0.22-0.02-0.27c0-0.26,0.01-0.51,0.03-0.76c0.04-0.64,0.13-1.26,0.27-1.86c0.22-0.91,0.54-1.79,0.97-2.6 c0.08-0.17,0.17-0.34,0.27-0.5c0.04-0.08,0.09-0.15,0.13-0.23c0.18-0.29,0.38-0.57,0.58-0.85c0.42-0.55,0.89-1.07,1.39-1.54 c0.01,0,0.01,0,0.01,0c0.04-0.04,0.08-0.08,0.12-0.11c0.05-0.04,0.09-0.09,0.14-0.12c0.2-0.18,0.4-0.34,0.61-0.49 c0-0.01,0.01-0.01,0.01-0.01c1.89-1.41,4.23-2.24,6.78-2.24c1.98,0,3.82,0.5,5.43,1.38h0.01c1.38,0.76,2.58,1.79,3.53,3.03 c0.37,0.48,0.7,0.99,0.98,1.53h0.01c0.05,0.1,0.1,0.2,0.15,0.3c0.3,0.59,0.54,1.21,0.72,1.85h0.01c0.01,0.05,0.03,0.1,0.04,0.15 c0.12,0.43,0.22,0.87,0.29,1.32c0.01,0.09,0.02,0.19,0.03,0.28C32.19,38.43,32.22,38.92,32.22,39.42z"></path><path fill="#ffd54f" d="M30.17,39.31c0,0.16,0,0.33-0.02,0.49v0.01c0,0.01,0,0.01,0,0.01c-0.02,0.72-0.12,1.43-0.28,2.07 c0,0.04-0.01,0.07-0.03,0.11h-4.67l-3.85-0.83l-0.51-0.11l-0.08,0.02l-4.27,0.88L16.27,42H16c-0.64,0-1.27-0.06-1.88-0.18 c-0.09-0.02-0.18-0.04-0.27-0.06h-0.01c-0.7-0.15-1.38-0.38-2.02-0.68c-0.02-0.11-0.04-0.22-0.05-0.33 c-0.07-0.43-0.1-0.88-0.1-1.33c0-0.17,0-0.34,0.01-0.51c0.03-0.54,0.11-1.07,0.23-1.58c0.08-0.38,0.19-0.75,0.32-1.1 c0.11-0.31,0.24-0.61,0.38-0.9c0.12-0.25,0.26-0.49,0.4-0.73c0.14-0.23,0.29-0.45,0.45-0.67c0.4-0.55,0.87-1.06,1.39-1.51 c0.3-0.26,0.63-0.51,0.97-0.73c1.46-0.96,3.21-1.52,5.1-1.52c0.37,0,0.73,0.02,1.08,0.07h0.02c1.07,0.12,2.07,0.42,2.99,0.87 c0.01,0,0.01,0,0.01,0c1.45,0.71,2.68,1.78,3.58,3.1c0.15,0.22,0.3,0.46,0.43,0.7c0.11,0.19,0.21,0.39,0.3,0.59 c0.14,0.31,0.27,0.64,0.38,0.97h0.01c0.11,0.37,0.21,0.74,0.28,1.13v0.01C30.11,38.16,30.17,38.73,30.17,39.31z"></path><path fill="#ffe082" d="M28.11,39.52v0.03c0,0.59-0.07,1.17-0.21,1.74c-0.05,0.24-0.12,0.48-0.21,0.71h-4.48l-2.29-0.63L18.63,42H16 c-0.64,0-1.27-0.06-1.88-0.18c-0.02-0.03-0.03-0.06-0.04-0.09c-0.14-0.43-0.25-0.86-0.3-1.31c-0.04-0.29-0.06-0.59-0.06-0.9 c0-0.12,0-0.25,0.02-0.37c0.01-0.47,0.08-0.93,0.2-1.37c0.06-0.3,0.15-0.59,0.27-0.87c0.04-0.14,0.1-0.27,0.17-0.4 c0.15-0.34,0.33-0.67,0.53-0.99c0.22-0.32,0.46-0.62,0.73-0.9c0.32-0.36,0.68-0.69,1.09-0.96c0.7-0.51,1.5-0.89,2.37-1.1 c0.58-0.16,1.19-0.24,1.82-0.24c2,0,3.79,0.8,5.09,2.09c0.05,0.05,0.11,0.11,0.16,0.18h0.01c0.14,0.15,0.27,0.3,0.4,0.47 c0.37,0.47,0.68,0.98,0.92,1.54c0.12,0.26,0.22,0.53,0.3,0.81c0.01,0.04,0.02,0.07,0.03,0.11c0.14,0.49,0.23,1,0.25,1.53 C28.1,39.2,28.11,39.36,28.11,39.52z"></path><path fill="#ffecb3" d="M26.06,39.52c0,0.41-0.05,0.8-0.16,1.17c-0.1,0.4-0.25,0.78-0.44,1.14c-0.03,0.06-0.1,0.17-0.1,0.17h-8.88 c-0.01-0.01-0.02-0.03-0.02-0.04c-0.12-0.19-0.22-0.38-0.3-0.59c-0.2-0.46-0.32-0.96-0.36-1.48c-0.02-0.12-0.02-0.25-0.02-0.37 c0-0.06,0-0.13,0.01-0.19c0.01-0.44,0.07-0.86,0.19-1.25c0.1-0.36,0.23-0.69,0.4-1.01c0,0,0.01-0.01,0.01-0.02 c0.12-0.21,0.25-0.42,0.4-0.62c0.49-0.66,1.14-1.2,1.89-1.55c0.01,0,0.01,0,0.01,0c0.24-0.12,0.49-0.22,0.75-0.29c0,0,0,0,0.01,0 c0.46-0.14,0.96-0.21,1.47-0.21c0.59,0,1.16,0.09,1.68,0.28c0.19,0.05,0.37,0.13,0.55,0.22c0,0,0,0,0.01,0 c0.86,0.41,1.59,1.05,2.09,1.85c0.1,0.15,0.19,0.31,0.27,0.48c0.04,0.07,0.08,0.15,0.11,0.22c0.23,0.52,0.37,1.09,0.41,1.69 c0.01,0.05,0.01,0.1,0.01,0.16C26.06,39.36,26.06,39.44,26.06,39.52z"></path><g><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M30,11H18c-3.9,0-7,3.1-7,7v12c0,3.9,3.1,7,7,7h12c3.9,0,7-3.1,7-7V18C37,14.1,33.9,11,30,11z"></path><circle cx="31" cy="16" r="1" fill="#fff"></circle></g><g><circle cx="24" cy="24" r="6" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle></g>
</svg> Instagram </a>
        <a href="https://www.facebook.com/Softflame-Solutions-Pvt-Ltd-2173947799583603/" target="_blank"
            class="Facebook"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
<path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"></path>
</svg> Facebook </a>
        
    </div>

    <!--Sidebar Social Icons-->

<nav>
  <div class="wrapper">
    <div class="logo"><a href="#"><img src="images/logo web.png" id="logo" class="mobileSizeLogo"
                                alt="Website Development Company Pune, Bangalore, Delhi" /></a></div>
    <input type="radio" name="slider" id="menu-btn">
    <input type="radio" name="slider" id="close-btn">
    <ul class="nav-links">
      <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li>
        <a href="services.php" class="desktop-item">Services</a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item">Services</label>
        <div class="mega-box">
          <div class="content">
            <!-- <div class="row">
              <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-mega-menu-and-dropdown-menu-using-only-html-and-css/img.jpg" alt="">
            </div> -->
            <div class="row">
              <header>Web Development</header>
              <ul class="mega-links">
                <li><a href="website-development-company-in-pune.php">Website Development</a></li>
                <li><a href="mean-stack-app-development-company-in-pune.php">Mean Stack App Development</a></li>
                <li><a href="mern-stack-app-development-company-in-pune.php">Mern Stack App Development</a></li>
                <li><a href="node-js-development-company-in-pune.php">Node Js Development</a></li>
                <li><a href="angularjs-development-company-in-pune.php">Angular Js Development</a></li>
                <li><a href="ui-ux-design-company-in-pune.php">UX Design Services</a></li>
                <li><a href="ecommerce-development-company-in-pune.php">Ecommerce Development</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Mobile App Development</header>
              <ul class="mega-links">
                <li><a href="ios-app-development-company-in-pune.php">iPhone/iPad App Development</a></li>
                <li><a href="android-app-development-company-in-pune.php">Android App Development</a></li>
                <li><a href="cordova-phonegap-app-development-company-in-pune.php">Cordova/ PhonGap Development</a></li>
                <li><a href="ionic-app-development-company-in-pune.php">Ionic Framework App Development</a></li>
                <li><a href="cross-platform-app-development-company-in-pune.php">Cross Platform App Development</a></li>
                <li><a href="meteorjs-app-development-company-in-pune.php">Meteor Js Development</a></li>
              </ul>
            </div>
            <div class="row">
              <header>AWS Cloud</header>
              <ul class="mega-links">
                <li><a href="aws-cloud-consulting-services-in-pune.php">AWS Cloud Consulting</a></li>
                <li><a href="aws-cloud-migration-services-in-pune.php">AWS Cloud Migration</a></li>
                <li><a href="managed-aws-services-in-pune.php">AWS Managed Services</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Digital Marketing</header>
              <ul class="mega-links">
                <li><a href="seo-company-in-pune.php">SEO Services</a></li>
                <li><a href="content-marketing-service.php">Content Marketing</a></li>
                <li><a href="pay-per-click-advertising.php">Pay-Per-Click (PPC) Advertising</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li>
        <a href="#" class="desktop-item">Hire Resources</a>
        <input type="checkbox" id="showDrop">
        <label for="showDrop" class="mobile-item">Hire Resources</label>
        <ul class="drop-menu">
          <li><a href="hire-angularjs-developer-pune.php">Hire Angular JS Developer</a></li>
          <li><a href="hire-ios-app-developer-pune.php">Hire iOS Developer</a></li>
          <li><a href="hire-react-native-app-developer-pune.php">Hire React Native Developer</a></li>
          <li><a href="hire-mean-stack-app-developer-pune.php">Hire MEAN Stack Developer</a></li>
          <li><a href="hire-flutter-native-app-developer-pune.php">Hire Flutter Developer</a></li>
          <li><a href="hire-ionic-app-developer-pune.php">Hire Ionic App Developer</a></li>
          <li><a href="hire-nodejs-developer-pune.php">Hire Node Js Developer</a></li>
          <li><a href="hire-php-developer-pune.php">Hire PHP Developer</a></li>
        </ul>
      </li>
      <li><a href="career.php">Career</a></li>
      <li>
        <a href="products.php" class="desktop-item">Products</a>
        <input type="checkbox" id="showDrop">
        <label for="showDrop" class="mobile-item">Products</label>
        <ul class="drop-menu">
          <li><a href="uber-clone.php">Uber Clone</a></li>
          <li><a href="amazon-clone.php">Amazon/Flipkart Clone</a></li>
          <li><a href="netflix-clone.php">Netflix Clone</a></li>
          <li><a href="byjus-clone.php">Byju's Clone</a></li>
          <li><a href="urban-clone.php">Urban Clone</a></li>
        </ul>
      </li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
  </div>
</nav>

       


