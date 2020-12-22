<div class="slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
		  	<?php
        		$k=1;
        		while($row = news_index::getOnce($k)){
            		while($set = $row->fetch_object()){
    		?>
			<?php 
				if ($k == 1){
			?>
    		<li data-target="#carouselExampleIndicators" data-slide-to="<?php $k;?>" class="active"></li>
			<?php }else{ ?>
    			<li data-target="#carouselExampleIndicators" data-slide-to="<?php $k;?>"></li>
			<?php } 

            		}
            		$k++;
       			}
    		?>
  		</ol>
  		<div class="carousel-inner">
		  	<?php
        		$k=1;
        		while($row = news_index::getOnce($k)){
					echo "<div class='row'></div>";
            		while($set = $row->fetch_object()){
    		?>
			<?php 
				if ($k == 1){
			?>
    			<div class="carousel-item active">
			<?php }else { ?>
				<div class="carousel-item">
			<?php } ?>

      			<img class="d-block w-100" data-src="img/slider-ndex/<?=$set->img?>">
				<div class="carousel-caption d-none d-md-block">
    				<p>
						<?=$set->text?>
					</p>
  				</div>
			</div>

			<?php 
					}
					$k++;
				}
			?>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div>
</div>
<div class="container">
	<div class="trending">
		<h1>OUR TRENDING</h1>
		<h2>Albums</h2>
		<div class="trend-gallery">
			<div class="conrol">
				<div id="trend-left" class="control-row">
					<i class="fas fa-chevron-left" aria-hidden="true"></i>
				</div>
				<div id="trend-right" class="control-row">
					<i class="fas fa-chevron-right" aria-hidden="true"></i>
				</div>
			</div>
			<div id="trend-albums" class="albums">
				<?php
					global $db;
        			$q = $db->query("SELECT * FROM album ORDER BY listening DESC LIMIT 18;");
        			if($q) {
            			$arr = [];
            			$i=0;
            			while($r=$q->fetch_assoc()){
                			$arr[$i]=$r;
                			$i++;
						}
						$k = 1;
						foreach($arr as $key=>$value){
							if ($k == 1){
								echo "<div class=\"trend-column animate\">";
							}
							?>
							<div class="trend-block">
								<img src="img/albums/<?=$value["img"]?>">
								<div class="shadow-block">
									<p><?=$value["tytle"]?></p>
								</div>
							</div> 
							<?php
							if ($k%2==0){ //каждый второй шаг
								echo "</div>";
								echo "<div class=\"trend-column animate\">";
							}
							$k++;
						}
						//echo $k."<br>";
						//echo count($arr);
					}
				?>
			</div>
		</div>
	</div>
</div>
<div class="blog">
    <div class="blog-content">
		<h1>POPULAR</h1>
		<h2>Songs</h2>
		<div class="index-music">
			<div id="jquery_jplayer_1" class="jp-jplayer"></div>
			<div id="jp_container_1" class="jp-audio jp-state-looped" role="application" aria-label="media player">
				<div class="jp-type-playlist">
					<div class="jp-gui jp-interface">
						<div class="jp-controls"> 
							<button class="jp-play" role="button" tabindex="0">play</button>
						</div>
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-volume-controls">
							<button class="jp-mute" role="button" tabindex="0">mute</button>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
						<div class="jp-time-holder">
							<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
							<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
						</div>
					</div>
					<div class="jp-playlist">
						<ul id="music-list">
							<li class=""></li>
						</ul>
					</div>
					<div class="jp-no-solution">
						<span>Update Required</span>
					</div>
				</div>
 			</div>
		</div>
    </div>
    <div class="blog-social">
        <div class="recent-posts social-content">
            <div class="post-head">
                <h1>RECENT POST</h1>
            </div>
            <div class="post-body">
                <div class="post">
                    <div class="post-img">
                        <img data-src="img/post/pvris.jpg">
                    </div>
                    <div class="post-title">
                        <h1>Lorem ipsum dolor sit amet, consec</h1>
                        <p>July 5, 2016</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post-img">
                        <img data-src="img/post/pharaoh.jpg">
                    </div>
                    <div class="post-title">
                        <h1>Ut wisi enim ad minim veniam, quis</h1>
                        <p>July 17, 2016</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post-img">
                        <img data-src="img/post/skillet.jpg">
                    </div>
                    <div class="post-title">
                        <h1>Aliquip ex ea commodo aliquam erat volutpat</h1>
                        <p>July 21, 2016</p>
                    </div>
                </div>
                <div class="post">
                    <div class="post-img">
                        <img data-src="img/post/lcp.jpg">
                    </div>
                    <div class="post-title">
                        <h1>Ut wisi enim ad minim veniam, quis</h1>
                        <p>July 17, 2016</p>
                     </div>
                </div>
            </div>
        </div>
        <div class="recent-posts social-content inst">
            <div class="post-head">
                <h1>INSTAGRAM</h1>
            </div>
            <div class="post-body inst-body">
				<?php
					global $db;
        			$q = $db->query("SELECT * FROM instagram ORDER BY date DESC LIMIT 6");
        			if($q) {
            			$arr = [];
            			$i=0;
            			while($r=$q->fetch_assoc()){
                			$arr[$i]=$r;
                			$i++;
						}
						foreach($arr as $key=>$value){
							?>
								<img data-src="img/inst/<?=$value["img"]?>">
							<?php
						}
					}
    			?>
            </div>
        </div>
    </div>
</div>
<?php 
	require_once 'action/popular-undex.php';
?>
<script type="text/javascript" src='js/index.js'></script>