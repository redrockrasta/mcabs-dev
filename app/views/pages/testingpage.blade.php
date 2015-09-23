
@section('head-logo')
  <?php echo View::make('partial.header-logo') ?>
@endsection
@section('navibar')
  <?php echo View::make('partial.navigation-bar') ?>
@endsection
@section ('content')
<!-- Form -->
<div class="row">
<div class="large-12 columns">
<ul class="clearing-thumbs clearing-feature" data-clearing>
  <li><a href="/resources/images/homeslider/hiring-urgent.jpg"><img src="/resources/images/homeslider/hiring-urgent.jpg"></a></li>
  <li class="clearing-featured-img"><a href="/resources/images/homeslider/mc-abs.jpg"><img src="/resources/images/homeslider/mc-abs.jpg"></a></li>
  <li><a href="path/to/your/img"><img src="path/to/your/img-th"></a></li>
</ul>
</div>
</div>
<!-- End Form -->
@endsection
@section('footerholder')
  <?php echo View::make('partial.webfooter') ?>
@endsection