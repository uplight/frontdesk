<footer>
    <div class="row">
        <div class="col-lg-12">
            <p style="text-align: center">Copyright &copy; Front-desk.ca 2014</p>
        </div>
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