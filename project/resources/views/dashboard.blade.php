<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-jet-welcome />

                <div>
                    <table class="table table-dark" style="width:100%;border-collapse: collapse;">
                <tr>
                    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">id</th>
                    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Course ID</th>
                    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Description</th>
                </tr>

                @foreach($data as $course)
                <tr>
                    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">{{$course->id}}</th>
                    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">{{$course->course_id}}</th>
                    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">{{$course->detail}}</th>
                </tr>
                @endforeach
                </table>

            </div>
            </div>
        </div>
    </div>
</x-app-layout>
