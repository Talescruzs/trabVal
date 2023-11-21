<?php

setcookie('user', 'Valquíria Carvalho', time()+3600);
setcookie('email', 'valcarvalho2006@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'lovecraft', time()+3600);

var_dump($_COOKIE);