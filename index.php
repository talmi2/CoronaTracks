<!doctype html>

 <html>
 <head>
 <style>
  body{
   background-image: url("wallpaper.jpeg");
  }
   h1{
  text-align: center;
  color: white;
  font-size: 50px;
}
  .intro1{
    color: white;
    font-family: Georgia, serif;
    font-size: 25px;
  }
    .intro2{
      color: white;
    font-family: Georgia, serif;
    }
     .intro3{
      color: white;
    font-family: Georgia, serif;
    }
    .youare{
      color: white;
      font-family: Georgia, serif;
      font-size: 20px;
      text-align: center;
    }
     #buttons{
      text-align: center;
    }
    .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #1E90FF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
 a {
            all: unset;
            color: inherit;

        }
  </style>
 </head>

 <body>

<h1>CoronaTracks</h1>


<p class="intro1"> <br> <br> <br> <br> Nowadays, the CoronaVirus still exists among us. <br></p>

<p class="intro2"> We then decided to create this site in order to Track the virus geographically and to give us the possibility of avoiding places with a high rate of contamination. </p>

<p class="intro3"> <br> <br> Create an account now to see where the virus is situated on a map, talk to a doctor and much more.</p>

<p class="youare"> <br>You are: </p>

<div id="buttons">
<button class="button"style="vertical-align:middle"><span><a href="home_page.php"> User</a> </span></a></button>
<button class="button"style="vertical-align:middle"><span><a href="login_page.php"> Doctor</a> </span></a></button>
</div>
 </body>


 </html>

