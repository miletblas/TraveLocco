<style>
    .userfm{
        height: 5rem;
        width: 5rem;
        border-radius: 75%;
    }

    .fa-star, .fa-star-half-alt{
        color: #ffbf00;
    }
    .fa-quote-left{
        font-size: 2rem;
    }
    .title{
        font-size: 2.5rem;
    }
    .title2{
        font-size: 1.5rem;
    }
    /* STAR RATING */
    @import url(https://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
    div.stars{
    width: 270px;
    display: inline-block;
    }
    
    input.star{
    display: none;
    }
    
    label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #444;
    transition: all .2s;
    }
    
    input.star:checked ~ label.star:before {
    content:'\f005';
    color: #FD4;
    transition: all .25s;
    }
    
    
    input.star-5:checked ~ label.star:before {
    color:#FE7;
    text-shadow: 0 0 20px #952;
    }
    
    input.star-1:checked ~ label.star:before {
    color: #F62;
    }
    
    label.star:hover{
    transform: rotate(-15deg) scale(1.3);
    }
    
    label.star:before{
    content:'\f006';
    font-family: FontAwesome;
    }
    
    .rev-box{
    overflow: hidden;
    height: 0;
    width: 100%;
    transition: all .25s;
    }
    /* REVIEW */
    textarea.review{
    background: #222;
    border: none;
    width: 100%;
    max-width: 100%;
    height: 100px;
    padding: 10px;
    box-sizing: border-box;
    color: #EEE;
    }
    
    label.review{
    display: block;
    transition:opacity .25s;
    }
    
    input.star:checked ~ .rev-box{
    height: 125px;
    overflow: visible;
    }
</style>
<div class="container">
        <div class="row">
            <h3 class="col-lg-12 img-fluid title" style="color: #3A6152;">About Us</h3>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h6 class="title2" style="color: #3A6152;">TraveLocco is just one of many travel websites in the Philippines but we are one of the best. 
            We focused on bringing our customers the best of the best while showcasing wonder places in the Philippines. Thus, we offer a budget-friendly yet quality travels. 
            We are also continuously improving to keep up with our customers' wants and needs.</h6>
            </div>
        </div><br><br>

<!-- REVIEWS -->
    <div class="row">
        <h3 class="col-lg-12 img-fluid title" style="color: #3A6152;">Reviews</h3>
    </div>
    <div class="row">
    <?php 
            $sql = "SELECT * FROM reviews ORDER BY review_ID ASC";

            $result = $conn->query($sql);

            if($result){
                if($result->num_rows > 0){
                    while($fetch = $result->fetch_assoc()){ 
        ?>
        <div class="col-lg-4 mb-1">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="images/user/user1.jpg" alt="" class="mr-4 userfm">
                    <div class="name-job-review">
                        <p class="font-weight-bold mb-0"><?php echo $fetch ["review_name"] ?></p>
                        <ul class="list-inline-item">
                            <?php
                            $rating = $fetch ["review_rating"];
                                for($i=0; $i<$rating; $i++){
                                    echo "<li class='list-inline-item'><i class='fa fa-star'></i></li>";
                                }
                            ?>
                        </ul>
                        <p><?php echo $fetch ["review_comment"]?></p>
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
        if(isset($_SESSION["id"])){
            $sender = $user['user_name'];
        }
        else{
            $sender = "Visitor";
        }
    ?>



        
    <form class="form-inline" autocomplete="off" action="" method="POST" >
        <h5>Ratings: </h5>
            <input type="hidden" id="action" value="review">
            <input type="hidden" id="userReview" value="<?php echo $sender;?>">
        <div class="stars">
            <input class="star star-5 rating" id="star-5" type="radio" name="rating" value="5"/>
            <label class="star star-5" for="star-5" value="5"></label>
            <input class="star star-4 rating" id="star-4" type="radio" name="rating" value="4"/>
            <label class="star star-4" for="star-4" value="4"></label>
            <input class="star star-3 rating" id="star-3" type="radio" name="rating" value="3"/>
            <label class="star star-3" for="star-3" value="3"></label>
            <input class="star star-2 rating" id="star-2" type="radio" name="rating" value="2"/>
            <label class="star star-2" for="star-2" value="2"></label>
            <input class="star star-1 rating" id="star-1" type="radio" name="rating" value="1"/>
            <label class="star star-1" for="star-1" value="1"></label>
        </div>
        <input type="text" class="form-control col-lg-10 col-md-12 mb-2 mr-sm-2" placeholder="Add Review" id="review">
        
        <button type="submit" class="btn btn-success mb-1 col-lg-1" onclick="addReview();">Add</button>
        </form>
        
        <?php require 'script.php'; ?>


</div>