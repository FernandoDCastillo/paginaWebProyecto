<?php 

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch($var_getMenu){
    case "inicio":
        require_once('./views/home.php');
    break;
    case "recomendaciones":
        require_once('./views/recomendaciones.php');
    break;
    case "acercaDe":
        require_once('./views/acercaDe.php');
    break;
    case "contacto":
        require_once('./views/contacto.php');
    break;
    case "login":
        require_once('./views/login.php');
    break;
    case "registro":
        require_once('./views/registro.php');
    break; 
    case "alumnos":
        include_once './model/alumnos.php';
        $sqlAlumnos = alumnos::consultar();    
        include_once './views/viewalumnos.php';
    break;
    case "bienvenido":
        require_once('./views/bienvenido.php');
        break;
    case "logout":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        break;    
    case "deletealumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        // $_idalumno = isset($_GET['idalumno']) ? $_GET['idalumno'] : '0';
        require_once ('./model/alumnos.php');
        $sqlAlumnos = alumnos::delete($_idalumno);
        header("location: ./index.php?menu=alumnos");
        break;
    case "editalumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once ('./model/alumnos.php');
        $sqlAlumnos = alumnos::consultarAlumno($_idalumno);
        include_once './views/editaralumno.php';
        //header("location: ./index.php?menu=editar");
    break;   
    default:
        require_once('./views/home.php');
}

?>