<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Recipes</title>
</head>

<body>
    <div>
        <header>
            <div class="container-fluid c_header">
                <div class="row  text-center">
                    <div class="col-xl-4 border-show">
                    <br>
                    <br>
                    <input type="button" class="btn" style="color: white; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='index.html';" value="ABOUT US" />
                    <input type="button" class="btn" style="color: white; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='recipes.html';" value="RECIPES" />
                    <input type="button" class="btn" style="color: white; font-family: 'Patrick Hand', cursive;
                    font-size: 20px !important; " onclick="location.href='contact.html';" value="CONTACT" />
                    </div>
                    <div class="col-xl-4 border-show">
                      <a href="index.html">
                      <img src="PICTURES/recipe.jpg" class="img-fluid" alt="logo" width= 150 ></a>
                    </div>
                    <div class="col-xl-3 border-show">
                      <form class="form-inline my-2 my-lg-0"></form>
                          <br>
                          <br>
                           <input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" type = "text" id = "searchBar" oninput = "Search((this.value).toLowerCase())">
                    </div>
                
                        <div class="col-xl-1 border-show">
                        <br>
                        <br>
                        <button class="btn btn-outline-light" type="submit">Search</button>
                       
                   
                    </div>
                </div>    
            </div>
        </header>
    </div>

  <div class="container-fluid" style="background-color: #FFF0E3;">