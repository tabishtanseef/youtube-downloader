<div class="item">
    <h2>{{title}}</h2>
    <iframe class="video w100" width="640" height="360" src="//www.youtube.com/embed/{{videoid}}" frameborder="0" allowfullscreen></iframe>
<div id="searchVideo">
                    <div class="row">
                      <div class="col-md-12 abc">
                        <?php if(isset($_GET['v']) && ($_GET['v']) != ''){ ?>
							<input type="hidden" name="url" id="video_url" class="form-control" placeholder="Video Link" value="https://www.youtube.com/watch?v=<?php echo $_GET['v']; ?>" required>
							<script>$(document).ready(function() { youtube(); });</script>
							<?php } else { ?>
							<form onsubmit="youtube()" id="downloadForm" class="search-form" method="POST" action="javascript:void(0);">
                            <input name="video_url" id="video_url" class="url-input" type="text" value="https://youtu.be/{{videoid}}"  />
                              <div onclick="youtube()" class="image">
                                <span class="helper"></span><img src="img/download_icon.svg" />
                              </div>
                            </form>
						<?php } ?>
                    </div>
					</div>
					
					
					<br><br>
                </div>
	
	
	
	
	</div>
