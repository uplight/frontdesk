/**
 * Created by VladHome on 5/16/2015.
 */
(function(){

    var makeBreadCrumb = function(){
       var el =  $('[data-id=breadcrumb]');
        if(el){
            var row = $('<div class="col-lg-12">');
           var h1 =  el.children('h1').addClass('page-header').appendTo(row);

            var ol =$('<ol class="breadcrumb">');
             el.children('a').each(function(index,item){
                 var a = $(item);
                 $('<li>').append(a).appendTo(ol);


             });

            $('<li>').text(h1.text()).appendTo(ol);
            row.append(ol);

            var h2 = el.children('h2').remove().text();
            var small =$('<small>').text('  '+h2).appendTo(h1)

            el.addClass('row').append(row);

        }

    }
    makeBreadCrumb();

    $('.panels-row').each(function(index,item){
        var row =$(item).addClass('row');


        row.children('h2').addClass('page-header');
        row.children('section').each(function(index,item){
            var item=$(item).remove();
            var h4 = item.children('h4');
            var col= $('<div class="col-md-3 col-sm-6">');
            var panel= $('<div class="panel panel-default text-center">');
            var head = $('<div class="panel-heading"><span class="fa-stack fa-5x"><i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-'+item.children('icon').text()+' fa-stack-1x fa-inverse"></i></span> </div>');
            var body = $('<div class="panel-body">').append(h4).append(item.children('div'));
            panel.append(head).append(body);
        //    console.log(item);
            row.append(col.append(panel));

        })


    });
    $('.imgs-c3m2s').each(function(index,row){
        var row = $(row);
        row.addClass('row');
        var h2 = row.children('h2');

        if(!h2.length) h2 = $('<h2>');
       $('<div class="col-lg-12">').append(h2).appendTo(row);

        row.find('img').addClass('img-responsive img-portfolio img-hover');

        row.children('a').each(function(index,item){
            item=$(item);
            $('<div class="col-md-4 col-sm-6">').append(item).appendTo(row);
        });
    });

    $('.image-text').addClass('row').each(function(index,item){
        item = $(item);
        var section = item.children('section').remove();
        var h4 = section.children('h4').text();
        var img = section.children('img');
        img.addClass('img-responsive').attr('alt',h4);
        var text = section.children('div');
        item.append('<div class="col-lg-12"><h2 class="page-header">'+h4+'</h2></div>');
        var first;
        var second;
        if(item.hasClass('text-first')){
            first = text;
            second = img;
        }else{
            first = img;
            second = text;
        }
        $('<div class="col-md-6">').append(first).appendTo(item);
        $('<div class="col-md-6">').append(second).appendTo(item);



    })
    $('.panels-flat').each(function(index,item){
        var row =$(item).addClass('row');
        row.children('section').each(function(index,item){
            var item=$(item).remove();
            var h4 = item.children('h4').text();
            var col= $('<div class="col-md-4">');
            var panel= $('<div class="panel panel-default">');
            var head = $('<div class="panel-heading"><h4><i class="fa  fa-fw fa-'+item.children('icon').text()+'"></i> '+h4+'</h4> </div>');
            var body = $('<div class="panel-body">').append(item.children('div'));
            panel.append(head).append(body);
            //    console.log(item);
            row.append(col.append(panel));

        })


    });

    //////////////////////////////////////////////////////
    $('.media-row').each(function(index,item){
        var row =$(item).addClass('row');
        var head = $('<div class="col-lg-12">').append(row.children('h2').addClass('page-header')).appendTo(row);

        var i=0;
        var col1=$('<div class="col-md-4">');
        var col2=$('<div class="col-md-4">');
        var col3=$('<div class="col-md-4">');
        var i=1;
        row.children('section').each(function(index,item){

            var item=$(item).remove();
            var h4=item.children('h4').addClass('media-heading');
            var media= $('<div class="media">');
            var head = $('<div class="pull-left"><span class="fa-stack fa-2x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-'+item.children('icon').text()+' fa-stack-1x fa-inverse"></i></span> </div>');
          //  h4 = $('<div class="media-heading">').text(h4);
            var body = $('<div class="media-body">').append(h4).append(item.children('div'));
            media.append(head).append(body);

            switch(i++){
                case 1:
                    col1.append(media);
                    break;
                case 2:
                    col2.append(media);
                    break;
                case 3:
                    col3.append(media);
                    break;

            }
            if(i>3) i=1;

            //    console.log(item);


        })
        row.append(col1);
        row.append(col2);
        row.append(col3);


    });



    $('.tabs-row').each(function(index,item){
        var row =$(item);
        var head = $('<div class="col-lg-12">').append(row.children('h2').addClass('page-header')).appendTo(row);

        var tabs = $('<div class="col-lg-12">');
        var tabsBody =$('<div class="tab-content">');
        var ui ='<ul class="nav nav-tabs nav-justified">';


        row.children('section').each(function(index,item){

            var item=$(item).remove();
            var h4=item.children('h4') ;
            var text = item.children('div') ;
            var icon = item.children('icon');
            ui+='<li><a href="#'+h4.text().replace(/ /g,'')+'" data-toggle="tab"><i class="fa fa-'+icon.text()+'"></i> '+h4.text()+'</a></li>';
            var body=$('<div class="tab-pane fade" id="'+h4.text().replace(/ /g,'')+'">').append(item.children('div'));
            tabsBody.append(body);
        })
        tabs.append(ui+'</ui>');
        tabs.append(tabsBody);
        row.append(tabs);

    });



$('[data-tmpl=item-project]').each(function(key,el){
        el=$(el);
    var title= $('<h3>').text(el.children('h4').remove().text());
    var img = el.children('img');
    var href= el.children('a');
    var href2= href.clone().text('');
    var text = el.children('div');
    var col = $('<div class="col-md-7">').append(href2.append(img)).appendTo(el);

    href.addClass('btn btn-primary');
     col =$('<div class="col-md-5">').append(title).append(text).append(href).appendTo(el);

    img.addClass('img-responsive img-hover');
    el.addClass('row');
    el.prepend('<br/>');
    el.append('<br/>');
  $('<hr/>').insertAfter(el);

  //  console.log(el);
});

})();