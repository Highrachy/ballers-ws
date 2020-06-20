<?php
    function calculate_payment_period($initial_deposit, $periodic, $est_price, $frequency) {
        $personal = $initial_deposit >= ($est_price / 2);
        $spread_payment = $initial_deposit >= ($est_price / 5);
        $mortgage = $initial_deposit >= ($est_price / 4);
        $rent_to_own = $initial_deposit >= ($est_price / 10);
        $balance = $est_price - $initial_deposit;
        if ($personal) {
            switch ($frequency) {
                case '0.5':
                    # bi weekly every 0.5 months
                    if (($balance / $periodic) <= 12) {
                        // echo 'own your house in '.($balance / $periodic / 2).' months';
                        echo 'outright payment is recommended';
                    } else {
                        echo 'increase bi weekly deposit';
                    }
                    break;
                case '1':
                    # monthly once every month
                    if (($balance / $periodic) <= 6) {
                        // echo 'own your house in '.($balance / $periodic).' months';
                        echo 'outright payment is recommended';
                    } else {
                        echo 'increase monthly deposit';
                    }
                    break;
                case '4':
                    # quaterly every 4 months
                    if (($balance / $periodic) <= 2) {
                        // echo 'own your house in '.($balance / $periodic).' quaters';
                        echo 'outright payment is recommended';
                    } else {
                        echo 'increase quaterly deposit';
                    }
                    break;               
                default:
                    echo 'outright payment is recommended';
                    break;
            }
        } elseif ($spread_payment) {
            switch ($frequency) {
                case '0.5':
                    # bi weekly every 0.5 months
                    if (($balance / $periodic) > 12 && ($balance / $periodic) <= 48) {
                        echo 'spread payment is recommended';
                    } else {
                        echo 'increase bi weekly deposit';
                    }
                    break;
                case '1':
                    # monthly once every month
                    if (($balance / $periodic) > 6 && ($balance / $periodic) <= 24) {
                        echo 'spread payment is recommended';
                    } else {
                        echo 'increase monthly deposit';
                    }
                    break;
                case '4':
                    # quaterly every 4 months
                    if (($balance / $periodic) > 2 && ($balance / $periodic) <= 6) {
                        echo 'spread payment is recommended';
                    } else {
                        echo 'increase quaterly deposit';
                    }
                    break;               
                default:
                    echo 'pay as you want';
                    break;
            }
        } elseif ($mortgage) {
            # code...
        } elseif ($rent_to_own) {
            # code...
        } else {
            echo 'hybrid payment is recommended';
        }
        
    }

    if (!empty($_POST["initial_investment"])) {
        $initial = $_POST['initial_investment'];
        $periodic = $_POST['periodic_investment'];
        $est_price = $_POST['max_value'];
        $frequency = $_POST['frequency'];

        calculate_payment_period($initial, $periodic, $est_price, $frequency);
    }
