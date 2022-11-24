<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    $s_username = $s_password = $s_nickname = $s_id = '';
    if (!empty($_POST)) {
        if (isset($_POST['username'])) {
            $s_username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            $s_password = $_POST['password'];
        }
    }
   
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $sql         = "select * from admin where username ='$s_username' and password='$s_password'";
        $count =0;
        foreach ($admin as $id => $std)
    {
        if((($std->username)==$s_username)&&(($std->password)==$s_password))
        {
            $count++;
                $s_id = $std->id;
                $s_username = $std->username;
                $s_password  = $std->password;
                $s_nickname = $std->nickname;
                session_start();
                $_SESSION['login'] = $s_nickname;
                // window.open("input.php?id=' .  . '","_self");
                $linklogin = '';
                if (isset($_GET['linklogin'])) {
                    $linklogin = $_GET['linklogin'];
                }
                if ($linklogin == 2) {
                    header("Location: phongban.php");
                } else  if ($linklogin == 3) {
                    header("Location: update.php");
                } else {
                    header("Location: nhanvien.php");
                }
             } 
        }
        if($count!=0)
        {

        }
        else {
            ?>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-label="Danger striped example" style="width: 100% " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">username hoặc password sai</div>
                        break();
                    </div>
            <?php
                }
    }
        
    

    // echo $linklogin;
    // die();
    ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Account</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="username" value="<?= $s_username ?>">
                    </div>
                    <div class="form-group">
                        <label for="password_get_info">password:</label>
                        <input required="true" type="password" class="form-control" id="password" name="password" value="<?= $s_password ?>">
                    </div>
                    <button class="btn btn-success">Ok</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>