<x-app-layout>

	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Insights') }}
		</h2>
	</x-slot>

	<div class="py-12">
		
		<div class="flex justify-center">

		<div class="py-4">
			Income
		
			@forelse ($income as $row => $i)
			<div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>{{ $row }}</h3>
						
					</div>
				</div>
			</div>

			<div>
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								
								
								<th>Name</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($i as $m)
							<tr>
								<td>{{ $m->created_at }}</td>
								<td>{{ $m->name }}</td>
								<td>{{ $m->amount }}</td>
							</tr>
							@empty
							<tr>
								<td colspan="6">No records Found...</td>
							</tr>
							@endforelse
							<tr>
								<th></th>
								<th>Total</th>
								<th>{{ $sum_income[$row] }}</th>
							</tr>
						</tbody>
					</table>

						</div>
					</div>
				</div>
			</div>
			@empty
			<div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>empty</h3>
						
					</div>
				</div>
			</div>
			@endforelse
		</div>

		<div class="py-4">
			Expences
			@forelse ($expence as $row => $i)
			<div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>{{ $row }}</h3>
						
					</div>
				</div>
			</div>

			<div>
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								<th>Name</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($i as $m)
							<tr>
								<td>{{ $m->created_at }}</td>
								<td>{{ $m->name }}</td>
								<td>{{ $m->amount }}</td>
							</tr>
							@empty
							<tr>
								<td colspan="6">No records Found...</td>
							</tr>
							@endforelse
							<tr>
								<th></th>
								<th>Total</th>
								<th>{{ $sum_expence[$row] }}</th>
							</tr>
						</tbody>
					</table>

						</div>
					</div>
				</div>
			</div>
			@empty
			<div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						
						<h3>empty</h3>
						
					</div>
				</div>
			</div>
			@endforelse
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

	</div>

</x-app-layout>