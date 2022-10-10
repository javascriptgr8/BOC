var $el = $('#media_address_import');
$el.wrap('<form>').closest('form').get(0).reset();
$el.unwrap();

  
  
  
  
  
  
  
//javascript dropdown form reset  
  <script>
    //Reset Commodity prices form
    $(document).on("click","#resetCommodity",function(){
        // $("#groupFilter").val('');
        $("#countryFilter").val('');
        $("#com").val('');
        $("#groupFilter").multiselect('select','0');
        $("#groupFilter").multiselect('rebuild');

        $("#countryFilter").multiselect('select','0');
        $("#countryFilter").multiselect('rebuild');

        $("#com").multiselect('select','0');
        $("#com").multiselect('rebuild');
    });
</script>
