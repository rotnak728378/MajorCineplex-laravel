@extends('layouts.default')

@section('content-items')
    <div class="contact-us">
        <div class="contact-container container text-white">
            <div class="contact-form">
                <div class="row">
                    <div class="col-sm-7">
                        <form id="ajax-contact" method="post" action="contact-form-mail.php" role="form">
                            <div class="messages" id="form-messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Firstname *</label>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Please enter your firstname *" required="required"
                                                data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Lastname *</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control"
                                                placeholder="Please enter your lastname *" required="required"
                                                data-error="Lastname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="Please enter your email *" required="required"
                                                data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_phone">Phone*</label>
                                            <input id="form_phone" type="tel" name="phone" class="form-control"
                                                placeholder="Please enter your phone*" required
                                                oninvalid="setCustomValidity('Plz enter your correct phone number ')"
                                                onchange="try{setCustomValidity('')}catch(e){}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea id="form_message" name="message" class="form-control"
                                                placeholder="Message for me *" rows="4" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="submit" class="btn btn-black bg-warning" value="Send message">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <small class="text-muted"><strong>*</strong> These fields are required.</small>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="col-sm-5 text-white">
                        <div class="row col1">
                            <div class="col-xs-3">
                                <i class="fa fa-map-marker" style="font-size:16px;"></i>   Address
                            </div>
                            <div class="col-xs-9">
                                អាគារលេខ ៨, សង្កាត់បឹងកក់១ St 315, Phnom Penh
                            </div>
                        </div>

                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-phone"></i>   Phone
                            </div>
                            <div class="col-sm-9">
                                +855 061 481 979
                            </div>
                        </div>
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-fax"></i>   Fax
                            </div>
                            <div class="col-sm-9">
                                061 481 567
                            </div>
                        </div>
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-envelope"></i>   Email
                            </div>
                            <div class="col-sm-9">
                                <a href="mailto:info@yourdomain.com">paragoniu.edu.kh/</a> <br> <a
                                    href="mailto:support@yourdomain.com">support@paragoniu.edu.kh/</a>
                            </div>
                        </div><br>
                        <iframe width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.573419426917!2d104.89579291494583!3d11.582407946965814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2sParagon%20International%20University!5e0!3m2!1sen!2skh!4v1649727868924!5m2!1sen!2skh"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" style="border-radius:20px;"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop