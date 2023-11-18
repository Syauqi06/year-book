<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Document</title>
    
</head>
    <style>
        .back{
          background-image: url("img/Login.jpeg");
          height: 100vh;
          background-position: center;
          background-size: cover;
        }
    </style>
<body>
    <form method="POST" action="{{ url('login') }}" class="back">
        @csrf
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-5 col-lg-6 col-xl-5">
              <div class="card bg-D9D9D9 text-black" style="border-radius: 2rem; 
              box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-black-50 mb-5">Please enter your login and password!</p>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX"></label>
                        <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Masukan Email" />
                    </div>
      
                    <div class="form-outline form-white mb-5">
                        <label class="form-label" for="typePasswordX"></label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Masukan Password"/>
                    </div>
                   <div class="d-grid">
                    <button type="button" class="btn btn-success btn-block" type="submit">Login</button>
                  </div>
                  </div>      
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</body>
</html>
