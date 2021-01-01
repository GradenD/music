<!-- загрузка аудио -->
<form id="form-add" class="action-form" method="post" action="javascript:void(0);">
<div class="tab-btn bottom-load">
    <input type="file" accept=".mp3" name="file-sounds" id="file-sounds" class="inputfile" />
    <label class="btn-send" for="file-sounds"><i class="fas fa-file-download" aria-hidden="true"></i> SOUNDS</label>
</div>
<!-- ответ загрузки -->
<div class="info-file bottom-load">
    <p id="info-file"></p>
    <input class="inp-none" type="text" name="info-file" id="info-file2" >
</div>
<!-- название трека -->
<div class="form-group bottom-load">
	<label for="tytle-treck" class="cols-sm-2 control-label">Name of the track</label>
	<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-signature" aria-hidden="true"></i></span>
		<input type="text" required="" class="form-control" name="tytle-treck" id="tytle-treck" placeholder="Name of the track">
	</div>
</div>
<!-- артист -->
<div class="form-group bottom-load">
	<label for="artist" class="cols-sm-2 control-label">Name artist</label>
	<div class="input-group">
	    <span class="input-group-addon"><i class="fas fa-user" aria-hidden="true"></i></span>
		<input type="text" required="" class="form-control" name="artist" id="artist" placeholder="Name artist">
	</div>
</div>
<!-- постер -->
<div class="info-poster bottom-load">
    <h1>POSTER</h1>
    <div class="tab-btn bottom-load">
        <input type="file" multiple  accept="image/jpeg,image" name="file-poster" id="file-poster" class="inputfile" />
        <label class="btn-send" for="file-poster"><i class="fas fa-file-download" aria-hidden="true"></i> POSTER</label>
    </div>
    <div class="poster">
        <img id="poster" src="img/audio-defoult.jpg">
        <p id="poster-otvet">audio-defoult.jpg</p>
        <input class="inp-none" type="text" value="audio-defoult.jpg" name="poster-otvet" id="poster-otvet2" >
    </div>
</div>

<div class="tab-btn btn-add">
    <button id="add" class="btn-send" type="submit"> ADD </button>
    <p id="add-otvet" style="color: red;"></p>
</div>
</form>
<script type="text/javascript" src='js/loading-treck.js'></script>