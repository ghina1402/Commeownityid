
<div class="container bootstrap snippets bootdeys">
      <div class="col-md-7 col-md-offset-2">

          <div class="panel">
            <div class="panel-body">
              <form method="post">
              <div class="dropdown">
                <select class="btn btn-secondary dropdown-toggle" type="button" name="PostCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Post Category">
                <option>Kategori Post</option>
                <option value="Open Adopt">Open Adopt</option>
                <option value="Need Adopter">Need Adopter</option>
                <option value="Miscellanous">Miscellanous</option>
                </select>
              </div>
            </br>
            		<textarea type="text" class="form-control" rows="2" placeholder="Write something here..."></textarea>
            		<div class="mar-top clearfix">
                </br>
                  <?php include("tagsInput.php");?>
                </br>
                <button class="btn btn-sm btn-primary pull-right" style="background-color:#6C452D;border-color:#6C452D;width:100px;" type="submit"> Post</button>
<div style="display:inline-block;position:relative;width:200px;">

    <img id="output1" width="200" style="display:inline-block;position:relative;z-index:0;"/>
    <div id="outputx1" onclick="removeFile('1')" style="display:none;width:20px;height:20px;position:absolute;;right:0px;top:0px;z-index:1;padding:4px;background-color:red;color:white;font-weight:bold;">
      x
    </div>
</div>
<div style="display:inline-block;position:relative;width:200px;">
<img id="output2" width="200" style="display:inline-block;position:relative;z-index:0;"/>
<div id="outputx2" onclick="removeFile('2')" style="display:none;width:20px;height:20px;position:absolute;;right:0px;top:0px;z-index:1;padding:4px;background-color:red;color:white;font-weight:bold;">
  x
</div>
</div>
<div style="display:inline-block;position:relative;width:200px;">
<img id="output3" width="200" style="display:inline-block;position:relative;z-index:0;"/>
<div id="outputx3" onclick="removeFile('3')" style="display:none;width:20px;height:20px;position:absolute;;right:0px;top:0px;z-index:1;padding:4px;background-color:red;color:white;font-weight:bold;">
  x
</div>
</div>
</br>
    <script>
      var removeFile = function removeFile(id) {
        var output = document.getElementById('output' + id);
        var outputx = document.getElementById('outputx' + id);
        var myimage = document.getElementById('myImage' + id);
        output.src = '';
        outputx.style.display = 'none';
        myimage.value = '';
      }
      var output, outputx;
      var loadFile = function(event) {
        var myImage1 = document.getElementById('myImage1');
        var myImage2 = document.getElementById('myImage2');
        var myImage3 = document.getElementById('myImage3');
        //if (event.target.value == '') return;
        if (myImage1.value == '') {
          myImage1.files = event.target.files;
          output = document.getElementById('output1');
          output.src = URL.createObjectURL(event.target.files[0]);
          outputx = document.getElementById('outputx1');
        } else if (myImage2.value == '') {
          myImage2.files = event.target.files;
          output = document.getElementById('output2');
          output.src = URL.createObjectURL(event.target.files[0]);
          outputx = document.getElementById('outputx2');
        } else if (myImage3.value == '') {
          myImage3.files = event.target.files;
          output = document.getElementById('output3');
          output.src = URL.createObjectURL(event.target.files[0]);
          outputx = document.getElementById('outputx3');
        }
        console.log(myImage1.value);
        console.log(myImage2.value);
        console.log(myImage3.value);
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
          outputx.style.display = 'block';
        }
      };
    </script>
                  <label>
                    <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" data-original-title="Add Video" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="video/*" style="display:none;"/>
                  </label>
                  <label>
                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" data-original-title="Add Photo" data-toggle="tooltip"></a>
                    <input type="file" id="myImage0" name="myImage0"  onchange="loadFile(event)" accept="image/png, image/gif, image/jpeg" style="display:none;"/>
                  </label>
                  <input type="file" id="myImage1" name="myImage1"  accept="image/png, image/gif, image/jpeg" style="display:none;"/>
                  <input type="file" id="myImage2" name="myImage2"  accept="image/png, image/gif, image/jpeg" style="display:none;"/>
                  <input type="file" id="myImage3" name="myImage3"  accept="image/png, image/gif, image/jpeg" style="display:none;"/>
          			<!--a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a-->
          		</div>
            </form>
          	</div>
          </div>
        </div>
      </div>
