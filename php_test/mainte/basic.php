<?php
// パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte/basic.php

echo '<br>';
//パスワードの暗号化
echo(password_hash('password123', PASSWORD_BCRYPT));
