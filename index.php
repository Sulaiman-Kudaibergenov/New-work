<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">
</head>
    <style>
    html {
    height: 100%;
  }
body {
    margin:0;
    padding:0;
    font-family: 'Zen Old Mincho', serif;
    background: linear-gradient(#215344, #216153);
  }

form{
    height: 400px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
}

.one, h2{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}
.first{
    position: relative;
}

 .first input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }
 .first label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }
 

.one .first input:focus ~ label,
.one .first input:valid ~ label {
  top: -20px;
  left: 0;
  color: #267e64;
  font-size: 10px;
}


.one button{
    padding: 10px 20px;
    font-family: 'Zen Old Mincho', serif;
    color: #267e64;
    background: transparent;
    border: none !important;
}
.one form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #267e64;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
  }
  
.one button:hover {
    background: #32d4bf;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px#259473,
                0 0 25px #259473,
                0 0 50px#259473,
                0 0 100px#259473;
  }
  
.one button{
    position: absolute;
    display: block;
  }
  
    </style>
<body>
<div class="one"> 
    <form>
       <h2>Login</h2>
       <div class="first">
         <input type="text" name="" required="">
         <label>User name</label>
        </div>
        <div class="first">
         <input type="password" name="" required="">
         <label>Password</label>
        </div>
           
        <button type="reset" value="Clear" id="name">Clear</button>
        
        <a href="#">
           <button id="password">Submit</button> 
        </a>
       </form>
</div>  
    <script>
        function checkValid() {
             let name = document.getElementById('name');
             var password = document.getElementById('password');
             if(name.value == 'Sulaiman' && password.value == '4040')
             {
                pageRedirect();
             }else{
                 alert('Invalid');
             }
            }
            function pageRedirect() {
                window.location.href = "https://www.youtube.com/";
            }
    </script>
</body>
</html>
