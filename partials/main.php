<?php
include __DIR__ . '/../Model/db.php';

?>
<main>
    <div class="container">
        <div class="row">
            <table class="table table-dark">

                <?php
                //creating responses
                $values = [];
                echo '<thead class="bg-warning"><tr>';
                foreach ($hotels[0] as $value => $valueName) {
                    $values[] = $value;
                    echo '<th scope="col">' . $value . '</th>';
                }
                echo '</tr></thead><tbody>';
                //closing lines
                foreach ($hotels as $hotel) {
                    ?>
                    <tr>
                        <?php
                        foreach ($values as $value) {
                            ?>
                            <td>
                                <?php echo $hotel[$value] ? $hotel[$value] : '0'; ?>
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