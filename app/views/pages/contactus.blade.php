@section ('content')
@include('partial.header-logo') 
@include('partial.navigation-bar')
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
                          <span id="validationname" class="errormessage"></span>
                          <label class="inline">NAME</label>
                        </div>
                        <div class="large-9 columns">
                         <input id="txtname" placeholder="Full Name" name="txtname" type="text">
                        </div>
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-5">
                        <div class="large-3 columns">
                          <span id="validationemail" class="errormessage"></span>
                          <label class="inline">EMAIL</label>
                        </div>
                        <div class="large-9 columns">
                          <input id="txtemail" placeholder="Email" name="txtemail" type="text">
                        </div>
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-5">
                        <div class="large-3 columns">
                          <label class="inline">SUBJECT</label>
                        </div>
                        <div class="large-9 columns">
                          <input type="text" id="txtmessage" placeholder="Name">
                        </div>
                    </div>
                  </div>
                  <div>
                      <label>Other Information</label><br>
                      <span id="validationemail" class="errormessage"></span>
                      <textarea id="txtmessage" placeholder="Your Message" name="txtmessage" rows="6"></textarea><br>
                      <button type="submit"  id="submitcontact" class="radius button large-4 columns">Submit</button>
                  </div>

                </form>
            </div>
        </div><hr>
      </div>
@endsection
@section('footerholder')
  @include('partial.webfooter') 
@endsection