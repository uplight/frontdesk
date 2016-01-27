<form id="requestDemo"  class="" >
    <style>
        #requestDemo{

            padding: 1em;
            background-color: white;
            box-shadow: 5px 5px 10px #999999;

        }
        #requestDemo h3{
            margin-top: 0;
        }
        #requestDemo .notvalid{
            border-color: red;
        }
        #requestDemo a.close{

        }
    </style>
   <!-- <a  href="#close" type="button" class="close" data-toggle="close">&times;</a>-->
    <h3>Request Demo</h3>
    <fieldset class="form-group">
        <label>First Name:</label>
        <input required="" name="FirstName" id="FirstName" type="text"  placeholder="First Name"  maxlength="20" aria-invalid="true" class="form-control"/>
    </fieldset>
    <fieldset class="form-group">
        <label>Last Name:</label>
        <input required="" name="LastName" id="LastName" type="text"  placeholder="Last Name"  maxlength="20" class="form-control"/>
    </fieldset>
    <fieldset class="form-group">
        <label for="InputEmail1">Email address</label>
        <input type="email"  class="form-control" id="InputEmail1" placeholder="Enter email">
        <small class="text-muted">We'll never share your email with anyone else.</small>
    </fieldset>
    <fieldset class="form-group">
        <label>Phone Number:</label>
            <input name="Phone" id="Phone" type="tel"  placeholder="Phone Number" data-invalid="" aria-invalid="true" class="form-control"/>
    </fieldset>
    <fieldset class="form-group">
        <label>Company Name: </label>
        <input required="" name="Company" id="Company" type="text" placeholder="Company Name"  maxlength="50" class="form-control" />
    </fieldset>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            I want demo with dummy data for introduction
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            I want input my data and run real kiosk
        </label>
    </div>
    <fieldset class="form-group">
        <label for="exampleTextarea">Message</label>
        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </fieldset>
<br/>
    <div class="text-center">
        <button id="SubmitRequestDemo" type="submit" class="btn btn-primary">Submit</button>
       <!-- <a href="#close"  class="close" class="btn">Close</a>-->
    </div>



</form>
<div id="RequestResult" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="RequestResult">&times;</button>
                <h4 class="modal-title"><span data-id="icon"></span> <span data-id="title">Thank you for your request</span></h4>
            </div>
            <div class="modal-body">
                <p>Our sales representative contact you soon </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close" data-dismiss="RequestResult">Close</button>
            </div>
        </div>

    </div>
</div>

<script>
    function requestDemo (){
    }
    $('#requestDemo').submit(function(evt){
        console.log(evt);
        var invalid=false;
        var data={};
        $('#requestDemo input').each(function( num ,el){
            if(!el.checkValidity()){
                el.classList.add('notvalid')
                setTimeout(function(){
                    el.classList.remove('notvalid');
                },5000);
                invalid=true
            }

        })

        evt.preventDefault();
         if(invalid) return false;
        $('#requestDemo button').prop('disabled',true);
        $.post('services/sendMessage.php',JSON.stringify(data)).done(function(s){
            console.log(s);
            $('#requestDemo').removeClass('open');
            $('#requestDemo button').prop('disabled',false);
            window.location.hash = '#thank-you';
            $('#RequestResult').fadeIn();
        })

        console.log(valid);

       return false;
    })
    $('#requestDemo .close').click(function(){
        $('#requestDemo').removeClass('open');
    })

    $('#RequestResult .close').click(function(){
        $('#RequestResult').fadeOut();
    })

    window.addEventListener("hashchange", function(){
        var h =window.location.hash;
        if(!h) return;
        if(h=='#request-demo') $('#requestDemo').addClass('open');
    });

   // $('#SubmitRequestDemo').click(function(evt){
    //    evt.preventDefault();
  //  });

</script>
