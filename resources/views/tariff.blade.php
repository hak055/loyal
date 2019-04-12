@extends('layouts.app')

@section('content')

<div class="container">
	
		<table>
		    <tr>
		      	<th class="test">МИНИМАЛЬНЫЙ</th>
		      	<th class="test">СТАНДАРТНЫЙ</th>
		    </tr>
		    <tr class="tariff" style="font-size: 2em; color: red;">
		      	<td>1 000 рублей</td>
		      	<td>5 000 рублей</td>
		    </tr>      
		    <tr>
		      	<td>
		      		<button class="btn btn-outline-primary btn-lg btn-block" @click="showingStandart()">выбрать</button>
		      	</td>
		      	<td>
		      		<button class="btn btn-outline-primary btn-lg btn-block" @click="showingMinimal()">выбрать</button>
		      	</td>
		    </tr>   
		</table>

		
			<div class="showingTariff">
				<div v-if="showingTariffStandart">
			   		<tariff-standart></tariff-standart>
			    </div>
				<div v-if="showingTariffMinimal">
					<tariff-minimal></tariff-minimal>
				</div>
			</div>
			
			
		

</div>
	
     



@endsection