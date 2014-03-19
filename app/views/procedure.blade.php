@extends('layouts.master')
@section('content')
<div class="step0 text-center">
    <div class="logo animated bounceInDown">
        <img class="" src="images/alnaqaa-logo.png" style="height: 200px">
        <h1 class="company-name">
            <span style="color: #7FC41C;">AL</span>
            <span style="color: #415A0A;">NAQAA</span>
        </h1>
    </div>
    <h1 class="text-center animated rollIn">ALNAQAA Protection Procedure</h1>
    <div class="client-area-button">
        <p>Call us: 00971509399881</p>
        <button type="button" class="btn btn-lg btn-default">Client Area</button>
    </div>
</div>

<h1 class="text-center">Our pest-free procedure includes:</h1>
<section id="procedure">
    <div id="sync2" class="owl-carousel animated fadeInUp">
        <div class="item"><p>1. Inspection</p></div>
        <div class="item"><p>2. Suggestions</p></div>
        <div class="item"><p>3. Outdoor Treatment</p></div>
        <div class="item"><p>4. Indoor Treatment</p></div>
        <div class="item"><p>5. Scheduled follow-up</p></div>
    </div>
    <div id="sync1" class="owl-carousel animated fadeInDown">
        <div id="inspection" class="item">
            <h1>1. Inspection and Evaluation</h1>
            <p>Our Professionally trained technicians will perform a thorough inspection of your home/business, both inside and outside for pest problems and conditions conducive to pest harborage.</p>
        </div>
        <div id="suggestions" class="item">
            <h1 class="animated fadeInDown">2. Suggestions</h1>
            <p>Following the inspection, our technician will analyze the potential problems and make suggestions to you.</p>
        </div>
        <div id="outdoor" class="item">
            <h1>3. Outdoor Treatment</h1>
            <p>A thorough perimeter treatment will be performed to the exterior of your place. This will create a zone of protection against potential pest invasion.</p>
        </div>
        <div id="indoor" class="item">
            <h1>4. Indoor Treatment</h1>
            <p>We'll conduct an indoor strategic treatment with our safe products until resolve all of your concerns to your satisfaction.</p>
        </div>
        <div id="follow-up" class="item">
            <h1>5. Scheduled follow-up</h1>
            <p>By having your place inspected regularly we'll protect your facility from any potential infestation.</p>
        </div>
    </div>
</section>
<div id="next-steps">
    <div class="row hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
        <div class="col-lg-3 col-lg-offset-3 text-center">
            <i class="hi icon fa fa-bug fa-3x"></i>
            <p>Use our easy to use guide to: </p>
            <a href="identify-unknown-pest" class="btn btn-default btn-lg">Identify an Unknown Pest</a>
        </div>
        <div class="col-lg-3 text-center">
            <i class="hi icon fa fa-calendar fa-3x"></i>
            <p>Solve your pest problems by: </p>
            <a href="schedule" class="btn btn-default btn-lg">Schedule a Visit</a>
        </div>
    </div><!-- /.row -->
</div> <!-- /#next-steps -->
@stop