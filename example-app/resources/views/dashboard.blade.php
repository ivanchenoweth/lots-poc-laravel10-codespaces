<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <canvas id="myChart"></canvas>
    @push('scripts')
<script>
const data = {
    labels: @json($data->map(fn ($data) => $data->date)),
    datasets: [{
        label: 'Registered users in the last 30 days',
        backgroundColor: 'rgba(255, 99, 132, 0.3)',
        borderColor: 'rgb(255, 99, 132)',
        data: @json($data->map(fn ($data) => $data->aggregate)),
    }]
};
const config = {
    type: 'bar',
    data: data
};
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
</script>
@endpush

</x-app-layout>
