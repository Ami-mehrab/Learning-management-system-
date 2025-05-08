<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    color: #fff;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #25252b;
}

.container {
    position: relative;
    width: 750px;
    height: 450px;
    border: 2px solid #ff2770;
    box-shadow: 0 0 25px #ff2770;
    overflow: hidden;
}

.form-box.Login {
    position: absolute;
    right: 0;
    padding: 0 60px;
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.form-box h2 {
    font-size: 32px;
    text-align: center;
}

.input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin-top: 25px;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    font-weight: 600;
    border-bottom: 2px solid #fff;
    padding-right: 23px;
    transition: .5s;
}

.input-box input:focus,
.input-box input:valid {
    border-bottom: 2px solid #ff2770;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    transition: .5s;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label {
    top: -5px;
    color: #ff2770;
}

.input-box box-icon {
    position: absolute;
    top: 50%;
    right: 0;
    font-size: 18px;
    transform: translateY(-50%);
}

.input-box input:focus ~ box-icon,
.input-box input:valid ~ box-icon {
    color: #ff2770;
}

.btn {
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    border: 2px solid #ff2770;
    overflow: hidden;
    z-index: 1;
}

.btn::before {
    content: "";
    position: absolute;
    height: 300%;
    width: 100%;
    background: linear-gradient(#25252b, #ff2770, #25252b, #ff2770);
    top: -100%;
    left: 0;
    z-index: -1;
    transition: .5s;
}

.btn:hover::before {
    top: 0;
}

.regi-link {
    font-size: 14px;
    text-align: center;
    margin: 20px 0 10px;
}

.regi-link a {
    text-decoration: none;
    color: #ff2770;
    font-weight: 600;
}

.regi-link a:hover {
    text-decoration: underline;
}

.info-content.Login {
    position: absolute;
    left: 0;
    padding: 0 150px 60px 38px;
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    pointer-events: none;
}

.info-content h2 {
    text-transform: uppercase;
    font-size: 36px;
    line-height: 1.3;
}

.info-content p {
    font-size: 16px;
}

.curved-shape {
    position: absolute;
    right: 0;
    top: -5px;
    height: 600px;
    width: 850px;
    background: linear-gradient(45deg, #25252b, #ff2770);
    transform: rotate(0deg) skewY(0deg);
}

.curved-shape2 {
    position: absolute;
    left: 250px;
    top: 100%;
    height: 700px;
    width: 850px;
    background: #25252b;
    border-top: 3px solid #ff2770;
    transform: rotate(-11deg) skewY(-41deg);
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="login.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
  <div class="container">
    <div class="curved-shape"></div>
    <div class="curved-shape2"></div>

    <div class="form-box Login">
      <h2 class="animation" style="--D:0; --S:21">Login</h2>
      <form action="{{Route('login.store')}}" method="POST"  >

      @csrf
       

        <div class="input-box animation" style="--D:1; --S:22">
          <input type="email" name="email" required />
          <label>Email</label>
          <box-icon type='solid' name='user'></box-icon>
        </div>

        <div class="input-box animation" style="--D:2; --S:23">
          <input type="password" name="password" required />
          <label>Password</label>
          <box-icon name='lock-alt' type='solid'></box-icon>
        </div>

        <div class="input-box animation" style="--D:3; --S:24">
          <button class="btn" type="submit">Login</button>
        </div>

        <div class="regi-link animation" style="--D:4; --S:25">
          <p>Don't have an account? <br><a href="{{route('s.register')}}" class="SignUpLink">Sign Up</a></p>
        </div>
      </form>
    </div>

    <div class="info-content Login">
      <h2 class="animation" style="--D:0; --S:20">WELCOME BACK!</h2>
      <p class="animation" style="--D:1; --S:21">We are happy to have you with us again</p>
    </div>
  </div>

  <script src="login.js"></script>
</body>
</html>
<script>
    const container = document.querySelector('.container');
    const LoginLink = document.querySelector('.SignInLink');
    const RegisterLink = document.querySelector('.SignUpLink');

    RegisterLink.addEventListener('click', () => {
        container.classList.add('active');
    })

    LoginLink.addEventListener('click', () => {
        container.classList.remove('active');
    })
</script>
