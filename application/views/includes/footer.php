<footer class="main-footer">
    <strong>
    	Copyright © 2019 <a href="http://hhmarineproducts.com" target="_blank">HH Marine Products.</a>  All rights reserved.  	</strong>
    	<!-- <i class="fa fa-heart color-green"></i> -->
</footer>   
<script>
$(document).ready(function() {
    $('#myexam').DataTable();
} );
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', footer: true },
            { extend: 'excelHtml5', footer: true },
            { extend: 'csvHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true },
            { extend: 'print', footer: true }
        ],
    
        "order": [[ 0, "desc" ]]
    } 
    
    );
    
    $('.mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', footer: true },
            { extend: 'excelHtml5', footer: true },
            { extend: 'csvHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true },
            { extend: 'print', footer: true }
        ]
    } );
    
    $('.mytable').on( 'click', 'tbody tr', function () {
    myTable.row( this ).edit( {
        buttons: [
            { label: 'Cancel', fn: function () { this.close(); } },
            'Edit'
        ]
    } );
} );
    
    $('.selectpicker').select2({
  placeholder: "Select an Option",
    allowClear: true
  
});

    
} );

$( "#input-category2" ).change(function() {
  //alert( "Handler for .change() called." );
  var Item_id = $( "#input-category2" ).val();
  $.ajax({
            url: "<?=base_url()?>Admin/getItemCode/?item_id="+Item_id,
            type: 'get',
            data: '',
            dataType:"JSON",
            success: function (data) {
                //console.log();
                var itemCode = data[0]['item_code'];
                var price = data[0]['price'];
                $("#myInput2").val(itemCode);
                $("#item_price").val(price);
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
  
});

$(document).on('change','.input-category3', function() {
    var name = $(this).attr("name");
    var i = $('#p_scents .row').length;
    var Item_id = $(this).val();
    
  //console.log(name);
  //console.log(Item_id);
  
  
  //var Item_id = $( "#input-category2" ).val();
  $.ajax({
            url: "<?=base_url()?>Admin/getItemCode/?item_id="+Item_id,
            type: 'get',
            data: '',
            dataType:"JSON",
            success: function (data) {
                // //console.log();
                 var itemCode = data[0]['item_code'];
                 var price = data[0]['price'];
                $(".item_id_"+i).val(itemCode);
                $(".item_price_"+i).val(price);
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
  
});
//expenses code get
$(document).on('change','.expense-category3', function() {
    var name = $(this).attr("name");
    var i = $('#expense_row .row').length;
    var Item_id = $(this).val();
    
  //console.log(name);
//   console.log(Item_id);
//   return;
  
  //var Item_id = $( "#input-category2" ).val();
  $.ajax({
            url: "<?=base_url()?>Admin/getExpenseCode/?expense_id="+Item_id,
            type: 'get',
            data: '',
            dataType:"JSON",
            success: function (data) {
                //console.log(data[0]);
                var itemCode = data[0]['expense_code'];
                $(".expense_code_"+i).val(itemCode);
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
  
});


$("#item_quan").on("change paste keyup", function() {
   var quan = $(this).val();
   var price = $("#item_price").val();
   
   var total_amount = quan*price;
   $("#total_amount").val(total_amount);
   
   $("#no_of_items").val(quan);
   $("#price_of_item").val(price);
   $("#total_am").val(total_amount);
   
   //alert();
});

//dynamically created values
var grand_total = 0;
$(".quantity_1").on("change paste keyup", function() {
   var quan = $(this).val();
    var price = $(".item_price_1").val();
   
   var total_amount = quan*price;
   $(".total_1").val(total_amount);
   
     
   
});

$(document).on('change paste keyup','.quantity_2',  function() {
   var quan = $(this).val();
    var price = $(".item_price_2").val();
   var total_amount = quan*price;
   $(".total_2").val(total_amount);
});
$(document).on('change paste keyup','.quantity_3', function() {
  var quan = $(this).val();
    var price = $(".item_price_3").val();
   
  var total_amount = quan*price;
  $(".total_3").val(total_amount);
});
$(document).on('change paste keyup','.quantity_4', function() {
  var quan = $(this).val();
    var price = $(".item_price_4").val();
   
  var total_amount = quan*price;
  $(".total_4").val(total_amount);
});
$(document).on('change paste keyup','.quantity_5', function() {
  var quan = $(this).val();
    var price = $(".item_price_5").val();
   
  var total_amount = quan*price;
  $(".total_5").val(total_amount);
});
$(document).on('change paste keyup','.quantity_6', function() {
  var quan = $(this).val();
    var price = $(".item_price_6").val();
   
  var total_amount = quan*price;
  $(".total_6").val(total_amount);
});
$(document).on('change paste keyup','.quantity_7', function() {
  var quan = $(this).val();
    var price = $(".item_price_7").val();
   
  var total_amount = quan*price;
  $(".total_7").val(total_amount);
});
$(document).on('change paste keyup','.quantity_8', function() {
  var quan = $(this).val();
    var price = $(".item_price_8").val();
   
  var total_amount = quan*price;
  $(".total_8").val(total_amount);
});
$(document).on('change paste keyup','.quantity_9', function() {
  var quan = $(this).val();
    var price = $(".item_price_9").val();
   
  var total_amount = quan*price;
  $(".total_9").val(total_amount);
});
$(document).on('change paste keyup','.quantity_10', function() {
  var quan = $(this).val();
    var price = $(".item_price_10").val();
   
  var total_amount = quan*price;
  $(".total_10").val(total_amount);
});

$(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents .row').length + 1;
        
        //alert(i);
        
        $('#addScnt').on('click', function() {
        //alert(i);
        
                $('<div class="row" ><div class="col-sm-2"><label for="generic_name" >Item Code</label><input id="myInput3" class="form-control item_id_'+i+'" type="text" name="item_code[]"></div><div class="col-sm-3"><label for="product_name" >Item Name</label><select class="form-control selectpicker input-category3" id="input-category2" name="item_name[]" data-live-search="true" ><option></option><?php if(isset($item_data)){ foreach($item_data as $value) {?><option value="<?=$value['id']?>"><?=$value['item_name']?></option><?php }} ?></select></div><div class="col-sm-2"><label for="generic_name" >Price</label><input class="form-control item_price_'+i+'" id="price" name="price[]" type="text" required></div><div class="col-sm-1"><label for="product_name" >Quantity</label><input class="form-control quantity_'+i+'" id="quantity['+i+']" type="text" name="quantity[]" required></div><div class="col-sm-2"><label for="product_name" >Total</label><input class="tot1 form-control total_'+i+'" name="total[]" id="tot['+i+']" type="text" required></div><div class="col-sm-2"><label for="product_name" >Remarks</label><input class="form-control remarks_1" name="remarks[]" id="remarks" type="text"></div></div>').appendTo(scntDiv);
                i++;
                return false;
        });
        
        $(document).on('click','#remScnt', function() { 
                if( i > 2 ) {
                        $(this).parents('#p_scents').remove();
                        i--;
                }
                return false;
        });
});
// add expense row
$(function() {
        var scntDiv = $('#expense_row');
        var i = $('#expense_row .row').length + 1;
        
        //alert(i);
        
        $('#addExpenseRow').on('click', function() {
        //alert(i);
        $('<div class="row" ><div class="col-sm-2"><label for="generic_name" >Expense Code</label><input id="myInput3" class="form-control expense_code_'+i+'" type="text" name="expense_code[]"></div><div class="col-sm-3"><label for="product_name" >Expense Type</label><select class="form-control selectpicker expense-category3" id="expense-category3" name="expense_type[]" data-live-search="true" ><option></option><?php if(isset($all_expenses) && !empty($all_expenses)) {foreach($all_expenses as $value) {?><option value="<?=$value['id']?>"><?=$value['expense_type']?></option><?php }} ?></select></div><div class="col-sm-2"><label for="generic_name" >Amount</label><input class="form-control expense_amount_1 expense_total" id="price" name="expense_amount[]" type="text" required></div><div class="col-sm-2"><label for="product_name" >Remarks</label><input class="form-control expense_remarks_1" name="expense_remarks[]" id="remarks" type="text"></div></div>').appendTo(scntDiv);

                i++;
                return false;
        });
        
        $(document).on('click','#remScnt', function() { 
                if( i > 2 ) {
                        $(this).parents('#expense_row').remove();
                        i--;
                }
                return false;
        });
});

$("input[type=checkbox]").change(function(){
  recalculate();
});


function recalculate(){
    var sum = 0;

    $("input[type=checkbox]:checked").each(function(){
      sum += parseInt($(this).attr("rel"));
    });

    console.log(sum);
    $("#total_amount").val(sum);
    
}

$(document).on("change", ".tot1", function() {
    
});

$( "#other" ).click(function() {
  var sum = 0;
  var expense_sum = 0;
  var total = 0;
  $(".tot1").each(function(){
        sum += +$(this).val();
    });
    $(".expense_total").each(function(){
        expense_sum += +$(this).val();
    });
    console.log(expense_sum);
    //invoice_amount
    total = sum + expense_sum;
    var invoice_amount = $("#invoice_amount").val();
    if(total == invoice_amount){
        $("#grand_total").val(total);
    }
    else{
        alert('invoice amount field is not equal to total amount');
    }
});

</script>    

