@extends('layouts.master')
@section('content')
<section class="schedule">
	<h1 class="text-center">Schedule a Visit</h1>
	<form role="form">
	    <div id="owl-example" class="owl-carousel">
	        <div class="step1">
	            <h1>Step 1 / 4:</h1>
	            <h2>Please choose your place invadors</h2>
	            <div class="row">
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="termites">
	                    <label>Termites</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="cockroaches">
	                    <label>Cockroaches</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="bedbugs">
	                    <label>Bed Bugs</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="ants">
	                    <label>Ants</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="spiders">
	                    <label>Spiders</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="rodents">
	                    <label>Rodents</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="stingings">
	                    <label>Mosquitoes</label>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-xs-12">
	                    <input type="checkbox" value="unknown">
	                    <label>Other/unknown</label>
	                </div>
	            </div>
	        </div>

	        <div class="step2">
	            <h1>Step 2 / 4:</h1>
	            <h2>What do you want done?</h2>
	            <div class="row">
	                <div class="radio">
	                    <input type="radio" name="toBeDone" id="toBeDone1" value="Home">
	                    <label for="toBeDone1">Pest Control</label>
	                </div>
	                <div class="radio">
	                    <input type="radio" name="toBeDone" id="toBeDone1" value="Home">
	                    <label for="toBeDone1">Fumigation</label>
	                </div>
	                <div class="radio">
	                    <input type="radio" name="toBeDone" id="toBeDone1" value="Home">
	                    <label for="toBeDone1">What's recommended</label>
	                </div>
	            </div>
	        </div>

	        <div class="step3">
	            <h1>Step 3 / 4:</h1>
	            <h2>Your building type?</h2>
	            <div class="row">
	                <div class="radio">
	                    <input type="radio" name="buildingType" id="buildingType1" value="Home">
	                    <label for="buildingType1">Home</label>
	                </div>
	                <div class="radio">
	                    <input type="radio" name="buildingType" id="buildingType2" value="Business">
	                    <label for="buildingType2">Business</label>
	                </div>
	            </div>
	        </div>

	        <div class="step4">
	            <h1>Step 4 / 4:</h1>
	            <h2>Personal Info</h2>
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="form-group">
	                        <label for="full-name" class="control-label">Full Name</label>
	                        <input type="text" id="full-name" class="form-control input-lg" placeholder="Full Name">
	                    </div>
	                    <div class="form-group">
	                        <label for="phone-number" class="control-label">Phone</label>
	                        <input type="text" id="full-name" class="form-control input-lg" placeholder="ex: xxx xxx xxxx">
	                    </div>
	                </div>
	                <div class="col-lg-6">
	                    <div class="form-group">
	                        <label for="email" class="control-label">Email</label>
	                        <input type="email" id="email" class="form-control input-lg" placeholder="name@example.com">
	                    </div>
	                    <div class="form-group">
	                        <label for="geocomplete" class="control-label">Address</label>
	                        <input type="text" class="form-control input-lg" id="geocomplete" name="geocomplete" placeholder="Type in your address">
	                    </div>
	                </div>
	                <div class="col-lg-12">
	                    <div class="form-group hide">
	                        <label for="lat" class="col-sm-2 control-label">Latitude</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control input-lg" id="lat" name="lat" value="" disabled>
	                        </div>
	                    </div>
	                    <div class="form-group hide">
	                        <label for="lng" class="col-sm-2 control-label">Longitude</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control input-lg" id="lng" name="lng" value="" disabled>
	                        </div>
	                    </div>
	                    <div class="form-group hide">
	                        <label for="formatted_address">Formatted Address</label>
	                        <input type="text" class="form-control input-lg" id="formatted_address" name="formatted_address" value="" disabled>
	                    </div>
	                </div>
	                <div class="col-lg-6 col-lg-offset-6">
	                    <div class="form-group">
	                        <button type="button" class="btn btn-warning" id="find">Find me automatically</button>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group text-center">
	                <button type="submit" class="btn btn-lg btn-block btn-success">Submit Request</button>
	            </div>
	            <div class="map-canvas"></div>
	        </div>
	    </div>
	</form>
</section>

@stop