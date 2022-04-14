<x-app-layout>

	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Insights') }}
		</h2>
	</x-slot>

	<div class="py-12">
		@forelse ($info['flow'] as $row=>$key)
		<div class="flex justify-center">

		<div>
			Income
			@if ($key['flow'] = 'income')
			
			<div class="pb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>{{ $key['category'] }}</h3>
						
					</div>
				</div>
			</div>

			<div>
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">

							data

						</div>
					</div>
				</div>
			</div>
			@else
			<div class="pb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>empty</h3>
						
					</div>
				</div>
			</div>
			@endif
		</div>

		<div>
			Expences
			@if ($key['flow'] == 'expence')
			
			<div class="pb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>{{ $key['category'] }}</h3>
						
					</div>
				</div>
			</div>

			<div>
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">

							data

						</div>
					</div>
				</div>
			</div>
			@else
			<div class="pb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>empty</h3>
						
					</div>
				</div>
			</div>			
			@endif
		</div>

		</div>

		<div>
			<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">

						Total

					</div>
				</div>
			</div>
		</div>

		@empty
		<div class="pb-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					
					<h3>No records Found...</h3>
					
				</div>
			</div>
		</div>
		@endforelse
	</div>

</x-app-layout>