<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>

        :root{
            --bs-body-font-size: 22px !important;
        }

        .cardwidth1{
            width: 98%;
        }

        .card {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-width: 1px;
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: 0.375rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(0.375rem - 1px);
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    /* display: flex;
    flex-direction: row; */
    display:grid;
    grid-template-columns:1fr 1.45fr;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
     
        </style>
</head>

<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa-solid fa-arrow-left-long fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Profile</div>
        </div>
        <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-pen-to-square fa-2x"></i></a>
        </div>
    </div>
    <!-- header end -->

    <!-- profile start -->

    <!-- <img src="profile.jpg" height="100%" width="100%" /> -->
    <div class="container  mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4 cardbg cardwidth1">
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn2 btn-secondary imgprof"></button> 
</div>
<div>
<div>        
        <div class="name mt-3" style="display:flex;justify-content:center">
        <span>Sophia Sophia...</span>
    </div> 
        <div class="idd" style="display:flex;justify-content:center">
        <span>@glatzekatze</span></div>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1 st1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span><span class="idd1">(5)</span> </div>
                
            </div>
            <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: green;"></i> </span>&nbsp; <span> Covers Rentals </span>
        </div>
            <!-- <div id="rat1" style="display:flex;justify-content:center">
            <span>(5.00/5)</span></div> -->
            <div class="d-flex flex-row justify-content-center align-items-center mt-1 inst1"><i class="fa-brands fa-instagram fa-1x"></i></div>
            <!-- <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>
                <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                    <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div> -->
        </div>
    </div>
    </div>
</div>
    <!-- profile end -->

    <!-- accordation start -->


    <ul class="list-group">
        <a href="favourite.php" class="ancacc"><li class="list-group-item ">Favourites</li></a>
        <a href="reviews.php" class="ancacc"><li class="list-group-item ">Reviews</li></a>
        <a href="myproducts.php" class="ancacc"><li class="list-group-item ">My Products</li></a>
        <a href="rented_product.php" class="ancacc"><li class="list-group-item ">Rented Products</li></a>
        <a href="stats.php" class="ancacc"><li class="list-group-item ">Stats</li></a>
        <a href="lender_activity.php" class="ancacc"><li class="list-group-item ">Earning</li></a>
        <!-- <a href="update.php" class="ancacc"><li class="list-group-item ">Update Profile</li></a> -->
      </ul>

    <!-- <div class="accordion accmar allinone" id="accordionExample">
        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingOne">
                <a href="favourite.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Favourites
              
            </button></a>

            </h2>
        </div>

        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingTwo">
                <a href="reviews.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Reviews
            </button></a>
            </h2>

        </div>

        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="myproducts.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              My Products
            </button></a>
            </h2>

        </div>


        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="#" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Rented Products
            </button></a>
            </h2>

        </div>


        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="#" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Stats
            </button></a>
            </h2>

        </div>

        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="lender_activity.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Earning
            </button></a>
            </h2>

        </div> -->

    </div>

    <!-- accordation end -->
    <div class="gap4">

    </div>

    <!-- footerstart -->
     <?php include 'footer.php' ?>
    

    <!-- footer end -->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>