<footer class="well brand-dark">
    <div class="row">
        <br/>
        <div class="col-md-4  col-sm-6 col-xs-12 text-center">
            <div><span class="fa fa-phone"></span> <a href="tel:4168827855" >416 882 7855</a></div>
            <div><span class="fa fa-paper-plane"></span> <a href="mailto:uplight.ca@gmail.com">uplight.ca@gmail.com</a></div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 text-center">
            <div><span class="fa fa-map"></span> <a href="Contact?#Map"> Canada, Ontario, Toronto</a></div>
            <div><span class="fa fa-envelope"></span> <a href="Contact?#Contact-Form"> Contact</a></div>
        </div>
        <div class="col-md-4 col-xs-12 text-center">
            <p style="text-align: center">Copyright &copy; Front-desk.ca 2014</p>
            <div><a href="http://uplight.ca" target="_blank">http://uplight.ca</a></div>
        </div>

        <br/>
    </div>
    <script>
        $(document).ready(function(){
           $(".nano").nanoScroller();

            var  doThisWhenTheHashChanges = function(evt){
                console.log(evt);
            }
            window.addEventListener("hashchange", doThisWhenTheHashChanges, false);
           /* jQuery(window).on('hashchange', function(e){
                console.log(e);
                e.preventDefault();
                //var hashFound = determineContent();
               // if(hashFound) return false;
            });*/
        })
    </script>
</footer>