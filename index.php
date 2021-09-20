<!DOCTYPE html>
<html>
<head>
	<title>My Simple Project Management | phpGrid</title>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>

<style>
body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}
.bg-image{
  background-image: url("images/background.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.centered {
    margin: 0;
    position: absolute;
    background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align:center;
    font-weight:bold;
    font-family:"Noto Sans",sans-serif;
    text-decoration:none;
    text-transform:uppercase;
    color: white;
    border: 3px solid #f1f1f1;
  position: absolute;
  width: 70%;
  padding: 20px;
  text-align: center;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #0D7AB8;
  text-align: center;
  font-family:"Roboto",monospace;
}

a{
  text-decoration:none;
  color: white;
}



button{
  background-color: #0D7AB8; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:20px;
}

button:hover{
  padding: 32px 16px;
  font-size:20px;
}


</style>
<div class="bg-image"></div>

<div class="centered">
<h1>Simple Project Management</h1>

<a href="manager/clients.php" target="_new"> <button>Login as manager</button></a> <a href="employee/tasks.php" target="_new"><button>Login as employee</button></a>
</div>

<div class="footer"><strong>Build by TuraCreativity</strong> | Tura &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>
