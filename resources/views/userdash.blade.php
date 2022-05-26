<link href="{{ asset('css/button.css') }}" rel="stylesheet" type="text/css" >
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  @if (session()->has('success'))
                      <div class="alert alert-success" role="alert">
                       {{ session('success') }}
                      </div>
                    @endif
                      <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card h-100">
                            <img src="img/single room.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Single Room</h5>
                              <p class="card-text">This type of hotel room consists of one single bed, sofa, and bathroom, the facilities available are Wifi, TV, AC.</p>
                            </div>
                            <div class="card-footer">
                              <center><p>$65,00</p><center>
                            </div>
                            <a type="button" class="btn btn-secondary" href="/booking"> Booking </a>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="img/double room1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Double Room</h5>
                              <p class="card-text">This type of hotel room has a large mattress size such as king size, sofa, and bathroom. facilities available are Wifi, TV, AC, Refrigerator.</p>
                            </div>
                            <div class="card-footer">
                              <center><p>$65,00</p><center>
                            </div>
                            <a type="button" class="btn btn-secondary" href="/booking"> Booking </a>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="img/family room1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Family Room</h5>
                              <p class="card-text">This type of hotel room has 1 large mattress such as king size and also 2 small mattresses, available sofas, and bathrooms, and spacious rooms available facilities are Wifi, TV, Air Conditioning, refrigerator.</p>
                            </div>
                            <div class="card-footer">
                              <center><p>$65,00</p><center>
                            </div>
                            <a type="button" class="btn btn-secondary" href="/booking"> Booking </a>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
