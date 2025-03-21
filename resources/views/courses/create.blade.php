{{-- <!DOCTYPE html>
<head>
    <title>Course(Create) - EH Code</title>
</head>
<x-layout>
<x-image-5 />
    <div class="w-full bg-white/10 max-w-[500px] mx-auto rounded-lg text-left text-lg" style="margin-top: 8rem">
        <x-page-heading>Enroll for a Course</x-page-heading> 
    
        <x-forms.form method="POST" action="/courses">
            <x-forms.label for="course_name">Course Name</x-forms.label>
            <x-forms.input type="text" name="course_name" id="course_name" /> 
            <x-forms.error name="name" /> 
            
            <x-forms.label for="price" style="margin-top: 20px">Price</x-forms.label>
            <x-forms.input type="text" name="price" id="price" required /> 
            <x-forms.error name="email" /> 
            
            <x-forms.label for="password" style="margin-top: 20px">Password</x-forms.label>
            <x-forms.input type="password" name="password" id="password" required /> 
            <x-forms.error name="password" /> 
    
            <x-forms.button>Create</x-forms.button> 
    
        </x-forms.form>
    </div>
</x-layout>  --}}

<!DOCTYPE html>
<head>
    <title>EH Code</title>
</head>

<x-layout>
<x-login-image />
    <div class="max-w-[1200px] mx-auto bg-white/20 pb-10 rounded-xl" style="margin-top: 5rem;">
        <form action="{{ route('enroll') }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex" style="margin-top: 5rem;">
                <div class="enrollment-section max-w-[400px] mx-auto mt-10">
                    <p class="font-bold text-3xl">Step 1:</p>
                    <div class="text-white p-5 rounded-lg">
                        <h2 class="text-3xl font-bold mb-5 text-center">Enroll for a Course</h2>
                            <div>
                                <label for="name" class="block text-sm font-medium">Name</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full text-black p-2 border border-transparent rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full text-black p-2 border border-transparent rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300" required>
                            </div>
                            <div>
                                <label for="course" class="block text-sm font-medium">Course</label>
                                <select id="course" name="course" class="mt-1 block w-full text-black p-2 border border-transparent rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300" required>
                                    <option value="">Select a course</option>
                                    <option value="Laravel (Full Stack)">Laravel (Full Stack) | N130,000</option>
                                    <option value="React (Full Stack)">React (Full Stack) | N130,000</option>
                                    <option value="UI/ UX Design">UI/ UX Design | N100,000</option>
                                    <option value="Bootstrap (Front End)">Bootstrap (Front End) | N80,000</option>
                                    <option value="Tailwind (Front End)">Tailwind (Front End) | N80,000</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="enrollment-section max-w-[500px] mx-auto my-10">
                    <p class="font-bold text-3xl">Step 2:</p>
                    <div class="max-w-lg mx-auto p-5 rounded-lg">
                        <h2 class="text-3xl font-bold mb-5 text-center">Payment Section</h2>
                        <p class="mb-4">Make your payment into the following account details.</p>
                        <ul class="list-disc list-inside">
                            <li><strong>Account Number:</strong> 7084992402</li>
                            <p style="margin-left: 1.4rem"><strong>Account Name:</strong> Emmanuel Hundeyin</p>
                            <p style="margin-left: 1.4rem"><strong>Bank Name:</strong> Opay</p><br>
                            <li><strong>Account Number:</strong> 2273100015</li>
                            <p style="margin-left: 1.4rem"><strong>Account Name:</strong> Hundeyin Veronica</p>
                            <p style="margin-left: 1.4rem"><strong>Bank Name:</strong> FCMBank</p>
                        </ul>
                    </div>
                </div>
            </div> 
        
            <div class="text-center">
                <button type="submit" class="bg-blue text-white border border-blue hover:bg-white hover:text-blue font-bold py-2 px-4 rounded transition-colors duration-300">Enroll Now</button>
            </div>
        </form>
    </div>
</x-layout>