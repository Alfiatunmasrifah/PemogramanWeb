<?php
    //====Kolom1-sisi kiri====//
    $title = "ini cvku";
    $dest = "My name is Alfatun masrifah, was born in Sidoarjo. 
    July 30, 2000. My home address in 
    Jl. Jenggala Gedangan Sidoarjo. and now 
    currently i’m bachelor's education at UPN Veteranjawa timur";
    $karakter = "CHARACTERISTICS"; 
    $character = "creative, friendly, able to work with groups and
    individuals, open minded, willing to learn new 
    knowledge.hardworking, never give up,
    trustworthy";
    $pendidikan = "EDUCATION";
    $sd = "2006-2012
    SD Tpi Gedangan";
    $smp = "2012-2015
    Mts Nurus Syafi'i";
    $smk = "2015-2018
    Smk Antartika 2 Sidoarjo";
    $kuliah = "2018-Now
    Upn 'Veteran' jawa timur";
    $project = "PROJECT EXPERIENCE";
    $project1 = "Aplikasi Mobile - Curriculum vitae";
    $project2 = "Aplikasi Mobile - github";
    $project3 = "Aplikasi Mobile - Menu Makanan";
    $project4 = "Aplikasi Mobile - Splash Screen login";
    $project5 = "Website - Perpustakaan";
    $project6 = "Game - RPG Kuis";

    //====kolom tengah=====//
    $ar = "ARTISTIC SKILLS";
    $ar1 = "Ui/ux Design";
    $ar2 = "Construct2";
    $ar3 = "Flat Design";
    $ar4 = "Cinematic video";
    $ar5 = "Photography";
    $os = "OTHER SKILLS";
    $travel = "TRAVELS";
    $travel1 = "2018 - Semeru Mountain";
    $travel2 = "2018 - B29  Hill";
    $travel3 = "2018 - Welirang Mountain";
    $travel4 = "2019 - Penanggungan Mountain";

    //=====kolom kanan=====//
    $bahasa = "LANGUAGE";
    $bhs1 = "Indonesia";
    $bhs2 = "Inggris";
    $interest = "INTERESTS";
    $interest1 = "Traveling";
    $interest2 = "Hiking";
    $interest3 = "Music";
    $kontak = "CONTACT";
    $kontak1 = "+628564502495";
    $kontak2 = "Alfi.masrifah";
    $kontak3 = "Alfiatunmasrifah0
    @gmail.com";
    $kontak4 = "alfi.masrifah";
    $kontak5 = "Alfiatun";


    //=======koneksi ke database=========//

    $server = 'localhost';
    $user = "root";
    $pass = "";
    $database = "cv";

    $koneksi = mysqli_connect ($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    //====================================//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="body-atas">
            <div class="body-hello">
                <h1>Hello</h1>
            </div>
            <div class="body-dest">
                <?php
                     
                    $tampil = mysqli_query($koneksi, "SELECT * FROM deskripsi" );
                    while($desc = mysqli_fetch_array($tampil)) :

                ?>
                    <p><?=$desc['descrip']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
               
            </div>
        </div>
        <div class="judul-cv">
            <h2>CURRICULUM VITAE OF ALFIATUN MASRIFAH, UI/UX DESIGNER</h2>
        </div>
        
        <div class="body-tengah">
            <div class="kiri">
                <div class="avatar">
                    <img src="fotoku.png" alt="">
                </div>
                <div class="character">
                    <h1><?php echo $karakter ?></h1>
                    <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM charac" );
                     while($krk = mysqli_fetch_array($tampil)) :

                    ?>
                    <p><?=$krk['karakter']?></p>
                    <?php endwhile; //penutup perulangan while// ?>
                </div>
                <div class="pendidikan">
                    <h1><?php echo $pendidikan ?></h1>  
                    <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM pendidikan" );
                     while($edu = mysqli_fetch_array($tampil)) :

                    ?>
                   <ul>
                        <li><p><?=$edu['tahun']?>,<?=$edu['jenjang']?><p></li>
                        
                    </ul>
                    <?php endwhile; //penutup perulangan while// ?>
                </div>
                <div class = "projek">
                    <h1><?php echo   $project ?></h1>
                    <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM projek" );
                     while($pro = mysqli_fetch_array($tampil)) :

                    ?>
                        <ul>
                            <li><p><?=$pro['nama_projek']?><p></li> 
                        </ul>   
                    <?php endwhile; //penutup perulangan while// ?>          
                </div>
            </div>
            <div class="tengah">
                <div class="ar-skill">
                    <h1><?php echo $ar ?></h1>
 
                    <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM arskill" );
                     while($ars = mysqli_fetch_array($tampil)) :

                    ?>

                    <div class="ar-1">
                        <p><?=$ars['skill1']?></p>
                        <img src ="skillui.png">
                    </div>

                    <div class="ar-2">
                        <p><?=$ars['skill2']?></p>
                        <img src="construct2.png">
                    </div>

                    <div class="ar-3">
                        <p><?=$ars['skill3']?></p>
                        <img src="flatdesign.png">
                    </div>

                    <div class="ar-4">
                        <p><?=$ars['skill4']?></p>
                        <img src="cinematic.png">
                    </div>

                    <div class="ar-5">
                        <p><?=$ars['skill5']?></p>
                        <img src="photografi.png">
                    </div>

                    <?php endwhile; //penutup perulangan while// ?>

                </div>

                <div class="other-skill">
                    <h1><?php echo $os ?></h1>
                    <div class="or-1">
                        <img src="html.png" alt="">
                    </div>
                    <div class="or-2">
                        <img src="css.png" alt="">
                    </div>
                    <div class="or-3">
                        <img src="kt.png" alt="">
                    </div>
                    <div class="or-4">
                        <img src="figma.png" alt="">
                    </div>
                    <div class="or-5">
                        <img src="adobe.png" alt="">
                    </div>
                    <div class="or-6">
                        <img src="pr.png" alt="">
                    </div>
                </div>

                <div class="travel">
                    <h1><?php echo $travel ?></h1>
                    
                    <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM travel" );
                     while($tra = mysqli_fetch_array($tampil)) :

                    ?>
                    
                        <p><?=$tra['tahun']?><?=$tra['destinasi']?></p>
                        
                    <?php endwhile; //penutup perulangan while// ?>

                </div>

            </div>
            <div class="kanan">
               <div class="bahasa">
                   <h1><?php echo $bahasa ?></h1>
                   
                   <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM bahasa" );
                     while($bhs = mysqli_fetch_array($tampil)) :

                    ?>

                    <div class="bhs1">
                        <img src="indo.png" alt="">
                    </div>
                    <div class="bhs2">
                        <img src="ingris.jpg" alt="">
                    </div>
                    <div class="text1">
                        <p><?=$bhs['bahasa1']?></p>
                    </div>
                    <div class="text2">
                        <p><?=$bhs['bahasa2']?></p>
                    </div>   
                    <?php endwhile; //penutup perulangan while// ?>
               </div>

               <div class="interest">
                   <h1><?php echo $interest ?></h1>

                   <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM interes" );
                     while($inter = mysqli_fetch_array($tampil)) :

                    ?>

                   <div class="inter1">
                       <img src="plane.png" alt="">
                       <p><?=$inter['pertama']?></p>
                   </div>
                   <div class="inter2">
                       <img src="hike.png" alt="">
                       <p><?=$inter['kedua']?></p>
                   </div>
                   <div class="inter3">
                       <img src="lagu.png" alt="">
                       <p><?=$inter['ketiga']?></p>
                   </div>
                   
                   <?php endwhile; //penutup perulangan while// ?>
               </div>

               <div class="sosmed">
                   <h1><?php echo $kontak?></h1>
                   <?php
                     
                     $tampil = mysqli_query($koneksi, "SELECT * FROM contact" );
                     while($con = mysqli_fetch_array($tampil)) :

                    ?>

                   <div class="kontak-1">
                       <img src="wa.png" alt="">
                       <p><?=$con['wa']?></p>
                   </div>
                   <div class="kontak-2">
                       <img src="facebook1.png" alt="">
                       <p><?=$con['fb']?></p>
                   </div>
                   <div class="kontak-3">
                       <img src="gmail1.png" alt="">
                       <p><?=$con['email']?></p>
                   </div>
                   <div class="kontak-4">
                       <img src="ig.png" alt="">
                       <p><?=$con['ig']?></p>
                   </div>
                   <div class="kontak-5">
                       <img src="behance1.png" alt="">
                       <p><?=$con['behance']?></p>
                   </div>

                   <?php endwhile; //penutup perulangan while// ?>

               </div>
            </div>
        
        </div>
    </div>
</body>
</html>