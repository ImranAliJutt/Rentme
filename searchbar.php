<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="searchbar.css">
	<title>Search with us </title>
</head>

<body>

  <section class="search-banner py-5" id="search-banner">

    <div class="container py-5 my-5"  >
    <div class="row text-center pb-4">
        <div class="col-md-12">
            <h1 class="meinheadingsearch"> <i class="fa-solid fa-magnifying-glass-location"></i> Discover New Residential Options within Canada!  </h1>
        </div>
    </div>   
    <div class="row" > 
        <div class="col-md-12">
            <div class="card" style="border: none;">
                <div class="card-body">
                    <div class="row">
                <div class="col-md-3">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" >
                            <option selected>.. select city .. </option>
                            <option>New</option>
                            <option>Used</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" >
                            <option selected>.. select type ..</option>
                            <option>BMW</option>
                            <option>Audi</option>
                            <option>Maruti</option>
                            <option>Tesla</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" >
                            <option selected>.. select rent ..</option>
                            <option>City</option>
                            <option>Jazz</option>
                            <option>Brio</option>
                            
                          </select>
                        </div>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn" id="searchbutton"> Search </button>

                </div>
            </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</section>

<style type="text/css">
@media (max-width: 767px) { 
            .meinheadingsearch {
                background-color: #000; 
                padding:30px;
                margin: 0 auto;
                border-radius:10px;
                color: #fff;
                text-justify: inter-word;
            }
        }
    
h2{
    font-size: 36px;
}
</style>

</body>

</html>