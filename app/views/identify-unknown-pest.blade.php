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
    <h1 class="text-center animated rollIn">Pest Guide</h1>
    <div class="client-area-button">
        <p>Call us: 00971509399881</p>
        <button type="button" class="btn btn-lg btn-default">Client Area</button>
    </div>
</div>

<div class="container-full">
    <section id="pests-guide" class="text-center">
        <h1>Easily identify any unknown pest to you</h1>
        <div id="pests">
            <div class="row">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Termites</h3>
                                <p><a href="#termites">Details</a></p>
                            </div>
                            <div class="ch-thumb bg-termite"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Cockroaches</h3>
                                <p><a href="#cockroaches">Details</a></p>
                            </div>
                            <div class="ch-thumb bg-cockroach"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Ants</h3>
                                <p></p>
                            </div>
                            <div class="ch-thumb bg-ant"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Bed bugs</h3>
                                <p></p>
                            </div>
                            <div class="ch-thumb bg-bedbug"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Rodents</h3>
                                <p></p>
                            </div>
                            <div class="ch-thumb bg-rodent"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Flies</h3>
                                <p></p>
                            </div>
                            <div class="ch-thumb bg-fly"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Spiders</h3>
                                <p></p>
                            </div>
                            <div class="ch-thumb bg-spider"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3>Wasps</h3>
                                <p></p>
                            </div>
                            <div class="ch-thumb bg-wasp"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        
    <div id="termites" class="hide">
        <div class="row text-left">
            <div class="col-lg-12">
                <a class="back-button" href="#pests"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
            </div>
            <div class="col-lg-8">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="../images/3d-bugs/termite.png" alt="...">
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading">Termites</h2>
                        <p>Termites cause an estimated $1 billion worth of property damage each year, infesting about one home in 50 nationwide. Termites do more damage than all fires, hurricanes and tornadoes combined. Termites work steadily, quietly and invisibly around the clock. -Worker termites are blind and never know when to quit. Many infest a home for years before their presence becomes known. Termites live long lives. Every termite colony has a queen which may live from 15 to 30 years, laying hundreds of eggs each day. Any number of colonies may infest a home.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   <div id="cockroaches" class="hide">
        <div class="row">
          <div class="col-lg-12 text-left">
            <a class="back-button" href="#pests"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
            <h2 class="text-center">COCKROACHES</h2>
          </div>
          <div class="col-lg-6 col-md-6 clickable">
            <h3>AMERICAN ROACH</h3>
            <img src="../images/3d-bugs/american-roach.png">
            <a class="details" href="#american-roach"></a>
          </div>
          <div class="col-lg-6 col-md-6 clickable">
            <h3>BROWN BANDED ROACH</h3>
            <a class="details" href="#brown-banded-roach"><img src="../images/3d-bugs/brown-banded-roach.png"></a>
          </div>
          <div class="col-lg-6 col-md-6 clickable">
            <h3>GERMAN ROACH</h3>
            <a class="details" href="#german-roach"><img src="../images/3d-bugs/german-roach.png"></a>
          </div>
          <div class="col-lg-6 col-md-6 clickable">
            <h3>ORIENTAL ROACH</h3>
            <a class="details" href="#oriental-roach"><img src="../images/3d-bugs/oriental-roach.png"></a>
          </div>
        </div>
      </div> -->

    <div id="cockroaches" class="hide">
        <div class="row">
            <div class="col-lg-12 text-left">
                <a class="back-button" href="#pests"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
                <h2 class="text-center">COCKROACHES</h2>
            </div>
            <hr>
            <ul class="ch-grid">
                <li>
                    <div class="clickable ch-item bg-american-roach">
                        <h3>American Roach</h3>
                        <div class="ch-info">
                            <a class="details" href="#american-roach">More about it</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="clickable ch-item bg-brown-banded-roach">
                        <h3>Brown Banded Roach</h3>
                        <div class="ch-info">
                            <a class="details" href="#brown-banded-roach">More about it</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="clickable ch-item bg-german-roach">
                        <h3>German Roach</h3>
                        <div class="ch-info">
                            <a class="details" href="#german-roach">More about it</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="clickable ch-item bg-oriental-roach">
                        <h3>Oriental Roach</h3>
                        <div class="ch-info">
                            <a class="details" href="#oriental-roach">More about it</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="american-roach" class="hide">
        <div class="row text-left">
            <div class="col-lg-12">
                <a class="back-button" href="#cockroaches"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
            </div>
            <div class="col-lg-8">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-responsive" src="../images/3d-bugs/american-roach.png" alt="American Roach">
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading">American Roach</h2>
                        <p>Usually between 1-11/2" long with red- brown wings, American cockroaches like to fly outside. They are scavengers with a special taste for warm damp places, water and alcoholic beverages. They like to eat decaying organic matter.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="brown-banded-roach" class="hide">
        <div class="row text-left">
            <div class="col-lg-12">
                <a class="back-button" href="#cockroaches"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
            </div>
            <div class="col-lg-8">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-responsive" src="../images/3d-bugs/brown-banded-roach.png" alt="Brown Branded Roach">
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading">Brown Branded Roach</h2>
                        <p>Brown banded roaches are brown with strips across their body, they can grow to a length of 1.25 inches as an adult and look similar to that of an American roach. However this roach does not have the yellow stripe around its pronotum like that of an American.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="german-roach" class="hide">
        <div class="row text-left">
            <div class="col-lg-12">
                <a class="back-button" href="#cockroaches"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
            </div>
            <div class="col-lg-8">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-responsive" src="../images/3d-bugs/german-roach.png" alt="German Roach">
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading">German Roach</h2>
                        <p>About the same size as brown-banded roaches, the German cockroaches have two brown stripes running the length of their wings. They love fermented foods and venture outside during the warmer months. Without control, one pair of German roaches can expand to more than 2 million in less than a year.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="oriental-roach" class="hide">
        <div class="row text-left">
            <div class="col-lg-12">
                <a class="back-button" href="#cockroaches"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a>
            </div>
            <div class="col-lg-8">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-responsive" src="../images/3d-bugs/oriental-roach.png" alt="Oriental Roach">
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading">Oriental Roach</h2>
                        <p>Dark brown and about one-inch long, Oriental cockroaches seek out warm damp areas indoors. They flourish in basements and storage areas where they can stay close to the ground. They eat decaying organic matter and prefer starches.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

<div id="next-steps">
    <div class="row hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
        <div class="col-lg-3 col-lg-offset-3 text-center">
            <i class="hi icon fa fa-briefcase fa-3x"></i>
            <p>Learn more about </p>
            <a href="procedure" class="btn btn-default btn-lg">Our Protection Procedure</a>
        </div>
        <div class="col-lg-3 text-center">
            <i class="hi icon fa fa-calendar fa-3x"></i>
            <p>Solve all of your pest problems now and: </p>
            <a href="schedule" class="btn btn-default btn-lg">Schedule a Visit</a>
        </div>
    </div><!-- /.row -->
</div> <!-- /#next-steps -->
@stop