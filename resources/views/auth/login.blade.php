<!DOCTYPE html>

    <head>
        <title>Login - EH Code</title>
    </head>
<x-layout>
    <div class="pt-20">
        <x-page-heading>Log In</x-page-heading>
    
        <x-forms.form method="POST" action="/login">
            <x-forms.error name="email" /> 
            <x-forms.label for="email">Email</x-forms.label>
            <x-forms.input type="email" name="email" id="email" :value="old('email')" required /> 
    
            <div class="flex justify-between w-full">
                <x-forms.label for="password">Password</x-forms.label>
                <x-forms.span></x-forms.span>
            </div>
            <x-forms.input type="password" name="password" id="password" required /> 
            <x-forms.error name="password" /> 
            
            <div class="flex items-center space-x-4">
                <x-forms.button>Log In</x-forms.button>
                <div>Don't have an account? <a class="text-blue hr" href="/register">Sign Up</a></div>
            </div> 
        </x-forms.form>
    </div>
</x-layout> 

@if (session('alert_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            alert("{{ session('alert_message') }}");
        });
    </script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const iconShow = document.getElementById('show');
        const iconHide = document.getElementById('hide');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            iconShow.classList.toggle('hidden');
            iconHide.classList.toggle('hidden');
        });
    });
</script> 
