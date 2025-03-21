<!DOCTYPE html>
<head>
    <title>Sign Up - EH Code</title>
</head>
<x-layout>
    <div class="pt-20">
        <x-page-heading>Register an Account</x-page-heading>
    
        <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-forms.label for="name">Name</x-forms.label>
            <x-forms.input type="text" name="name" id="name" required /> 
            <x-forms.error name="name" /> 
            
            <x-forms.label for="email" style="margin-top: 20px">Email</x-forms.label>
            <x-forms.input type="email" name="email" id="email" required /> 
            <x-forms.error name="email" /> 
            
            <x-forms.label for="password" style="margin-top: 20px">Password</x-forms.label>
            <x-forms.input type="password" name="password" id="password" required /> 
            <x-forms.error name="password" /> 
            
            <x-forms.label for="password_confirmation" style="margin-top: 20px">Confirm Password</x-forms.label>
            <x-forms.input type="password" name="password_confirmation" id="password_confirmation" required /> 
            <x-forms.error name="password_confirmation" /> 
            
            <x-forms.label for="profile_picture">Profile Picture</x-forms.label>
            <x-forms.input type="file" name="profile_picture" id="profile_picture" accept="image/*" required /> 
            <x-forms.error name="course" /> 
    
            {{-- <x-forms.divider /> 
            
            <x-forms.label for="employer">Teacher Name</x-forms.label>
            <x-forms.input type="text" name="employer" id="course" required /> 
            <x-forms.error name="course" /> 
            
    
            <x-forms.label for="logo">Teacher Logo</x-forms.label>
            <x-forms.input type="file" name="logo" id="logo" required /> 
            <x-forms.error name="course" />  --}}
    
            <div class="flex items-center space-x-4">
                <x-forms.button>Create Account</x-forms.button> 
                <div>Already have an account? <a class="text-blue hr" href="/login">Log In</a></div>
            </div>
        </x-forms.form>
    
    
        {{-- <x-forms.form method="POST" action="/register">
          <x-forms.input label="Your Name" name="name" />
        </x-forms.form> --}}
    </div>

</x-layout>