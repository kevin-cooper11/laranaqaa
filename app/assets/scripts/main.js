;(function($, window, undefined){ "use strict";

    var emptyFn = function() {};

    var defaults = {
        event: 'click',       //event on the selected elements to trigger geolocation
        preventDefault: true, //prevent default action of the event
        onSuccess: emptyFn,   //success callback (receives error object as argument)
        onError: emptyFn,     //error callback (receives geoposition object as argument)
        onStart: emptyFn,     //action to perform prior to attempting geocoding
        onFinish: emptyFn,    //action to perform after geocoding attempt (success or failure)
        timeout: Infinity,    //timeout of geolocation (in milliseconds)
        highAccuracy: false,  //enable higher accuracy geolocation (slower response)
        maxAge: 0             //max age of a position to live in cache (in milliseconds)
    };

    var noGeo = { code: 0, message: 'Geolocation not supported' };

    $.fn.geolocate = function(opts) {

        var options = $.extend(defaults, opts || {});


        return this.each(function() {
            var $this = this;

            var successCallback = function(p) {
                options.onSuccess.call($this, p);
                options.onFinish.call($this);
            }

            var errorCallback = function(e) {
                options.onError.call($this, e);
                options.onFinish.call($this);
            }

            if (!navigator.geolocation) { errorCallback(noGeo); return; }

            $(this).on(options.event, function(e) {
                options.onStart.call($this);
                if (options.preventDefault) e.preventDefault();
                navigator.geolocation.getCurrentPosition(
                    successCallback,
                    errorCallback,
                    {
                        enableHighAccuracy: options.highAccuracy,
                        timeout: options.timeout,
                        maximumAge: options.maxAge
                    }
                );
            });
        });
    };
})(jQuery, window);

