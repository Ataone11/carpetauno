<style>

body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
section.sec1{
  width: 100%;
  height: 100vh;
   box-sizing: border-box;
   background: url(gg.jpg);
   background-size: cover;
}

}
section.sec2{
  width: 100%;
  height: 100vh;
   box-sizing: border-box;
   background: url(gg.jpg);
   background-size: cover;
}
nav{

position: fixed;
top: 0;
left: 0;
width: 100%;
height:70px;

background:rgba(0,0,0,0.6);
padding: 0 100px;
box-sizing: border-box;
}
nav .brand{

float: left;
height: 100%;
line-height:70px;
}
nav .brand h2{

margin: 0;
padding: 0;
color: #fff;

}
nav ul{
  float: right;
  display: flex;
  margin: 0;
  padding: 0;

}
nav ul li {
  list-style: none;
}
nav ul li a {
  position: relative;
  display: block;
  height: 70px;
  line-height: 70px;
  padding: 0 20px;
  box-sizing: border-box;
  color: #fff;
  text-decoration: none;
  text-decoration: uppercase;
  transition: .5s;


}
nav ul li a:hover{
color: #262626;
}
nav ul li a:before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height:100%;
  background:#fff;
  transform-origin: right;
  z-index:  -1;
  transform: scaleX(0);
  transition: transform .5s;

}

nav ul li a:hover:before {
  transform-origin: left;
  transform: scaleX(1);
}

.opacity{
   background-color:rgb(255,0,0);
   opacity:0.6; /* Opacidad 60% */
   width:200px;
   height:70px;
}
</style>



<nav class="navbar navbar-ligth bg-primary">

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul >
    <li><a href="../canciones/"> CANCIONES </a></li>
    <li><a href="../listas/"> LISTAS</a></li>

  </ul>

    </div>
  </div>
</nav>