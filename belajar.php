<!-- penulisan fungsi php -->
<?php 


function pertama(){
    echo "salam kenal"."<br>";
    echo "belajar function";
}

// 
function ctak(){
    echo "main";
}

// cara memanggil function
// ctak();


// function parameter
// function cou($iuk){
//     if($iuk == 'suprayetno'){
//     echo "selamat datang"." ". $iuk;
//     }
// }

// cou("suprayetno");



function aliuk($make){
    switch($make){
        case 'yetnos':
            echo "selamat datang"."$make";
        break;
        case 'supra':
            echo "welcome"."$make";
        break;
        default :
            echo "tidak ada nama";
    }

}

// aliuk('suyet'); 
// echo "<br>";


// $cob=['indo','nesia'];
// for($i=0; $i <count($cob); $i++){
//     echo "----selamat---".$cob[$i];
// }


// if($cob[0] == 'indo'){
//     echo "negara saya";
// }else{
//     echo "bukan negara saya";
// }


// if($cob[0] =='selmat'){
//     echo "selmat salah";
// }elseif($cob[0] =='indo'){
//     echo "negara saya";
// }else {
//     echo "tidak ada";
// }


// coba login dengan kondisinya
if(isset($_POST['submit'])){
    $name =$_POST['text'];
    $password =$_POST['password'];
    $kondisi =$_POST['kondisi'];


    if($name == 'yetnos' && $password == 12345 && $kondisi=='admin'){
        echo 'selamat datang admin'." ".$name;
    }elseif ($name == 'yet' && $password == 1234 && $kondisi == 'member') {
        echo 'selamat datang member'." ".$name;
    }else {
        echo "input atau password salah";
    }
}

?>


<form action="" method="post" align="center">
    <?php 
        echo "from login"."<br><br>";
    ?>
    <label for="text"> Username :</label>
    <input type="text" name="text" id="text"> <br><br>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password"> <br><br>
    <label for="kondisi">TypeUser :</label>
    <select name="kondisi" id="kondisi">
        <option value="admin">admin</option>
        <option value="member">member</option>
    </select><br><br>
    <button type="submit" name="submit">submit</button>
    <button type="reset">reset</button>
</form>




<!-- && -> dan ,kondisi dua2nya harus benar -->
<!-- || -> atau --> 

<!-- belajar true false -->
<?php 

// $k = 10;
// $o = 10;

// if($k < $o && $o > $k ){
//     echo "cetak";
// }


// function mak($ku){
// $makan =['pagi','siang','sore','malam'];

// for($i=0; $i <count($makan); $i++){
//    echo "--------";
//    echo $makan[$i]." ".$ku;
//    echo "--------"."<br>";
  
// }}

// mak('yet');
// mak('mar');



?>


<form action="" method="post">
    <label for="username">username :</label>
    <input type="text" name="username" id="username">
    <label for="password">password :</label>
    <input type="password" name="password" id="password">
</form>