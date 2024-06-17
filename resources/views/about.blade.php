<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <title>Movies</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
		
:root{
    --body-color: rgb(122, 213, 252);
    --color-gray: rgb(144, 213, 255);

    --text-color-second: rgb(0, 0, 0);
    --text-color-third: rgb(20, 43, 53);

    --first-color: rgb(110, 87, 224);
    --first-color-hover: rgb(40, 91, 212);

    --second-color: rgb(0, 201, 255);
    --third-color: rgb(192, 166, 49);
    --first-shadow-color: rgba(0, 0, 0, 0.1);
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html{
    scroll-behavior: smooth;
}
i{
    font-size: 16px;
}

body{
   background-color: rgb(156,218,245);
}
.container{
    width: 100%;
    position: relative;
}
nav{
    position: fixed;
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 90px;
    line-height: 90px;
    background: var(--body-color);
    padding-inline: 9vw;
    transition: .3s;
    z-index: 100;
}
.nav-logo{
   position: relative;
}
.nav-name{
    font-size: 30px;
    font-weight: 600;
    color: var(--text-color-third);
}
.nav-logo span{
    position: absolute;
    top: -15px;
    right: -20px;
    font-size: 5em;
    color: var(--text-color-second);
}
.nav-menu, .nav_menu_list{
    display: flex;
	font-size: 16px;
}
.nav-menu .nav_list{
    list-style: none;
    position: relative;
}
.nav-link{
    text-decoration: none;
    color: var(--text-color-second);
    font-weight: 500;
    padding-inline: 15px;
    margin-inline: 20px;
}

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
  --primary-color: #03045e;
  --color: #4581cf;
  --black: #666;
  --white: #fff;
  --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
}

*{
font-family: 'Poppins', sans-serif; 
  margin: 0; padding: 0;
  box-sizing: border-box;
  outline: none; border: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: .2s linear;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 4rem;
}

html::-webkit-scrollbar{
  width: 1rem;
}

html::-webkit-scrollbar-track{
  background: transparent;
}

html::-webkit-scrollbar-thumb{
  background: var(--primary-color);
  border-radius: 5rem;
}

section{
  padding: 2rem 7%;
}

.heading{
  text-align: center;
  color: var(--primary-color);
  text-transform: uppercase;
  margin-bottom: 3rem;
  padding: 10rem 0;
  font-size: 4rem;
}

.heading span{
  color: var(--color);
  text-transform: uppercase;
}

.about .row{
  display: flex;
  flex-wrap: wrap;
  gap: 6rem;
  align-items: center;
}

.about .row .image{
  flex: 1 1 30rem;
}

.about .row .image img{
  width: 100%;
}

.about .row .content{
  flex: 250rem;
}

.about .row .content h3{
  font-size: 3.5rem;
  color: var(--color);
  padding: 2rem 0;
}

.about .row .content p{
  font-size: 1.6rem;
  color: var(--black);
  padding: 1rem 0;
  line-height: 1.8;
}

.about .row{
  display: flex;
  flex-wrap: wrap;
  gap: 6rem;
  align-items: center;
}

.about .row .image{
  flex: 1 1 30rem;
}

.about .row .image img{
  width: 100%;
}

.about .row .content{
  flex: 1 1 50rem;
}

.about .row .content h3{
	font-family: 'Poppins', sans-serif; 
  font-size: 4.2rem;
  color: var(--color);
  padding: 1rem 0;
}

.about .row .content p{
  font-size: 1.5rem;
  color: var(--black);
  padding: 1rem 0;
  line-height: 1.8;
}

    </style>
   <div class="container">
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">AMS</p>
            <span>.</span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="{{url('/')}}" class="nav-link active-link">Home</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="{{url('/about')}}" class="nav-link">About</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
      </nav>
       </section>
    </main>

    <section class="about" id="about">

        <h1 class="heading">about <span>us</span></h1>

        <div class="row">
            <div class="image">
    
            </div>
            <div class="content">
                <h3>Welcome To Angelo Movie Store</h3>
                <p>Embark On A Journey To Snow Resort, A Picturesque Retreat Nestled In The Heart Of The Snowy Mountains. Our Resort Offers A Perfect Blend Of Thrilling Skiing Adventures And Cozy Comfort. Whether You're An Avid Skier Seeking The Thrill Of The Slopes Or Someone Looking To Unwind Amidst Breathtaking Winter Landscapes, Snow Resort Is Your Ideal Destination.</p>
                <p>Our Well-Appointed Accommodations Provide A Warm And Inviting Atmosphere, Ensuring A Relaxing Stay After A Day Of Exhilarating Skiing. Indulge In The Culinary Delights At Our Restaurant, Where You Can Savor Gourmet Dishes While Enjoying Panoramic Views Of The Snow-Covered Peak </p>

            </div>
        </div>

    </section>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

</body>
</html>