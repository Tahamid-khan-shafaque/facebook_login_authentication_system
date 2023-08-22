<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex items-center justify-between">
                {{ __('') }}
            </div>
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

    <style>
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 69vh;
    }

    .form-box {
        width: 411px;
    padding: 8px;
    border: 9px solid #ccc;
    border-radius: 4px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-box label {
        display: block;
    margin-bottom: 1px;
    }

    .form-box input,
    .form-box select,
    .form-box textarea {
        width: 34%;
    padding: 4px;
    margin-bottom: -1px;
    border-radius: 10px;
    border: 3px solid #ccc;
}
    

    .form-box button {
        padding: 10px 20px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>

<div class="form-container">
    <div class="form-box">
        <form action="{{ route('submit-form') }}" method="POST">
            @csrf




            @if(session('error'))
                <div class="alert alert-success" style="color: green;">
                    {{ session('error') }}
                </div>
            @endif








            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="number">Number:</label>
                <input type="tel" id="number" name="number" required>
            </div>

            <div>
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="HR">HR</option>
                    <option value="Admin">Admin</option>
                    <option value="Development">Development</option>
                </select>
            </div>

            <div>
                <label for="bloodgroup">Blood Group:</label>
                <select id="bloodgroup" name="bloodgroup" required>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <!-- Add more options for other blood groups -->
                </select>
            </div>
<!-- Add more options for other blood groups -->
            <div style="display: flex; align-items: center;">
            <div><label for="skillset">Gender</label></div>

        <div style="display: flex; align-items: center; margin-right: 20px;">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">male</label>
        </div>




        
        <div style="display: flex; align-items: center;margin-right: 20px;">
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
        </div>
    </div>




    
    <div style="display: flex; align-items: center;">
    <div>Skillset</div>
    <div style="display: flex; align-items: center; margin-right: 20px;">
    <input type="checkbox" id="male" name="skillset" value="male" required>
    <div for="male">HTML</div>
</div>
<div style="display: flex; align-items: center;">
    <input type="checkbox" id="female" name="skillset" value="female" required>
    <div for="female">CSS</div>
</div>

    </div>

            <button type="submit" class="btn btn-primary" style="background-color: green; color: white; border-radius: 5px; margin: 10px; padding: 10px;">Submit</button>
        </form>
    </div>
</div>


        </div>

</x-app-layout>
