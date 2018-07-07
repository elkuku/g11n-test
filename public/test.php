<?php

use App\Application;
use ElKuKu\G11n\G11n;
use ElKuKu\G11n\Language\Debugger;

include '../vendor/autoload.php';

//$dev = false;
$dev = true;

$application = new Application($dev);
$application->run();

?>
    <table>
        <tr>
            <th>PHP</th>
            <th>JS</th>
        </tr>
        <tr>
            <td>
                <?php

                echo g11n3t('Hello test') . '<br>';

                // Parameters
                echo g11n3t('Hello %param% test', ['%param%' => 'ACME']) . '<br>';

                // Pluralization
                for ($count = 0; $count < 4; $count++)
                {
                    echo sprintf(
                            g11n4t(
                                'There is one monkey in the box.',
                                'There are %d monkeys in the box.',
                                $count
                            ),
                            $count
                        )
                        . '<br>';
                }

                // Pluralization with parameter
                echo g11n4t(
                        'There is one monkey in %param% town.',
                        'There are %d monkeys in %param% town.',
                        1,
                        ['%param%' => 'ACME']
                    )
                    . '<br>';

                ?>
            </td>
            <td>

                <script src="../node_modules/g11n-js/dist/g11n-pack.js"></script>
                <!--
                -->
                <!--

                    <script src="../node_modules/g11n-js/src/phpjs.js"></script>
                    <script src="../node_modules/g11n-js/src/g11n.js"></script>
                    <script src="../node_modules/g11n-js/src/methods.js"></script>
                -->

                <script><?php echo G11n::getJavaScript() ?></script>

                <script src="../assets/js/g11ntest.js"></script>
            </td>
        </tr>
    </table>

    <hr/>

<?php

if ($dev)
{
    Debugger::debugPrintTranslateds();
    Debugger::debugPrintEvents();
}
