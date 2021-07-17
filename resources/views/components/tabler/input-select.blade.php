@props([
	'name' => null,
    'multi' => false
])

<div wire:ignore class="mb-3">
    <select id="{{ $name }}" class="form-select" placeholder="Select a person..." autocomplete="off" required @if($multi) name="{{ $name }}[]" multiple @else name="{{ $name }}" @endif>
		<option value="">Select a {{ $name }}...</option>
        {{ $slot }}
	</select>
	<div class="invalid-feedback">
      Please select a person
    </div>
@once
    @push('before-styles')
	<link href="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/css/tom-select.css" rel="stylesheet">
	@endpush

    @push('before-scripts')
	<script src="https://cdn.jsdelivr.net/npm/tom-select@1.1/dist/js/tom-select.complete.min.js"></script>
	@endpush

    @push('after-scripts')
    <script>
    var my_select = new TomSelect('#{{ $name }}',{
        create: true,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        onChange:function(){
            this.wrapper.classList.toggle('is-invalid',this.isInvalid);
        }
    });

    var form = document.getElementById('{{ $name }}')
    form.addEventListener('submit', function (event){

        form.classList.add('was-validated')

        my_select.wrapper.classList.toggle('is-invalid',my_select.isInvalid);

        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

    }, false)
    </script>
    @endpush

@endonce
