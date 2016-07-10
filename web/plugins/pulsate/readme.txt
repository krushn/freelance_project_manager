jQuery.pulsate.js adds a pulsating effect to elements. Useful for drawing the users attention.

http://jquerypulsate.kilianvalkhof.com


$(element).pulsate({
  color: $(this).css("background-color"), // set the color of the pulse
  reach: 20,                              // how far the pulse goes in px
  speed: 1000,          // how long one pulse takes in ms
  pause: 0,             // how long the pause between pulses is in ms
  glow: true,           // if the glow should be shown too
  repeat: true,         // will repeat forever if true, if given a number will repeat for that many times
  onHover: false        // if true only pulsate if user hovers over the element
});
