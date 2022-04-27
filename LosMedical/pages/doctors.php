
<section class="doctors">
    <div class="container">
        <h2 class="intro-right-title doctors-title" >Лікарі медичного центру</h2>
        
        <div class="doctors-list">
            <?php
            $query = "SELECT * FROM doctors WHERE id > 0";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class='doctors-item'>
                <img src='../LosMedical/images/{$row["img"]}' alt=''>
                <div class='doctors-info'>
                    <h3 class='doctors-name''>{$row["name"]}</h3>
                    <p class='benefit-text doctors-prof'>{$row["prof"]}</p>
                    <span class='doctors-exp'><i class='fa-regular fa-clock'></i>Досвід роботи: {$row["exp"]} років</span>
                    <a href='tel:{$row["tel"]}' class='btn doctors-btn'>
                        Записатись на прийом
                    </a>
                </div>
            </div>";
            }
            ?>
        </div>

    </div> <!--/.container-->
</section> <!--/.doctors-->
