<?php
require __DIR__.'/../class/classUsers.php';
if (f_rotas('/admin/api/users'))
    {
    $u = new Users();
    //print_r($u->getAllApiUsers());
    echo $u->getAllApiUsers();
    http_response_code(200);
    }
    else
        {
            echo 'tchau';
        http_response_code(404);
        }
        



/*
 elseif (f_rotas('/admin/create'))
 {
 f_render('admin/pages/create', 'admin');
 }
 elseif (f_rotas('/admin/(\d)+/edit')) // (\d)+ aceita somente numeros exp reg
 {
 f_render('admin/pages/edit','admin');
 }
 elseif (f_rotas('/admin/(\d)+/delete'))
 {
 //delete /dele
 header('location: /admin/view');
 }
 elseif (f_rotas('/admin/view/?(\d+)'))
 {
 f_render('admin/pages/view','admin');
 } else
 {
 echo "<h1> Ops Paginas não encontrada</h1>";
 http_response_code(404);
 }
 */









