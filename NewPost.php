<div class="container bootstrap snippets bootdeys">
      <div class="col-md-7 col-md-offset-2">

          <div class="panel">


            <div class="panel-body">
              <?php include("dropdown.php") ?>
            </br>
            		<textarea class="form-control" rows="2" placeholder="Write something here..."></textarea>
            		<div class="mar-top clearfix">
                </br>
                  <?php include("tagsInput.php");?>
                </br>
                <button class="btn btn-sm btn-primary pull-right" style="background-color:#6C452D;border-color:#6C452D;width:100px;" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
            
                  <label>
                    <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" data-original-title="Add Video" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="video/*" style="display:none;"/>
                  </label>
                  <label>
                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" data-original-title="Add Photo" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" style="display:none;"/>
                  </label>
          			<a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
          		</div>
          	</div>
          </div>
        </div>
      </div>
