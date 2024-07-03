<div class="testimonial_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="testimonial_taital">Customers Testimonial</h1>
                <p class="testimonial_text">Even slightly believable. If you are going to use a passage </p>
            </div>
        </div>
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    include("conn.php");

                    include("conn.php");
                    $select = "select * from customers_testimonial";
                    $result = mysqli_query($conn,$select);
                    $count;
                    foreach ($result as $value){
                        if($value['id'] == 1){
                            echo '<div class="carousel-item active">
                                <div class="testimonial_section_2">
                                    <div class="testimonial_left">
                                        <div class="client_img"><img src="images/'.$value['customer_img'].'"></div>
                                    </div>
                                    <div class="testimonial_right">
                                        <h4 class="markro_text">'.$value['customer_name'].'</h4>
                                        <p class="many_text">'.$value['customer_review'].'</p>
                                        <div class="quick_icon"><img src="images/'.$value['customer_icon'].'"></div>
                                    </div>
                                </div>
                            </div>';
                        }else{
                            echo '<div class="carousel-item">
                                <div class="testimonial_section_2">
                                    <div class="testimonial_left">
                                        <div class="client_img"><img src="images/'.$value['customer_img'].'"></div>
                                    </div>
                                    <div class="testimonial_right">
                                        <h4 class="markro_text">'.$value['customer_name'].'</h4>
                                        <p class="many_text">'.$value['customer_review'].'</p>
                                        <div class="quick_icon"><img src="images/'.$value['customer_icon'].'"></div>
                                    </div>
                                </div>
                            </div>';
                        }
                        
                    }

                    
                ?>
                
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>