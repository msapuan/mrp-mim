<?php 
    
    // berfungsi mengaktifkan session
    session_start();
    
    // berfungsi menghubungkan koneksi ke database
    include 'config/config.php';
    
    // berfungsi menangkap data yang dikirim
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    
    // berfungsi menyeleksi data user dengan username dan password yang sesuai
    $sql = mysqli_query($con,"SELECT * FROM user WHERE user_username='$user' AND user_password='$pass'");
    //berfungsi menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($sql);

    // berfungsi mengecek apakah username dan password ada pada database
    if($cek > 0){
        $data = mysqli_fetch_assoc($sql);

        // berfungsi mengecek jika user login sebagai admin
        if($data['user_level']=="admin"){
            // berfungsi membuat session
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['nama'] =  $data['user_nama'];
            $_SESSION['level'] = "admin";
            //berfungsi mengalihkan ke halaman admin
            header("location:users/admin/index.php");
        
            // berfungsi mengecek jika user login sebagai wakil
        }else if($data['user_level']=="wakil"){
            // berfungsi membuat session
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['nama'] = $data['user_nama'];
            $_SESSION['level'] = "wakil";
            // berfungsi mengalihkan ke halaman wakil
            header("location:users/wakil/index.php");
        
        }else if($data['user_level']=="manager"){
            // berfungsi membuat session
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['nama'] = $data['user_nama'];
            $_SESSION['level'] = "manager";
            // berfungsi mengalihkan ke halaman manager
            header("location:users/manager/index.php");

        }else{
            // berfungsi mengalihkan alihkan ke halaman login kembali
            header("location:index.php?alert=gagal");
        }	
    }else{
        header("location:index.php?alert=gagal");
    }

?>