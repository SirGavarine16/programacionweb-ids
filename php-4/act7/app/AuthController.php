<?php
include_once "config.php";
include 'connect.php';

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['action'])) {
    if (isset($_POST['api_token']) && $_POST['api_token'] == $_SESSION['api_token']) {
        $authController = new AuthController();
        switch ($_POST['action']) {
            case 'createAccount':
                $email = strip_tags($_POST['email']);
                $name = strip_tags($_POST['name']);
                $password = strip_tags($_POST['password']);
                $authController->createAccount($email, $password, $name);
                break;
            case 'access':
                $email = strip_tags($_POST['email']);
                $password = strip_tags($_POST['password']);
                $authController->doLogin($email, $password);
                break;
            case 'close':
                $authController->doLogout();
                break;
        }
    } else {
        $_SESSION['err_code'] = 'ERROR: TOKEN NOT FOUND';
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
}

class AuthController
{
    public function createAccount($email, $password, $name)
    {
        if ($email != '' && $password != '' && $name != '') {
            $originalPassword = $password;
            $password = sha1($password . 'netflix_A4c126FA0122');
            $conn = connectToDatabase();
            if ($conn->connect_error == false) {
                $query = 'INSERT INTO users(name, email, password) VALUES (?,?,MD5(?))';
                $prepared_query = $conn->prepare($query);
                $prepared_query->bind_param('sss', $name, $email, $password);
                if ($prepared_query->execute()) {
                    $this->doLogin($email, $originalPassword);
                } else {
                    $_SESSION['err_code'] = 6;
                    header("Location:" . $_SERVER['HTTP_REFERER']);
                }
            } else {
                $_SESSION['err_code'] = 5;
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        } else {
            $_SESSION['err_code'] = 4;
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
    public function doLogin($email, $password)
    {
        if ($email != '' && $password != '') {
            $conn = connectToDatabase();
            $password = sha1($password . 'netflix_A4c126FA0122');
            if ($conn->connect_error == false) {
                $query = 'SELECT * FROM users  WHERE email = ? AND password = MD5(?)';
                $prepared_query = $conn->prepare($query);
                $prepared_query->bind_param('ss', $email, $password);
                if ($prepared_query->execute()) {
                    $results = $prepared_query->get_result();
                    $accounts = $results->fetch_all(MYSQLI_ASSOC);
                    if (count($accounts) > 0) {
                        $_SESSION['open_session'] = [
                            "email" => $accounts[0]['email'],
                            "id" => $accounts[0]['id'],
                        ];
                        header("Location:".BASE_PATH.'home/');
                    } else {
                        $_SESSION['err_code'] = 6;
                        header("Location:" . $_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $_SESSION['err_code'] = 1;
                    header("Location:" . $_SERVER['HTTP_REFERER']);
                }
            } else {
                $_SESSION['err_code'] = 2;
                header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        } else {
            $_SESSION['err_code'] = 3;
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
    public function doLogout()
    {
        unset($_SESSION['open_session']);
        header("Location:".BASE_PATH);
    }
}
