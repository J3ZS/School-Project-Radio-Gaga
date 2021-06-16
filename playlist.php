<?php
include 'assets/php/myAlbums.php'
?>

<!DOCTYPE html>
<html>
    <head>

        <!-- Character Set -->
        <meta charset="utf-8" />

        <!-- Page Description -->
        <meta name="description" content="Radio Gaga">

        <!-- CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <!-- Title of the page -->
        <title>Radio Gaga</title>

    </head>
<body>
    <header id="header"> 
        <div id="logo">Radio Gaga</div>
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="playlist.php">Playlist</a></li>
                </ul>
            </nav>
    </header>
    <div id="multimedia-container">
        <div id="album-container">
            <ul>
                <li><a class= "btn1" id="btn1">
                    <img src="assets/music/Albumone/Albumone.jpg" onclick="btn1()">
                    </a>
                </li>
                <li><a class="btn2" id="btn2">
                    <img src="assets/music/Albumtwo/Albumtwo.jpg" onclick="btn2()">
                    </a>
                </li>
                <li><a class="btn3" id="btn3">
                    <img src="assets/music/Albumthree/Albumthree.jpg" onclick="btn3()">
                    </a>
                </li>
            </ul>
            <script src="assets/js/albumcontainer.js"></script>
    </div>
        <div id="playlistcontainer"> 
            <h1>Album 1</h1>
            <video controls>
                <source src="assets/video/album1.mp4" type="video/mp4">
            </video>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Play</th>
                    </tr>
                </thead>
                <tbody>    
                   <?php
                   foreach($myAlbums[0]["tracks"] as $track)
                   {
                   ?>
                   <tr>
                       <td><?php echo $track["trackTitle"]; ?></td>
                       <td><?php echo $track["trackDuration"]; ?></td>
                       <td width="300px"><audio controls>
                       <source src="<?php echo $track["trackFile"]; ?>" type="audio/mpeg">
                       Your browser does not support the audio tag.
                       </audio></td>
                   </tr>
                   <?php 
                   }
                   ?>
                </tbody>       
            </table>
        </div>

        <div id="playlistcontainer2"> 
            <h1>Album 2</h1>
            <video controls>
                <source src="assets/video/album2.mp4" type="video/mp4">
            </video>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Play</th>
                    </tr>
                </thead>
                <tbody>    
                   <?php
                   $num = 1;
                   foreach($myAlbums[1]["tracks"] as $track)
                   {
                   ?>
                   <tr>
                       <td><?php echo $track["trackTitle"]; ?></td>
                       <td><?php echo $track["trackDuration"]; ?></td>
                       <td width="300px"><audio controls>
                       <source src="<?php echo $track["trackFile"]; ?>" type="audio/mpeg">
                       Your browser does not support the audio tag.
                       </audio></td>
                   </tr>
                   <?php 
                   $num++;
                   }
                   ?>
                </tbody>       
            </table>
        </div>
        <div id="playlistcontainer3"> 
            <h1>Album 3</h1>
            <video controls>
                <source src="assets/video/album3.mp4" type="video/mp4">
            </video>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Play</th>
                    </tr>
                </thead>
                <tbody>    
                   <?php
                   $num = 1;
                   foreach($myAlbums[2]["tracks"] as $track)
                   {
                   ?>
                   <tr>
                       <td><?php echo $track["trackTitle"]; ?></td>
                       <td><?php echo $track["trackDuration"]; ?></td>
                       <td width="300px"><audio controls>
                       <source src="<?php echo $track["trackFile"]; ?>" type="audio/mpeg">
                       Your browser does not support the audio tag.
                       </audio></td>
                   </tr>
                   <?php 
                   $num++;
                   }
                   ?>
                </tbody>       
            </table>
        </div>
    </div>
        <div class="clearfix"></div>
    </body>
</html>