<x-app-layout>
    <x-slot name="title"></x-slot>

    <x-slot name="head">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    </x-slot>


    <livewire:companies.company-default-form action="add" />


    @push('modals')
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.18.1"></script>
    <script>
        $(document).ready(function() {
        $('#categories').select2();
        $('#countries').select2();
    });
    (function() {        
  
        let placesAutocomplete = places({
            appId: 'plFN1QNL09DS',
            apiKey: 'fc3ea60583d52b941002e3dc81f365ce',
            container: document.querySelector('#street_address'),
            templates: {
                value: function(suggestion) {
                    return suggestion.name;
                }
            }
        }).configure({ type: 'address'});
  
        placesAutocomplete.on('change', function resultSelected(e) {
            document.querySelector('#city').value = e.suggestion.city || '';
            document.querySelector('#postal_code').value = e.suggestion.postcode || '';
            document.querySelector('#state').value = e.suggestion.administrative || '';
            document.querySelector('#country').value = e.suggestion.country || '';
            document.querySelector('#lat').value = e.suggestion.latlng.lat || '';
            document.querySelector('#lng').value = e.suggestion.latlng.lng || '';
        });
    })();
    </script>
    @endpush
</x-app-layout>