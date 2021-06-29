	class Slider {
		  constructor (rangeElement, valueElement, options) {
		    this.rangeElement = rangeElement
		    this.valueElement = valueElement
		    this.options = options

		    // Attach a listener to "change" event
		    this.rangeElement.addEventListener('input', this.updateSlider.bind(this))
		  }

		  // Initialize the slider
		  init() {
		    this.rangeElement.setAttribute('min', options.min)
		    this.rangeElement.setAttribute('max', options.max)
		    this.rangeElement.value = options.cur

		    this.updateSlider()
		  }

		  // Format the money
		  asMoney(value) {
		    return '<i class="fa fa-money"></i>' + parseFloat(value)
		      .toLocaleString('en-US', { maximumFractionDigits: 2 })
		  }

		  generateBackground(rangeElement) {   
		    if (this.rangeElement.value === this.options.min) {
		      return
		    }

		    let percentage =  (this.rangeElement.value - this.options.min) / (this.options.max - this.options.min) * 100
		    return 'background: linear-gradient(to right, #50299c, #7a00ff ' + percentage + '%, #d3edff ' + percentage + '%, #dee1e2 100%)'
		  }

		  updateSlider (newValue) {
		    this.valueElement.innerHTML = this.asMoney(this.rangeElement.value)
		    this.rangeElement.style = this.generateBackground(this.rangeElement.value)
		  }
		}

// Listener tasks
	var frum=[];

	let rangeElement = document.querySelector('.range [type="range"]')
	let valueElement = document.querySelector('.range .range__value span') 

	let options = {
	  min: 1,
	  max: 10,
	  cur: 2
	}

	if (rangeElement) {
	  let slider = new Slider(rangeElement, valueElement, options)
	  slider.init()
	}


$(function() {

	$("#limiter").change(function() {
		$("#bm1").html($(this).val());
		$('input[type=checkbox]').each(function () {
	    	$(this).prop("checked",false);
		});		
    	frum=[];
	});

	$('input[id^="fruit"]').on('click', function() {

	var limit = $("#limiter").val();
	    if ( $(this).is(':checked') ) {
		    	frum.push($(this).attr("id"));
		    	if (frum.length>limit) {
		    	$('#'+frum[0]).prop("checked",false);
				frum.shift();
			}
	    };

	});

	
});

