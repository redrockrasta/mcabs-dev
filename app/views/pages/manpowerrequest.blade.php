@section ('content')
@include('partial.header-logo')
@include('partial.navigation-bar')
<form>
    <div class="mpr-holder">
        <div class="row">
            <div class="banner-holder">
                <div class="large-12 columns"><hr>
                  <img src="/resources/images/homeslider/mpr-banner.jpg" alt="image">
                </div>
            </div>
        </div>
      <div class="row"><hr>
        <fieldset>
          <legend>JOB DETAILS</legend>
            <div class="row">
              <div class="large-12 columns">
                <label>NAME</label>
                <input type="text" placeholder="e.g. Juan dela cruz">
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>TITLE</label>
                <input type="text" placeholder="e.g. Web Programmer">
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>JOB CATEGORY</label>
                <input type="text" placeholder="e.g. IT Professionals">
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>EMAIL</label>
                <input type="text" placeholder="you@yourdoamin.com">
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>OTHER INFORMATION</label>
                <textarea rows="6"></textarea><br>
              </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <button type="submit" class="button large">Submit</button>
                </div>
                <div class="large-12 columns"> 
                    <div class="large-4">
                      <img src="/resources/images/content/upload.png" alt=""> | <span>Attach your cv</span>
                    </div>
                    <div class="fileUpload btns">
                        <input type="file" class="upload">
                    </div>
                </div>
            </div>

        </fieldset><hr>
      </div>
  </div>
</form>
@endsection
@section('footerholder')
  @include('partial.webfooter') 
@endsection