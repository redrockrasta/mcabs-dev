@section ('content')
@include('partial.header-logo')
@include('partial.navigation-bar')
<div class="home-page-hodler">
  <div class="row">
    <div class="large-12 columns">
      <!-- BANNER -->
      <div class="banner-holder">
        <div class="large-12 columns"><hr>
          <img src="/resources/images/homeslider/slider7.jpg" alt="image">
        </div>
      </div><hr>
      <!-- END BANNER -->
            
      <!-- HOME PAGE CONTENT -->
          <div class="content-holder">
            <div class="row">
              <div class="large-12 columns">
                <h2>Featured Jobs</h2>
              </div>
            </div>
            <div class="row">
              <div class="medium-8 large-8 columns">
                <!-- <h3>Title of Content</h3> -->
                <div class="large-12 columns"><hr>
                  <img src="/resources/images/homeslider/hiring-urgent.jpg" alt="image">
                </div>
                <h3>Title of Content</h3>
                <ul>
                    <li>Nationwide Sourcing, Advertising, Screening, Initial and Final Interview, selection of quality candidates.</li>
                    <li>Skills Trade Testing / Training with complete documents to clients of all workers deployed (Employment Contracts, Copies of Resumes, Medical, Trade Test Results) for client's record.</li>
                    <li>Coordination of Interviews between Clients and Candidates.</li>
                    <li>Processing of monthly contribution of statutory benefits (SSS, PHILHEALTH, PAG-IBIG).</li>
                    <li>Providing whatever assistance needed by the clients or workers as requested.</li>
                    <li>Ensure trouble free deployment and renewing contracts.</li>
                </ul>
              </div>
              
              <div class="medium-4 large-4 columns text-center">
                <img src="/resources/images/content/now-is-now.jpg" alt="">
              </div>
            </div>
           
      <!-- END HOME PAGE CONTENT -->
    </div>
  </div><br>
</div>


@endsection
@section('footerholder')
  @include('partial.webfooter') 
@endsection