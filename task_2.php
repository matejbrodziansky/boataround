<?php
include('views/_patrials/header.php');


?>

<div class="container text-left task_1 p-4 mt-5 mb-5">

    <?php

    $datas = $parser->getData()->response;
    $data_boats = $datas[0]['data'];
    $count_boats = count($data_boats);
    $this_year = date("Y");
    $count_avg_prices = [];


    foreach ($data_boats as $key => $data) {

        $prices = array_column($data_boats, 'price');
        $max_price = max($prices);
        $min_price = min($prices);

        foreach ($data_boats as $key => $data) {

            // The most expensive yachr
            if ($data_boats[$key]['price'] == $min_price) {
                $min_price_yacht[] = $data;
            }

            //The cheaper yacht
            if ($data_boats[$key]['price'] == $max_price) {
                $max_price_yacht[] = $data;
            }
        }

    }

    // If need filter from data || unset from data
    // $filter = $datas[0]['filter'];
    // unset($datas[0]['data']);
    // unset($datas[0]['filter']);
    ?>

    <div class="container">
        <div class="text-center">
            <h3>Data of yachts with review score 7+</h3>
        </div>
        <?php foreach ($data_boats as $key => $data) : ?>
            <div class="row my-3">
                <div class="col">
                    <p><?= $key + 1 . '. ' . $parser->unslugify($data_boats[$key]['slug']) ?>.</p>

                    <p>Average price <?= number_format($data_boats[$key]['avg_price'], 2, ',', '') ?>€</p>

                    <p>Price for 8 days
                        <span class="line_throught"><?= number_format($data_boats[$key]['price'], 2, ',', '') ?>€</span>
                        <?= round(discount($data_boats[$key]['price'], $data_boats[$key]['discount'])) ?> €
                    </p>

                    <p>Discount <?= $data_boats[$key]['discount'] ?>%</p>

                    <p>Year <?= $data_boats[$key]['parameters']['year'] ?> ( <?= $this_year - $data_boats[$key]['parameters']['year'] ?> year old ) </p>

                    <p>Rank <?= number_format($data_boats[$key]['rank'], 2, '.', '') ?> </p>

                    <p>Reviews Score <?= number_format($data_boats[$key]['reviewsScore'], 2, '.', '') ?> </p>

                </div>
                <div class="col">
                    <img src="<?= $data_boats[$key]['thumb'] ?>" alt="">
                </div>
            </div>
            <hr>
            <?php $count_all_avg_prices += $data_boats[$key]['avg_price']; ?>

        <?php endforeach ?>
        <div class="container bg-light py-2">

            <h4>Total yachts:
                <?= $count_boats; ?>
            </h4>

            <h4>
                Average price of all yacht in zadar is
                <?= number_format($count_all_avg_prices / $count_boats, 2, ',', ''); ?>
                €
            </h4>
            <h4>
                Max price of yacht
                <?= number_format($max_price, 2, ',', '') ?> €
            </h4>
            <h4>
                Min price of yacht
                <?= number_format($min_price, 2, ',', '') ?> €
            </h4>

        </div>
    </div>
    <?php
    include('views/_patrials/footer.php');

    ?>

</div>