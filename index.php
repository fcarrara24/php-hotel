<?php
include __DIR__ . '/Model/db.php';

//header
include __DIR__ . '/partials/header.php';
$filterHotel = $hotels;
//main
if (isset($_GET['vote']) && $_GET['park']) {
    $filterHotel = array_filter($hotels, fn($hotel) => $_GET['park'] == 'all' || (($hotel['parking'] == 1) ? 'true' : 'false') == $_GET['park']);


    $filterHotel = array_filter($filterHotel, fn($hotel) => (int) $hotel['vote'] >= $_GET['vote']);
}

?>
<main>
    <div class="container">
        <div class="row">
            <table class="table table-dark">

                <?php
                //filtering hotels
                



                //creating responses
                $values = [];
                echo '<thead class="bg-warning"><tr>';
                foreach ($hotels[0] as $value => $valueName) {
                    $values[] = $value;
                    echo '<th scope="col text-center">' . $value . '</th>';
                }
                echo '</tr></thead><tbody>';
                //closing lines
                foreach ($filterHotel as $hotel) {
                    ?>
                    <tr>
                        <?php
                        foreach ($values as $value) {
                            ?>
                            <td>
                                <?php echo ($hotel[$value]) ? $hotel[$value] : '0'; ?>
                            </td>
                            <?php
                        }
                        ?>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
//footer
include __DIR__ . '/partials/footer.php';
?>

</html>