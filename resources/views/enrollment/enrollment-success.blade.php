<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Success | EH Code</title>
</head>
<x-enrollment-page-image></x-enrollment-page-image>
<x-layout>
    <div class="enrollment-section max-w-[600px] mx-auto mt-20">
        <p class="font-bold mb-4 text-3xl">Step 2:</p>
        <div class="max-w-lg mx-auto bg-gray/40 p-5 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-5 text-center">Enrollment Successful</h2>
            <p class="mb-4">Thank you for enrolling in the course. Here are your details:</p>
            <ul class="list-disc list-inside">
                <li><strong>Name:</strong> {{ $enrollment['name'] }}</li>
                <li><strong>Email:</strong> {{ $enrollment['email'] }}</li>
                <li><strong>Course:</strong> {{ $enrollment['course'] }}</li>
            </ul>
            <p class="mt-4">You will receive a mail showing your class schedule.</p>
            <p>Thank you for choosing EH Code. 🙏👌💻</p>
            <div class="text-right">
                <a href="/" class="px-2 py-1 bg-lightblue text-white border border-lightblue hover:bg-white hover:text-lightblue hover:border-lightblue transition-colors duration-300 rounded-lg">Back Home</a> 
            </div>
        </div>
    </div>
</x-layout>
</html> 
