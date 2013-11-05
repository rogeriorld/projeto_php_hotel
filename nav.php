	<script type="text/javascript">
	
	$(document).ready(function () {
    $('.nav li a').click(function(e) {

        $('.nav li').removeClass('active');

        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        e.preventDefault();
    });
});
	</script>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul class="nav navbar-nav">
	      <li class='active'><a href="">Home</a></li>
	      <li><a href="">Quartos</a></li>
	      <li><a href="">Serviços</a></li>
	      <li><a href="">Eventos</a></li>
	      <li><a href="">Contato</a></li>
	    </ul>
	   
	  </div><!-- /.navbar-collapse -->
	</nav>