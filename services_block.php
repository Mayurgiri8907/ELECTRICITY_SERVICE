<div class="service_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="service_taital">Our Services</h1>
            </div>
        </div>
        <div class="service_section_2">
            <div class="row">
                <?php

                    include("conn.php");
                    $select = "select * from services";
                    $result = mysqli_query($conn,$select);
                    
                    foreach ($result as $value){
                        if($value['id'] % 2 == 0){
                            echo '<div class="col-lg-3 col-sm-6">
                                <div class="service_box active">
                                    <div class="building_icon"><img src='.$value['services_icon'].'></div>
                                        <h4 class="residential_text">'.$value['services_title'].'</h4>
                                        <p class="service_text">'.$value['services_description'].'</p>
                                    </div>
                                    <div class="readmore_bt active"><a href="#">Read More</a></div>
                                </div>'; 
                                continue;   
                        }
                        echo '<div class="col-lg-3 col-sm-6">
                                <div class="service_box">
                                    <div class="building_icon"><img src='.$value['services_icon'].'></div>
                                        <h4 class="residential_text">'.$value['services_title'].'</h4>
                                        <p class="service_text">'.$value['services_description'].'</p>
                                    </div>
                                    <div class="readmore_bt"><a href="#">Read More</a></div>
                                </div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>










