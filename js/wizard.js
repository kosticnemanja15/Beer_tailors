$ = jQuery.noConflict();
$(document).ready(function() {

	/* Created by jankoatwarpspeed.com */

	(function($) {
		$.fn.formToWizard = function(options) {
			options = $.extend({
				submitButton: ""
			}, options);

			var element = this;

			var steps = $(element).find("fieldset");
			var count = steps.length;
			var submmitButtonName = "#" + options.submitButton;
			$(submmitButtonName).hide();

			// 2
			$(element).before("<ul id='steps'></ul>");

			steps.each(function(i) {
				$(this).wrap("<div id='step" + i + "'></div>");
				$(this).append("<p id='step" + i + "commands'></p>");

				// 2
				var name = $(this).find("legend").html();
				$("#steps").append("<li id='stepDesc" + i + "'>Step " + (i + 1) + "<span>" + name + "</span></li>");

				if (i == 0) {
					createNextButton(i);
					selectStep(i);
				}
				else if (i == count - 1) {
					$("#step" + i).hide();
					createPrevButton(i);
				}
				else {
					$("#step" + i).hide();
					createPrevButton(i);
					createNextButton(i);
				}
			});

			function createPrevButton(i) {
				var stepName = "step" + i;
				$("#" + stepName + "commands").append("<a href='#steps' id='" + stepName + "Prev' class='prev'> << Back </a>");

				$("#" + stepName + "Prev").bind("click", function(e) {
					$("#" + stepName).hide();
					$("#step" + (i - 1)).show();
					$(submmitButtonName).hide();
					selectStep(i - 1);
					return false;
				});
			}

			function createNextButton(i) {
				var stepName = "step" + i;
				$("#" + stepName + "commands").append("<a href='#steps' id='" + stepName + "Next' class='next'>Next>></a>");

				$("#" + stepName + "Next").bind("click", function(e) {
					if (!af_wizard.checkBeerSelection()) {
						return false;
					}
					$("#" + stepName).hide();
					$("#step" + (i + 1)).show();
					if (i + 2 === count)
						$(submmitButtonName).show();
					selectStep(i + 1);
					return false;
				});
			}

			function selectStep(i) {
				$("#steps li").removeClass("current");
				$("#stepDesc" + i).addClass("current");
			}

		}
	})(jQuery);

	$("#SignupForm").formToWizard({submitButton: 'SaveAccount'})

});

