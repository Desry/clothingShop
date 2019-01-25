@extends('layouts.layout')
@include('layouts.navbar')

@section('content')
<div id="items_wrapper" class="row valign-wrapper">
	<div class="col s2">
    	<img src="https://nordlich.sgp1.cdn.digitaloceanspaces.com/2016/07/nordlich-womens-black-solid-t-shirt-01.jpg" alt="" class="item responsive-img">
    </div>
        
    <div class="col s2">
		<img src="https://nordlich.sgp1.cdn.digitaloceanspaces.com/2016/07/nordlich-womens-black-solid-t-shirt-01.jpg" alt="" class="item responsive-img">            
	</div>

    <div class="col s2">
		<img src="https://nordlich.sgp1.cdn.digitaloceanspaces.com/2016/07/nordlich-womens-black-solid-t-shirt-01.jpg" alt="" class="item responsive-img">            
	</div>
</div>

<div id="items_desc" class="row-valign-wrapper">
    
    <div id="prodName_price" class="row valign-wrapper">
        <div class="col s6 center-align">
            <p class="prodName">Black Shirt</p>
            <p class="price">&#8369;300</p>
        </div>
        <div class="col s6 center-align">
            <p class="prodName">Black Shirt</p>
            <p class="price">&#8369;300</p>
        </div>
        <div class="col s6 center-align">
            <p class="prodName">Black Shirt</p>
            <p class="price">&#8369;300</p>
        </div>
    </div>
</div>


   
@endsection