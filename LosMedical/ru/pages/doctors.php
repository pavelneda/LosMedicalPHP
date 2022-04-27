
<section class="doctors">
    <div class="container">
        <h2 class="intro-right-title doctors-title" >Врачи медицинского центра</h2>
        
        <div class="doctors-list">
            <?php
            $query = "SELECT * FROM doctors WHERE id > 0";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class='doctors-item'>
                <img src='../LosMedical/images/{$row["img"]}' alt=''>
                <div class='doctors-info'>
                    <h3 class='doctors-name''>{$row["nameRu"]}</h3>
                    <p class='benefit-text doctors-prof'>{$row["profRu"]}</p>
                    <span class='doctors-exp'><i class='fa-regular fa-clock'></i>Опыт работы: {$row["exp"]} років</span>
                    <a href='tel:{$row["tel"]}' class='btn doctors-btn'>
                        Записатся на прийом
                    </a>
                </div>
            </div>";
            }
            ?>
        </div>

    </div> <!--/.container-->
</section> <!--/.doctors-->
