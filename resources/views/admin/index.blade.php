<x-layout>
    <div class="container-fluid d-flex justify-content-center align-items-center h-100">

            {{-- {{dd(session("admin"))}} --}}

        <h1>Welcom back {{Auth::guard("admin")->user()->name}}</h1>

    </div>
</x-layout>
