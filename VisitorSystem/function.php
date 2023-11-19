<?php
    session_start();

    require_once 'dbconn/conn.php';
    require_once 'CRUD/create.php';
    require_once 'CRUD/read.php';
    require_once 'CRUD/update.php';
    require_once 'CRUD/delete.php';

    if (isset($_POST['login'])) {
        $email = $_POST['email']; // email or student lrn
        $password = $_POST['Password'];
    
        $result = $crud->read(
            'tbluser',
            'Email = :Email OR Student_lrn = :Student_lrn',
            ['Email' => $email, 'Student_lrn' => $email]
        );
    
        if (!$result) {
            $_SESSION['error'] = 'Cannot find an account with the provided Email or Studentlrn';
            header('Location: index.php');
        } else {
    
            if ($result[0]['Status'] == 'ACTIVE') {
                if (password_verify($password, $result[0]['Password'])) {
                    switch ($result[0]['Role']) {
                        case 'ADMIN':
                            $_SESSION['ADMIN'] = $result[0]['Id'];
                            header('Location: index.php');
                            $description = "Login ";
                            $id = $result[0]['Id'];
                            $Data = array(
                                'UserID' => $id,
                                'Description' => $description,
                            );
                            $crud->create('tblaudittrail', $Data);
                            header('Location: index.php');
                            break;
                        case 'STUDENT':
                            $_SESSION['STUDENT'] = $result[0]['Id'];
                            header('Location: index.php');
                            break;
                        case 'SUPERADMIN':
                            $_SESSION['SUPERADMIN'] = $result[0]['Id'];
                            header('Location: index.php');
                            break;
                    }
                } else {
                    $_SESSION['error'] = 'Incorrect password';
                    header('Location: index.php');
                }
            } else {
                $_SESSION['error'] = 'Your account is not active. Please contact IT DEPARTMENT.';
                header('Location: index.php');
            }
    
    
    
        }
    
    } else {
        $_SESSION['error'] = 'Input user credentials first';
        header('Location: index');
    }
?>