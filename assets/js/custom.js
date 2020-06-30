(function($) {
	function getPasteEvent() {
    var el = document.createElement('input'),
        name = 'onpaste';
    el.setAttribute(name, '');
    return (typeof el[name] === 'function')?'paste':'input';             
}

var pasteEventName = getPasteEvent() + ".mask",
	ua = navigator.userAgent,
	iPhone = /iphone/i.test(ua),
	android=/android/i.test(ua),
	caretTimeoutId;

$.mask = {
	//Predefined character definitions
	definitions: {
		'9': "[0-9]",
		'a': "[A-Za-z]",
		'*': "[A-Za-z0-9]"
	},
	dataName: "rawMaskFn",
	placeholder: '_',
};

$.fn.extend({
	//Helper Function for Caret positioning
	caret: function(begin, end) {
		var range;

		if (this.length === 0 || this.is(":hidden")) {
			return;
		}

		if (typeof begin == 'number') {
			end = (typeof end === 'number') ? end : begin;
			return this.each(function() {
				if (this.setSelectionRange) {
					this.setSelectionRange(begin, end);
				} else if (this.createTextRange) {
					range = this.createTextRange();
					range.collapse(true);
					range.moveEnd('character', end);
					range.moveStart('character', begin);
					range.select();
				}
			});
		} else {
			if (this[0].setSelectionRange) {
				begin = this[0].selectionStart;
				end = this[0].selectionEnd;
			} else if (document.selection && document.selection.createRange) {
				range = document.selection.createRange();
				begin = 0 - range.duplicate().moveStart('character', -100000);
				end = begin + range.text.length;
			}
			return { begin: begin, end: end };
		}
	},
	unmask: function() {
		return this.trigger("unmask");
	},
	mask: function(mask, settings) {
		var input,
			defs,
			tests,
			partialPosition,
			firstNonMaskPos,
			len;

		if (!mask && this.length > 0) {
			input = $(this[0]);
			return input.data($.mask.dataName)();
		}
		settings = $.extend({
			placeholder: $.mask.placeholder, // Load default placeholder
			completed: null
		}, settings);


		defs = $.mask.definitions;
		tests = [];
		partialPosition = len = mask.length;
		firstNonMaskPos = null;

		$.each(mask.split(""), function(i, c) {
			if (c == '?') {
				len--;
				partialPosition = i;
			} else if (defs[c]) {
				tests.push(new RegExp(defs[c]));
				if (firstNonMaskPos === null) {
					firstNonMaskPos = tests.length - 1;
				}
			} else {
				tests.push(null);
			}
		});

		return this.trigger("unmask").each(function() {
			var input = $(this),
				buffer = $.map(
				mask.split(""),
				function(c, i) {
					if (c != '?') {
						return defs[c] ? settings.placeholder : c;
					}
				}),
				focusText = input.val();

			function seekNext(pos) {
				while (++pos < len && !tests[pos]);
				return pos;
			}

			function seekPrev(pos) {
				while (--pos >= 0 && !tests[pos]);
				return pos;
			}

			function shiftL(begin,end) {
				var i,
					j;

				if (begin<0) {
					return;
				}

				for (i = begin, j = seekNext(end); i < len; i++) {
					if (tests[i]) {
						if (j < len && tests[i].test(buffer[j])) {
							buffer[i] = buffer[j];
							buffer[j] = settings.placeholder;
						} else {
							break;
						}

						j = seekNext(j);
					}
				}
				writeBuffer();
				input.caret(Math.max(firstNonMaskPos, begin));
			}

			function shiftR(pos) {
				var i,
					c,
					j,
					t;

				for (i = pos, c = settings.placeholder; i < len; i++) {
					if (tests[i]) {
						j = seekNext(i);
						t = buffer[i];
						buffer[i] = c;
						if (j < len && tests[j].test(t)) {
							c = t;
						} else {
							break;
						}
					}
				}
			}

			function keydownEvent(e) {
				var k = e.which,
					pos,
					begin,
					end;

				//backspace, delete, and escape get special treatment
				if (k === 8 || k === 46 || (iPhone && k === 127)) {
					pos = input.caret();
					begin = pos.begin;
					end = pos.end;

					if (end - begin === 0) {
						begin=k!==46?seekPrev(begin):(end=seekNext(begin-1));
						end=k===46?seekNext(end):end;
					}
					clearBuffer(begin, end);
					shiftL(begin, end - 1);

					e.preventDefault();
				} else if (k == 27) {//escape
					input.val(focusText);
					input.caret(0, checkVal());
					e.preventDefault();
				}
			}

			function keypressEvent(e) {
				var k = e.which,
					pos = input.caret(),
					p,
					c,
					next;

				if (e.ctrlKey || e.altKey || e.metaKey || k < 32) {//Ignore
					return;
				} else if (k) {
					if (pos.end - pos.begin !== 0){
						clearBuffer(pos.begin, pos.end);
						shiftL(pos.begin, pos.end-1);
					}

					p = seekNext(pos.begin - 1);
					if (p < len) {
						c = String.fromCharCode(k);
						if (tests[p].test(c)) {
							shiftR(p);

							buffer[p] = c;
							writeBuffer();
							next = seekNext(p);

							if(android){
								setTimeout($.proxy($.fn.caret,input,next),0);
							}else{
								input.caret(next);
							}

							if (settings.completed && next >= len) {
								settings.completed.call(input);
							}
						}
					}
					e.preventDefault();
				}
			}

			function clearBuffer(start, end) {
				var i;
				for (i = start; i < end && i < len; i++) {
					if (tests[i]) {
						buffer[i] = settings.placeholder;
					}
				}
			}

			function writeBuffer() { input.val(buffer.join('')); }

			function checkVal(allow) {
				//try to place characters where they belong
				var test = input.val(),
					lastMatch = -1,
					i,
					c;

				for (i = 0, pos = 0; i < len; i++) {
					if (tests[i]) {
						buffer[i] = settings.placeholder;
						while (pos++ < test.length) {
							c = test.charAt(pos - 1);
							if (tests[i].test(c)) {
								buffer[i] = c;
								lastMatch = i;
								break;
							}
						}
						if (pos > test.length) {
							break;
						}
					} else if (buffer[i] === test.charAt(pos) && i !== partialPosition) {
						pos++;
						lastMatch = i;
					}
				}
				if (allow) {
					writeBuffer();
				} else if (lastMatch + 1 < partialPosition) {
					input.val("");
					clearBuffer(0, len);
				} else {
					writeBuffer();
					input.val(input.val().substring(0, lastMatch + 1));
				}
				return (partialPosition ? i : firstNonMaskPos);
			}

			input.data($.mask.dataName,function(){
				return $.map(buffer, function(c, i) {
					return tests[i]&&c!=settings.placeholder ? c : null;
				}).join('');
			});

			if (!input.attr("readonly"))
				input
				.one("unmask", function() {
					input
						.unbind(".mask")
						.removeData($.mask.dataName);
				})
				.bind("focus.mask", function() {
					clearTimeout(caretTimeoutId);
					var pos,
						moveCaret;

					focusText = input.val();
					pos = checkVal();
					
					caretTimeoutId = setTimeout(function(){
						writeBuffer();
						if (pos == mask.length) {
							input.caret(0, pos);
						} else {
							input.caret(pos);
						}
					}, 10);
				})
				.bind("blur.mask", function() {
					checkVal();
					if (input.val() != focusText)
						input.change();
				})
				.bind("keydown.mask", keydownEvent)
				.bind("keypress.mask", keypressEvent)
				.bind(pasteEventName, function() {
					setTimeout(function() { 
						var pos=checkVal(true);
						input.caret(pos); 
						if (settings.completed && pos == input.val().length)
							settings.completed.call(input);
					}, 0);
				});
			checkVal(); //Perform initial check for existing values
		});
	}
});


})(jQuery);


$(document).ready( function() {
    $('#nic').mask('99999-9999999-9');
});

function changemotorstatus(){
	motorstatus = $("input[name='motorstatus']:checked").val();
}

function changemotors(){
	motor_type = $('#motor_type').find(":selected").val();
	$('form #fdtractors, form #masseytractors, form #tractors, form #carcompany, form #carname, form #carclr').remove();
	if( motor_type == 'tractor' ){
		tractorstype = $('#sample_tractors').html();
		$('#motor_types').after(tractorstype);
	}else if( motor_type == 'car' ){
		tractorstype = $('#sample_iscar').html();
		$('#motor_types').after(tractorstype);
	}else{
		$('form #fdtractors, form #masseytractors, form #tractors, form #carcompany, form #carname').remove();
	}
}

function changetractortype(){
	tractor_type = $('#tractor_type').find(":selected").val();
	if( tractor_type == 'fiat' ){
		$('form #fdtractors, form #masseytractors').remove();
		sample_fdtractors_type = $('#sample_fdtractors_type').html();
		$('#tractors').after(sample_fdtractors_type);
	}else if( tractor_type == 'massey' ){
		$('form #fdtractors, form #masseytractors').remove();
		sample_masseytractors_type = $('#sample_masseytractors_type').html();
		$('#tractors').after(sample_masseytractors_type);
	}else if( tractor_type == 'rucy' ){
		$('form #fdtractors, form #masseytractors').remove();
	}else{
		$('form #fdtractors, form #masseytractors').remove();
	}
}

function motorstatus(){
	motorstatus = $("input[name='motorstatus']:checked").val();
	if( motorstatus == 'old' ){

	}else if( motorstatus == 'new' ){

	}
}

function appliedregistered(){
	appliedorregistered = $('input[name="appliedorregistered"]:checked').val();
	if( appliedorregistered == 'registered' ){
		$('form #appliedregistered').remove();
		sample_appliedregistered = $('#sample_appliedregistered').html();
		$('#selectappliedregistered').after(sample_appliedregistered);
	}else{
		$('form #appliedregistered').remove();
	}
}

function createnewaccount(){
	error = '';
	if( $('form select[name="motor_type"]').find(":selected").val() == '' ){
		error += '<div class="alert alert-danger"><strong>ERROR: Select Motor Type</strong></div>'; 
	}
	if( $('form select[name="tractor_type"]').find(":selected").val() == '' ){
		error += '<div class="alert alert-danger"><strong>ERROR: Select Tractor Type</strong></div>'; 
	}
	if( $('form select[name="tractorsubtype"]').find(":selected").val() == '' ){
		error += '<div class="alert alert-danger"><strong>ERROR: Select Tracter Sub Type</strong></div>';
	}
	if( error == '' ){
		$('#errors').html('');
		$('#createaccountsubmit').click();
		return false;
	}else{
		$('#errors').html(error);
		return false;
	}
}

function changebankname(){
	console.log('test');
	if( $('select[name="paymentmethod"]').find(":selected").val() != 'cash' ){	
		$('#selectbankname input').attr('readonly', false);
		$('#selectbankname input').val('');
	}else{
		$('#selectbankname input').attr('readonly', true);
		$('#selectbankname input').val('--');
	}
}

function confirmpayment(id){
	//alert(id);
	$.ajax({
		url: "servlet",
		method: 'post',
		data: 'action=1&id=' + id ,
		success: function(html){
			alert('Successfully Confirmed');
		},
		error: function(data) { 
			alert('Failure Try again');
		}
	});
}

function deliverme(id){
	$.ajax({
		url: "servlet",
		method: 'post',
		data: 'action=2&id=' + id ,
		success: function(html){
			alert('Successfully Delivered');
		},
		error: function(data) { 
			alert('Failure Try again');
		}
	});
}

function paymentmethod(pmethod){
	if( pmethod == 'cash' ){
		$('#paymentmethod').hide();
	}else if( pmethod == 'installment' ){
		$('#paymentmethod').show();
	}
}

function deliversaleletter(slid){
    $('input[name=redirect]').val($('#'+slid).attr('redirect'));
    $('#showmodal').click();
}

function deliverletter(){
    link = $('input[name=redirect]').val()+'&to='+$('input[name=deliverto]').val();
    window.location.href = link;
}
$("form").submit(function(){
    $("form button[type=submit]").hide();
});

function soldme(id){
    $('input[name=redirect]').val($('#'+id).attr('redirect'));
    $('#showmodal').click();
}

function soldcar(){
    if( $('input[name=deliverto]').val() != '' ){
        link = $('input[name=redirect]').val()+'&to='+$('input[name=deliverto]').val();
        window.location.href = link;
    }
}

function editfiatrecord(id){
    $('.modal-body').hide();
    $.ajax({
		url: "servlet",
		method: 'post',
		data: 'action=3&id=' + id ,
		success: function(resp){
			resp = JSON.parse(resp);
			$('input[name=id]').val(resp.id);
			
			$('input[name=recvdate]').val(resp.receivingdate);
			$('input[name=engnum]').val(resp.engno);
			$('input[name=chasnum]').val(resp.chasno);
			
			$('input[name=invoicenum]').val(resp.invoiceno);
			$('input[name=customer]').val(resp.customer);
			$('input[name=salelet]').val(resp.saleletter);
			$('input[name=deldate]').val(resp.deliverdate);
			$('.modal-body').show();
		},
		error: function(data) { 
			alert('Failure Try again');
		}
	});
	$('#showmodal').click();
}

