<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="filepath/style.css">
    <link
rel="stylesheet"
type="text/css"
href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"
/>
</head>
<body>
    

<x-app-layout>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex items-center justify-between">
            <a href="{{ route('showData') }}" class="btn btn-primary" style="background-color: green; color: white; border-radius: 5px; padding: 10px;margin-left: 1050px;margin-top: -113px;margin-left: 294px;">
                    {{ __('Display Department') }}
                </a>

                {{ __('') }}
            </div>
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">


        <a href="{{ route('form') }}" class="btn btn-primary" style="background-color: green; color: white; border-radius: 5px; padding: 10px;margin-left: 945px;">
                    {{ __('Add user') }}
                </a>

                <a href="{{ route('insertData') }}" class="btn btn-primary" style="background-color: green; color: white; border-radius: 5px; padding: 10px;margin-left: 1050px;margin-top: -73px;">
                    {{ __('Add department') }}
                </a>

<!-- HTML file -->

  <table id="user-table" class="w-full border-collapse">
    <thead>
      <tr class="bg-gray-100">
        <th class="border px-4 py-2">Name</th>
        <th class="border px-4 py-2">Email</th>
        <th class="border px-4 py-2">Number</th>
        <th class="border px-4 py-2">Department</th>
        <th class="border px-4 py-2">Blood Group</th>
        <th class="border px-4 py-2">Gender</th>
        <th class="border px-4 py-2">Skillset</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($formData as $data)
      <tr>
        <td class="border px-4 py-2">{{ $data->name }}</td>
        <td class="border px-4 py-2">{{ $data->email }}</td>
        <td class="border px-4 py-2">{{ $data->number }}</td>
        <td class="border px-4 py-2">{{ $data->department }}</td>
        <td class="border px-4 py-2">{{ $data->bloodgroup }}</td>
        <td class="border px-4 py-2">{{ $data->gender }}</td>
        <td class="border px-4 py-2">{{ $data->skillset }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <script
type="text/javascript"
charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"
></script>
<script
type="text/javascript"
charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
$(function() {
$("#user-table").dataTable();
});
</script>


</div>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
    $('#user-table').dataTable();
    } );
    </script> 


</div>

</x-app-layout>
</body>
</html>