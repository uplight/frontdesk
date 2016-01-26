<div  class="media3 row">
    <style>
        .media3 .description{
            height: 70px;
            overflow: hidden;
        }

        .media3 .media{
            margin-bottom: 1em;
        }

    </style>
    <?php $i=0; foreach($media3 as $topic) {
        $id=$topic->url?(string)$topic->url:'media'.$i;
        $title= (string)$topic->title;
        $icon = (string)$topic->icon;
        ?>
       <!-- <div class="<?/*=($i%3);*/?>">-->
            <div class="col-md-4">
                <div id="<?=$id?>" class="media" data-icon="<?=$icon;?>" data-title="<?=$title;?>">
                    <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                  <i class="fa fa-circle fa-stack-2x brand-text"></i>
                                <a title="<?=$title;?>" href="#media/<?=$id?>"> <i class="<?=$icon;?> fa-stack-1x fa-inverse"></i></a>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 title="<?=$title;?>" class="media-heading"><?=substr($title,0,30);?></h4>
                        <div  class="description nano">
                        <p class="nano-content"> <?=(string)$topic->description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
       <!-- </div>-->
    <? $i++; } ?>
</div>

    <div id="myMedia3" class="modal" role="dialog"  data-dismiss="myMedia3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="myMedia3">&times;</button>
                    <h4 class="modal-title"><span data-id="icon"></span> <span data-id="title">Modal Header</span></h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="myMedia3">Close</button>
                </div>
            </div>

        </div>
    </div>
<script>

    $('#myMedia3').click(function(evt){
        if(evt.target.getAttribute('data-dismiss')=='myMedia3'){
            $('#myMedia3').fadeOut();
            window.location.href = '#all';
        }
    });

    var  doThisWhenTheHashChanges = function(evt){
        var hr = window.location.hash;
        if(!hr) return;
        var ar = hr.split('/');
        if(ar[0]=='#media'){
            var id='#'+ar[1];

            var title = $(id).data('title');
            var icon = $(id).data('icon');
            var text  = $(id+' .description').html();

            $('#myMedia3 [data-id=title]').text(title);
            $('#myMedia3 .modal-body').html(text);
            $('#myMedia3 [data-id=icon]').attr('class',icon);
            $('#myMedia3').fadeIn();
        }

    }

    window.addEventListener("hashchange", doThisWhenTheHashChanges, false);
</script>