$(document).ready(function() {
    //   $.fn.wizard.logging = true;
    //   var wizard = $('#some-wizard').wizard({
    //     contentWidth : 900,
    //     showCancel: true,
    //     progressBarCurrent: true
    //   });

    //   wizard.on('closed', function() {
    //     wizard.reset();
    //   });

    //   wizard.on("reset", function() {
    //     wizard.modal.find(':input').val('').removeAttr('disabled');
    //     wizard.modal.find('.form-group').removeClass('has-error').removeClass('has-succes');
    //     wizard.modal.find('#fqdn').data('is-valid', 0).data('lookup', 0);
    //   });

    //   wizard.on("submit", function(wizard) {
    //     var submit = {
    //       "hostname": $("#new-server-fqdn").val()
    //     };

    //     this.log('seralize()');
    //     this.log(this.serialize());
    //     this.log('serializeArray()');
    //     this.log(this.serializeArray());

    //     setTimeout(function() {
    //       wizard.trigger("success");
    //       wizard.hideButtons();
    //       wizard._submitting = false;
    //       wizard.showSubmitCard("success");
    //       wizard.updateProgressBar(0);
    //     }, 2000);
    //   });

    // wizard.el.find(".wizard-success .im-done").click(function() {
    //     wizard.hide();
    //     setTimeout(function() {
    //       wizard.reset();
    //     }, 250);

    //   });

    //   wizard.el.find(".wizard-success .create-another-server").click(function() {
    //     wizard.reset();
    //   });

    //   $(".wizard-group-list").click(function() {
    //     alert("Disabled for demo.");
    //   });

    //   $('#open-wizard').click(function(e) {
    //     e.preventDefault();
    //     wizard.show();
    //   });


    $('input').each(function(){
        var self = $(this),
            label = self.next(),
            label_text = label.text();
            icon_name = self.val();

        label.remove();
        self.iCheck({
            checkboxClass: 'icheckbox_line-grey',
            radioClass: 'iradio_line-grey',
            insert: '<div class="icheck_line-icon"></div>' + label_text + '<i class="pest-icon pest-icon-' + icon_name + ' pull-right"></i>'
        });
    });

    /* Footer Social buttons */
    $('.social').hover(
        function() {
            $(this).find('.shutter').stop(true, true).animate({
                    bottom: '-36px'
                },
                {
                    duration: 300,
                    easing: 'easeOutBounce'
                });
        },
        function () {
            $(this).find('.shutter').stop(true, true).animate({
                    bottom: 0
                },
                {
                    duration: 300,
                    easing: 'easeOutBounce'
                });
        });

    /* jquery Geolocation */
    var $button = $('#find');
    var $output = $('#output');

    var startCB = function() {
        $output.addClass('hide');
        $button
            .addClass('working')
            .attr('disabled', 'disabled');
    }

    var finishCB = function() {
        $button
            .removeClass('working')
            .removeAttr('disabled');
    }

    var errorCB = function(error) {
        alert( 'Error ' + error.code + ':' + error.message );
    }

    var successCB = function(p) {
        $("#geocomplete").geocomplete("find", p.coords.latitude + "," + p.coords.longitude);
        $("#geocomplete").bind("geocode:dragged", function(event, latLng){
            console.log(latLng);
            $("input[name=lat]").val(latLng.lat()).parent().removeClass('hide');
            $("input[name=lng]").val(latLng.lng()).parent().removeClass('hide');
            // $("#geocomplete").geocomplete("find", latLng.lat() + "," + latLng.lng());
        });
    }

    $button.geolocate({
        onStart: startCB,
        onFinish: finishCB,
        onError: errorCB,
        onSuccess: successCB,
        timeout: 5000
    });

    /* GeoComplete */

    $("#geocomplete").geocomplete({
        details: "form",
        map: ".map-canvas",
        markerOptions: {
            draggable: true
        },
        mapOptions: {
            zoom: 14
        }
    });

    $("#geocomplete").bind("geocode:dragged", function(event, latLng){
        console.log(latLng);
        $("input[name=lat]").val(latLng.lat()).parent().removeClass('hide');
        $("input[name=lng]").val(latLng.lng()).parent().removeClass('hide');
        $("#reset").show();
        // $("#geocomplete").geocomplete("find", latLng.lat() + "," + latLng.lng());
    });

    $("#reset").click(function(){
        $("#geocomplete").geocomplete("resetMarker");
        $("#reset").hide();
        return false;
    });

    $("#create-map").click(function(){
        $("#geocomplete").trigger("geocode");
    }).click();

    $('.carousel').carousel({
        interval: 2000,
        wrap: false
    })

    // $("html").niceScroll();

    $('#main-menu').smartmenus();

    $('#menu-button').click(function() {
        var $this = $(this),
            $menu = $('#main-menu');
        if (!$this.hasClass('collapsed')) {
            $menu.addClass('collapsed');
            $this.addClass('collapsed active');
        } else {
            $menu.removeClass('collapsed ');
            $this.removeClass('collapsed active');
        }
        return false;
    }).click();

    // $('body').flowtype({
    //   minimum   : 500,
    //   maximum   : 1500,
    //   minFont   : 12,
    //   maxFont   : 40,
    //   fontRatio : 30,
    //   lineRatio : 1.45
    // });


    /* owl carousel */
    $("#owl-example").owlCarousel({
        // Most important owl features
        itemsCustom : false,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : true,
        itemsScaleUp : false,

        slideSpeed : 800,
        autoHeight : true,


        // Navigation
        navigation : true,
        navigationText : ["Back","Next"],
        rewindNav : false,
        scrollPerPage : false,

        //Pagination
        pagination : false,
        paginationNumbers: false,

        // Responsive
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,


        //Mouse Events
        dragBeforeAnimFinish : true,
        mouseDrag : true,
        touchDrag : true,
    });

    //get carousel instance data and store it in variable owl
    var owl = $("#owl-example").data('owlCarousel');

    $('.step0 a').on('click', function(){
        owl.next();
    })

    $("#owl-example .owl-controls").appendTo('.owl-item [class*="step"]');
    $("#owl-example .owl-item .step1 .owl-prev").remove();
    $("#owl-example .owl-item .step4 .owl-next").remove();
    /* /owl carousel */

    $('#services .inside').hover(function(){
        $(this).find('i').trigger('hover');
    });

    $('.inside').on('mousenter mouseleave', function(e) {
        $(this).find('i').trigger('hover');
    });

    /* waypoints */
    $.fn.waypoint.defaults = {
        context: window,
        continuous: true,
        enabled: true,
        horizontal: false,
        offset: '80%',
        triggerOnce: false
    }
    $('#what-pests ul > li').waypoint(function(direction) {
        $(this).addClass('animated fadeIn');
    });
    $('#whyus .row > div, #next-steps .row > div').addClass('invisible');
    $('#whyus .rightSide').waypoint(function(direction) {
        $(this).removeClass('invisible').addClass('animated slideInRight');
    });
    $('#whyus .leftSide').waypoint(function(direction) {
        $(this).removeClass('invisible').addClass('animated slideInLeft');
    });
    $('#next-steps .row > div').waypoint(function(direction) {
        $(this).removeClass('invisible').addClass('animated bounceIn');
    });
    /* /waypoints */

    /* pests-guide */
    // /getting forward to second step
    $('#pests li a').click(function(e){
        e.preventDefault();
        $('#pests').removeClass().addClass('animated fadeOutLeftBig');
        var elementToShow = $(this).attr('href');
        setTimeout(function(){
            $('#pests').addClass('hide');
            $(elementToShow).removeClass().addClass('animated fadeInRightBig');
        }, 400);
    });

    // Moving forward to third step
    $('a.details').click(function(e){
        e.preventDefault();
        var parent = $(this).parents().eq(5);
        $(parent).removeClass().addClass('animated fadeOutLeftBig');
        var elementToShow = $(this).attr('href');
        setTimeout(function(){
            $(parent).addClass('hide');
            $(elementToShow).removeClass().addClass('animated fadeInRightBig');
        }, 400);
    });

    // Getting back to previous step
    $('.back-button').click(function(e){
        e.preventDefault();
        var parent = $(this).parents().eq(2);
        $(parent).removeClass().addClass('animated fadeOutRightBig');
        var backToElement = $(this).attr('href');
        setTimeout(function(){
            $(parent).addClass('hide');
            $(backToElement).removeClass().addClass('animated fadeInLeftBig');
        }, 400);
    });
    /* /pests-guide */

    /* procedure carousel */
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");

    sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
    });

    sync2.owlCarousel({
        items : 5,
        itemsDesktop      : [1199,10],
        itemsDesktopSmall     : [979,10],
        itemsTablet       : [768,8],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        autoHeight: true,
        afterInit : function(el){
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });

    function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
            .find(".owl-item")
            .removeClass("synced")
            .eq(current)
            .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
            center(current)
        }
    }

    $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
    });

    function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
            if(num === sync2visible[i]){
                var found = true;
            }
        }

        if(found===false){
            if(num>sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", num - sync2visible.length+2)
            }else{
                if(num - 1 === -1){
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if(num === sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
            sync2.trigger("owl.goTo", num-1)
        }

    }

    $('#procedure .owl-controls').appendTo('#procedure #sync1 .owl-item > div');
    $("#procedure #inspection .owl-prev").remove();
    $("#procedure #follow-up .owl-next").remove();

    $("#owl-example .owl-prev, #sync1 .owl-prev").append(' <i class="fa fa-arrow-circle-left"></i>');
    $("#owl-example .owl-next, #sync1 .owl-next").append(' <i class="fa fa-arrow-circle-right "></i>');

    $(".clickable").click(function(){
        $(this).find("a").click();
        return false;
    });

    /* /procedure carousel */

});
