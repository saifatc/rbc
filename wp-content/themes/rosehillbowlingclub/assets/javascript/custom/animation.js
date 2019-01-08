//(function (jQuery) {

// jQuery(document).ready(function(){
jQuery(window).on('load', function () {

  var ctrl = new ScrollMagic.Controller({
    globalSceneOptions: {
      reverse: false //removes the replaying of animations
    }
  });

  jQuery(".container section").each(function () {
    var name = jQuery(this).attr('class');
    new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.95,
      duration: 0
    })
            /* used for testing scenes */
            /*.addIndicators({
             colorStart: "rgba(0,255,0,0.5)",
             colorEnd: "rgba(0,255,0,0.5)",
             colorTrigger: "rgba(0,255,0,1)",
             name: name
             })*/
//            .removeClassToggle(false)
            .setClassToggle(this, "is-active")
            /*.loglevel(3)*/
            .addTo(ctrl);

  });
  jQuery(".entry-title").each(function () {
    var name = jQuery(this).attr('class');
    new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.95,
      duration: 0
    })
            /* used for testing scenes */
            /*.addIndicators({
             colorStart: "rgba(0,255,0,0.5)",
             colorEnd: "rgba(0,255,0,0.5)",
             colorTrigger: "rgba(0,255,0,1)",
             name: name
             })*/
//            .removeClassToggle(false)
            .setClassToggle(this, "is-active")
            /*.loglevel(3)*/
            .addTo(ctrl);

  });
  jQuery(".entry-content").each(function () {
    var name = jQuery(this).attr('class');
    new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.95,
      duration: 0
    })
            /* used for testing scenes */
            /*.addIndicators({
             colorStart: "rgba(0,255,0,0.5)",
             colorEnd: "rgba(0,255,0,0.5)",
             colorTrigger: "rgba(0,255,0,1)",
             name: name
             })*/
//            .removeClassToggle(false)
            .setClassToggle(this, "is-active")
            /*.loglevel(3)*/
            .addTo(ctrl);

  });


  jQuery(".container section").each(function () {
    var name = jQuery(this).attr('class');
    new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.5,
      duration: 0
    })
            /* used for testing scenes */
            /*.addIndicators({
             colorStart: "rgba(255,0,0,0.5)",
             colorEnd: "rgba(255,0,0,0.5)",
             colorTrigger: "rgba(255,0,0,1)",
             name: name
             })*/
            .removeClassToggle(false)
            .setClassToggle(this, "is-active-2")
            /*.loglevel(3)*/
            .addTo(ctrl);
  });

});

//})(jQuery);