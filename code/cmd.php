<?php
/**
 * Date: 10/3/19
 * Time: 11:37 AM
 */
//kanagawaselect8.jp
echo 'exec';
exec ('yes | cp -rf  /home/kanagawaselect8/www/kanagawa/code/* /home/kanagawaselect8/www/kanagawa/kanagawaselect8.jp',$output,$return);
echo '<pre>';
print_r($output);
echo '</pre>';
echo '<pre>';
print_r($return);
echo '</pre>';
