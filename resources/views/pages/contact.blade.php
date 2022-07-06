@extends('layouts.default')

@section('content-items')
    <div class="contact-us">
        <div class="contact-container container text-white">
            <div class="contact-form">
                <div class="row">
                    <div class="col-sm-7">
                        @if(session('fail'))
                            <div class="alert alert-danger">
                                {{ session('fail') }}
                            </div>
                        @endif
                        <form id="ajax-contact" method="post" action="{{ route('sent') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="messages" id="form-messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Firstname *</label>
                                            <input id="form_name" type="text" name="firstname" class="form-control"
                                                placeholder="Firstname" required="required"
                                                data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Lastname *</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control"
                                                placeholder="Lastname" required="required"
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
                                                placeholder="Email" required="required"
                                                data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_phone">Phone*</label>
                                            <input id="form_phone" type="tel" name="phone" class="form-control"
                                                placeholder="Phone number" required
                                                oninvalid="setCustomValidity('Please enter your correct phone number ')"
                                                onchange="try{setCustomValidity('')}catch(e){}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea id="form_message" name="message" class="form-control"
                                                placeholder="What is your message?" rows="10" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <button type="submit" class="btn btn-black bg-warning">Send message</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="col-sm-5 text-white">
                        <div class="row col1">
                            <div class="col-xs-3">
                                <h5>
                                    <i class="fa fa-map-marker" style="font-size:16px;"></i>   Address
                                </h5>
                            </div>
                            <div class="col-xs-9">
                                Nowadays we have 5 branches which there are 3 located in Phnom Penh, 1 in Battambang, and another one in Poipet.
                            </div>
                        </div>
                        <br>
                        <h5>Business Development:</h5>
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-phone"></i>   Tel
                            </div>
                            <div class="col-sm-9">
                                : 093 771 000
                            </div>
                        </div>
        
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-envelope"></i>   Email
                            </div>
                            <div class="col-sm-9">
                                :<a href="mailto:sale@majorcineplex.com.kh"> sale@majorcineplex.com.kh</a> <br> 
                            </div>
                        </div>
                        <br>
                        <h5>Marketing:</h5>
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-phone"></i>   Tel
                            </div>
                            <div class="col-sm-9">
                                : 010 289 893
                            </div>
                        </div>
        
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-envelope"></i>   Email
                            </div>
                            <div class="col-sm-9">
                                :<a href="mailto:digital@majorcineplex.com.kh"> digital@majorcineplex.com.kh</a> <br> 
                            </div>
                        </div>
                        <br>
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=517&amp;height=464&amp;hl=en&amp;q=Major cineplex&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:517px;height:464px;}.gmap_canvas {overflow:hidden;background:none!important;width:517px;height:464px;}.gmap_iframe {width:517px!important;height:464px!important;}</style></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop