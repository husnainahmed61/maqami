 <script>
        $( function() {
            $( "#registration_date").datepicker({
              showOn: "button",
              buttonImage: "assets/images/calendar.gif",
              buttonImageOnly: true,
              buttonText: "Select date"
            });
        });
    </script>
    <style>
    .ui-datepicker-trigger{
    position: absolute;
    top:10px;
    right: 20px;
}
        
    </style>