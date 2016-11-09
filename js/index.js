/* 
 * Initializa the home page elements
 * 
 */

var sliderp
var slidert

$(document).ready(function(){
        sliderp = $("#pitchSlider").bootstrapSlider({
        ticks: [1, 2, 3],
        ticks_labels: ['Low', 'Normal', 'High'],
        min : 1,
        max: 3
    });

        slidert = $("#timingSlider").bootstrapSlider({
        ticks: [1, 2, 3],
        ticks_labels: ['Long', 'Normal', 'Short'],
        min : 1,
        max: 3
    });
    //slider.bootstrapSlider('setValue', 1);

    slidert.on('change', function(){
        console.log(slidert.bootstrapSlider('getValue'));
    });

});
