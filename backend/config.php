<?php
  /**
   *
   */
  class Config
  {

    private $connector;
    private $name;
    private $email;
    private $id;

    function __construct()
    {
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'root');
      define('DB_PASSWORD', '');
      define('DB_NAME', 'raising');

      $this->connector = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

      if ($this->connector === false) {
        header("Location:./error.php");
      }else{

        // echo "Connected..!";
      }
    }


    function login($email, $password){

      // encrypt password here;
      $passcheck = md5($password);
      $login_query = "SELECT * FROM users where email='$email' AND password='$passcheck'";

      // make the database query
      $Auth = mysqli_query($this->connector, $login_query);
      $bj = mysqli_fetch_assoc($Auth);

      // run validation here.
      if($bj['id']){
        // session_destroy();
        session_start();
          $this->name = $bj['full_name'];
          $this->email = $bj['email'];
          $this->id = $bj['id'];

        $_SESSION["loggedin"] = true;
        // $_SESSION["id"] = "sample data";
        $_SESSION["id"] = $this->id;
        $_SESSION["name"] = $this->name;
        $_SESSION["email"] = $this->email;
        $_SESSION["role"] = $bj['role'];

        if($_SESSION['role'] == 'user'){
          // redirect to user panel if user role.
          return header("Location: ../home.php");

        }else if($_SESSION['role'] == 'admin'){

          // redirect to admin panel for admin role
          return header("Location: ../admin.php");
        }

      }else{
        echo "Wrong credentials!";
      }

    }


    function register($name, $email, $phone, $password){
      // $id = uniqid('', true);
      $passEncrypt = md5($password);

      $sql_register = "INSERT INTO users(`full_name`, `email`, `phoneNumber`, `password`) VALUES('$name', '$email', '$phone', '$passEncrypt')";

      if(mysqli_query($this->connector, $sql_register)){
        header("Location: ../index.php");
      }else{

        echo "something went wrong";
      }
    }


    function check(){
        $obj = mysqli_query($this->connector, "SELECT * FROM users");
        $row = mysqli_fetch_assoc($obj);

        echo $row['full_name'];
        echo $row['email'];
        echo $row['password'];

    }

    function register_ent($name, $description, $image){

      $id = uniqid('', true);

      $sql = "INSERT INTO entrepreneurs(`id`, `name`, `description`,`image`) VALUES ('$id','$name', '$description', '$image')";
      if($insert_q = mysqli_query($this->connector, $sql)){
        return $id;
      }
    }

    function details($id, $pitching, $business, $marketing){

      $sql = "INSERT INTO entDetails(`user`, `pitching`, `businessDev`, `marketing`) VALUES ('$id', '$pitching', '$business', '$marketing')";
      if(mysqli_query($this->connector, $sql)){

        session_start();
        if($_SESSION['role'] == 'user'){
          // redirect to user panel if user role.
          return header("Location: ../home.php");

        }else if($_SESSION['role'] == 'admin'){

          // redirect to admin panel for admin role
          return header("Location: ../admin.php");
        }
      }
    }

    function recents($num){
        $sql = 'SELECT * FROM entrepreneurs LIMIT'.$num.';';
        $results = mysqli_query($this->connector, $sql);

        return $results;
    }

    function all_ents(){
        $sql = 'SELECT * FROM entrepreneurs LIMIT 10';
        $results = mysqli_query($this->connector, $sql);

        return $results;
    }

    function object_data($id){
      $sql = "SELECT * FROM entrepreneurs WHERE id ='$id'";
      $res =  mysqli_query($this->connector, $sql);

      return $res;

    }

    function add_G($userid, $description, $image){

      $insertion = "INSERT INTO Gallery(`userid`, `description`, `image`) VALUES('$userid', '$description', '$image')";
      if(mysqli_query($this->connector, $insertion)){

        return header("Location: ../profile.php?view=".$userid);
      }else{
        header("Loaction: ../profile.php?view=".$userid."?error='error occured during insertion'");
      }

    }

    function get_galla($id){

      $sql = "SELECT * FROM Gallery WHERE userId = '$id'";
      $res =  mysqli_query($this->connector, $sql);

      return $res;
    }

    function get_details($id){
      $sql = "SELECT * FROM entDetails WHERE user='$id'";
      if($response = mysqli_query($this->connector, $sql)){

        return $response;
      }else{

        $error = "Nothig to return";
        return $error;
      }

      if(!empty($response)){

        return $response;
      }else{

      }
    }


  }
 ?>
