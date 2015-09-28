@section('head-logo')
  <?php echo View::make('partial.header-logo') ?>
@endsection
@section('navibar')
  <?php echo View::make('partial.navigation-bar') ?>
@endsection
@section ('content')
<div class="home-page-holder">
  <!-- SLIDER -->
    <div class="small-12 large-12 columns">
        <ul  class="homeslider">
            <li><img src="/resources/images/homeslider/mc-abs.jpg" alt="image"></li>
            <li><img src="/resources/images/homeslider/slider6.jpg" alt="image"></li>
            <li><img src="/resources/images/homeslider/hiring-urgent.jpg" alt="image"></li>
            <li><img src="/resources/images/homeslider/slider7.jpg" alt="image"></li>
        </ul>
    </div><hr>
  <!-- END SLIDER -->
  <div class="row">
    <div class="large-12 columns">
      <!-- HOME PAGE CONTENT -->
      <div class="content-box">
        <div class="panel panelradiusbox">
          <div class="row">
            <div class="large-12 columns">
              <h4>WHY CHOOSE US?</h4>
              <p>MC-ABS HR Global Solutions is a newly operated licensed manpower services that provides Human Resources services including recruitment by contracting, subcontracting, and outsourcing training and development and coordination to the markets.</p>
              <p>The company complies with all regulatory and obligatory requirements of the law with regard to employment and assured that our clients would be free from any legal concerns with regard to our engagements.</p>
              <p>With this, the company complied with the requirements as provided for under the Labor Code, and its implementing Rules specifically Department Order No. 18-A Series of 2011 and pursuant to DO-18A Cert # ROIVA-RPO-18A-0415-010 issued by the Department of Labor and Employment, which now prohibits contractor/subcontractor entities.  It is duly registered with Certificate of Registration No., 3RC0000679680 issued by the BIR on November 26, 2014.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <a href="/aboutus">Read More →</a>
            </div>
          </div>
        </div>
      </div><hr>
        <h4><a href="/jobopening">Featured Jobs</a><h4>
        <div class="large-12 columns">
          <div class="large-12 columns">
            <!-- <h4>Aviation</h4> -->
            <img src="/resources/images/homeslider/hiring-urgent.jpg" alt="image">
            <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
          </div>
         </div><hr>
        </div>
    </div>
      <!-- END HOME PAGE CONTENT -->
  </div>
</div>
@endsection
@section('footerholder')
  @include('partial.webfooter') 
@endsection