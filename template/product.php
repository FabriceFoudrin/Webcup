<?php
include_once "config.php";
include_once "functions.php";
?>
    <section id="capsule" class="tf-section how-we-work tablet-mb50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title st2 m-b60 aos-init" data-aos="fade-up" data-aos-duration="800">
                    <p class="h8 sub-title">Nos capsules</p>
                    <h4 class="title m-b17">Nos formules</h4>
                    <p class="p-r60">Que vous en choisissiez une ou plusieurs, votre capsule temporelle est entièrement personnalisable autour de 3 offres : </p>
                </div>
               
            </div>

            <?php
                // Get and display all products
                $sql = "SELECT * FROM `forfaits_capsules` ORDER BY `idforfaitcapsule` ASC";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12 aos-init" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="box-text st2 corner-box ">
                            <div class="number">01</div>
                            <div class="h7"><?php echo $row['libellecapsule']; ?><br><h6 style="font-size:18px;">A partir de <?php echo $row['prix']; ?> €</h6></div>
                            <ul>
                                <li> A partir de <?php echo $row['dimension']; ?>m³</li>
                                <li> Stockage numérique <?php echo $row['snumerique']; ?>Go</li>
                                <li> Pas de stockage ADN</li>
                                <li> Stockage objet 25mL à <?php echo $row['sobjet']; ?>L</li>
                                <?php if($row['sodeur'] == 1){
                                    echo '<li>Avec odeur</li>';
                                }else{
                                    echo "<li>Pas d'odeur</li>";
                                } ?>
                                <?php if($row['suivi'] == 1){
                                    echo '<li>Avec de suivi de la capsule</li>';
                                }else{
                                    echo "<li>Pas de suivi de la capsule</li>";
                                } ?>
                                <?php if($row['son'] == 1){
                                    echo '<li>Avec son</li>';
                                }else{
                                    echo "<li>Pas de suivi de la capsule</li>";
                                } ?>
                                <?php if($row['shologramme'] == 1){
                                    echo "<li>Avec d'hologramme</li>";
                                }else{
                                    echo "<li>Pas d'hologramme</li>";
                                } ?>
                                <?php if($row['sadn'] == 1){
                                    echo "<li>Avec ouverture ADN</li>";
                                }else{
                                    echo "<li> Pas d'ouverture ADN </li>";
                                } ?>
                                <hr width="100%" color="blue">
                                <a class="tf-button btn-effect" href="buy.php?id=<?php echo $row['idforfaitcapsule']; ?>" target="_blank" >   
                                    <span class="boder-fade"></span>                                     
                                    <span class="effect">Commander</span>
                                </a>

                            </ul>               
                        </div>
                    </div>
                    
                    <?php
                }
            ?>
           

        </div>
    </div>
</section>