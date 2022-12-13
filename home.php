<style>
    .carousel-item{
        height: 75vh;
        min-height: 300px;
    }
    .carousel-item img{
        position: absolute;
        top: 0;
        left: 0;
        min-height: 300px;
    }
    .carousel-caption{
        bottom: 20px;
        z-index: 2;
    }
    .carousel-caption h5{
        font-size: 50px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 25px;
    }
    .carousel-caption p{
        width: 60%;
        margin: auto;
        font-size: 20px;
        line-height: 1.9;
    }
    .carousel-inner::before{
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }
    /*.navbar-nav a{
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 500;
    }
    .navbar-light .navbar-brand{
        color: #000;
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 2px;
    }
    .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover{
        color: #000;
    }
    .navbar-light .navbar-nav .navbar-link{
        color: #000;
    }
    .w-100{
        height: 100vh;*/
    }
    .navbar-toggler{
        padding: 1px 5px;
        font-size: 18;
        line-height: 0.3;
    }
    @media only screen and (min-width:300px) and (max-width: 991px){
        .navbar-nav{
            text-align: center;
        }
        .carousel-item{
            height: 30vh;
        }
        .carousel-caption{
            bottom: 370px;
        }
        .carousel-caption p{
            width: 100%;
        }
        
    }
    @media only screen and (max-width: 767px){
        .carousel-item{
            height: 30vh;
        }
        .navbar-nav{
            text-align: center;
        }
        .carousel-caption{
            bottom: 125px;
        }
        .carousel-caption h5{
            font-size: 17px;
        }
        .carousel-caption p{
            width: 100%;
            line-height: 1.6;
            font-size: 12px;
        }
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" referrerpolicy="no-referrer" />
<!-- CAROUSEL -->
    <div class="container">
       <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/carousel/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">Spend less and travel more.</h5>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">Travel with us.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carousel/2.jpg" class="d-block w-100" alt="...">  
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">Affordable travel yet unforgettable experience.</h5>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">Travel with us.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/carousel/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">No to ordinary, yes to extraordinary.</h5>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">Travel with us.</p>
                </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>

<!-- BOOK NOW -->
<div class="container">
    <div class="text-center">
        <button type="submit" onclick="window.location.href='index.php?page=flights';" class="btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#528265; color: white">Book Now</button>
      </div>
</div>

<!-- DESTINATIONS -->
<section id="destination">
<div class="container">
        <div class="row">
            <h2 class="col-lg-12 img-fluid title">DESTINATIONS</h2>
            <!-- <img src="images/titles/title5.png" alt="" class="img-fluid mx-auto d-block title"> -->
        </div>
    <div class="row">

        <?php 
            $sql = "SELECT * FROM destinations ORDER BY desti_name ASC";

            $result = $conn->query($sql);

            if($result){
                if($result->num_rows > 0){
                    while($fetch = $result->fetch_assoc()){ 
        ?>
                    
                        <div class="col-lg-4 col-md-6">
                            <div class="img-thumbnail thumbnail">
                                <div class="img-container">
                                    <img src="images/destinations/<?php echo $fetch ['desti_picture']?>" alt="" class="image" ></img> 
                                    <div class="overlay">
                                        <h6 class="caption"><?php echo $fetch ["desti_name"]?></h6><br>
                                        <input class="btncap btn btn-success" type="submit" name="btnDetails" value="Details" data-toggle="modal" data-target="#addID<?php echo $fetch ["desti_ID"]?>">
                                        <!-- <button type="submit" name="btnDetails" class="btncap btn btn-success">Details</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    
        <?php  
                    }
                }
            }
        ?>
    </div>

<?php 
    $sql = "SELECT * FROM destinations ORDER BY desti_name ASC";

    $result = $conn->query($sql);

    if($result){
        if($result->num_rows > 0){
            while($fetch = $result->fetch_assoc()){ 
?>


<!-- Modal For Details -->
    <div class="modal fade" id="addID<?php echo $fetch ["desti_ID"]?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #C9EFC7;">
                    <h5 class="modal-title"><?php echo $fetch ["desti_name"]?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <div class="modal-body ">
                         <div class="form-row">
                            <div class="form-group mx-auto">
                                <!-- <label>Picture</label> -->
                                <iframe width="300" height="230" src="<?php echo $fetch ["embed_code"]?>" title="Batanes Philippines" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!-- <img src='destinations/<?php //echo $fetch ["desti_picture"]?>' class='img-thumbnail '></img> -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><b>Destination: </b></label>
                                <?php echo $fetch ["desti_name"]?>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="form-group col-12 ">
                                <label><b>Description: </b></label>
                                <?php echo $fetch ["desti_description"]?>
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Price</label>
                                <input class="form-control" type="number" name="txtdesti_price" placeholder="Price" required>
                            </div>
                        </div> -->
                    </div>

                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>

    

<?php }}} ?>


<!-- dELETE -->
 <!--    <div class="container">
        <div class="row">
            <h3 class="col-lg-12 img-fluid title">Why you should travel with TRAVELOCCO</h3>
        </div></br>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <h4 class="title2">Simplify Your Booking Experience</h4>
                <p class="pbody">Feel the flexibility and simplicity throughout your booking process</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="title2">Wide Selections of Travel Product</h4>
                <p class="pbody">Enjoy your memorable moments with millions of favorable flights and accommodations</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="title2">Local Booking Excitement</h4>
                <p class="pbody">Stress-free booking experience with local payment, currency, and language</p>
            </div>
        </div>
    </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>