function updatefiatrecord(){
    id = $('input[name=id]').val();
    
    recvdate = $('input[name=recvdate]').val();
    engnum = $('input[name=engnum]').val();
    chasnum = $('input[name=chasnum]').val();
    
    invoicenum = $('input[name=invoicenum]').val();
    customer = $('input[name=customer]').val();
    salelet = $('input[name=salelet]').val();
    deldate = $('input[name=deldate]').val();
    $.ajax({
		url: "servlet",
		method: 'post',
		data: 'action=4&id=' + id +'&recvdate=' + recvdate + '&engnum=' + engnum + '&chasnum=' + chasnum +'&invoicenum=' + invoicenum + '&customer=' + customer + '&salelet=' + salelet + '&deldate=' + deldate,
		success: function(resp){
		    $('tr#'+id+' td:nth-child(4)').html(recvdate);
		    $('tr#'+id+' td:nth-child(8)').html(engnum);
		    $('tr#'+id+' td:nth-child(9)').html(chasnum);
		    
		    $('tr#'+id+' td:nth-child(10)').html(invoicenum);
		    $('tr#'+id+' td:nth-child(11)').html(customer);
		    $('tr#'+id+' td:nth-child(12)').html(salelet);
		    $('tr#'+id+' td:nth-child(13)').html(deldate);
		},
		error: function(data) { 
			alert('Failure Try again');
		}
	});
}

(function($){
    $.fn.disableSelection = function() {
        return this
                 .attr('unselectable', 'on')
                 .css('user-select', 'none')
                 .on('selectstart', false);
    };
})(jQuery);


function delivercarfile(id){
    $('#showmodal').click();
    redirect = $('#'+id).attr('attrhref');
    $('input[name=redirect]').val(redirect);
}

function carfileredirect(){
    link = $('input[name=redirect]').val()+'&deliverto="'+$('input[name=deliverto]').val()+'"&files="'+$('input[name=filedetail]').val()+'"';
    window.location.href = link;
}

function editrusi(id){
    $('#showmodal').click();
    $('#trct_id').val(id);
    deliverto_name = $('tr#'+id+' td:nth-child(9)').text();
    if(deliverto_name != 'In Stock'){
        deliverto_name = deliverto_name;
        deliverto_id = $('tr#'+id+' td:nth-child(9) a').attr('deliverto_id');
        letter_status = $('tr#'+id+' td:nth-child(10)').attr('status');
        if( letter_status == 0 ){
            $('input#not_applied').attr('checked',true)
        }else if( letter_status == 1 ){
            $('input#applied').attr('checked',true);
        }else if( letter_status == 2 ){
            $('input#received').attr('checked',true);
        }else if( letter_status == 3 ){
            $('input#delivered').attr('checked',true);
        }
    }else{
        deliverto_name = '';
        deliverto_id = 0;
        $('input#not_applied').attr('checked',true)
    }
    $('#deliverto_id').val(deliverto_id);
    $('#deliverto_name').val(deliverto_name);
}

function editrusinfo(){
    id = $('#trct_id').val();
    deliverto_name = $('input#deliverto_name').val();
    deliverto_id = $('input#deliverto_id').val();
    letter_status = $('input[name=sale_letter]:checked').val();
    
    $.ajax({
		url: "servlet",
		method: 'post',
		data: 'action=5&id=' + id +'&deliverto_name=' + deliverto_name + '&deliverto_id=' + deliverto_id + '&letter_status=' + letter_status,
		success: function(resp){
		    console.log(resp);
		},
		error: function(data) { 
			alert('Failure Try again');
		}
	});
}

function rusineworold(){
    isnew = $('input[name=neworold]:checked').val();
    if( isnew == 1 ){
        $('#isnewold').hide();
    }else if( isnew == 0 ){
        $('#isnewold').show();
    }
}

function motorstatus(){
    if( $('input[name=status]:checked').val() == 'sold' ){
        $('#soldto').show();
    }else if( $('input[name=status]:checked').val() == 'stock' ){
        $('#soldto').hide();
    }
}

function delivereddetail(id){
    $.ajax({
		url: "servlet",
		method: 'post',
		dataType: 'json',
		data: 'action=6&id=' + id,
		success: function(resp){
		    deliverto = resp[0].deliverto;
		    deliverdet = resp[0].filedetail;
		    deliverydate = new Date(resp[0].deliverydate*1000);
		    $('#delto').html(deliverto);
		    $('#deldate').html(deliverdet);
		    $('#deldetail').html(deliverydate);
		    $('#showdel_detail').click();
		},
		error: function(data) { 
			alert('Failure Try again');
		}
	});
}