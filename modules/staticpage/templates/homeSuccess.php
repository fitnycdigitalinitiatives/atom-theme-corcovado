<?php decorate_with('layout') ?>
  <div class="hero-unit" id="splash">
		<h1>
      <?php echo image_tag('/plugins/arSparcPlugin/images/sparc_connect.png', array('alt' => __('FIT Special Collections and College Archives'))) ?>
    </h1>
    <h2>The archival collections of the FIT Library's Special Collections and College Archives</h2>
    <form class="hero-search" action="<?php echo url_for(array('module' => 'informationobject', 'action' => 'browse')) ?>" data-autocomplete="<?php echo url_for(array('module' => 'search', 'action' => 'autocomplete')) ?>" autocomplete="off">
      <div class="input-append input-block-level">
        <input type="hidden" name="topLod" value="0"/>
        <input type="text" id="appendedInput" name="query" class="span12" value="<?php echo $sf_request->query ?>" placeholder="<?php echo __('Connect to the Collections') ?>"/>
        <a class="btn add-on"><i class="fa fa-search" aria-hidden="true"></i></a>
      </div>
    </form>
  </div>

  <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class=""></li>
    	<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
    	<div class="item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://fit.vrchost.com/media/get/77122/lb_sc_000150/');">
    	<div class="carousel-caption">
    		<div class ="container">
    			<a href="http://192.168.99.100/index.php/arsho-baghsarian-shoe-sketches-1963-2008"><h4>First Thumbnail label</h4>
    			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></a>
    		</div>
    	</div>
    	</div>
    	<div class="item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://fit.vrchost.com/media/get/66811/ls0001406/');">
    	<div class="carousel-caption">
    		<div class ="container">
    			<a href="http://192.168.99.100/index.php/arsho-baghsarian-shoe-sketches-1963-2008"><h4>Second Thumbnail label</h4>
    			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></a>
    		</div>
    	</div>
    	</div>
    	<div class="item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://fit.vrchost.com/media/get/76636/lb_sc_000065/');">
    	<div class="carousel-caption">
    	<div class ="container">
    			<a href="http://192.168.99.100/index.php/arsho-baghsarian-shoe-sketches-1963-2008"><h4>Third Thumbnail label</h4>
    			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></a>
    	</div>
    	</div>
    	</div>
    </div>
  </div>


<script type="text/javascript">

jQuery('.carousel').carousel({
  interval: 5000,
  pause: "false"
})
</script>
