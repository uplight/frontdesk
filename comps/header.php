<header class="clearfix">
	<section id="branding">
		<!--<div id="weather"><script>require(['js/config'],function(){require(['weather'])})</script></div>-->
        <div class="row">
            <div class="col-lg-10">

            </div>
            <div id="clock" class="col-lg-2 hidden-xs">
                <script>
                    require(['js/config'],function(){
                        require(['svgjs'],function(){
                            require(['svgjse'],function(){
                                require(['clock'],function(){

                                });
                            });
                        })
                     })
                </script>
            </div>
        </div>
	</section><!-- branding -->


	<!-- Modal -->
	<section id="modal" class="modal fade">
		<div class="modal-body">
			<img id="modalimage" src="" alt="Modal Photo">
		</div><!-- modal-body -->
	</section><!-- modal -->
</header><!-- header -->
