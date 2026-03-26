<?php
function view($view, $data = [])
{
    extract($data);
    require_once "./views/templates/app.php";
}