<?php

include_once '../init.php';

?>
<!doctype html>
<html lang="en">

<head>

    <title>RAPID</title>


    <?php
    include HEAD;
    ?>
    <link rel="stylesheet" href="<?= get_css() ?>company-review.css">


</head>


<body>
    <?php include POP_UP; ?>
    <?php
    include HEADER;
    ?>

    <div class="company-review-first-section">
        <h1>Auto Transport Carriers</h1>
    </div>
    <div class="company-review-grid-section">


        <div class="company-reviews-section">

            <?php



            if (isset($_GET['PAGE'])) {
                $pageId = $_GET['PAGE'];
                $LIMIT_TO = 2 * ($pageId + 1) - 2;
            } else {
                $LIMIT_TO = 0;
            }



            $sql = "SELECT * FROM `rapid` LIMIT 10 offset $LIMIT_TO";

            echo $sql;
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='company-reviews-box'>
                <h6>" . $row['company'] . "</h6>
                <div class='company-reviews-star-box'>
                    <p>" . $row['star-num'] . " Stars</p>
                    <div class='company-reviews-box-star'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                    </div>
                    <p><span>"  . $row['star-num'] . " Stars from" . $row['review-num'] . "Review(s)</span></p>
                </div>
                <div class='company-reviews-box-review'>
                    <a href='#'>View Contact & Reviews</a>
                </div>

            </div>";
            }

            ?> <button><?php
                        $pageId = 1;
                        if (isset($_GET['PAGE'])) {
                            $pageId = $_GET['PAGE'] + 1;
                        }
                        

                        ?> <a href="http://localhost/growupnext/crud-php/rapid-data?PAGE=<?= $pageId ?>">Next</a></button>
            <button><?php
                    $pageId = 1;
                    if (isset($_GET['PAGE'])) {
                        $pageId = $_GET['PAGE'] + 1;
                    }

                    ?> <a href="http://localhost/growupnext/crud-php/rapid-data?PAGE=<?= $pageId ?>">Next</a></button>
        </div>


        <div class="company-reviews-section-form">


        </div>


    </div>
    <?php
    include SCRIPT;
    ?>
</body>

</html>