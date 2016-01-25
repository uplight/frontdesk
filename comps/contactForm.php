<style>
    .controls>h3{
        display: inline;
        color: red;
    }
    .error.msg{
        color: red;
    }
</style>
<div class="row" id="Contact-Form">
        <div class="col-md-8">
            <h3 id="formtitle">
                <?php
                $topic ='Send us a Message';
                $ar= explode('/',$_SERVER['QUERY_STRING']);
                $title= $ar[0];
                if(count($title)>5) $topic = str_replace('-',' ',$title);
                echo $topic;
                ?>
            </h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <h3>*</h3>
                       <input type="text" class="form-control" id="name" />
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" />
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <h3>*</h3>
                        <input type="email" class="form-control" id="email" />
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" onclick="return false;" class="btn btn-primary">Send Message</button>
            </form>
        </div>
</div>
<script src="js/ContactForm.js"></script>
