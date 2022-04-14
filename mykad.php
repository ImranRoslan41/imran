<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form method="post">
  <table width="200" border="1">
    <tbody> 
     <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="name" id="name" m></td>
      </tr>
      <tr>
      <tr>
        <td>Insert MyKAD</td>
        <td>:</td>
        <td><input type="text" name="number" id="number"></td>
      </tr>
      <tr>

        <tr>
        <td>State</td>
        <td>:</td>
        <td><select name="state" id="state">
        <option value="Perak">Perak</option>
        <option value="Kedah">Kedah</option>
        <option value="Johor">Johor</option>
        <option value="Kedah">Kedah</option>
        <option value="Melaka">Melaka</option>
        <option value="Negeri Sembilan">Negeri Sembilan</option>
        <option value="Pahang">Pahang</option>
        <option value="Pulau Pinang">Pulau Pinang</option>
        <option value="Selangor">Selangor</option>
        <option value="Terengganu">Terengganu</option>
        <option value="Sabah">Sabah</option>
        <option value="Sarawak">Sarawak</option>
        <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
        </select></td>
      </tr>
      <tr>
 
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" id="email" pattern="(?=.*@student.psp).{3,}" title="Must PSP student only (@student.psp)"></td>
      </tr>
      <tr>
 
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" id="password"></td>
      </tr>
      <tr>

  <tr>
        <td>Verify Password</td>
        <td>:</td>
        <td><input type="verifypassword" name="verifypassword" id="verifypassword"></td>
      </tr>
      <tr>

      <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
<?php 
function user_name($name){
return $name;
}
function pass($password){
  return $password;
}
function state($state){
  return $state;
}
function email($email){
  return $email;

}
function check_number($number){
    if($number % 2 == 0){
        $number_ktrgn = "Even"; 
    }
    else{
        $number_ktrgn = "Odd";
    }

    return $number_ktrgn;
}
function get_jantina($nric) {

$kod_jantina = substr($nric,-1,1); 

 if($kod_jantina % 2 == 0){
        $ktrgn_jantina = "Female"; 
    }
    else{
         $ktrgn_jantina = "Male";
    }

return $ktrgn_jantina;
}

function get_dob($nric) {

  $tahun = substr($nric, 0, 2);
  $bulan = substr($nric, 2, 2);
  $hari = substr($nric, 4, 2);

  $dob = $tahun . "-" . $bulan . "-" . $hari;

// echo date("d-M-Y", strtotime($dob));

return $dob;

}

if (isset($_POST['submit'])) {

$name =$_POST['name'];
echo user_name($name);
echo "<br>";
$nric = $_POST['number'];
echo get_jantina($nric);
echo "<br>";
echo get_dob($nric);
echo "<br>";
$state =$_POST['state'];
echo state($state);
echo "<br>";
$email =$_POST['email'];
echo email($email);
echo "<br>";
$password =$_POST['password'];
echo pass($password);
echo"<br>";
}
?>