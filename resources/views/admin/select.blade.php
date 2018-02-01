<select name="city" class="form-control select2">
    @foreach($result_city_names as $result_city_name)
    	<option value="{{$result_city_name}}">{{$result_city_name}}</option>
    @endforeach
</select>
<script>
	$(function(){
        $('.select2').select2();
	});
</script>
