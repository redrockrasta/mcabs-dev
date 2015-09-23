@section('head-logo')
  <?php echo View::make('partial.header-logo') ?>
@endsection
@section('navibar')
  <?php echo View::make('partial.navigation-bar') ?>
@endsection
@section ('content')
<div class="srvices-holder">
    <div class="row">
        <div class="large-12 columns"><hr>
            <div class="large-8 columns" role="content">
                <article>
                    <div class="row">
                        <div class="large-12 columns">
                            <img src="/resources/images/content/rh-process.jpg" alt="">
                        </div>
                    </div><hr>
                    <div class="content-box">
                        <div class="panel panelradiusbox">
                            <div class="row">
                                <div class="large-12 columns">
                                    <h4>SERVICE</h4>
                                  <p>World-class recruitment of Professionals and Skilled workers thru temporary or contractual staffing, permanent or regular staffing, BPO or outsourcing / per project based staffing, Training and Development, and other support HR service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <div class="row">
                    <div class="large-12 columns">
                        <img src="/resources/images/content/benefits.jpg" alt="">
                    </div>
                </div><hr>
                <article>
                    <div class="content-box">
                        <div class="panel panelradiusbox">
                            <div class="row">
                                <div class="large-12 columns">
                                    <h4>FULL SERVICES</h4>
                                    <ul>
                                        <li>Nationwide Sourcing, Advertising, Screening, Initial and Final Interview, selection of quality candidates.</li>
                                        <li>Skills Trade Testing / Training with complete documents to clients of all workers deployed (Employment Contracts, Copies of Resumes, Medical, Trade Test Results) for client's record.</li>
                                        <li>Coordination of Interviews between Clients and Candidates.</li>
                                        <li>Processing of monthly contribution of statutory benefits (SSS, PHILHEALTH, PAG-IBIG).</li>
                                        <li>Providing whatever assistance needed by the clients or workers as requested.</li>
                                        <li>Ensure trouble free deployment and renewing contracts.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </article><hr>
            </div>
            <aside class="large-4 columns">
                <div class="panel">
                    <h5>INDUSTRIES</h5>
                    <ul class="side-nav">
                    <li><a href="#">- Aviation</a></li>
                    <li><a href="#">- Banking &amp; Finance</a></li>
                    <li><a href="#">- BPO &amp; Shared Services</a></li>
                    <li><a href="#">- Education and Training</a></li>
                    <li><a href="#">- Engineering &amp; Construction</a></li>
                    <li><a href="#">- Food Retail</a></li>
                    <li><a href="#">- Hotel &amp; Restaurant Management</a></li>
                    <li><a href="#">- Information &amp; Technology</a></li>
                    <li><a href="#">- Logistics &amp; Freight</a></li>
                    <li><a href="#">- Maintenance &amp; Janitorial Services</a></li>
                    <li><a href="#">- Manufacturing</a></li>
                    <li><a href="#">- Oil &amp; Gas</a></li>
                    <li><a href="#">- Sales &amp; Marketing</a></li>
                    <li><a href="#">- Security Services</a></li>
                    <li><a href="#">- And other Office &amp; Management Support.</a></li>
                    </ul>
                </div>
                <div class="panel">
                    <h5>Featured</h5>
                    <p>We look forward to have a good business relationship with you.</P> 
                    <P>And if you have any query please feel free to contact us at indicated above.</p>
                </div>
            </aside> 
        </div>
    </div>
</div> 
@endsection
@section('footerholder')
  <?php echo View::make('partial.webfooter') ?>
@endsection




