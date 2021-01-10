<?php 
    require_once '../config/db.php';
	require_once '../library/check.php'; 
	require_once '../action/user-info.php'; 
?>

<?php 
	global $db;
	$q = $db->query("SELECT * FROM music_profile WHERE user='$usrId'");
	$music = $q->fetch_assoc();
    if(!empty($music)){
        require_once '../action/pr-playlist.php';
?>
<script>
$(document).ready(function(){
    new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, 
    [   
<?php
	global $db;
    $q = $db->query("SELECT * FROM music_profile WHERE user='$usrId' ORDER BY listening DESC");
    if($q) {
        $arr = [];
        $i=0;
        while($r=$q->fetch_assoc()){
            $arr[$i]=$r;
            $i++;
		}
		foreach($arr as $key=>$value){
            $title_sounds = $value['tytle'];
            $emp = $value['autor'];
            $url_sounds = $value['url'];
            $url_img = $value['img'];
        ?>
	        {
                id: "<?=$value["id"]?>",
                title:"<?=$title_sounds?>",
                artist:"<?=$emp?>",
                mp3:"music/<?=$url_sounds?>",   
                poster: "img/music/<?=$url_img ?>" 
            },
		<?php
		}
	}
?>
        ], 
        {
            playlistOptions: {
                autoPlay: false,
            },
            swfPath: "js",
            supplied: "webmv, ogv, m4v, oga, mp3",
            wmode: "window",
            loop: true,
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
        }
    );
});
</script>
<script type="text/javascript" src='js/operation-music.js'></script>
<?php
	}else{
		echo "Add music";
    }
?>