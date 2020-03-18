<div class="mt-search-popup">
	<div class="mt-holder">
		<a href="#" class="search-close"><span></span><span></span></a>
		<div class="mt-frame">
			<form action="{{ url('/search-products') }}" method="post">{{ csrf_field() }}
				<fieldset>
					<input type="text" placeholder="Search..." name="product">
					<!-- <span class="icon-microphone"></span> -->
					<button type="submit" class=""></button>
				</fieldset>
			</form>
		</div>
	</div>
</div>