<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cashflow') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('cashflow.store') }}" method="POST">
                    	@csrf
                    	<div class="flex justify-between">
			            <div class="py-2">
			            	<div class="flex">
			                	<x-input id="flow" type="radio" name="flow" :value="old('flow')" required autofocus />
			                	<x-label for="flow" :value="__('Income')" />
			                </div>
			                <div class="flex">
			                	<x-input id="flow" type="radio" name="flow" :value="old('flow')" required autofocus />
			                	<x-label for="flow" :value="__('Expence')" />
			                </div>
			            </div>

			            <div class="px-2">
			                <x-label for="category" :value="__('Category')" />

			                <x-input id="category" class="block mt-1" type="text" name="category" :value="old('category')" required autofocus />
			            </div>

			            <div class="px-2">
			                <x-label for="name" :value="__('Name')" />

			                <x-input id="name" class="block mt-1" type="text" name="name" :value="old('name')" required autofocus />
			            </div>
			            
			            <div class="px-2">
			                <x-label for="amount" :value="__('Amount')" />

			                <x-input id="amount" class="block mt-1" type="number" name="amount" :value="old('amount')" required autofocus />
			            </div>

			            <x-button class="ml-3">
                    		{{ __('Insert') }}
                		</x-button>
			            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>