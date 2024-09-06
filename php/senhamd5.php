<?php

$senha = "1234";
//$criptografada = "md5($senha)";

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo password_verify($senha, '$2y$10$SwaM7XkVuCtvrbO/4gkKA.E4Hq0FzWpv39Mwr9FdgzudWKi5qUhb6');