var af_wizard = (function($) {

	/**
	 * Wizard products
	 * array of objects with properties
	 * @type {Array.<{beer_styles, alcohol_strength, alcohol_strength_rcm, bitterness, bitterness_rcm, additions, help_id}>}
	 */
	var products = [];

	/**
	 * @type {Array.<{name, image}>}
	 */
	var bottles = [];

	/**
	 * @type {Array.<{name, image, desc1, desc2}>}
	 */
	var labels = [];

	return {

		/**
		 * Initialize the wizard
		 *
		 * @param p
		 * @param b
		 * @param l
		 */
		init: function(p, b, l) {

			var i, first, $el;

			products = p;
			bottles = b;
			labels = l;

			// Products

			first = false;
			for (i = 0; i < products.length; i++) {

				addOption('.beer-style', products[i].beer_styles);

				if (!first) {
					first = products[i].beer_styles;
				}
			}

			$el = $('.beer-style select');
			$el.on('change', function() {
				changeBeerStyle($(this).val());
			});

			// select first option
			//$el.val(first).trigger('change');

			// hide elements when first product is not selected
			$('.additions').hide();
			$('#need-help1').hide();

			// Bottles

			first = false;
			for (i = 0; i < bottles.length; i++) {
				addOption('#bottle', bottles[i].name);

				if (!first) {
					first = bottles[i].name;
				}
			}

			$el = $('#bottle select');
			$el.on('change', function() {
				changeBottle($(this).val());
			});

			// select first option
			$el.val(first).trigger('change');


			// Labels

			first = false;
			for (i = 0; i < labels.length; i++) {
				addOption('#label', labels[i].name);

				if (!first) {
					first = labels[i].name;
				}
			}

			$el = $('#label select');
			$el.on('change', function() {
				changeLabel($(this).val());
			});

			// select first option
			$el.val(first).trigger('change');


			// misc events

			$('#other-addition').on('click', function() {
				tickOther();
			});

			$('#SaveAccount').on('click', function() {
				submit();
			});

		},

		/**
		 * Check if beer style is selected
		 * @return {boolean}
		 */
		checkBeerSelection : function() {

			if ($('.beer-style select').val() === null) {
				alert('Please choose your beer style');
				return false;
			}

			var $cb = $('#additions-list input[type=checkbox][value="Other"]');

			if ($cb.prop('checked') && $.trim($('#other-addition').val()) === '') {
				alert('Please type your other additions');
				return false;
			}

			return true;
		}
	};
	
	/**
	 * Add select option
	 *
	 * @param selector
	 * @param option
	 * @param text
	 */
	function addOption(selector, option, text) {

		if (typeof text === 'undefined') {
			text = option;
		}

		$(selector + ' select').append($('<option>', {
			value: option,
			text: text
		}));
	}

	/**
	 * Find and return object matching key/value from array of objects
	 * @param {string} key
	 * @param {*} value
	 * @param {array} arr
	 * @return {object|boolean}
	 */
	function find(key, value, arr) {

		for (var i = 0; i < arr.length; i++) {

			if (arr[i][key] === value) {
				return arr[i];
			}
		}

		return false;
	}

	/**
	 * Change beer style
	 *
	 * @param option
	 */
	function changeBeerStyle(option) {

		/**
		 * @type {{beer_styles, alcohol_strength, alcohol_strength_rcm, bitterness, bitterness_rcm, additions, help_id}}
		 */
		var product = find('beer_styles', option, products);

		if (product) {

			var $el, i, text;

			// show / reset when changing
			$('.additions').show();
			$('#other-addition').val('');

			// Alcohol strength
			$el = $('.alcohol-strength select');
			$el.find('option').not(':first').remove();
			$el.prop('selectedIndex', 0);

			for (i = 0; i < product.alcohol_strength.length; i++) {

				text = product.alcohol_strength[i];

				if (product.alcohol_strength[i] === product.alcohol_strength_rcm) {
					text += ' (recommended)';
				}

				addOption('.alcohol-strength', product.alcohol_strength[i], text);
			}

			// Bitterness
			$el = $('.bitterness select');
			$el.find('option').not(':first').remove();
			$el.prop('selectedIndex', 0);

			for (i = 0; i < product.bitterness.length; i++) {

				text = product.bitterness[i];

				if (product.bitterness[i] === product.bitterness_rcm) {
					text += ' (recommended)';
				}

				addOption('.bitterness', product.bitterness[i], text);
			}

			// Additions
			$el = $('#additions-list');
			$el.html('');

			var add = $.extend([], product.additions);
			add.push('Other');

			for (i = 0; i < add.length; i++) {

				var $html = $('<div>', {
					class: 'checkbox'
				}).append(
					$('<label>', {
						text: add[i]
					}).prepend(
						$('<input>', {
							type: 'checkbox',
							value: add[i]
						}).on('click', function(e) {
							checkAdditions(e);
						})
					)
				);

				$el.append($html);
			}

			// set help modal id
			$('#need-help1').attr('href', '#' + product.help_id).show();
		}
	}

	function changeBottle(option) {

		var bottle = find('name', option, bottles);

		if (bottle) {

			$('#bottle .image-holder').html('').append($('<img>', {
				src: bottle.image,
				alt: ''
			}));
		}
	}

	function changeLabel(option) {

		/**
		 * @type {{name, image, desc1, desc2}}
		 */
		var label = find('name', option, labels);

		if (label) {

			$('#label .image-holder').html('').append($('<img>', {
				src: label.image,
				alt: ''
			})).append('<h2>' + label.desc1 + '</h2>' + label.desc2);
		}
	}

	function submit() {

		var other, name, email, phone, address, comment, tos;
		var add = [];

		$('#additions-list input[type=checkbox]:checked').each(function() {

			var a = $(this).val();
			add.push(a);

			if (a === 'Other') {
				other = $('#other-addition').val();
			}
		});

		name = $('#order-name').val();
		email = $('#order-email').val();
		phone = $('#order-phone').val();
		address = $('#order-address').val();
		comment = $('#order-comment').val();
		tos = $('#order-tos').prop('checked');

		if (!name) {
			alert('Please enter your first and last name');
			return false;
		}

		if (!validateEmail($.trim(email))) {
			alert('Please enter a valid email address');
			return false;
		}

		if (!phone) {
			alert('Please enter your phone number');
			return false;
		}

		if (!address) {
			alert('Please enter your delivery address');
			return false;
		}

		if (!tos) {
			alert('You must agree with Terms and Conditions');
			return false;
		}

		var data = {
			'action': 'wizard_submit',
			'beer_style':       $('.beer-style select').val(),
			'alcohol_strength': $('.alcohol-strength select').val(),
			'bitterness':       $('.bitterness select').val(),
			'additions':        add,
			'additions_other':  other,
			'bottle':           $('#bottle select').val(),
			'label':            $('#label select').val(),

			'name': name,
			'email': email,
			'phone': phone,
			'address': address,
			'comment': comment,
		};

		$.post(afw.ajaxurl, data, function(response) {

			if (response.status) {

				$('#order-name').val('');
				$('#order-email').val('');
				$('#order-phone').val('');
				$('#order-address').val('');
				$('#order-comment').val('');
				$('#order-tos').prop('checked', false);

				alert('Message sent successfully!');

			} else {
				alert('There was a problem processing your order, please try later.');
			}
		});

		return false;
	}

	/**
	 * Tick 'Other' checkbox when selecting field
	 */
	function tickOther() {

		var $el = $("#additions-list :checkbox[value='Other']");

		if (!$el.prop('checked')) {
			$el.trigger('click');
		}
	}

	/**
	 * Disallow checking more than x additions
	 */
	function checkAdditions(e) {

		var count = $('#additions-list input[type="checkbox"]:checked').length;

		if (count > 3) {
			e.preventDefault();
			alert('Maximum 3 additions.');
		}
	}

	function validateEmail(email) {
		var re = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
		return re.test(String(email).toLowerCase());
	}

})(jQuery);