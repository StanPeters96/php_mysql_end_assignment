@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="flash_message">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif