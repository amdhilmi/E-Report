<?php
include('connect.php');

function register($req) {
    global $koneksi;

    $username = $req['username']; 

    $resultUsername = mysqli_query($koneksi,
     "SELECT username FROM account WHERE username = '$username'");
     if (mysqli_num_rows($resultUsername) > 0) {
        echo "<script>
            alert('username has been used by others');
        </script>";
        return;
      }

     $pw1 = mysqli_real_escape_string($koneksi, $req['password']);
     $pw1 = password_hash($pw1, PASSWORD_DEFAULT);

     $result = mysqli_query($koneksi, "INSERT INTO account(username, password) VALUES('$username', '$pw1')");
      

      if($result) {
        echo "<script>
        alert('Akun Berhasil Dibuat');
        window.location.replace('login.php');
    </script>";
        
        header('location: login.php');
      } else {
        mysqli_error($koneksi);
      }
}

function login($req) {
    global $koneksi; 

    $pw = $req['password'];
    $username = $req['username'];

    $result = mysqli_query($koneksi,
    "SELECT * FROM account WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1) {
        $dataFetch = mysqli_fetch_assoc($result);

        if(password_verify($pw, $dataFetch['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $dataFetch['id'];
            header('location: index.php');
            exit;
        }else{
            echo "<script>
                    alert('password Tidak Sesuai!')
                    window.location.replace('login.php')
                </script>"; 
            return;
        }
    } else {
        echo "<script>
        alert('username Tidak Sesuai!')
        window.location.replace('login.php')
    </script>"; 

    return;
    }
}

function logout() {

}