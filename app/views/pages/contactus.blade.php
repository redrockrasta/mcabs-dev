@section('head-logo')
  <?php echo View::make('partial.header-logo') ?>
@endsection
@section('navibar')
  <?php echo View::make('partial.navigation-bar') ?>
@endsection
@section ('content')
<div class="map-holder">
    <div class="large-12 columns"><hr>
        <h5>Map</h5>
        <div id="map-canvas"></div>
        <p>Location:&nbsp; #005 &amp; Corner Rose &amp; Daisy St. Midtown Village Ph9 Cainta, Rizal 1900</p>
        <hr>
    </div>
</div>
<div class="form-holder">
    <div class="large-12 columns">
        <h5 class="title"><a href="#panel1">DROP US A LINE</a></h5>
        <div class="row">
            <form>

              <div class="row collapse">
                <div class="large-5">
                    <div class="large-3 columns">
                      <label class="inline">NAME</label>
                    </div>
                    <div class="large-9 columns">
                      <input type="text" id="yourName" placeholder="Name">
                    </div>
                </div>
              </div>

              <div class="row collapse">
                <div class="large-5">
                    <div class="large-3 columns">
                      <label class="inline">EMAIL</label>
                    </div>
                    <div class="large-9 columns">
                      <input type="EMAIL" id="yourName" placeholder="Name">
                    </div>
                </div>
              </div>

              <div class="row collapse">
                <div class="large-5">
                    <div class="large-3 columns">
                      <label class="inline">SUBJECT</label>
                    </div>
                    <div class="large-9 columns">
                      <input type="text" id="yourName" placeholder="Name">
                    </div>
                </div>
              </div>

              


              <label>Other Information</label><br>
              <textarea rows="6"></textarea><br>
              <button type="submit" class="radius button large-4 columns">Submit</button><div class="form-group1"> 
                <div class="large-4">
                  <img src="/resources/images/content/upload.png" alt=""> | <span>Attach your cv</span>
                <div>
              <div class="fileUpload btns">
                  <input type="file" class="upload">
              </div>
            </form>
        </div>
    </div><hr>
</div>
@endsection
@section('footerholder')
  <?php echo View::make('partial.webfooter') ?>
@endsection