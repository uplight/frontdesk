<header id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel" data-interval="5000">
    <ol id="caruselIndicator" class="carousel-indicators"> </ol>
    <div id="CaruselInner" class="carousel-inner"></div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<script  id="ImagesList" type="text/template">
    <%
    _.each(items,function(item,key,list){
    var cl=key?'':'active';
    %>
    <div class="item <%=cl%>">
        <div class="fill" style="background-image:url('<%=item.src%>');"></div>
        <div class="carousel-caption">
            <h2><%=item.name%></h2>
        </div>
    </div>
    <%
    });
    %>
</script>

<script type="text/javascript">
    var items = <?=file_get_contents('data/carusel.json');?>;
    var images = $("#ImagesList").html();
    $("#CaruselInner").html(_.template(images,{items:items}));
    var indicator= _.template('<li data-target="#myCarousel" data-slide-to="<%=i%>" class="<%=cl%>"></li>');
    var out='';
    for(var i= 0,n=items.length;i<n;i++)out+=indicator({i:i,cl:(i?'':'active')});
    $('#caruselIndicator').html(out);
</script>