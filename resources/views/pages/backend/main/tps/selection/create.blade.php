@extends('layouts.datatable.__create', ['status' => 'false', 'daterange' => 'false'])
@push('title', 'Selections')

@push('js')
<script type="text/javascript">
$(document).ready(function () {

  $('#id_district').find('option').not(':first').remove();
  $('#village').find('option').not(':first').remove();
  
  $('#id_area').change(function () {
    var id = $(this).val();
    $('#id_district').find('option').not(':first').remove();
    $('#village').find('option').not(':first').remove();
    $.ajax({
      url:'{{ URL::current() }}/../area/'+id,
      type:'get',
      dataType:'json',
      success:function (response) {
        var len = 0;
        if (response.data != null) { len = response.data.length; }
        if (len>0) {
          for (var i = 0; i<len; i++) {
            var id = response.data[i].id;
            var name = response.data[i].name;
            var option = "<option value='"+id+"'>"+name+"</option>";
            $("#id_district").append(option);
          }
        }
      }
    })
  });

  $('#id_district').change(function () {
    var id = $(this).val();
    $('#village').find('option').not(':first').remove();
    $.ajax({
      url:'{{ URL::current() }}/../district/'+id,
      type:'get',
      dataType:'json',
      success:function (response) {
        var len = 0;
        if (response.data != null) { len = response.data.length; }
        if (len>0) {
          for (var i = 0; i<len; i++) {
            var id = response.data[i].id;
            var name = response.data[i].name;
            var option = "<option value='"+id+"'>"+name+"</option>";
            $("#village").append(option);
          }
        }
      }
    })
  });

});
</script>
@endpush
