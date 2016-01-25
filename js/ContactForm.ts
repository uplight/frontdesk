/**
 * Created by VladHome on 5/28/2015.
 */
    ///<reference path='typings/jquery.d.ts' />
    var CLICK = CLICK || 'click';
module uplignt{
    class ContactForm{
        private  view:JQuery
        private btn:JQuery
        private inName:JQuery
        private inEmail:JQuery
        private nameValid;
        private emailValid;

        constructor(private id:string){
            this.view = $(id);
            this.btn = this.view.find('[type=submit]').on(CLICK,(evt)=>this.onSubmit(evt))
            this.inName =$('#name').on('input',()=>this.onName());
            this.inEmail =$('#email').on('input',()=>this.onEmail());

        }
        private onName():void{
           var  val = this.inName.val();
            if(val.length<2) val='1';
            var re =/^[A-Za-z ]+$/;
            var h=this.inName.parent().children('h3');
            if(re.test(val)){
               this.nameValid = true;
                h.fadeOut();
            }else{
                this.nameValid = false;
                h.fadeIn();
            }



        }
        private onEmail():void{
            var  val = this.inEmail.val();
            var h=this.inEmail.parent().children('h3');
            if(this.validateEmail(val)){
                this.emailValid =true;
                h.fadeOut();
            }
            else{
                this.emailValid =false;
                h.fadeIn();
            }
        }

        private  validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
        }
        private createAlert(msg,cl){
          //  var par = this.btn.parent();

           var div =$('<div>').addClass(cl).html(msg).insertBefore(this.btn);

            setTimeout(function(){
                div.remove();
            },4000);
        }

        private onSubmit(evt:JQueryEventObject):void{

            if(!this.emailValid){
                this.createAlert('Sorry, Email is invalid','error msg');
                return;
            }
            if(!this.nameValid){
                this.createAlert('Sorry, Name is invalid','error msg');
                return;
            }
            var data:any={};
            data.title=$.trim($('#formtitle').text());
            data.formid=this.id;
            data.url= window.location.href;
            this.view.find('.form-control').each(function(num,el:HTMLInputElement){ data[el.getAttribute('id')] = $(el).val(); })
           // data.formsid= this.view.find('input')

           // data.text= this.view.find('textarea').val();

           // console.log(data);
          $.post('sendMessage.php',JSON.stringify(data)).done((res)=>this.onSendSuccess(res)).fail(()=>this.onFail())
        }

        private onSendSuccess(res):void{
            if(res=='success'){
                    this.createAlert('Thank you for sending us message we will contact you soon','success msg');
            }else  this.createAlert('Error','error msg');
        }
        private onFail():void{
            this.createAlert('Fail','error msg');
        }
    }

    var form:ContactForm = new ContactForm('#Contact-Form');
}