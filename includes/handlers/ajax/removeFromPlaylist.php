<?php

include ("../../config.php");
if(isset($_POST['playlistId']) && isset($_POST['songId'])){
    $playlistId = $_POST['playlistId'];
    //var_dump($playlistId);
    $songId = $_POST['songId'];
    //var_dump($songId);

    $query = mysqli_query($con, "DELETE FROM playlistSongs WHERE playlistId='$playlistId' AND songId='$songId'");
    echo $playlistId, $songId;
}else{
    echo "Playlists Song not Deleted (Playlist id or SongId- Problem? ";
}
?>