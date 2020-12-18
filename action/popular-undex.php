<script>
$(document).ready(function(){
    new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, 
    [   
<?php
	global $db;
    $q = $db->query("SELECT * FROM music_autor ORDER BY listening DESC LIMIT 10");
    if($q) {
        $arr = [];
        $i=0;
        while($r=$q->fetch_assoc()){
            $arr[$i]=$r;
            $i++;
		}
		foreach($arr as $key=>$value){
            $k=$value['autor'];
            $autor= $db->query("SELECT * FROM author WHERE id=$k"); 
            $artist = $autor->fetch_assoc();
            $emp = $artist["name"];
        ?>
	        {
                title:"<?=$value["tytle"]?>",
                artist:"<?=$emp?>",
                mp3:"music/<?=$value["mp3"]?>",   
                poster: "img/music/<?=$value["img"]?>" 
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