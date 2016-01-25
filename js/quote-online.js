/**
 * Created by VladHome on 5/18/2015.
 */
(function(){
var quote=$('#quote-online').addClass('row');
var options = quote.children('div').remove();
    var col1 = $('<div class="col-sm-6">');
    var col2 = $('<div class="col-sm-6">');

    var renderChebox  = function(a){
       // $('<li class="list-group-item">').text(a.text());
        var html = '<li class="list-group-item"><span class="state-icon glyphicon glyphicon-unchecked"></span>'+a.text()+'<input type="checkbox" class="hidden"></li>';
            return  html;//$('<li class="list-group-item">').text(a.text());;

    }

    var renderList  = function(ul){

        var list =$('<ul class="list-group checked-list-box">');
        list.on('click','li', function (evt) {
            var li = $(evt.currentTarget);
            if(li.hasClass('active')){
                li.removeClass('active');
                li.children('span').removeClass('glyphicon-check');
                li.children('span').addClass('glyphicon-unchecked');
            }else{
                li.addClass('active');
                li.children('span').addClass('glyphicon-check');
                li.children('span').removeClass('glyphicon-unchecked');
            }
            var ch = li.children('input');

           // if(ch.prop('checked'))

           // $checkbox.prop('checked', !$checkbox.is(':checked'));
            //$checkbox.triggerHandler('change');
            //updateDisplay();
        });
        ul.children().each(function(index,item){ list.append(renderChebox($(item)))})
        var well = $('<div class="well">').append(list);
        return well;

    }

    var formatQuote = function(index,section){
           var ul = section.children('ul');
       var h4 =  section.find('h4').addClass('text-center');
        if(index%2){
            col2.append(h4).append(renderList(ul));
        }else  col1.append(h4).append(renderList(ul));

    }


    options.find('section').each(function(index,item){ formatQuote(index,$(item))})
    quote.append(col1).append(col2);
   // $widget.on('click', function () {
      //  $checkbox.prop('checked', !$checkbox.is(':checked'));
       // $checkbox.triggerHandler('change');
       // updateDisplay();
    //});
   // $checkbox.on('change', function () {
     //   updateDisplay();
   /// });


})();